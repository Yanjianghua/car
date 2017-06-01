<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Bm_m extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->loadService("View","System","Recommand","Jike");
	}

	public function index() {
		$post = $this->input->post_get(NULL);

		if (!empty($post)) {
			parse_alert($this->Jike_service->add($post), "JSON");
		}
		$this->view(config_item("style") . '/m/layout/index');
	}

}
