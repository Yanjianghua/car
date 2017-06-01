<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_Jike extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->loadService("User", "Media", "Jike");
		$this->loadModel("AdminCar","AdminJike");
	}

	//集客管理
	public function index() {
		$this->view('admin/jike/index');
	}

	public function details() {
		$input = $this->input->post_get(NULL, TRUE);
		if(isset($input['carid'])){
			$this->assign("carid", $input['carid']);
		}
		if(isset($input['huddleid'])){
			$this->assign("huddleid", $input['huddleid']);
		}
		$this->view('admin/jike/details');
	}

	public function get_list() {
		$input = $this->input->post_get(NULL, TRUE);
		print_json($this->Jike_service->get_list($input));
	}

	//添加
	public function add() {
		$post = $this->input->post(NULL);
		if (!empty($post)) {
			parse_alert($this->Jike_service->add($post), "JSON");
		}
		$this->view("admin/jike/add");
	}

	//修改
	public function edit() {
		$post = $this->input->post(NULL);
		if (!empty($post)) {
			parse_alert($this->Jike_service->add($post), "JSON");
		}
		$id = $this->input->get("id", TRUE);
		$jike = $this->AdminJike_model->where('id',$id)->get_item();
		$this->assign("id", $id);
		$this->assign("jike", $jike);
		$this->view("admin/jike/edit");
	}

	public function status() {
		$id = $this->input->post("id");
		$status = $this->input->post("status");
		$data['status'] = $status;
		$success = $this->AdminJike_model->where("id", $id)->set($data)->update();
		if (!$success) {
			parse_alert(wrrong_msg(MSG_SERVICE_BUSY), "JSON");
		}
		parse_alert(success_msg(MSG_METHOD_SUCCESS), "JSON");
	}

	public function del() {
		$options = $this->input->post("options");
		parse_alert($this->Jike_service->delete($options[0]['id']), "JSON");
	}

}
