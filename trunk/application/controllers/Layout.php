<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Layout extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->loadService("View","System","Recommand");
	}

	public function index() {
		$data = $this->View_service->getData("index");
		$index_zb = $this->Recommand_service->get_list(array('wz'=>'index_zb'));
		$index_gg = $this->Recommand_service->get_list(array('wz'=>'index_gg'));
		$index_zx_1 = $this->Recommand_service->get_list(array('wz'=>'index_zx_1'));
		$index_zx_bt = $this->Recommand_service->get_list(array('wz'=>'index_zx_bt'));
		$index_zx_r_tu = $this->Recommand_service->get_list(array('wz'=>'index_zx_r_tu'));
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
		$this->assign("index_zb", $index_zb);
		$this->assign("index_gg", $index_gg);
		$this->assign("index_zx_1", $index_zx_1);
		$this->assign("index_zx_bt", $index_zx_bt);
		$this->assign("index_zx_r_tu", $index_zx_r_tu);
		$this->assign("data", $data);
		$this->view(config_item("style") . '/layout/index');
	}

}
