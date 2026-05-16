<?php
class ControllerCommonFooter extends Controller {
	public function index() {

			$data['chat_button_status'] = $this->config->get('module_hp_chat_button_status');


			if($data['chat_button_status']) {
				if (isset($this->request->get['route']) && $this->request->get['route'] == 'common/home') {
					$is_home = true;
				} else if (!isset($this->request->get['route'])) {
					$is_home = true;
				} else {
					$is_home = false;
				}

				// RTL status
				$rtl_languages = ['ar', 'hb'];
				$language_used = $this->session->data['language'];

				if (in_array($language_used, $rtl_languages)) {
					$data['rtl_status'] = 1;
				} else {
					$data['rtl_status'] = 0;
				}

				$data['is_home'] = $is_home;
				$data['wa_show_homepage'] = $this->config->get('module_hp_chat_button_wa_show_homepage');

				$this->load->language('extension/module/hp_chat_button');
				$wa['text_away'] = $this->language->get('text_away');
				$wa['text_offline'] = $this->language->get('text_offline');
				$wa['text_online'] = $this->language->get('text_online');
				$data['button_placement'] = $this->config->get('module_hp_chat_button_button_placement') ? $this->config->get('module_hp_chat_button_button_placement') : '#product';
				if($data['chat_button_status']) {
					$wa['tel']   = $this->config->get('config_telephone');
					$language_id = $this->config->get('config_language_id');
					$wa['wa']    = $this->config->get('module_hp_chat_button_no_wa');

					$wa['text']  = html_entity_decode($this->config->get('module_hp_chat_button_message_text_' .  $language_id));

					$utm_source = isset($this->session->data['utm_source']) ? $this->session->data['utm_source'] : '';

					$find = [
						'{utm_source}'
					];

					$replace = [
						'utm_source' => $utm_source
					];

					$wa['text']  = rawurlencode(str_replace($find, $replace, $wa['text']));


					$wa['email']    = $this->config->get('config_email');
					$wa['tawkto_property_id']    = $this->config->get('module_hp_chat_button_tawkto_property_id');
					$wa['fb_page_id']    = $this->config->get('module_hp_chat_button_fb_page_id');
					$wa['color']    = $this->config->get('module_hp_chat_button_color');
					$wa['favicon']  = HTTPS_SERVER.'image/'.$this->config->get('config_icon');
					$wa['heading_title'] = html_entity_decode($this->config->get('module_hp_chat_button_heading_title_' .  $language_id));
					$wa['description'] = html_entity_decode($this->config->get('module_hp_chat_button_description_' .  $language_id));
					$wa['chat_reply'] = html_entity_decode($this->config->get('module_hp_chat_button_chat_reply_' .  $language_id));
					$wa['greeting'] = html_entity_decode($this->config->get('module_hp_chat_button_greeting_' .  $language_id));
					$wa['call_to_action'] = html_entity_decode($this->config->get('module_hp_chat_button_call_to_action_' .  $language_id));
					$wa['hide_prechattext'] = $this->config->get('module_hp_chat_button_hide_prechattext');
					$whatsapps = $this->config->get('module_hp_chat_button_whatsapp');
					$wa['whatsapp'] = array();

					$this->load->model('tool/image');
					$this->load->library('mobiledetect');
					$is_mobile = $this->mobiledetect->isMobileDevice();
					$wa['is_mobile'] = $is_mobile;
					if($whatsapps) {
					foreach ($whatsapps as $whatsapp) {
					if(isset($whatsapp['status'])){
						   if (isset($whatsapp['profile_picture']) && is_file(DIR_IMAGE . $whatsapp['profile_picture'])) {
							$whatsapp['picture_wa'] = $this->model_tool_image->resize($whatsapp['profile_picture'], 45, 45);
						} else {
							$whatsapp['picture_wa'] = $this->model_tool_image->resize($this->config->get('config_logo'), 45, 45);
						}
						$time_now = strtotime(date('H:i:s'));
						$online_time_from = strtotime($whatsapp['online_time_from'] . ':00:00');
						if ($whatsapp['online_time_from'] <= $whatsapp['online_time_to']) {
							$online_time_to = strtotime($whatsapp['online_time_to'] . ':00:00');
						} else {
							$online_time_from = strtotime("-1 day", strtotime($whatsapp['online_time_from'] . ':00:00'));
							$online_time_to = strtotime("+1 day", strtotime($whatsapp['online_time_to'] . ':00:00'));
						}
						$away_time_from = strtotime($whatsapp['away_time_from'] . ':00:00');
						if ($whatsapp['away_time_from'] <= $whatsapp['away_time_to']) {
							$away_time_to = strtotime($whatsapp['away_time_to'] . ':00:00');
						} else {
							$away_time_from = strtotime("-1 day", strtotime($whatsapp['away_time_from'] . ':00:00'));
							$away_time_to = strtotime("+1 day", strtotime($whatsapp['away_time_to'] . ':00:00'));
						}

						if ($time_now >= $online_time_from && $time_now <= $online_time_to) {
							$whatsapp['online_status'] = 1;
						} else if ($time_now >= $away_time_from && $time_now <= $away_time_to) {
							$whatsapp['online_status'] = 2;
						} else {
							$whatsapp['online_status'] = 3;
						}

						$wa['whatsapp'][] = $whatsapp;
						}

						}

						usort($wa['whatsapp'], function($a, $b){
						   return ($a['sort_order'] < $b['sort_order']) ? -1 : 1;
						});
					}

					$chat_type      = $this->config->get('module_hp_chat_button_type');

					$data['chat_template']  	= '';

					$wa['mobile_compatibility'] = $this->config->get('module_hp_chat_button_mobile_compatibility');


					if ($is_mobile) {
						if ($this->config->get('module_hp_chat_button_mobile')) {
								$data['chat_template'] = $this->load->view('extension/module/hp_chat_button_'.$chat_type, $wa);

						}
					} else {
						if ($this->config->get('module_hp_chat_button_desktop')){
								$data['chat_template'] = $this->load->view('extension/module/hp_chat_button_'.$chat_type, $wa);

						}
					}
				}
			}

			if (isset($this->request->get['popup'])) {
				$data['chat_button_status'] = 0;
			}

			

            if (defined('JOURNAL3_ACTIVE') && !$this->journal3->document->isPopup()) {
                $this->journal3->settings->set('desktop_main_menu', $this->load->controller('journal3/main_menu', array('module_type' => 'main_menu', 'module_id' => $this->journal3->settings->get('headerMainMenu'), 'id' => 'main-menu')));
                $this->journal3->settings->set('desktop_main_menu_2', $this->load->controller('journal3/main_menu', array('module_type' => 'main_menu', 'module_id' => $this->journal3->settings->get('headerMainMenu2'), 'id' => 'main-menu-2')));
                $this->journal3->settings->set('desktop_top_menu', $this->load->controller('journal3/top_menu', array('module_type' => 'top_menu', 'module_id' => $this->journal3->settings->get('headerTopMenu'))));
                $this->journal3->settings->set('desktop_top_menu_2', $this->load->controller('journal3/top_menu', array('module_type' => 'top_menu', 'module_id' => $this->journal3->settings->get('headerTopMenu2'))));
                $this->journal3->settings->set('desktop_top_menu_3', $this->load->controller('journal3/top_menu', array('module_type' => 'top_menu', 'module_id' => $this->journal3->settings->get('headerTopMenu3'))));

                if ($this->journal3->document->hasClass('mobile-header-active')) {
                    $this->journal3->settings->set('mobile_main_menu', $this->load->controller('journal3/main_menu', array('module_type' => 'main_menu', 'module_id' => $this->journal3->settings->get('headerMobileMainMenu'))));
                }

                $this->journal3->settings->set('mobile_top_menu', $this->load->controller('journal3/top_menu', array('module_type' => 'top_menu', 'module_id' => $this->journal3->settings->get('headerMobileTopMenu'))));

                $data['footer_menu'] = $this->load->controller('journal3/footer_menu', array('module_type' => 'footer_menu', 'module_id' => $this->journal3->settings->get('footerMenu')));
            }
            
		$this->load->language('common/footer');

		$this->load->model('catalog/information');

		$data['informations'] = array();

		foreach (defined('JOURNAL3_ACTIVE') ? array() : $this->model_catalog_information->getInformations() as $result) {
			if ($result['bottom']) {
				$data['informations'][] = array(
					'title' => $result['title'],
					'href'  => $this->url->link('information/information', 'information_id=' . $result['information_id'])
				);
			}
		}

		$data['contact'] = $this->url->link('information/contact');
		$data['return'] = $this->url->link('account/return/add', '', true);
		$data['sitemap'] = $this->url->link('information/sitemap');
		$data['tracking'] = $this->url->link('information/tracking');
		$data['manufacturer'] = $this->url->link('product/manufacturer');
		$data['voucher'] = $this->url->link('account/voucher', '', true);
		$data['affiliate'] = $this->url->link('affiliate/login', '', true);
		$data['special'] = $this->url->link('product/special');
		$data['account'] = $this->url->link('account/account', '', true);
		$data['order'] = $this->url->link('account/order', '', true);
		$data['wishlist'] = $this->url->link('account/wishlist', '', true);
		$data['newsletter'] = $this->url->link('account/newsletter', '', true);

		$data['powered'] = sprintf($this->language->get('text_powered'), $this->config->get('config_name'), date('Y', time()));

		// Whos Online
		if ($this->config->get('config_customer_online')) {
			$this->load->model('tool/online');

			if (isset($this->request->server['REMOTE_ADDR'])) {
				$ip = $this->request->server['REMOTE_ADDR'];
			} else {
				$ip = '';
			}

			if (isset($this->request->server['HTTP_HOST']) && isset($this->request->server['REQUEST_URI'])) {
				$url = ($this->request->server['HTTPS'] ? 'https://' : 'http://') . $this->request->server['HTTP_HOST'] . $this->request->server['REQUEST_URI'];
			} else {
				$url = '';
			}

			if (isset($this->request->server['HTTP_REFERER'])) {
				$referer = $this->request->server['HTTP_REFERER'];
			} else {
				$referer = '';
			}

			$this->model_tool_online->addOnline($ip, $this->customer->getId(), $url, $referer);
		}

		$data['scripts'] = $this->document->getScripts('footer');
		$data['styles'] = $this->document->getStyles('footer');
		
		return $this->load->view('common/footer', $data);
	}
}
