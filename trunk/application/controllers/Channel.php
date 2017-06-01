<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Channel extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->loadService("View");
	}

	public function index() {
		$input['page'] = $this->input->get("page");
		$input['page'] = $input['page'] ? max($input['page'], 1) : 1;
		$input['info'] = "content";

		$result = $this->View_service->getData("channel", $input);
		$list = $result['list'];
		$data = $result['data'];
		$brand = $this->System_service->get_list(array('leibie'=>1));
		$grade = $this->System_service->get_list(array('leibie'=>2));
		$price = $this->System_service->get_list(array('leibie'=>3));
		$index_re = $this->Recommand_service->get_list(array('wz'=>'index_re'));
		$index_lunzhuan = $this->Recommand_service->get_list(array('wz'=>'index_lunzhuan'));
		$index_er_sou = $this->Recommand_service->get_list(array('wz'=>'index_er_sou'));

		$this->assign("index_er_sou", $index_er_sou);
		$this->assign("index_re", $index_re);
		$this->assign("index_lunzhuan", $index_lunzhuan);
		$this->assign("brand", $brand);
		$this->assign("grade", $grade);
		$this->assign("price", $price);
		$this->assign("list", $list);
		$this->assign("data", $data);

		$this->view(config_item("style") . '/channel/index');
	}

}
