<?php
class ControllerExtensionShippingPathao extends Controller {
	public function webhook() {
		$this->load->model('extension/shipping/pathao');
		$this->model_extension_shipping_pathao->webhook();
	}
}

