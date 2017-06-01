<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Jike_service extends MY_Service {
	const MSG_ERROR_PARAMETER = "参数无效";
	const MSG_ERROR_TITLE = "标题不能为空";
	const MSG_ERROR_URL = "链接不能为空";

	public function __construct() {
		parent::__construct();
		$this->loadModel("AdminCar","AdminJike","AdminHuddle");
	}

	//友情链接添加和修改
	public function add($options = array()){
		$optionsKeys = array(
			"id",
			"username",
			"telephone",
			"carid",
			"huddleid",
			"btime"
		);
		$options = formatOptions($options, $optionsKeys);
		extract($options);
		$data = array();
		if($id){
			$item = $this->AdminJike_model->where("id", $id)->get_item();
			if(empty($item)){
				return wrrong_msg(MSG_INVALID_ARGUMENTS);
			}
		}
		if($username!=''){
			$data['username'] = $username;
		}
		if($telephone!=''){
			$data['telephone'] = $telephone;
		}
		if($carid!=''){
			$data['carid'] = $carid;
		}
		if($huddleid!=''){
			$data['huddleid'] = $huddleid;
		}
		$data['btime'] = time();
		if(!empty($id)){
			$success = $this->AdminJike_model->set($data)->where("id", $id)->update();
		}else{
			$success = $this->AdminJike_model->set($data)->insert();
		}
		if(!$success){
			return wrrong_msg(MSG_SERVICE_BUSY);
		}
		return $id ? success_msg(MSG_EDIT_SUCCESS) : success_msg(MSG_ADD_SUCCESS);
	}

	//获取列表
	public function get_list($options = array()){
		$optionsKeys = array(
			"username",
			"telephone",
			"carid",
			"huddleid",
			"rows",
			"page"
		);
		$options = formatOptions($options, $optionsKeys);
		extract($options);

		$where = array();
		$result = array();
		//是否启用
		if (optionExists($username)) {
			$where['username like'] = "%{$username}%";
		}
		if (optionExists($telephone)) {
			$where['telephone like'] = "%{$telephone}%";
		}
		if (optionExists($carid)) {
			$where['carid'] = $carid;
		}
		if (optionExists($huddleid)) {
			$where['huddleid'] = $huddleid;
		}

		//分页
		if ($rows && $page) {
			$result['total'] = $this->AdminJike_model->where($where)->count();
			$page = max($page, 1);
			$offset = ($page - 1) * $rows;
			$this->AdminJike_model->limit($rows, $offset);
		}
		//获取列表
		$list = $this->AdminJike_model->where($where)->order_by('id','DESC')->get_list();
		foreach($list as $k=>$v){
			$list[$k]['btime'] = date('Y-m-d',$v['btime']);
			if($v['carid']) {
				$car = $this->AdminCar_model->where('id', $v['carid'])->get_item();
				$list[$k]['carid'] = $car['carname'];
			}
			if($v['huddleid']){
				$huddle = $this->AdminHuddle_model->where('id',$v['huddleid'])->get_item();
				$list[$k]['huddleid'] = $huddle['bname'];
			}
		}
		$result['rows'] = $list;
		return $result;
	}

	//删除
	public function delete($id){
		$success = $this->AdminJike_model->where("id", $id)->delete();
		if(!$success){
			return wrrong_msg(MSG_SERVICE_BUSY);
		}
		return success_msg(MSG_DELETE_SUCCESS);
	}

}
?>