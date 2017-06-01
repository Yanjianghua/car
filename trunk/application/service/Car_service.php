<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Car_service extends MY_Service {
	const MSG_ERROR_PARAMETER = "参数无效";
	const MSG_ERROR_TITLE = "标题不能为空";
	const MSG_ERROR_URL = "链接不能为空";

	public function __construct() {
		parent::__construct();
		$this->loadModel("AdminCar","AdminSystem","AdminStore");
	}

	//友情链接添加和修改
	public function add($options = array()){
		$optionsKeys = array(
			"id",
			"storeid",
			"store",
			"carname",
			"price",
            "cj_price",
			"brand",
			"grade",
			"message",
			"address",
			"stime",
			"etime",
			"telephone",
			"tu1",
			"tu2",
			"tu3",
			"tu4",
			"content",
			"point_left",
			"point_right"
		);
		$options = formatOptions($options, $optionsKeys);
		extract($options);
		$data = array();
		if($id){
			$item = $this->AdminCar_model->where("id", $id)->get_item();
			if(empty($item)){
				return wrrong_msg(MSG_INVALID_ARGUMENTS);
			}
		}
		if($storeid!=''){
			$item = $this->AdminStore_model->where("id", $storeid)->get_item();
			$data['store'] = $item['storename'];
			$data['telephone'] = $item['telephone'];
			$data['address'] = $item['address'];
			$data['point_left'] = $item['point_left'];
			$data['point_right'] = $item['point_right'];
		}
		if($store!=''){
			$data['store'] = $store;
		}
		if($carname!=''){
			$data['carname'] = $carname;
		}
		if($price!=''){
			$data['price'] = $price;
		}
        if($cj_price!=''){
            $data['cj_price'] = $cj_price;
        }
		if($brand!=''){
			$data['brand'] = $brand;
		}
		if($grade!=''){
			$data['grade'] = $grade;
		}
		if($message!=''){
			$data['message'] = $message;
		}
		if($address!=''){
			$data['address'] = $address;
		}
		if($stime!=''){
			$data['stime'] = strtotime($stime);
		}
		if($etime!=''){
			$data['etime'] = strtotime($etime);
		}
		if($telephone!=''){
			$data['telephone'] = $telephone;
		}
		if($tu1!=''){
			$data['tu1'] = $tu1;
		}
		if($tu2!=''){
			$data['tu2'] = $tu2;
		}
		if($tu3!=''){
			$data['tu3'] = $tu3;
		}
		if($tu4!=''){
			$data['tu4'] = $tu4;
		}
		if($content!=''){
			$data['content'] = $content;
		}
		if($point_left!=''){
			$data['point_left'] = $point_left;
		}
		if($point_right!=''){
			$data['point_right'] = $point_right;
		}

		$data['edittime'] = time();
		if(!empty($id)){
			$success = $this->AdminCar_model->set($data)->order_by('id', "desc")->where("id", $id)->update();
		}else{
			$success = $this->AdminCar_model->set($data)->insert();
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
			"store",
			"carname",
			"brand",
			"grade",
            "price",
            "recommand",
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
		if (optionExists($store)) {
			$where['store'] = "%{$store}%";
		}
		if (optionExists($carname)) {
			$where['carname like'] = "%{$carname}%";
		}
		if (optionExists($brand)) {
			$where['brand'] = $brand;
		}
		if (optionExists($grade)) {
			$where['grade'] = $grade;
		}
		if (optionExists($recommand)) {
			$where['recommand'] = $recommand;
		}
        if (optionExists($price)) {
            $p = explode('-',$price);
            $where['price >= '] = $p[0];
            $where['price <= '] = $p[1];
        }

		//分页
		if ($rows && $page) {
			$result['total'] = $this->AdminCar_model->where($where)->count();
			$page = max($page, 1);
			$offset = ($page - 1) * $rows;
			$this->AdminCar_model->limit($rows, $offset);
			$pages = pages($result['total'], $rows, formatUrl("car", "car", ''));
            $result['pages'] = $pages;
		}
		//获取列表
		$list = $this->AdminCar_model->where($where)->order_by('id','DESC')->get_list();
		foreach($list as $k=>$v){
			$list[$k]['edittime'] = date('Y-m-d',$v['edittime']);
			$brand = $this->AdminSystem_model->where('id',$v['brand'])->get_item();
			$list[$k]['brand'] = $brand['name'];
			$grade = $this->AdminSystem_model->where('id',$v['grade'])->get_item();
			$list[$k]['grade'] = $grade['name'];
		}
		$result['rows'] = $list;
		return $result;
	}

	public function recommand($id, $status) {
		if (empty($id) || $status == "") {
			return wrrong_msg(MSG_INVALID_ARGUMENTS);
		}
		$success = $this->AdminCar_model->set(array("recommand" => $status))->where("id", $id)->update();
		if (!$success) {
			return wrrong_msg(MSG_SERVICE_BUSY);
		}
		return success_msg(MSG_METHOD_SUCCESS);
	}

	//删除
	public function delete($id){
		$success = $this->AdminCar_model->where("id", $id)->delete();
		if(!$success){
			return wrrong_msg(MSG_SERVICE_BUSY);
		}
		return success_msg(MSG_DELETE_SUCCESS);
	}

    /**
     * ajax获取
     */
    public function read_add_ajax($options = array()){
        $optionsKeys = array(
            "id",
        );
        extract(formatOptions($options, $optionsKeys));
        $data = array();
        if (optionExists($id)) {
            $list = $this->AdminCar_model->where('id',$id)->get_item();
            $data['snum'] = $list['snum']+1;
            $success = $this->AdminCar_model
                ->set($data)->where("id", $id)->update();
            if (!$success) {
                return wrrong_msg(MSG_SERVICE_BUSY);
            }
        }else{
            return wrrong_msg(MSG_INVALID_ARGUMENTS);
        }
        return wrrong_msg(MSG_METHOD_SUCCESS);
    }

}
?>