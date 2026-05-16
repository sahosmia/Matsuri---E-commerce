<?php
class ControllerExtensionModuleInventoryModuleAllProducts extends Controller {
    public function index() {
        $this->load->language('extension/module/inventory_module/all_products');
        
        $this->document->setTitle($this->language->get('heading_title'));
        
        $this->load->model('extension/module/inventory_module/all_products');
        $this->load->model('tool/image');
        $this->load->model('catalog/product');
        
        // Filter parameters
        $filter_name = isset($this->request->get['filter_name']) ? $this->request->get['filter_name'] : '';
        $filter_model = isset($this->request->get['filter_model']) ? $this->request->get['filter_model'] : '';
        $filter_sku = isset($this->request->get['filter_sku']) ? $this->request->get['filter_sku'] : '';
        $filter_quantity = isset($this->request->get['filter_quantity']) ? $this->request->get['filter_quantity'] : '';
        
        $sort = isset($this->request->get['sort']) ? $this->request->get['sort'] : 'pd.name';
        $order = isset($this->request->get['order']) ? $this->request->get['order'] : 'ASC';
        $page = isset($this->request->get['page']) ? (int)$this->request->get['page'] : 1; 
        
        $url = '';
        $filter_fields = ['filter_name', 'filter_model', 'filter_sku', 'filter_quantity'];
        foreach ($filter_fields as $field) {
            if (isset($this->request->get[$field])) {
                $url .= '&' . $field . '=' . urlencode(html_entity_decode($this->request->get[$field], ENT_QUOTES, 'UTF-8'));
            }
        }
        
        if (isset($this->request->get['page'])) {
            $url .= '&page=' . $this->request->get['page'];
        }
        
        // Breadcrumbs
        $data['breadcrumbs'] = array();
        
        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
        );
        
        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('extension/module/inventory_module/all_products', 'user_token=' . $this->session->data['user_token'] . $url, true)
        );
        
        $url_order = ($order == 'ASC') ? 'DESC' : 'ASC';
        $data['sort_name']     = $this->url->link('extension/module/inventory_module/all_products', 'user_token=' . $this->session->data['user_token'] . '&sort=pd.name' . '&order=' . $url_order . $url, true);
        $data['sort_model']    = $this->url->link('extension/module/inventory_module/all_products', 'user_token=' . $this->session->data['user_token'] . '&sort=p.model' . '&order=' . $url_order . $url, true);
        $data['sort_sku']      = $this->url->link('extension/module/inventory_module/all_products', 'user_token=' . $this->session->data['user_token'] . '&sort=p.sku' . '&order=' . $url_order . $url, true);
        $data['sort_price']    = $this->url->link('extension/module/inventory_module/all_products', 'user_token=' . $this->session->data['user_token'] . '&sort=p.price' . '&order=' . $url_order . $url, true);
        $data['sort_quantity'] = $this->url->link('extension/module/inventory_module/all_products', 'user_token=' . $this->session->data['user_token'] . '&sort=p.quantity' . '&order=' . $url_order . $url, true);
        $data['sort_status']   = $this->url->link('extension/module/inventory_module/all_products', 'user_token=' . $this->session->data['user_token'] . '&sort=p.status' . '&order=' . $url_order . $url, true);
        
        // Filter data for model
        $filter_data = array(
            'filter_name'     => $filter_name,
            'filter_model'    => $filter_model,
            'filter_sku'      => $filter_sku,
            'filter_quantity' => $filter_quantity,
            'sort'            => $sort,
            'order'           => $order,
            'start'           => ($page - 1) * $this->config->get('config_limit_admin'),
            'limit'           => $this->config->get('config_limit_admin')
        );
        
        // Get products
        $results = $this->model_extension_module_inventory_module_all_products->getAllInventoryProducts($filter_data);
        $product_total = $this->model_extension_module_inventory_module_all_products->getTotalAllInventoryProducts($filter_data);
        
        $data['products'] = array();
        
        foreach ($results as $result) {
            // Handle image
            if (is_file(DIR_IMAGE . $result['image'])) {
                $image = $this->model_tool_image->resize($result['image'], 40, 40);
            } else {
                $image = $this->model_tool_image->resize('no_image.png', 40, 40);
            }
            
            // Format price with tax
            if ($this->config->get('config_tax')) {
                $price = $this->currency->format($this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
            } else {
                $price = $this->currency->format($result['price'], $this->session->data['currency']);
            }
            
            $data['products'][] = array(
                'product_id'   => $result['product_id'],
                'image'        => $image,
                'name'         => $result['name'],
                'model'        => $result['model'],
                'sku'          => $result['sku'],
                'quantity'     => $result['quantity'],
                'price'        => $price,
                'status'       => $result['status'],
                'edit'         => $this->url->link('catalog/product/edit', 'user_token=' . $this->session->data['user_token'] . '&product_id=' . $result['product_id'] . $url, true)
            );
        }
        
        // Language variables
        $data['heading_title'] = $this->language->get('heading_title');
        
        $data['text_list'] = $this->language->get('text_list');
        $data['text_filter'] = $this->language->get('text_filter');
        $data['text_no_results'] = $this->language->get('text_no_results');
        $data['text_no_image'] = $this->language->get('text_no_image');
        $data['text_enabled'] = $this->language->get('text_enabled');
        $data['text_disabled'] = $this->language->get('text_disabled');
        
        $data['column_image'] = $this->language->get('column_image');
        $data['column_name'] = $this->language->get('column_name');
        $data['column_model'] = $this->language->get('column_model');
        $data['column_sku'] = $this->language->get('column_sku');
        $data['column_price'] = $this->language->get('column_price');
        $data['column_quantity'] = $this->language->get('column_quantity');
        $data['column_status'] = $this->language->get('column_status');
        $data['column_action'] = $this->language->get('column_action');
        
        $data['entry_name'] = $this->language->get('entry_name');
        $data['entry_model'] = $this->language->get('entry_model');
        $data['entry_sku'] = $this->language->get('entry_sku');
        $data['entry_quantity'] = $this->language->get('entry_quantity');
        
        $data['button_filter'] = $this->language->get('button_filter');
        $data['button_reset'] = $this->language->get('button_reset');
        $data['button_cancel'] = $this->language->get('button_cancel');
        $data['button_edit'] = $this->language->get('button_edit');
        
        // Filter values
        $data['filter_name'] = $filter_name;
        $data['filter_model'] = $filter_model;
        $data['filter_sku'] = $filter_sku;
        $data['filter_quantity'] = $filter_quantity;
        
       
        // User token
        $data['user_token'] = $this->session->data['user_token'];
        
        $data['sort'] = $sort;
        $data['order'] = $order;
        // Pagination
        $pagination = new Pagination();
        $pagination->total = $product_total;
        $pagination->page = $page;
        $pagination->limit = $this->config->get('config_limit_admin');
        $pagination->url = $this->url->link('extension/module/inventory_module/all_products', 'user_token=' . $this->session->data['user_token'] . $url . '&sort=' . $sort . '&order=' . $order . '&page={page}', true);        
        $data['pagination'] = $pagination->render();
        
        // Results text
        $data['results'] = sprintf($this->language->get('text_pagination'), ($product_total) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($product_total - $this->config->get('config_limit_admin'))) ? $product_total : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $product_total, ceil($product_total / $this->config->get('config_limit_admin')));
        
        // Common components
        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');
    
        // Render view
        $this->response->setOutput($this->load->view('extension/module/inventory_module/inventory/all_products', $data));
    }
}