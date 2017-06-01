<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Layout_m extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->loadService("View","System");
	}

	public function index() {
		$data = $this->View_service->getData("m_index");
		$brand = $this->System_service->get_list(array('leibie'=>1));

		$this->assign("brand", $brand);
		$this->assign("data", $data);
		$this->view(config_item("style") . '/m/layout/index');
	}

}
