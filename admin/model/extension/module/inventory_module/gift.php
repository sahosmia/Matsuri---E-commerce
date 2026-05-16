<?php
class ModelExtensionModuleInventoryModuleGift extends Model {
    public function install() {
        $this->db->query("CREATE TABLE IF NOT EXISTS " . DB_PREFIX . "product_gift (
            product_gift_id INT(11) NOT NULL AUTO_INCREMENT,
            gifted_name VARCHAR(255) NOT NULL,
            product_id INT(11) NOT NULL,
            quantity INT(11) NOT NULL,
            purchase_price DECIMAL(15,4) NOT NULL DEFAULT '0.0000',
            additional_cost DECIMAL(15,4) NOT NULL DEFAULT '0.0000',
            gift_date DATE NOT NULL,
            PRIMARY KEY (product_gift_id)
        ) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;");
    }

    public function addGift($data) {
        $gift_date = $data['gift_date'];
        $date_parts = explode('-', $gift_date);
        $year = (int)$date_parts[0];
        $month = (int)$date_parts[1];
        $day = (int)$date_parts[2];

        // Create one Inventory Lot for the entire gift entry
        $lot_number = 'GIFT-' . strtoupper(substr(preg_replace('/[^a-zA-Z0-9]/', '', $data['gifted_name']), 0, 10)) . '-' . date('ymdHis');

        $this->db->query("INSERT INTO " . DB_PREFIX . "inventory SET
            inventory_date = '" . $this->db->escape($gift_date) . "',
            inventory_day = '" . $day . "',
            inventory_month = '" . $month . "',
            inventory_year = '" . $year . "',
            inventory_lotnumber = '" . $this->db->escape($lot_number) . "',
            status = 2,
            timestamp = NOW()
        ");
        $inventory_id = $this->db->getLastId();

        // Resolve Expense Category "Gift Item"
        $query = $this->db->query("SELECT category_id FROM " . DB_PREFIX . "expense_category WHERE name = 'Gift Item' LIMIT 1");
        if ($query->num_rows) {
            $category_id = $query->row['category_id'];
        } else {
            $this->db->query("INSERT INTO " . DB_PREFIX . "expense_category SET name = 'Gift Item'");
            $category_id = $this->db->getLastId();
        }

        foreach ($data['products'] as $product) {
            $this->db->query("INSERT INTO " . DB_PREFIX . "product_gift SET
                gifted_name = '" . $this->db->escape($data['gifted_name']) . "',
                product_id = '" . (int)$product['product_id'] . "',
                quantity = '" . (int)$product['quantity'] . "',
                purchase_price = '" . (float)$product['purchase_price'] . "',
                additional_cost = '" . (float)$product['additional_cost'] . "',
                gift_date = '" . $this->db->escape($gift_date) . "'
            ");

            // Increase stock in product table
            $this->db->query("UPDATE " . DB_PREFIX . "product SET quantity = (quantity + " . (int)$product['quantity'] . ") WHERE product_id = '" . (int)$product['product_id'] . "'");

            $total_price = ((float)$product['purchase_price'] + (float)$product['additional_cost']) * (int)$product['quantity'];

            // Add to Inventory Details
            $this->db->query("INSERT INTO " . DB_PREFIX . "inventory_details SET
                inventory_id = '" . (int)$inventory_id . "',
                product_id = '" . (int)$product['product_id'] . "',
                quantity = '" . (int)$product['quantity'] . "',
                current_quantity = '" . (int)$product['quantity'] . "',
                purchase_price = '" . (float)$product['purchase_price'] . "',
                additional_cost = '" . (float)$product['additional_cost'] . "',
                total_price = '" . (float)$total_price . "',
                remarks = '" . $this->db->escape('Gifted by ' . $data['gifted_name']) . "'
            ");

            // Log Expense
            $this->db->query("INSERT INTO " . DB_PREFIX . "expense SET
                category_id = '" . (int)$category_id . "',
                title = '" . $this->db->escape('Product Gift: ' . $data['gifted_name'] . ' (Product ID: ' . $product['product_id'] . ')') . "',
                amount = '" . (float)$total_price . "',
                expense_date = '" . $this->db->escape($gift_date) . "',
                note = '" . $this->db->escape('Auto-logged from Product Gift feature') . "'
            ");
        }
    }

    public function getGifts($data = array()) {
        $sql = "SELECT pg.*, pd.name AS product_name FROM " . DB_PREFIX . "product_gift pg LEFT JOIN " . DB_PREFIX . "product_description pd ON (pg.product_id = pd.product_id) WHERE pd.language_id = '" . (int)$this->config->get('config_language_id') . "'";

        if (!empty($data['filter_gifted_name'])) {
            $sql .= " AND pg.gifted_name LIKE '%" . $this->db->escape($data['filter_gifted_name']) . "%'";
        }

        $sql .= " ORDER BY pg.gift_date DESC";

        if (isset($data['start']) || isset($data['limit'])) {
            if ($data['start'] < 0) $data['start'] = 0;
            if ($data['limit'] < 1) $data['limit'] = 20;
            $sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
        }

        $query = $this->db->query($sql);
        return $query->rows;
    }

    public function getTotalGifts($data = array()) {
        $sql = "SELECT COUNT(*) AS total FROM " . DB_PREFIX . "product_gift pg WHERE 1=1";

        if (!empty($data['filter_gifted_name'])) {
            $sql .= " AND pg.gifted_name LIKE '%" . $this->db->escape($data['filter_gifted_name']) . "%'";
        }

        $query = $this->db->query($sql);
        return $query->row['total'];
    }
}
