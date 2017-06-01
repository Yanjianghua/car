<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Huddle extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->loadService("View","Jike");
	}

	public function index() {
		$input['page'] = $this->input->get("page");
		$input['page'] = $input['page'] ? max($input['page'], 1) : 1;

		$result = $this->View_service->getData("huddle", $input);
		$list = $result['list'];

		$brand = $this->System_service->get_list(array('leibie'=>1));
		$grade = $this->System_service->get_list(array('leibie'=>2));
		$price = $this->System_service->get_list(array('leibie'=>3));
		$index_re = $this->Recommand_service->get_list(array('wz'=>'index_re'));
		$index_lunzhuan = $this->Recommand_service->get_list(array('wz'=>'index_lunzhuan'));

		$this->assign("index_re", $index_re);
		$this->assign("index_lunzhuan", $index_lunzhuan);
		$this->assign("brand", $brand);
		$this->assign("grade", $grade);
		$this->assign("price", $price);
		$this->assign("list", $list);

		$this->view(config_item("style") . '/huddle/index');
	}

	public function jike(){
		$post = $this->input->post_get(NULL);
		if (!empty($post)) {
			parse_alert($this->Jike_service->add($post), "JSON");
		}
	}

}
