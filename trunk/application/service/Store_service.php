<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Store_service extends MY_Service {
	const MSG_ERROR_PARAMETER = "参数无效";
	const MSG_ERROR_TITLE = "标题不能为空";
	const MSG_ERROR_URL = "链接不能为空";

	public function __construct() {
		parent::__construct();
		$this->loadModel("AdminStore","AdminSystem");
	}

	//友情链接添加和修改
	public function add($options = array()){
		$optionsKeys = array(
			"id",
			"storename",
			"address",
			"telephone",
			"point_left",
			"point_right"
		);
		$options = formatOptions($options, $optionsKeys);
		extract($options);
		$data = array();
		if($id){
			$item = $this->AdminStore_model->where("id", $id)->get_item();
			if(empty($item)){
				return wrrong_msg(MSG_INVALID_ARGUMENTS);
			}
		}
		if($storename!=''){
			$data['storename'] = $storename;
		}

		if($address!=''){
			$data['address'] = $address;
		}
		if($telephone!=''){
			$data['telephone'] = $telephone;
		}
		if($point_left!=''){
			$data['point_left'] = $point_left;
		}
		if($point_right!=''){
			$data['point_right'] = $point_right;
		}

		if(!empty($id)){
			$success = $this->AdminStore_model->set($data)->order_by('id', "desc")->where("id", $id)->update();
		}else{
			$success = $this->AdminStore_model->set($data)->insert();
		}
		if(!$success){
			return wrrong_msg(MSG_SERVICE_BUSY);
		}
		return $id ? success_msg(MSG_EDIT_SUCCESS) : success_msg(MSG_ADD_SUCCESS);
	}

	//获取列表
	public function get_list($options = array()){
		$optionsKeys = array(
            "id",
			"storename",
			"rows",
			"page"
		);
		$options = formatOptions($options, $optionsKeys);
		extract($options);

		$where = array();
		$result = array();
		//是否启用
        if (optionExists($id)) {
            $where['id'] = $id;
        }
		if (optionExists($storename)) {
			$where['storename'] = "%{$storename}%";
		}

		//分页
		if ($rows && $page) {
			$result['total'] = $this->AdminStore_model->where($where)->count();
			$page = max($page, 1);
			$offset = ($page - 1) * $rows;
			$this->AdminStore_model->limit($rows, $offset);
			$pages = pages($result['total'], $rows, formatUrl("car", "car", ''));
            $result['pages'] = $pages;
		}
		//获取列表
		$list = $this->AdminStore_model->where($where)->order_by('id','DESC')->get_list();
		$result['rows'] = $list;
		return $result;
	}

	//删除
	public function delete($id){
		$success = $this->AdminCar_model->where("id", $id)->delete();
		if(!$success){
			return wrrong_msg(MSG_SERVICE_BUSY);
		}
		return success_msg(MSG_DELETE_SUCCESS);
	}

}
?>