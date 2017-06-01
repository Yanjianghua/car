<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_Main extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->loadService("View","User", "Upgrade", "Car");
		$this->loadModel("AdminCar","AdminSystem");
	}

	//基本配置管理
	public function index() {
        $post = $this->input->post(NULL);
        if (!empty($post)) {
            $this->Upgrade_service->update_config("system", "web_name", "\"{$post['webname']}\"");
            $this->Upgrade_service->update_config("system", "web_name", "\"{$post['server_url']}\"");
//            $this->Upgrade_service->update_config("url", "web_name", "\"{$post['server_url']}\"");
            $this->Upgrade_service->update_config("system", "web_name", "\"{$post['footer']}\"");

            print_json(success_msg(MSG_EDIT_SUCCESS));
        }
        $this->assign("web_name", $this->config->config['web_name']);
        $this->assign("server_url", $this->config->config['server_url']);
        $this->assign("footer", $this->config->config['footer']);
		$this->view('admin/main/index');
	}
}
