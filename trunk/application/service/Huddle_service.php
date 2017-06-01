<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Huddle_service extends MY_Service {
	const MSG_ERROR_PARAMETER = "参数无效";
	const MSG_ERROR_TITLE = "标题不能为空";
	const MSG_ERROR_URL = "链接不能为空";

	public function __construct() {
		parent::__construct();
		$this->loadModel("AdminCar","AdminHuddle");
	}

	//友情链接添加和修改
	public function add($options = array()){
		$optionsKeys = array(
			"id",
			"carid",
			"bname",
			"bxx",
			"baddress",
			"people",
			"t1",
			"telephone",
			"stime",
			"etime",
		);
		$options = formatOptions($options, $optionsKeys);
		extract($options);
		$data = array();
		if($id){
			$item = $this->AdminHuddle_model->where("id", $id)->get_item();
			if(empty($item)){
				return wrrong_msg(MSG_INVALID_ARGUMENTS);
			}
		}
		if($carid!=''){
			$data['carid'] = $carid;
			$item = $this->AdminCar_model->where("id", $carid)->get_item();
			$data['bname'] = $item['carname'];
			$data['baddress'] = $item['address'];
		}
		if($bname!=''){
			$data['bname'] = $bname;
		}
		if($bxx!=''){
			$data['bxx'] = $bxx;
		}
		if($baddress!=''){
			$data['baddress'] = $baddress;
		}
		if($people!=''){
			$data['people'] = $people;
		}
		if($t1!=''){
			$data['t1'] = $t1;
		}
		if($telephone!=''){
			$data['telephone'] = $telephone;
		}
		if($stime!=''){
			$data['stime'] = strtotime($stime);
		}
		if($etime!=''){
			$data['etime'] = strtotime($etime);
		}

		if(!empty($id)){
			$success = $this->AdminHuddle_model->set($data)->where("id", $id)->update();
		}else{
			$success = $this->AdminHuddle_model->set($data)->insert();
		}
		if(!$success){
			return wrrong_msg(MSG_SERVICE_BUSY);
		}
		return $id ? success_msg(MSG_EDIT_SUCCESS) : success_msg(MSG_ADD_SUCCESS);
	}

	//获取列表
	public function get_list($options = array()){
		$optionsKeys = array(
			"bname",
			"rows",
			"page"
		);
		$options = formatOptions($options, $optionsKeys);
		extract($options);

		$where = array();
		$result = array();
		//是否启用
		if (optionExists($bname)) {
			$where['bname like'] = "%{$bname}%";
		}

		//分页
		if ($rows && $page) {
			$result['total'] = $this->AdminHuddle_model->where($where)->count();
			$page = max($page, 1);
			$offset = ($page - 1) * $rows;
			$this->AdminHuddle_model->limit($rows, $offset);
			$pages = pages($result['total'], $rows, formatUrl("huddle", "huddle", ''));
            $result['pages'] = $pages;
		}
		//获取列表
		$list = $this->AdminHuddle_model->where($where)->order_by('id','DESC')->get_list();
		foreach($list as $k=>$v){
			$list[$k]['stime'] = date('Y-m-d',$v['stime']);
			$list[$k]['etime'] = date('Y-m-d',$v['etime']);
		}
		$result['rows'] = $list;
		return $result;
	}

	//删除
	public function delete($id){
		$success = $this->AdminHuddle_model->where("id", $id)->delete();
		if(!$success){
			return wrrong_msg(MSG_SERVICE_BUSY);
		}
		return success_msg(MSG_DELETE_SUCCESS);
	}

}
?>