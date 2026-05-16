<?php
class ModelExtensionShippingPathao extends Model {
	private function getBaseUrl() {
		$sandbox = (int)$this->config->get('shipping_pathao_sandbox');
		return $sandbox ? 'https://courier-api-sandbox.pathao.com/aladdin/api/v1/' : 'https://api-hermes.pathao.com/aladdin/api/v1/';
	}

	private function request($url, $method, $headers, $body = null) {
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
		curl_setopt($ch, CURLOPT_TIMEOUT, 30);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

		if ($body !== null) {
			curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
		}

		$response = curl_exec($ch);
		$errno = curl_errno($ch);
		$error = curl_error($ch);
		$code = (int)curl_getinfo($ch, CURLINFO_HTTP_CODE);
		curl_close($ch);

		if ($errno) {
			return array('ok' => false, 'code' => $code, 'error' => $error, 'raw' => '');
		}

		return array('ok' => $code >= 200 && $code < 300, 'code' => $code, 'error' => '', 'raw' => $response);
	}

	private function getAccessToken() {
		$sandbox = (int)$this->config->get('shipping_pathao_sandbox');
		$cache_key = 'pathao.token.' . ($sandbox ? '1' : '0');
		$cached = $this->cache->get($cache_key);
		if ($cached && !empty($cached['access_token'])) {
			return $cached['access_token'];
		}

		$client_id = (string)$this->config->get('shipping_pathao_client_id');
		$client_secret = (string)$this->config->get('shipping_pathao_client_secret');
		$username = (string)$this->config->get('shipping_pathao_merchant_username');
		$password = (string)$this->config->get('shipping_pathao_merchant_password');

		if (!$client_id || !$client_secret || !$username || !$password) {
			return '';
		}

		$url = $this->getBaseUrl() . 'external/login';
		$payload = json_encode(array(
			'client_id' => $client_id,
			'client_secret' => $client_secret,
			'username' => $username,
			'password' => $password,
			'grant_type' => 'password'
		));

		$res = $this->request($url, 'POST', array('Content-Type: application/json', 'Accept: application/json'), $payload);
		if (!$res['ok']) return '';

		$data = json_decode($res['raw'], true);
		if (!is_array($data)) return '';

		$token = '';
		if (isset($data['access_token'])) $token = $data['access_token'];
		if (!$token && isset($data['data']['access_token'])) $token = $data['data']['access_token'];

		if ($token) {
			$this->cache->set($cache_key, array('access_token' => $token), 60 * 30);
		}

		return $token;
	}

	public function getQuote($address) {
		$this->load->language('extension/shipping/pathao');

		if (!(int)$this->config->get('shipping_pathao_status')) {
			return array();
		}

		// Minimum viable quote: expose the method if credentials are set.
		// A full integration can call Pathao "price" endpoint based on city/zone/weight.
		$client_id = (string)$this->config->get('shipping_pathao_client_id');
		$client_secret = (string)$this->config->get('shipping_pathao_client_secret');
		$username = (string)$this->config->get('shipping_pathao_merchant_username');
		$password = (string)$this->config->get('shipping_pathao_merchant_password');

		if (!$client_id || !$client_secret || !$username || !$password) {
			return array();
		}

		$quote_data = array();
		$quote_data['pathao'] = array(
			'code'         => 'pathao.pathao',
			'title'        => $this->language->get('text_description'),
			'cost'         => 0,
			'tax_class_id' => 0,
			'text'         => $this->currency->format(0, $this->session->data['currency'])
		);

		return array(
			'code'       => 'pathao',
			'title'      => $this->language->get('text_title'),
			'quote'      => $quote_data,
			'sort_order' => (int)$this->config->get('shipping_pathao_sort_order'),
			'error'      => false
		);
	}

	public function orderAfterAdd(&$route, &$args, &$output) {
		// Hook point reserved for auto-consignment creation etc.
		// Keeping it non-fatal for now.
		return;
	}

	public function webhook() {
		$secret = (string)$this->config->get('shipping_pathao_webhook_secret');
		$expected = $secret ? $secret : '';

		$provided = '';
		if (isset($this->request->server['HTTP_X_PATHAO_SIGNATURE'])) {
			$provided = (string)$this->request->server['HTTP_X_PATHAO_SIGNATURE'];
		}
		if (isset($this->request->get['secret'])) {
			$provided = (string)$this->request->get['secret'];
		}

		if ($expected && $provided !== $expected) {
			$this->response->addHeader('Content-Type: application/json');
			$this->response->setOutput(json_encode(array('success' => false, 'message' => 'Unauthorized')));
			return;
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode(array('success' => true)));
	}
}

