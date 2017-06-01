<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_Car extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->loadService("User", "Media", "Car", "Store");
		$this->loadModel("AdminCar","AdminSystem");
	}

	//用户管理
	public function index() {
		$brand = $this->AdminSystem_model->where('bh','1')->get_list();
		$grade = $this->AdminSystem_model->where('bh','2')->get_list();
		$this->assign("brand", $brand);
		$this->assign("grade", $grade);
		$this->view('admin/car/index');
	}

	public function get_list() {
		$input = $this->input->post(NULL, TRUE);
		print_json($this->Car_service->get_list($input));
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
			parse_alert($this->Car_service->add($post), "JSON");
		}
		$brand = $this->AdminSystem_model->where('bh','1')->get_list();
		$grade = $this->AdminSystem_model->where('bh','2')->get_list();
		$store = $this->AdminStore_model->get_list();

		$this->assign("store", $store);
		$this->assign("brand", $brand);
		$this->assign("grade", $grade);
		$this->view("admin/car/add");
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
			parse_alert($this->Car_service->add($post), "JSON");
		}
		$id = $this->input->get("id", TRUE);
		$car = $this->AdminCar_model->where('id',$id)->get_item();
		$car['stime'] = date('Y-m-d',$car['stime']);
		$car['etime'] = date('Y-m-d',$car['etime']);
		$this->assign("id", $id);
		$this->assign("car", $car);
		$brand = $this->AdminSystem_model->where('bh','1')->get_list();
		$grade = $this->AdminSystem_model->where('bh','2')->get_list();
		$this->assign("brand", $brand);
		$this->assign("grade", $grade);
		$this->view("admin/car/edit");
	}

	public function status() {
		$id = $this->input->post("id");
		$status = $this->input->post("status");
		$data['status'] = $status;
		$success = $this->AdminCar_model->where("id", $id)->set($data)->update();
		if (!$success) {
			parse_alert(wrrong_msg(MSG_SERVICE_BUSY), "JSON");
		}
		parse_alert(success_msg(MSG_METHOD_SUCCESS), "JSON");
	}

	public function del() {
		$options = $this->input->post("options");
		parse_alert($this->Car_service->delete($options[0]['id']), "JSON");
	}

	public function recommand() {
		$id = $this->input->post("id");
		$status = $this->input->post("status");
		print_json($this->Car_service->recommand($id, $status));
	}

	public function upload($file = NULL){
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

    public function uploadFile($file = NULL){
        $file = $_FILES['upload'];
        $img = upload($file, "/uploads/pic", function() use ($file) {
            if (!maxFileSize($file)) {
                return false;
            }
            if (!isImage($file)) {
                return false;
            }
        });
        $fn = $this->input->get('CKEditorFuncNum') ? $this->input->get('CKEditorFuncNum') : 1;
        $message = "";
        if (!$img) {
            $message = '上传失败';
        }
        mkhtml($fn, config_item("server_url") . str_replace("\\",'/',substr($img,1)), $message);
    }
}
