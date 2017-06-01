<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class System_service extends MY_Service {
	const MSG_ERROR_PARAMETER = "参数无效";
	const MSG_ERROR_TITLE = "标题不能为空";
	const MSG_ERROR_URL = "链接不能为空";

	public function __construct() {
		parent::__construct();
		$this->loadModel("AdminCar","AdminSystem");
	}

	//友情链接添加和修改
	public function add($options = array()){
		$optionsKeys = array(
			"id",
			"leibie",
			"name",
		);
		$options = formatOptions($options, $optionsKeys);
		extract($options);
		$data = array();
		if($id){
			$item = $this->AdminSystem_model->where("id", $id)->get_item();
			if(empty($item)){
				return wrrong_msg(MSG_INVALID_ARGUMENTS);
			}
		}
		if($leibie!=''){
			$data['bh'] = $leibie;
		}
		if($name!=''){
			$data['name'] = $name;
		}

		if(!empty($id)){
			$success = $this->AdminSystem_model->set($data)->where("id", $id)->update();
		}else{
			$success = $this->AdminSystem_model->set($data)->insert();
		}
		if(!$success){
			return wrrong_msg(MSG_SERVICE_BUSY);
		}
		return $id ? success_msg(MSG_EDIT_SUCCESS) : success_msg(MSG_ADD_SUCCESS);
	}

	//获取列表
	public function get_list($options = array()){
		$optionsKeys = array(
			"leibie",
			"name",
			"rows",
			"page"
		);
		$options = formatOptions($options, $optionsKeys);
		extract($options);

		$where = array();
		$result = array();
		//是否启用
		if (optionExists($leibie)) {
			$where['bh'] = $leibie;
		}
		if (optionExists($name)) {
			$where['name'] = "%{$name}%";
		}

		//分页
		if ($rows && $page) {
			$result['total'] = $this->AdminSystem_model->where($where)->count();
			$page = max($page, 1);
			$offset = ($page - 1) * $rows;
			$this->AdminSystem_model->limit($rows, $offset);
		}
		//获取列表
		$list = $this->AdminSystem_model->where($where)->get_list();
		$result['rows'] = $list;
		return $result;
	}

	//删除
	public function delete($id){
		$success = $this->AdminSystem_model->where("id", $id)->delete();
		if(!$success){
			return wrrong_msg(MSG_SERVICE_BUSY);
		}
		return success_msg(MSG_DELETE_SUCCESS);
	}

}
?>