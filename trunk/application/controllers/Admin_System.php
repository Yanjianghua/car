<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_System extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->loadService("User", "Media", "System");
		$this->loadModel("AdminCar","AdminSystem");
	}

	//配置管理
	public function index() {
		$leibie = array(1=>'品牌',2=>'级别',3=>'价格');
		$this->assign("leibie", $leibie);
		$this->view('admin/system/index');
	}

	public function get_list() {
		$input = $this->input->post(NULL, TRUE);
		print_json($this->System_service->get_list($input));
	}

	//添加
	public function add() {
		$post = $this->input->post(NULL);
		if (!empty($post)) {
			parse_alert($this->System_service->add($post), "JSON");
		}
		$leibie = array(1=>'品牌',2=>'级别',3=>'价格');
		$this->assign("leibie", $leibie);
		$this->view("admin/system/add");
	}

	//修改
	public function edit() {
		$post = $this->input->post(NULL);
		if (!empty($post)) {
			parse_alert($this->System_service->add($post), "JSON");
		}
		$id = $this->input->get("id", TRUE);
		$sys = $this->AdminSystem_model->where('id',$id)->get_item();
		$this->assign("id", $id);
		$this->assign("sys", $sys);
		$leibie = array(1=>'品牌',2=>'级别',3=>'价格');
		$this->assign("leibie", $leibie);
		$this->view("admin/system/edit");
	}

	public function status() {
		$id = $this->input->post("id");
		$status = $this->input->post("status");
		$data['status'] = $status;
		$success = $this->AdminSystem_model->where("id", $id)->set($data)->update();
		if (!$success) {
			parse_alert(wrrong_msg(MSG_SERVICE_BUSY), "JSON");
		}
		parse_alert(success_msg(MSG_METHOD_SUCCESS), "JSON");
	}

	public function del() {
		$options = $this->input->post("options");
		parse_alert($this->System_service->delete($options[0]['id']), "JSON");
	}

}
