<?php
class ModelExtensionShippingPathao extends Model {
	private function getBaseUrl($sandbox) {
		// Pathao Courier API base (Aladdin)
		// Live:    https://api-hermes.pathao.com/aladdin/api/v1/
		// Sandbox: https://courier-api-sandbox.pathao.com/aladdin/api/v1/
		return $sandbox ? 'https://courier-api-sandbox.pathao.com/aladdin/api/v1/' : 'https://api-hermes.pathao.com/aladdin/api/v1/';
	}

	public function clearTokenCache() {
		$this->cache->delete('pathao.token.0');
		$this->cache->delete('pathao.token.1');
	}

	public function clearStoresCache() {
		$this->cache->delete('pathao.stores.0');
		$this->cache->delete('pathao.stores.1');
	}

	public function clearStoresFromDb() {
		$this->db->query("TRUNCATE TABLE `" . DB_PREFIX . "pathao_store`");
	}

	public function getStoresFromDb() {
		$q = $this->db->query("SELECT store_id, store_name, city_id, zone_id, is_default, is_active FROM `" . DB_PREFIX . "pathao_store` ORDER BY is_default DESC, store_name ASC");
		return $q->rows;
	}

	public function getDefaultStoreId() {
		$q = $this->db->query("SELECT store_id FROM `" . DB_PREFIX . "pathao_store` WHERE is_default = 1 LIMIT 1");
		return $q->num_rows ? (int)$q->row['store_id'] : 0;
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

	private function issueToken($credentials) {
		$sandbox = !empty($credentials['sandbox']);
		$cache_key = 'pathao.token.' . ($sandbox ? '1' : '0');
		$cached = $this->cache->get($cache_key);
		if ($cached && !empty($cached['access_token'])) {
			return array('success' => true, 'access_token' => $cached['access_token']);
		}

		$url = $this->getBaseUrl($sandbox) . 'external/login';
		$payload = json_encode(array(
			'client_id' => (string)$credentials['client_id'],
			'client_secret' => (string)$credentials['client_secret'],
			'username' => (string)$credentials['username'],
			'password' => (string)$credentials['password'],
			'grant_type' => 'password'
		));

		$res = $this->request($url, 'POST', array('Content-Type: application/json', 'Accept: application/json'), $payload);
		if (!$res['ok']) {
			return array('success' => false, 'message' => 'Token request failed (HTTP ' . $res['code'] . ').');
		}

		$data = json_decode($res['raw'], true);
		if (!is_array($data)) {
			return array('success' => false, 'message' => 'Invalid token response.');
		}

		$token = '';
		if (isset($data['access_token'])) $token = $data['access_token'];
		if (!$token && isset($data['data']['access_token'])) $token = $data['data']['access_token'];

		if (!$token) {
			$msg = isset($data['message']) ? $data['message'] : 'Access token missing.';
			return array('success' => false, 'message' => (string)$msg);
		}

		$this->cache->set($cache_key, array('access_token' => $token), 60 * 30);
		return array('success' => true, 'access_token' => $token);
	}

	private function fetchStores($sandbox, $access_token) {
		$url = $this->getBaseUrl($sandbox) . 'stores';
		$res = $this->request($url, 'GET', array('Accept: application/json', 'Authorization: Bearer ' . $access_token));
		if (!$res['ok']) {
			return array('success' => false, 'message' => 'Stores request failed (HTTP ' . $res['code'] . ').');
		}

		$data = json_decode($res['raw'], true);
		if (!is_array($data)) {
			return array('success' => false, 'message' => 'Invalid stores response.');
		}

		$stores = array();
		if (isset($data['data']) && is_array($data['data'])) $stores = $data['data'];
		if (isset($data['stores']) && is_array($data['stores'])) $stores = $data['stores'];

		return array('success' => true, 'stores' => $stores);
	}

	private function upsertStores($stores) {
		if (!is_array($stores)) return;

		$this->db->query("UPDATE `" . DB_PREFIX . "pathao_store` SET is_default = 0");
		$first = true;

		foreach ($stores as $s) {
			$store_id = isset($s['store_id']) ? (int)$s['store_id'] : (isset($s['id']) ? (int)$s['id'] : 0);
			if (!$store_id) continue;

			$store_name = isset($s['store_name']) ? $s['store_name'] : (isset($s['name']) ? $s['name'] : '');
			$city_id = isset($s['city_id']) ? (int)$s['city_id'] : 0;
			$zone_id = isset($s['zone_id']) ? (int)$s['zone_id'] : 0;
			$is_active = isset($s['is_active']) ? (int)$s['is_active'] : 1;
			$is_default = $first ? 1 : 0;

			$this->db->query("INSERT INTO `" . DB_PREFIX . "pathao_store`
				SET store_id = '" . (int)$store_id . "',
					store_name = '" . $this->db->escape($store_name) . "',
					city_id = '" . (int)$city_id . "',
					zone_id = '" . (int)$zone_id . "',
					is_default = '" . (int)$is_default . "',
					is_active = '" . (int)$is_active . "'
				ON DUPLICATE KEY UPDATE
					store_name = VALUES(store_name),
					city_id = VALUES(city_id),
					zone_id = VALUES(zone_id),
					is_active = VALUES(is_active),
					is_default = VALUES(is_default)");

			$first = false;
		}
	}

	public function testConnectionAndFetchStores($credentials) {
		if (empty($credentials['client_id']) || empty($credentials['client_secret']) || empty($credentials['username']) || empty($credentials['password'])) {
			return array('success' => false, 'message' => 'Please provide Client ID, Client Secret, Username and Password.');
		}

		$token = $this->issueToken($credentials);
		if (empty($token['success'])) {
			return array('success' => false, 'message' => isset($token['message']) ? $token['message'] : 'Token error.');
		}

		$sandbox = !empty($credentials['sandbox']);
		$stores = $this->fetchStores($sandbox, $token['access_token']);
		if (empty($stores['success'])) {
			return array('success' => false, 'message' => isset($stores['message']) ? $stores['message'] : 'Stores error.');
		}

		$this->upsertStores($stores['stores']);
		$rows = $this->getStoresFromDb();
		$default_store_id = $this->getDefaultStoreId();

		return array(
			'success' => true,
			'message' => 'Connected. Stores saved: ' . count($rows),
			'stores' => $rows,
			'default_store_id' => $default_store_id
		);
	}
}

