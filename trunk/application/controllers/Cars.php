<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Cars extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->loadService("View","Price","Car");
		$this->loadModel("AdminJike");
		$this->load->library("Curl");

	}

		public function index() {
		$id = $this->input->get("id");
		if (empty($id)) {
			HTTP404();
		}
		$cars = $this->Car_service->get_list(array(
			"id" => $id,
			"rows" => 1
		));
		if (empty($cars['rows'])) {
			HTTP404();
		}

		$data = $this->View_service->getData("cars", $cars);
		foreach ($data as $k => $v) {
			$this->assign($k, $v);
		}
		//阅读量开关
			//阅读量
//		$options = array("pid"=>$article['id'],"uid"=>$article['uid']);
//		$readnum = $this->Article_service->get_num($options);
//		$this->assign("readnum", $readnum);
        $carprice = $this->Price_service->get_list(array('carid'=>$id));
		$people = $this->AdminJike_model->select('count(*) as num')->where('carid',$id)->get_item();
		$people = $people?$people['num']:0;
		$brand = $this->System_service->get_list(array('leibie'=>1));
		$grade = $this->System_service->get_list(array('leibie'=>2));
		$price = $this->System_service->get_list(array('leibie'=>3));
		$index_re = $this->Recommand_service->get_list(array('wz'=>'index_re'));
		$index_lunzhuan = $this->Recommand_service->get_list(array('wz'=>'index_lunzhuan'));

		$this->assign("people", $people);
		$this->assign("index_re", $index_re);
		$this->assign("index_lunzhuan", $index_lunzhuan);
		$this->assign("brand", $brand);
		$this->assign("grade", $grade);
		$this->assign("price", $price);
        $this->assign("carprice", $carprice);

		$this->assign("cars", $cars);

		$this->view(config_item("style") . '/cars/index');
	}

	public function read_add_ajax(){
		$id = $this->input->post_get('id');
		if(!empty($id)){
			return $this->Car_service->read_add_ajax(array('id'=>$id));
		}
	}

}
