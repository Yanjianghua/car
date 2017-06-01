<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_Carprice extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->loadService("User", "Media", "Price");
		$this->loadModel("AdminCarprice","AdminSystem");
	}

	//车型价格表管理
	public function index() {
		$this->view('admin/carprice/index');
	}

	public function get_list() {
		$input = $this->input->post(NULL, TRUE);
		print_json($this->Price_service->get_list($input));
	}

	//添加
	public function add() {
		$post = $this->input->post(NULL);
        $id = $this->input->get('id');
		if (!empty($post)) {
			parse_alert($this->Price_service->add($post), "JSON");
		}
        $this->assign("carid", $id);
		$this->view("admin/carprice/add");
	}

	//修改
	public function edit() {
		$post = $this->input->post(NULL);
		if (!empty($post)) {
			parse_alert($this->Price_service->add($post), "JSON");
		}
		$id = $this->input->get("id", TRUE);
		$carprice = $this->AdminCarprice_model->where('id',$id)->get_item();
		$this->assign("id", $id);
		$this->assign("carprice", $carprice);
		$this->view("admin/carprice/edit");
	}

	public function status() {
		$id = $this->input->post("id");
		$status = $this->input->post("status");
		$data['status'] = $status;
		$success = $this->AdminCarprice_model->where("id", $id)->set($data)->update();
		if (!$success) {
			parse_alert(wrrong_msg(MSG_SERVICE_BUSY), "JSON");
		}
		parse_alert(success_msg(MSG_METHOD_SUCCESS), "JSON");
	}

	public function del() {
		$options = $this->input->post("options");
		parse_alert($this->Price_service->delete($options[0]['id']), "JSON");
	}

}
