<?php
/**
 * Againcart – Pathao Courier Shipping (Admin)
 * OpenCart 3.0.x
 */
class ControllerExtensionShippingPathao extends Controller {
	private $error = array();

	public function install() {
		$this->load->model('setting/event');
		$this->model_setting_event->addEvent('pathao_order_after_add', 'catalog/model/checkout/order/addOrder/after', 'extension/shipping/pathao/orderAfterAdd', 1, 0);

		$this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "pathao_order` (
		  `pathao_order_id` int(11) NOT NULL AUTO_INCREMENT,
		  `order_id` int(11) NOT NULL,
		  `consignment_id` varchar(128) NOT NULL DEFAULT '',
		  `tracking_code` varchar(128) NOT NULL DEFAULT '',
		  `status` varchar(64) NOT NULL DEFAULT '',
		  `delivery_fee` decimal(15,2) NOT NULL DEFAULT 0.00,
		  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
		  PRIMARY KEY (`pathao_order_id`),
		  UNIQUE KEY `order_id` (`order_id`),
		  KEY `tracking_code` (`tracking_code`)
		) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");

		$check = $this->db->query("SHOW COLUMNS FROM `" . DB_PREFIX . "pathao_order` LIKE 'delivery_fee'");
		if ($check->num_rows == 0) {
			$this->db->query("ALTER TABLE `" . DB_PREFIX . "pathao_order` ADD COLUMN `delivery_fee` decimal(15,2) NOT NULL DEFAULT 0.00 AFTER `status`");
		}

