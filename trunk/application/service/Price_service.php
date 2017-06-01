<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Price_service extends MY_Service {
	const MSG_ERROR_PARAMETER = "参数无效";
	const MSG_ERROR_TITLE = "标题不能为空";
	const MSG_ERROR_URL = "链接不能为空";

	public function __construct() {
		parent::__construct();
		$this->loadModel("AdminCarprice","AdminSystem");
	}

	//友情链接添加和修改
	public function add($options = array()){
		$optionsKeys = array(
			"id",
			"carid",
			"carnamenum",
			"cjprice",
			"yhprice",
			"lcprice",
			"ckprice",
			"status"
		);
		$options = formatOptions($options, $optionsKeys);
		extract($options);
		$data = array();
		if($id){
			$item = $this->AdminCarprice_model->where("id", $id)->get_item();
			if(empty($item)){
				return wrrong_msg(MSG_INVALID_ARGUMENTS);
			}
		}
		if($carid!=''){
			$data['carid'] = $carid;
		}
		if($carnamenum!=''){
			$data['carnamenum'] = $carnamenum;
		}
		if($cjprice!=''){
			$data['cjprice'] = $cjprice;
		}
		if($yhprice!=''){
			$data['yhprice'] = $yhprice;
		}
		if($lcprice!=''){
			$data['lcprice'] = $lcprice;
		}
		if($ckprice!=''){
			$data['ckprice'] = $ckprice;
		}

		if(!empty($id)){
			$success = $this->AdminCarprice_model->set($data)->where("id", $id)->update();
		}else{
			$success = $this->AdminCarprice_model->set($data)->insert();
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
            "carid",
			"carnamenum",
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
        if (optionExists($carid)) {
            $where['carid'] = $carid;
        }
		if (optionExists($carnamenum)) {
			$where['carnamenum like'] = "%{$carnamenum}%";
		}
		//分页
		if ($rows && $page) {
			$result['total'] = $this->AdminCarprice_model->where($where)->count();
			$page = max($page, 1);
			$offset = ($page - 1) * $rows;
			$this->AdminCarprice_model->limit($rows, $offset);
			$pages = pages($result['total'], $rows, formatUrl("car", "car", ''));
            $result['pages'] = $pages;
		}
		//获取列表
		$list = $this->AdminCarprice_model->where($where)->order_by('id','DESC')->get_list();
		$result['rows'] = $list;
		return $result;
	}

	//删除
	public function delete($id){
		$success = $this->AdminCarprice_model->where("id", $id)->delete();
		if(!$success){
			return wrrong_msg(MSG_SERVICE_BUSY);
		}
		return success_msg(MSG_DELETE_SUCCESS);
	}

}
?>