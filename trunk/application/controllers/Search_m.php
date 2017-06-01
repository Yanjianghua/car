<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Search_m extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->loadService("View","System");
	}

	public function index() {
		$input['page'] = $this->input->get("page");
		$input['grade'] = $this->input->get("grade");
		$input['brand'] = $this->input->get("brand");
		$input['price'] = $this->input->get("price");
        $input['carname'] = $this->input->get("carname");
        $input['order'] = $this->input->get("order");
		$input['page'] = $input['page'] ? max($input['page'], 1) : 1;

		$result = $this->View_service->getData("car", $input);
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
		$this->assign("list", $result);

		$this->view(config_item("style") . '/m/search/index');
	}

}
