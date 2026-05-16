<?php
class ControllerExtensionModuleInventoryModuleLowStock extends Controller { 

    public function index() {
        $this->load->language('extension/module/inventory_module/low_stock'); 
        $this->document->setTitle($this->language->get('heading_title'));
        $this->load->model('extension/module/inventory_module/low_stock'); 
        $this->load->model('tool/image');
    
        $data['user_token'] = $this->session->data['user_token'];
        $data['products'] = [];

        $data['breadcrumbs'] = array();

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('extension/module/inventory_module/low_stock', 'user_token=' . $this->session->data['user_token'], true)
        );
        
        
        $sort = $this->request->get['sort'] ?? 'p.quantity';
        $order = $this->request->get['order'] ?? 'ASC';
        $user_token = $this->session->data['user_token'];
    
        // 2. Build Sorting Links
        $url = '';
        if (isset($this->request->get['sort'])) $url .= '&sort=' . $this->request->get['sort'];
        if (isset($this->request->get['order'])) $url .= '&order=' . $this->request->get['order'];
    
        $new_order = ($order == 'ASC') ? 'DESC' : 'ASC';
        
        $data['sort_name']  = $this->url->link('extension/module/inventory_module/low_stock', 'user_token=' . $user_token . '&sort=pd.name' . '&order=' . $new_order, true);
        $data['sort_sku']   = $this->url->link('extension/module/inventory_module/low_stock', 'user_token=' . $user_token . '&sort=p.sku' . '&order=' . $new_order, true);
        $data['sort_stock'] = $this->url->link('extension/module/inventory_module/low_stock', 'user_token=' . $user_token . '&sort=p.quantity' . '&order=' . $new_order, true);
    
        // 3. Pass Sort to Model
        $filter_data = [
            'sort'  => $sort,
            'order' => $order
        ];
        
        $results = $this->model_extension_module_inventory_module_low_stock->getLowStockProducts(5, $filter_data);

        if ($results) {
            foreach ($results as $result) {
                if (!empty($result['image']) && is_file(DIR_IMAGE . $result['image'])) {
                    $image = $this->model_tool_image->resize($result['image'], 40, 40);
                } else {
                    $image = $this->model_tool_image->resize('no_image.png', 40, 40);
                }
        
                $data['products'][] = array(
                    'product_id' => $result['product_id'],
                    'image'      => $image,
                    'name'       => $result['name'],
                    'sku'      => $result['sku'],
                    'quantity'   => $result['quantity'],
                    'edit'       => $this->url->link('catalog/product/edit', 'user_token=' . $data['user_token'] . '&product_id=' . $result['product_id'], true)
                );
            }
        }
        
        $data['products'] = [];
        foreach ($results as $result) {
            if (!empty($result['image']) && is_file(DIR_IMAGE . $result['image'])) {
                $image = $this->model_tool_image->resize($result['image'], 40, 40);
            } else {
                $image = $this->model_tool_image->resize('no_image.png', 40, 40);
            }
    
            $data['products'][] = array(
                'product_id' => $result['product_id'],
                'image'      => $image,
                'name'       => $result['name'],
                'sku'        => $result['sku'],
                'quantity'   => $result['quantity'],
                'edit'       => $this->url->link('catalog/product/edit', 'user_token=' . $user_token . '&product_id=' . $result['product_id'], true)
            );
        }
    
        $data['sort'] = $sort;
        $data['order'] = $order;
        $data['user_token'] = $user_token;

        $data['heading_title'] = $this->language->get('heading_title');
        $data['column_image'] = $this->language->get('column_image');
        $data['column_name'] = $this->language->get('column_name');
        $data['column_model'] = $this->language->get('column_model');
        $data['column_status'] = $this->language->get('column_status');
        $data['column_action'] = $this->language->get('column_action');
        $data['text_no_results'] = $this->language->get('text_no_results');
        $data['button_edit'] = $this->language->get('button_edit');
    
        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');
        
        $this->response->setOutput($this->load->view('extension/module/inventory_module/inventory/low_stocks_products', $data));
    }
}