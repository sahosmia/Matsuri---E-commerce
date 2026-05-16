<?php
class ControllerExtensionModuleInventoryModuleAllProducts extends Controller {
    private $error = array();

    public function index() {
        $this->load->language('extension/module/inventory_module/all_products');
        $this->load->model('extension/module/inventory_module/all_products');
        $this->load->model('tool/image');

        $this->document->setTitle($this->language->get('heading_title'));

        // 1. Capture and Sanitize Inputs
        $filter_name     = $this->request->get['filter_name'] ?? '';
        $filter_sku      = $this->request->get['filter_sku'] ?? '';
        $filter_quantity = $this->request->get['filter_quantity'] ?? null;
        $sort            = $this->request->get['sort'] ?? 'pd.name';
        $order           = $this->request->get['order'] ?? 'ASC';
        $page            = (int)($this->request->get['page'] ?? 1);

        $user_token      = $this->session->data['user_token'];
        $token_str       = 'user_token=' . $user_token;
        $base_route      = 'extension/module/inventory_module/all_products';

        // 2. Build Base URL for persistence
        $url = $this->getFilterUrl();

        // 3. Breadcrumbs
        $data['breadcrumbs'] = array();
        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', $token_str, true)
        );
        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link($base_route, $token_str . $url, true)
        );

        // 4. Sorting Logic
        $url_order = ($order == 'ASC') ? 'DESC' : 'ASC';
        
        $sort_columns = [
            'sort_name'     => 'pd.name',
            'sort_sku'      => 'p.sku',
            'sort_price'    => 'p.price',
            'sort_quantity' => 'p.quantity',
            'sort_status'   => 'p.status',
            'sort_weight'   => 'p.weight',
            'sort_unit_weight'   => 'p.unit_weight',
            'sort_category' => 'category',
            'sort_purchase_price' => 'purchase_price',
            'sort_sl'       => 'p.product_id'
        ];

        foreach ($sort_columns as $key => $column) {
            $data[$key] = $this->url->link($base_route, $token_str . '&sort=' . $column . '&order=' . $url_order . $url, true);
        }

        // 5. Model Data Fetching
        $filter_data = array(
            'filter_name'     => $filter_name,
            'filter_sku'      => $filter_sku,
            'filter_quantity' => $filter_quantity,
            'sort'            => $sort,
            'order'           => $order,
            'start'           => ($page - 1) * $this->config->get('config_limit_admin'),
            'limit'           => $this->config->get('config_limit_admin')
        );

        $results = $this->model_extension_module_inventory_module_all_products->getAllInventoryProducts($filter_data);
        $product_total = $this->model_extension_module_inventory_module_all_products->getTotalAllInventoryProducts($filter_data);

        $data['products'] = array();

        foreach ($results as $result) {
            // Image handling
            $image = (is_file(DIR_IMAGE . $result['image'])) 
                ? $this->model_tool_image->resize($result['image'], 40, 40) 
                : $this->model_tool_image->resize('no_image.png', 40, 40);

            $data['products'][] = array(
                'product_id'     => $result['product_id'],
                'image'          => $image,
                'name'           => $result['name'],
                'category'       => $result['category'] ?: $this->language->get('text_none'), 
                'sku'            => $result['sku'],
                'weight'         => number_format($result['weight'], 2),
                'unit_weight'         => number_format($result['unit_weight'], 2) . ' ' . $this->weight->getUnit($result['weight_class_id']),
                'quantity'       => $result['quantity'],
                'price'          => $this->currency->format($result['price'], $this->session->data['currency']),
                'purchase_price' => $this->currency->format($result['purchase_price'] ?? 0, $this->session->data['currency']),
                'status'         => $result['status'] ? $this->language->get('text_enabled') : $this->language->get('text_disabled'),
                'edit'           => $this->url->link('catalog/product/edit', $token_str . '&product_id=' . $result['product_id'] . $url, true)
            );
        }

        // 6. View Data Binding
        $data['user_token'] = $user_token;
        $data['filter_name'] = $filter_name;
        $data['filter_sku'] = $filter_sku;
        $data['filter_quantity'] = $filter_quantity;
        $data['sort'] = $sort;
        $data['order'] = $order;

        // Pagination
        $pagination = new Pagination();
        $pagination->total = $product_total;
        $pagination->page = $page;
        $pagination->limit = $this->config->get('config_limit_admin');
        $pagination->url = $this->url->link($base_route, $token_str . $url . '&sort=' . $sort . '&order=' . $order . '&page={page}', true);
        
        $data['pagination'] = $pagination->render();
        $data['results'] = sprintf(
            $this->language->get('text_pagination'), 
            ($product_total) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, 
            ((($page - 1) * $this->config->get('config_limit_admin')) > ($product_total - $this->config->get('config_limit_admin'))) ? $product_total : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), 
            $product_total, 
            ceil($product_total / $this->config->get('config_limit_admin'))
        );

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('extension/module/inventory_module/inventory/all_products', $data));
    }

    /**
     * Helper to centralize URL parameter building
     */
    private function getFilterUrl() {
        $url = '';
        if (isset($this->request->get['filter_name'])) {
            $url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
        }
        if (isset($this->request->get['filter_sku'])) {
            $url .= '&filter_sku=' . urlencode(html_entity_decode($this->request->get['filter_sku'], ENT_QUOTES, 'UTF-8'));
        }
        if (isset($this->request->get['filter_quantity'])) {
            $url .= '&filter_quantity=' . $this->request->get['filter_quantity'];
        }
        return $url;
    }
}