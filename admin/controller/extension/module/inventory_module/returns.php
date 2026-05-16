<?php
class ControllerExtensionModuleInventoryModuleReturns extends Controller {
    public function index() {
        // $this->load->language('extension/module/inventory_module/inventory');
        $this->load->language('extension/module/inventory_module/return');
        $this->load->model('extension/module/inventory_module/returns');

        $this->document->setTitle('Return Items');

        $user_token = $this->session->data['user_token'];

        // 1. Handle Filters (Matching Order History logic)
        $filter_data = [
            'filter_customer'   => $this->request->get['filter_customer'] ?? '',
            'filter_product'    => $this->request->get['filter_product'] ?? '',
            'filter_order_id'   => $this->request->get['filter_order_id'] ?? '',
            'filter_lot_number' => $this->request->get['filter_lot_number'] ?? '', 
            'filter_phone'      => $this->request->get['filter_phone'] ?? '',      
            'filter_date_start' => $this->request->get['filter_date_start'] ?? '',
            'filter_date_end'   => $this->request->get['filter_date_end'] ?? '',
            'page'              => $this->request->get['page'] ?? 1,
            'start'             => (($this->request->get['page'] ?? 1) - 1) * $this->config->get('config_limit_admin'),
            'limit'             => $this->config->get('config_limit_admin')
        ];

        // 2. Breadcrumbs
        $data['breadcrumbs'] = [];
        $data['breadcrumbs'][] = [
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'user_token=' . $user_token, true)
        ];
        $data['breadcrumbs'][] = [
            'text' => 'Return Items',
            'href' => $this->url->link('extension/module/inventory_module/returns', 'user_token=' . $user_token, true)
        ];

        // 3. Fetch Data
        $data['returns'] = [];
        $return_total = $this->model_extension_module_inventory_module_returns->getTotalReturnsByInventory($filter_data);
        $results = $this->model_extension_module_inventory_module_returns->getReturnsByInventory($filter_data);
        
       

        foreach ($results as $result) {
            // Product Front-end Link
            $product_url = HTTP_CATALOG . 'index.php?route=product/product&product_id=' . $result['product_id'];



            $data['returns'][] = [
                'return_id'     => $result['return_id'],
                'order_id'      => $result['order_id'],
                // Link to Order Info
                'order_href'    => $this->url->link('sale/order/info', 'user_token=' . $user_token . '&order_id=' . $result['order_id'], true),
                'customer'      => $result['customer'],
                // Link to filter this report by this customer
                'customer_href' => $this->url->link('extension/module/inventory_module/returns', 'user_token=' . $user_token . '&filter_customer=' . urlencode($result['customer']), true),
                'phone'       => $result['telephone'],
                'product'       => $result['product'],
                'product_href'  => $product_url,
                'sku'           => $result['sku'],
                'quantity'      => $result['quantity'],
                'status'        => $result['status'],
                'date_added'    => date('d M, Y', strtotime($result['date_added'])),
                // Link to Edit the Return record
                'view_return'   => $this->url->link('sale/return/edit', 'user_token=' . $user_token . '&return_id=' . $result['return_id'], true)
            ];
        }

        // 4. UI Strings & Tokens
        $data['user_token'] = $user_token;
        $data['heading_title'] = 'Return Items';
        
        // Pass filter values back to view
        foreach ($filter_data as $key => $value) {
            $data[$key] = $value;
        }

        // 5. Pagination
        $pagination = new Pagination();
        $pagination->total = $return_total;
        $pagination->page = $filter_data['page'];
        $pagination->limit = $this->config->get('config_limit_admin');
        $pagination->url = $this->url->link('extension/module/inventory_module/returns', 'user_token=' . $user_token . '&page={page}', true);

        $data['pagination'] = $pagination->render();
        $data['results'] = sprintf($this->language->get('text_pagination'), ($return_total) ? (($filter_data['page'] - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($filter_data['page'] - 1) * $this->config->get('config_limit_admin')) > ($return_total - $this->config->get('config_limit_admin'))) ? $return_total : ((($filter_data['page'] - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $return_total, ceil($return_total / $this->config->get('config_limit_admin')));

        // 6. Common Components
        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('extension/module/inventory_module/inventory/inventory_return', $data));
    }

    // public function autocomplete() {
    //     $json = [];
    //     if (isset($this->request->get['filter_name'])) {
    //         $this->load->model('catalog/product');
    //         $filter_data = [
    //             'filter_name' => $this->request->get['filter_name'],
    //             'start'       => 0,
    //             'limit'       => 5
    //         ];
    //         $results = $this->model_catalog_product->getProducts($filter_data);
    //         foreach ($results as $result) {
    //             $json[] = [
    //                 'product_id' => $result['product_id'],
    //                 'name'       => strip_tags(html_entity_decode($result['name'], ENT_QUOTES, 'UTF-8'))
    //             ];
    //         }
    //     }
    //     $this->response->addHeader('Content-Type: application/json');
    //     $this->response->setOutput(json_encode($json));
    // }
}