		$this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "pathao_store` (
		  `id` int(11) NOT NULL AUTO_INCREMENT,
		  `store_id` int(11) NOT NULL,
		  `store_name` varchar(255) NOT NULL DEFAULT '',
		  `city_id` int(11) NOT NULL DEFAULT 0,
		  `zone_id` int(11) NOT NULL DEFAULT 0,
		  `is_default` tinyint(1) NOT NULL DEFAULT 0,
		  `is_active` tinyint(1) NOT NULL DEFAULT 1,
		  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
		  PRIMARY KEY (`id`),
		  UNIQUE KEY `store_id` (`store_id`),
		  KEY `is_default` (`is_default`),
		  KEY `is_active` (`is_active`)
		) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");
	}

	public function uninstall() {
		$this->load->model('setting/event');
		$this->model_setting_event->deleteEventByCode('pathao_order_after_add');
	}

	public function index() {
		$this->load->language('extension/shipping/pathao');
		$this->document->setTitle($this->language->get('heading_title'));
		$this->load->model('setting/setting');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->load->model('extension/shipping/pathao');
			$old_sandbox = $this->config->get('shipping_pathao_sandbox');
			$old_client_id = $this->config->get('shipping_pathao_client_id');
			$old_username = $this->config->get('shipping_pathao_merchant_username');

			$new_sandbox = isset($this->request->post['shipping_pathao_sandbox']) ? $this->request->post['shipping_pathao_sandbox'] : $old_sandbox;
			$new_client_id = isset($this->request->post['shipping_pathao_client_id']) ? $this->request->post['shipping_pathao_client_id'] : $old_client_id;
			$new_username = isset($this->request->post['shipping_pathao_merchant_username']) ? $this->request->post['shipping_pathao_merchant_username'] : $old_username;

			if ($old_sandbox != $new_sandbox || $old_client_id != $new_client_id || $old_username != $new_username) {
				$this->model_extension_shipping_pathao->clearTokenCache();
				$this->model_extension_shipping_pathao->clearStoresCache();
				$this->model_extension_shipping_pathao->clearStoresFromDb();
			}

			if (empty($this->request->post['shipping_pathao_webhook_secret'])) {
				$this->request->post['shipping_pathao_webhook_secret'] = bin2hex(random_bytes(16));
			}

			$base = (!empty($this->request->server['HTTPS']) && $this->request->server['HTTPS'] && $this->request->server['HTTPS'] !== 'off') ? HTTPS_CATALOG : HTTP_CATALOG;
			$this->request->post['shipping_pathao_webhook_url'] = $base . 'index.php?route=extension/shipping/pathao/webhook';

			$this->model_setting_setting->editSetting('shipping_pathao', $this->request->post);
			$this->session->data['success'] = $this->language->get('text_success');
			$this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=shipping', true));
		}

		$data['error_warning'] = isset($this->error['warning']) ? $this->error['warning'] : '';

		$data['breadcrumbs'] = array();
		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);
		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=shipping', true)
		);
		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/shipping/pathao', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['action'] = $this->url->link('extension/shipping/pathao', 'user_token=' . $this->session->data['user_token'], true);
		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=shipping', true);

		$keys = array(
			'shipping_pathao_merchant_username',
			'shipping_pathao_merchant_password',
			'shipping_pathao_client_id',
			'shipping_pathao_client_secret',
			'shipping_pathao_pickup_address',
			'shipping_pathao_sandbox',
			'shipping_pathao_status',
			'shipping_pathao_sort_order',
			'shipping_pathao_webhook_url',
			'shipping_pathao_webhook_secret'
		);

		foreach ($keys as $key) {
			if (isset($this->request->post[$key])) {
				$data[$key] = $this->request->post[$key];
			} else {
				$data[$key] = $this->config->get($key);
			}
		}

		if (!isset($data['shipping_pathao_sandbox'])) $data['shipping_pathao_sandbox'] = '0';
		if (!isset($data['shipping_pathao_status'])) $data['shipping_pathao_status'] = '0';
		if (!isset($data['shipping_pathao_sort_order'])) $data['shipping_pathao_sort_order'] = '0';
		if (empty($data['shipping_pathao_webhook_url'])) {
			$data['shipping_pathao_webhook_url'] = HTTP_CATALOG . 'index.php?route=extension/shipping/pathao/webhook';
		}
		if (!isset($data['shipping_pathao_webhook_secret'])) $data['shipping_pathao_webhook_secret'] = '';

		$this->load->model('extension/shipping/pathao');
		$data['pathao_stores'] = $this->model_extension_shipping_pathao->getStoresFromDb();
		$data['pathao_default_store_id'] = $this->model_extension_shipping_pathao->getDefaultStoreId();

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$data['test_connection_url'] = $this->url->link('extension/shipping/pathao/testConnection', 'user_token=' . $this->session->data['user_token'], true);
		$this->response->setOutput($this->load->view('extension/shipping/pathao', $data));
	}

	public function testConnection() {
		while (ob_get_level()) ob_end_clean();
		ob_start();

		$this->load->language('extension/shipping/pathao');

		$json = array('success' => false, 'message' => '', 'stores' => array(), 'default_store_id' => 0);
		$this->response->addHeader('Content-Type: application/json');

		register_shutdown_function(function() use (&$json) {
			$err = error_get_last();
			if (!$err) return;

			$fatal = array(E_ERROR, E_PARSE, E_CORE_ERROR, E_COMPILE_ERROR, E_USER_ERROR);
			if (!in_array($err['type'], $fatal, true)) return;

			if (!headers_sent()) {
				header('Content-Type: application/json');
			}

			@ob_end_clean();
			$json['success'] = false;
			$json['message'] = 'Server error: ' . $err['message'];
			echo json_encode($json);
		});

		try {
			if (!$this->user->hasPermission('modify', 'extension/shipping/pathao')) {
				$json['message'] = $this->language->get('error_permission');
				$this->response->setOutput(json_encode($json));
				return;
			}

			$credentials = array(
				'client_id'     => isset($this->request->post['shipping_pathao_client_id']) ? trim($this->request->post['shipping_pathao_client_id']) : '',
				'client_secret' => isset($this->request->post['shipping_pathao_client_secret']) ? trim($this->request->post['shipping_pathao_client_secret']) : '',
				'username'      => isset($this->request->post['shipping_pathao_merchant_username']) ? trim($this->request->post['shipping_pathao_merchant_username']) : '',
				'password'      => isset($this->request->post['shipping_pathao_merchant_password']) ? trim($this->request->post['shipping_pathao_merchant_password']) : '',
				'sandbox'       => isset($this->request->post['shipping_pathao_sandbox']) ? (int)$this->request->post['shipping_pathao_sandbox'] : 0
			);

			$this->load->model('extension/shipping/pathao');
			$result = $this->model_extension_shipping_pathao->testConnectionAndFetchStores($credentials);

			$json['success'] = !empty($result['success']);
			$json['message'] = isset($result['message']) ? $result['message'] : '';
			$json['stores'] = isset($result['stores']) ? $result['stores'] : array();
			$json['default_store_id'] = isset($result['default_store_id']) ? (int)$result['default_store_id'] : 0;
		} catch (\Throwable $e) {
			$json['success'] = false;
			$json['message'] = 'Exception: ' . $e->getMessage();
		}

		$this->response->setOutput(json_encode($json));
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/shipping/pathao')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}
}

