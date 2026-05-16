<?php
class ModelExtensionModuleInventoryModuleAllProducts extends Model {
    public function getAllInventoryProducts($data = array()) {
        $sql = "SELECT p.product_id, p.model, p.sku, p.image, p.quantity, p.price, pd.name, p.status 
                FROM " . DB_PREFIX . "product p 
                LEFT JOIN " . DB_PREFIX . "product_description pd ON (p.product_id = pd.product_id) 
                WHERE pd.language_id = '" . (int)$this->config->get('config_language_id') . "'";
    
        if (!empty($data['filter_name'])) {
            $sql .= " AND pd.name LIKE '%" . $this->db->escape($data['filter_name']) . "%'";
        }
    
        if (!empty($data['filter_sku'])) {
            $sql .= " AND p.sku LIKE '" . $this->db->escape($data['filter_sku']) . "%'";
        }
    
        // সর্টিং লজিক
        $sort_data = array(
            'pd.name',
            'p.model',
            'p.sku',
            'p.price',
            'p.quantity',
            'p.status'
        );
    
        if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
            $sql .= " ORDER BY " . $data['sort'];
        } else {
            $sql .= " ORDER BY pd.name";
        }
    
        if (isset($data['order']) && ($data['order'] == 'DESC')) {
            $sql .= " DESC";
        } else {
            $sql .= " ASC";
        }
    
        if (isset($data['start']) || isset($data['limit'])) {
            $sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
        }
        $query = $this->db->query($sql);
        return $query->rows;
    }
    
    public function getTotalAllInventoryProducts($data = array()) {
        $sql = "SELECT COUNT(*) AS total FROM " . DB_PREFIX . "product p 
                LEFT JOIN " . DB_PREFIX . "product_description pd ON (p.product_id = pd.product_id) 
                WHERE pd.language_id = '" . (int)$this->config->get('config_language_id') . "'";
    
        if (!empty($data['filter_name'])) {
            $sql .= " AND pd.name LIKE '%" . $this->db->escape($data['filter_name']) . "%'";
        }
    
        $query = $this->db->query($sql);
        return $query->row['total'];
    }
}

