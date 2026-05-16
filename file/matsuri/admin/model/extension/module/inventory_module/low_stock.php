<?php
class ModelExtensionModuleInventoryModuleLowStock extends Model {

    public function getLowStockProducts($limit_qty = 5, $data = array()) {
        $sql = "SELECT p.product_id, pd.name, p.sku, p.quantity, p.image 
                FROM " . DB_PREFIX . "product p 
                LEFT JOIN " . DB_PREFIX . "product_description pd ON (p.product_id = pd.product_id) 
                WHERE pd.language_id = '" . (int)$this->config->get('config_language_id') . "' 
                AND p.quantity <= '" . (int)$limit_qty . "' 
                AND p.status = '1'";
    
        // Sorting Whitelist
        $sort_data = array(
            'pd.name',
            'p.sku',
            'p.quantity'
        );
    
        if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
            $sql .= " ORDER BY " . $data['sort'];
        } else {
            $sql .= " ORDER BY p.quantity";
        }
    
        if (isset($data['order']) && ($data['order'] == 'DESC')) {
            $sql .= " DESC";
        } else {
            $sql .= " ASC";
        }
    
        $query = $this->db->query($sql);
        return $query->rows;
    }
}
    