<?php
class ControllerCommonLogout extends Controller {
	public function index() {
		$this->user->logout();

		unset($this->session->data['user_token']);

				unset($this->session->data['hp_ext']);
				

		$this->response->redirect($this->url->link('common/login', '', true));
	}
}