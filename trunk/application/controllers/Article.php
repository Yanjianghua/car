<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Article extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->loadService("View");
		$this->load->library("Curl");

	}

		public function index() {
		$id = $this->input->get("id");

		if (empty($id)) {
			HTTP404();
		}
		$article = $this->Article_service->get_list(array(
			"id" => $id,
			"limit" => 1
		));

		if (empty($article['list'])) {
			HTTP404();
		}
		$article = $this->Article_service->info($article['list'], "content,keywords,description,editor");
		$article = $article[0];

		$prevArticle = $this->Article_service->get_prev($article);
		$nextArticle = $this->Article_service->get_next($article);

		$data = $this->View_service->getData("article", $article);
		foreach ($data as $k => $v) {
			$this->assign($k, $v);
		}

		$ad = $this->Article_service->get_ad($article['uid'], 1);
		if (isset($ad['typeid']) && $ad['typeid'] == 2) {
			$this->assign("addata", $ad);
		}
		//阅读量开关
			//阅读量
		$options = array("pid"=>$article['id'],"uid"=>$article['uid']);
		$readnum = $this->Article_service->get_num($options);
		$this->assign("readnum", $readnum);

		//$readnumclass = $this->Article_service->get_num($options, TRUE);
		//$readnumclass['serverurl'] = $this->config->config['url']['oldomain']."/Article/read_addoredit_ajax/";
		//$this->assign("readnumclass", $readnumclass);
		$index_re = $this->Recommand_service->get_list(array('wz'=>'index_re'));
		$index_lunzhuan = $this->Recommand_service->get_list(array('wz'=>'index_lunzhuan'));
		$index_er_sou = $this->Recommand_service->get_list(array('wz'=>'index_er_sou'));

		$this->assign("index_er_sou", $index_er_sou);
		$this->assign("index_re", $index_re);
		$this->assign("index_lunzhuan", $index_lunzhuan);
		$this->assign("ad", $ad);
		$this->assign("article", $article);
		$this->assign("prevArticle", $prevArticle);
		$this->assign("nextArticle", $nextArticle);

		$this->view(config_item("style") . '/article/index');
	}

	public function read_add_ajax(){
		$id = (int)$this->input->post_get('id');
		if(!empty($id)){
			return $this->Article_service->read_addoredit_ajax(array('pid'=>$id));
		}
	}

}
