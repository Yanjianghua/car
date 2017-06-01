<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_Recommand extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->loadService("User", "Media", "Recommand");
		$this->loadModel("AdminRecommand","AdminSystem");
	}

	//推荐管理
	public function index() {
		$this->view('admin/recommand/index');
	}

	public function get_list() {
		$input = $this->input->post(NULL, TRUE);
		print_json($this->Recommand_service->get_list($input));
	}

	//添加
	public function add() {
		$post = $this->input->post(NULL);
		if(!empty($_FILES)){
			foreach($_FILES as $k=>$v){
				if(empty($_FILES[$k]['error'])){
					$post[$k] = $this->upload($_FILES[$k]);
				}
			}
		}
		if (!empty($post)) {
			parse_alert($this->Recommand_service->add($post), "JSON");
		}
		$this->view("admin/recommand/add");
	}

	//修改
	public function edit() {
		$post = $this->input->post(NULL);
		if(!empty($_FILES)){
			foreach($_FILES as $k=>$v){
				if(empty($_FILES[$k]['error'])){
					$post[$k] = $this->upload($_FILES[$k]);
				}
			}
		}
		if (!empty($post)) {
			parse_alert($this->Recommand_service->add($post), "JSON");
		}
		$id = $this->input->get("id", TRUE);
		$re = $this->AdminRecommand_model->where('id',$id)->get_item();
		$this->assign("id", $id);
		$this->assign("re", $re);
		$this->view("admin/recommand/edit");
	}

	public function status() {
		$id = $this->input->post("id");
		$status = $this->input->post("status");
		$data['status'] = $status;
		$success = $this->AdminRecommand_model->where("id", $id)->set($data)->update();
		if (!$success) {
			parse_alert(wrrong_msg(MSG_SERVICE_BUSY), "JSON");
		}
		parse_alert(success_msg(MSG_METHOD_SUCCESS), "JSON");
	}

	public function del() {
		$options = $this->input->post("options");
		parse_alert($this->Recommand_service->delete($options[0]['id']), "JSON");
	}

	public function upload($file){
		$img = upload($file, "/uploads/pic", function() use ($file) {
			if (!maxFileSize($file)) {
				return false;
			}
			if (!isImage($file)) {
				return false;
			}
		});
		if (!$img) {
			$message = '上传失败';
		}
		return $this->config->config['server_url'].$img;
	}

}
