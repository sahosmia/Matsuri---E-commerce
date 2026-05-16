<?php
class ControllerExtensionModuleInventoryModuleGift extends Controller {
    private $error = array();

    public function index() {
        $this->load->language('extension/module/inventory_module/gift');
        $this->document->setTitle($this->language->get('heading_title'));
        $this->load->model('extension/module/inventory_module/gift');

        // Ensure table exists (temporary call to install)
        $this->model_extension_module_inventory_module_gift->install();

        $this->getList();
    }

    protected function getList() {
        if (isset($this->request->get['filter_gifted_name'])) {
            $filter_gifted_name = $this->request->get['filter_gifted_name'];
        } else {
            $filter_gifted_name = '';
        }

        if (isset($this->request->get['page'])) {
            $page = $this->request->get['page'];
        } else {
            $page = 1;
        }

        $url = '';
        if (isset($this->request->get['filter_gifted_name'])) {
            $url .= '&filter_gifted_name=' . urlencode(html_entity_decode($this->request->get['filter_gifted_name'], ENT_QUOTES, 'UTF-8'));
        }
        if (isset($this->request->get['page'])) {
            $url .= '&page=' . $this->request->get['page'];
        }

        $data['breadcrumbs'] = array();
        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
        );
        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('extension/module/inventory_module/gift', 'user_token=' . $this->session->data['user_token'] . $url, true)
        );

        $data['add'] = $this->url->link('extension/module/inventory_module/gift/add', 'user_token=' . $this->session->data['user_token'] . $url, true);

        $data['gifts'] = array();

        $filter_data = array(
            'filter_gifted_name' => $filter_gifted_name,
            'start'              => ($page - 1) * $this->config->get('config_limit_admin'),
            'limit'              => $this->config->get('config_limit_admin')
        );

        $gift_total = $this->model_extension_module_inventory_module_gift->getTotalGifts($filter_data);
        $results = $this->model_extension_module_inventory_module_gift->getGifts($filter_data);

        foreach ($results as $result) {
            $data['gifts'][] = array(
                'product_gift_id' => $result['product_gift_id'],
                'gifted_name'     => $result['gifted_name'],
                'product_name'    => $result['product_name'],
                'quantity'        => $result['quantity'],
                'purchase_price'  => $this->currency->format($result['purchase_price'], $this->config->get('config_currency')),
                'additional_cost' => $this->currency->format($result['additional_cost'], $this->config->get('config_currency')),
                'gift_date'       => date($this->language->get('date_format_short'), strtotime($result['gift_date']))
            );
        }

        $data['user_token'] = $this->session->data['user_token'];

        if (isset($this->session->data['success'])) {
            $data['success'] = $this->session->data['success'];
            unset($this->session->data['success']);
        } else {
            $data['success'] = '';
        }

        $pagination = new Pagination();
        $pagination->total = $gift_total;
        $pagination->page = $page;
        $pagination->limit = $this->config->get('config_limit_admin');
        $pagination->url = $this->url->link('extension/module/inventory_module/gift', 'user_token=' . $this->session->data['user_token'] . $url . '&page={page}', true);

        $data['pagination'] = $pagination->render();
        $data['results'] = sprintf($this->language->get('text_pagination'), ($gift_total) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($gift_total - $this->config->get('config_limit_admin'))) ? $gift_total : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $gift_total, ceil($gift_total / $this->config->get('config_limit_admin')));

        $data['filter_gifted_name'] = $filter_gifted_name;

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('extension/module/inventory_module/gift/gift_list', $data));
    }

    public function add() {
        $this->load->language('extension/module/inventory_module/gift');
        $this->document->setTitle($this->language->get('heading_title'));
        $this->load->model('extension/module/inventory_module/gift');

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
            $this->model_extension_module_inventory_module_gift->addGift($this->request->post);
            $this->session->data['success'] = $this->language->get('text_success');
            $this->response->redirect($this->url->link('extension/module/inventory_module/gift', 'user_token=' . $this->session->data['user_token'], true));
        }

        $this->getForm();
    }

    protected function getForm() {
        $data['text_form'] = $this->language->get('text_add');
        $data['user_token'] = $this->session->data['user_token'];

        if (isset($this->error['warning'])) {
            $data['error_warning'] = $this->error['warning'];
        } else {
            $data['error_warning'] = '';
        }

        if (isset($this->error['gifted_name'])) {
            $data['error_gifted_name'] = $this->error['gifted_name'];
        } else {
            $data['error_gifted_name'] = '';
        }

        if (isset($this->error['gift_date'])) {
            $data['error_gift_date'] = $this->error['gift_date'];
        } else {
            $data['error_gift_date'] = '';
        }

        $data['action'] = $this->url->link('extension/module/inventory_module/gift/add', 'user_token=' . $this->session->data['user_token'], true);
        $data['cancel'] = $this->url->link('extension/module/inventory_module/gift', 'user_token=' . $this->session->data['user_token'], true);

        if (isset($this->request->post['gifted_name'])) {
            $data['gifted_name'] = $this->request->post['gifted_name'];
        } else {
            $data['gifted_name'] = '';
        }

        if (isset($this->request->post['gift_date'])) {
            $data['gift_date'] = $this->request->post['gift_date'];
        } else {
            $data['gift_date'] = date('Y-m-d');
        }

        $this->load->model('catalog/product');
        $this->load->model('tool/image');

        if (isset($this->request->post['products'])) {
            $products = $this->request->post['products'];
        } else {
            $products = array();
        }

        $data['gift_products'] = array();
        foreach ($products as $product) {
            $product_info = $this->model_catalog_product->getProduct($product['product_id']);
            if ($product_info) {
                $data['gift_products'][] = array(
                    'product_id'      => $product['product_id'],
                    'name'            => $product_info['name'],
                    'quantity'        => $product['quantity'],
                    'purchase_price'  => $product['purchase_price'],
                    'additional_cost' => $product['additional_cost']
                );
            }
        }

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('extension/module/inventory_module/gift/gift_form', $data));
    }

    protected function validateForm() {
        if (!$this->user->hasPermission('modify', 'extension/module/inventory_module/gift')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        if ((utf8_strlen($this->request->post['gifted_name']) < 1) || (utf8_strlen($this->request->post['gifted_name']) > 255)) {
            $this->error['gifted_name'] = $this->language->get('error_gifted_name');
        }

        if (empty($this->request->post['gift_date'])) {
            $this->error['gift_date'] = $this->language->get('error_gift_date');
        }

        if (empty($this->request->post['products'])) {
            $this->error['warning'] = $this->language->get('error_product');
        }

        return !$this->error;
    }

    public function autocomplete() {
        $json = array();

        if (isset($this->request->get['filter_name'])) {
            $this->load->model('catalog/product');

            $filter_data = array(
                'filter_name' => $this->request->get['filter_name'],
                'start'       => 0,
                'limit'       => 5
            );

            $results = $this->model_catalog_product->getProducts($filter_data);

            foreach ($results as $result) {
                $json[] = array(
                    'product_id' => $result['product_id'],
                    'name'       => strip_tags(html_entity_decode($result['name'], ENT_QUOTES, 'UTF-8')),
                    'price'      => $result['price']
                );
            }
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }
}
