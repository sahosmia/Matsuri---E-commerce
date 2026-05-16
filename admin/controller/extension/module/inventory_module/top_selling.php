<?php
class ControllerExtensionModuleInventoryModuleTopSelling extends Controller {
    public function index() {
        $this->document->setTitle('Top Selling Products');
        $this->load->model('extension/module/inventory_module/top_selling');
        $this->load->model('tool/image');
        
        
        $filter_range = $this->request->get['filter_range'] ?? 'lifetime';
        $filter_date_start = $this->request->get['filter_date_start'] ?? '';
        $filter_date_end = $this->request->get['filter_date_end'] ?? '';
        $sort = $this->request->get['sort'] ?? 'total_sold';
        $order = $this->request->get['order'] ?? 'DESC';
    
        $date_start = '';
        $date_end = date('Y-m-d');
        
        
        switch ($filter_range) {
            case 'today': $date_start = date('Y-m-d'); break;
            case '7_days': $date_start = date('Y-m-d', strtotime('-7 days')); break;
            case '15_days': $date_start = date('Y-m-d', strtotime('-15 days')); break;
            case 'month': $date_start = date('Y-m-d', strtotime('-1 month')); break;
            case '3_months': $date_start = date('Y-m-d', strtotime('-3 months')); break;
            case 'year': $date_start = date('Y-m-d', strtotime('-1 year')); break;
            case 'custom':
                $date_start = $filter_date_start;
                $date_end = $filter_date_end;
                break;
            default: $date_start = ''; break;
        }
            

        // Build URL to preserve filters when sorting
        $url = '';
        if (isset($this->request->get['filter_range'])) $url .= '&filter_range=' . $this->request->get['filter_range'];
        if (isset($this->request->get['filter_date_start'])) $url .= '&filter_date_start=' . $this->request->get['filter_date_start'];
        if (isset($this->request->get['filter_date_end'])) $url .= '&filter_date_end=' . $this->request->get['filter_date_end'];
    
        $new_order = ($order == 'ASC') ? 'DESC' : 'ASC';
    
        // Header Sort Links
        $data['sort_name']  = $this->url->link('extension/module/inventory_module/top_selling', 'user_token=' . $this->session->data['user_token'] . $url . '&sort=pd.name&order=' . $new_order, true);
        $data['sort_sku']   = $this->url->link('extension/module/inventory_module/top_selling', 'user_token=' . $this->session->data['user_token'] . $url . '&sort=p.sku&order=' . $new_order, true);
        $data['sort_price'] = $this->url->link('extension/module/inventory_module/top_selling', 'user_token=' . $this->session->data['user_token'] . $url . '&sort=p.price&order=' . $new_order, true);
        $data['sort_sold']  = $this->url->link('extension/module/inventory_module/top_selling', 'user_token=' . $this->session->data['user_token'] . $url . '&sort=total_sold&order=' . $new_order, true);
            
        $filter_data = [
            'filter_date_start' => $date_start,
            'filter_date_end'   => $date_end,
            'sort'              => $sort,
            'order'             => $order,
            'start'             => 0,
            'limit'             => 10
        ];
    
       
    
    
        $data['products'] = [];
    
        $results = $this->model_extension_module_inventory_module_top_selling->getTopSellingProducts($filter_data);

        foreach ($results as $result) {
            $image = ($result['image'] && is_file(DIR_IMAGE . $result['image'])) ? 
                 $this->model_tool_image->resize($result['image'], 45, 45) : 
                 $this->model_tool_image->resize('no_image.png', 45, 45);
    
            $data['products'][] = array(
                'rank'       => $result['sales_rank'] ?? '',
                'name'       => $result['name'],
                'sku'      => $result['sku'],
                'image'      => $image,
                'total_sold' => $result['total_sold'],
                'price'      => $this->currency->format($result['price'], $this->config->get('config_currency')),
            );
        }
        
        $data['user_token'] = $this->session->data['user_token'];
        $data['filter_range'] = $filter_range;
        $data['filter_date_start'] = $filter_date_start;
        $data['filter_date_end'] = $filter_date_end;
        $data['sort'] = $sort;
        $data['order'] = $order;
        
        
        // Breadcrumbs initialization
        $data['breadcrumbs'] = array();
        
        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
        );
        
       
        $data['breadcrumbs'][] = array(
            'text' => 'Top Selling Products',
            'href' => $this->url->link('extension/module/inventory_module/inventory/top_selling', 'user_token=' . $this->session->data['user_token'], true)
        );
        
        
        // Cancel button link
        $data['cancel'] = $this->url->link('extension/module/inventory_module/inventory', 'user_token=' . $this->session->data['user_token'], true);
        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');
        
        $this->response->setOutput($this->load->view('extension/module/inventory_module/inventory/top_selling', $data));
        
    }
    
}