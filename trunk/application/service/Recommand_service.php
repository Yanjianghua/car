<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Recommand_service extends MY_Service {
	const MSG_ERROR_PARAMETER = "参数无效";
	const MSG_ERROR_TITLE = "标题不能为空";
	const MSG_ERROR_URL = "链接不能为空";

	public function __construct() {
		parent::__construct();
		$this->loadModel("AdminRecommand","AdminSystem");
	}

	//友情链接添加和修改
	public function add($options = array()){
		$optionsKeys = array(
			"id",
			"wz",
			"title",
			"url",
			"t1",
		);
		$options = formatOptions($options, $optionsKeys);
		extract($options);
		$data = array();
		if($id){
			$item = $this->AdminRecommand_model->where("id", $id)->get_item();
			if(empty($item)){
				return wrrong_msg(MSG_INVALID_ARGUMENTS);
			}
		}
		if($wz!=''){
			$data['wz'] = $wz;
		}
		if($title!=''){
			$data['title'] = $title;
		}
		if($url!=''){
			$data['url'] = $url;
		}
		if($t1!=''){
			$data['t1'] = $t1;
		}

		if(!empty($id)){
			$success = $this->AdminRecommand_model->set($data)->order_by('id', "desc")->where("id", $id)->update();
		}else{
			$success = $this->AdminRecommand_model->set($data)->insert();
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
			"wz",
			"title",
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
		if (optionExists($wz)) {
			$where['wz'] = $wz;
		}
		if (optionExists($title)) {
			$where['title like'] = "%{$title}%";
		}

		//分页
		if ($rows && $page) {
			$result['total'] = $this->AdminRecommand_model->where($where)->count();
			$page = max($page, 1);
			$offset = ($page - 1) * $rows;
			$this->AdminRecommand_model->limit($rows, $offset);
			$pages = pages($result['total'], $rows, formatUrl("car", "car", ''));
            $result['pages'] = $pages;
		}
		//获取列表
		$list = $this->AdminRecommand_model->where($where)->order_by('id','DESC')->get_list();
		$result['rows'] = $list;
		return $result;
	}

	//删除
	public function delete($id){
		$success = $this->AdminRecommand_model->where("id", $id)->delete();
		if(!$success){
			return wrrong_msg(MSG_SERVICE_BUSY);
		}
		return success_msg(MSG_DELETE_SUCCESS);
	}

}
?>