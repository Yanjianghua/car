<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class default_template_model extends MY_Model {

	public function __construct() {
		parent::__construct();
		$this->loadService("Channel", "Article", "Link", "Huddle","Car","System", "Recommand");
		$this->loadModel("Channel", "Article");
	}

	function index() {
		$data = array(
			"brand" => $this->System_service->get_list(array(
				"bh" => 1,
                "status"=>1
			)),
			"grade" => $this->System_service->get_list(array(
                "bh" => 2,
                "status"=>1
			)),
			"price" => $this->System_service->get_list(array(
                "bh" => 3,
                "status"=>1
			)),
			"recommandcar" => $this->Car_service->get_list(array(
				"rows" => 4,
                "page" => 1,
                "status"=>1
			)),
			"car" => $this->Car_service->get_list(array(
                "rows" => 8,
                "page" => 1,
                "status"=>1
			)),
            "articleimg" => $this->Article_service->get_list(array(
                "limit" => 3,
                "info" => "thumb,content",
                "status"=>1
             )),
            "article" => $this->Article_service->get_list(array(
                "limit" => 14,
                "recommand" => 1,
                "status"=>1
            )),
            "articleright" => $this->Article_service->get_list(array(
                "limit" => 3,
                "recommand" => 1,
                "info" => "thumb,content",
                "status"=>1
            )),
            "huddle" => $this->Huddle_service->get_list(array(
                "rows" => 8,
                "page" => 1,
                "status"=>1
            )),
			"index_re" => $this->Recommand_service->get_list(array(
				'wz'=>'index_re'
			)),
			"index_lunzhuan" => $this->Recommand_service->get_list(array('wz'=>'index_lunzhuan')),
			"brand" => $this->System_service->get_list(array('leibie'=>1)),
			"grade" => $this->System_service->get_list(array('leibie'=>2)),
			"price" => $this->System_service->get_list(array('leibie'=>3)),
		);

		return $data;
	}

	function m_index() {
		$data = array(
			"head" => $this->Article_service->get_list(array(
				"limit" => 17,
				"recommand" => Article_model::RECOMMAND_YES
			)),
			"new" => $this->Article_service->get_list(array(
				"limit" => 10,
				"recommand" => Article_model::RECOMMAND_YES
			)),
			"recommandcar" => $this->Car_service->get_list(array(
				"rows" => 2,
				"page" => 1,
				"status"=>1
			)),"car" => $this->Car_service->get_list(array(
				"rows" => 3,
				"page" => 1,
				"status"=>1
			)),
			"huddle" => $this->Huddle_service->get_list(array(
				"rows" => 3,
				"page" => 1,
				"status"=>1
			)),
		);
		return $data;
	}

	function channel($input) {
		$input['limit'] = 10;
		$input['info'] = "thumb,content";
		$list = $this->Article_service->get_list($input);
		$data = array(
			"recommand" => $this->Article_service->get_list(array(
				"limit" => 10
			)),
			"focus" => $this->Article_service->get_list(array(
				"thumb" => TRUE,
				"limit" => 4,
				"info" => "thumb"
			)),
			"hot" => $this->Article_service->get_list(array(
				"limit" => 10
			))
		);
		return array(
			"list" => $list,
			"data" => $data
		);
	}

	function huddle($input) {
		$input['rows'] = 10;
		$list = $this->Huddle_service->get_list($input);
		return array(
			"list" => $list
		);
	}

	function m_huddle($input) {
		$input['rows'] = 10;
		$list = $this->Huddle_service->get_list($input);
		return array(
			"list" => $list
		);
	}

	function car($input) {
		$input['rows'] = 10;
		$list = $this->Car_service->get_list($input);
		return array(
			"list" => $list
		);
	}

	function car_m($input) {
		$input['rows'] = 10;
		$list = $this->Car_service->get_list($input);
		return array(
			"list" => $list
		);
	}

	function m_channel($channel) {
		$data = array(
			"img" => $this->Article_service->get_list(array(
				"limit" => 4,
				"thumb" => TRUE,
				"dir" => $channel['data']['dir'],
				"info" => "thumb"
			)),
			"hot" => $this->Article_service->get_list(array(
				"limit" => 10,
				"thumb" => FALSE,
				"dir" => $channel['data']['dir']
			)),
			"search" => $this->Article_service->get_list(array(
				"limit" => 6,
				"dir" => $channel['data']['dir']
			)),
			"newhotimg" => $this->Article_service->get_list(array(
				"limit" => 2,
				"thumb" => TRUE,
				"dir" => $channel['data']['dir'],
				"info" => "thumb"
			)),
			"readnews" => $this->Article_service->get_list(array(
				"limit" => 8,
				"thumb" => FALSE,
				"dir" => $channel['data']['dir']
			)),
			"newshot" => array(
				"img" => $this->Article_service->get_list(array(
					"limit" => 1,
					"thumb" => TRUE,
					"dir" => $channel['data']['dir'],
					"info" => "thumb"
				)),
				"list" => $this->Article_service->get_list(array(
					"limit" => 4,
					"thumb" => TRUE,
					"dir" => $channel['data']['dir']
				))
			)
		);
		return $data;
	}

	function article($article) {
		$randArticle = $this->Article_service->get_rand(10, "uid={$article['uid']}");
		$relateArticle = $this->Article_service->get_list(array(
			"uid" => $article['uid'],
			"limit" => 9
		));
		$channelArticle = $this->Article_service->get_list(array(
			"limit" => 6
		));
		$channelRecommand = $this->Article_service->get_list(array(
			"limit" => 10
		));
		$editorRecommand = $this->Article_service->get_list(array(
			"uid" => $article['uid'],
			"limit" => 6,
			"info" => "content"
		));
		$allArticle = $this->Article_service->get_list(array("limit" => 10));
		return array(
			"randArticle" => $randArticle,
			"relateArticle" => $relateArticle,
			"channelArticle" => $channelArticle,
			"channelRecommand" => $channelRecommand,
			"editorRecommand" => $editorRecommand,
			"allArticle" => $allArticle,
			"recommandcar" => $this->Car_service->get_list(array(
				"rows" => 3,
				"page" => 1,
				"recommand"=>1
			)),
		);
	}

    function cars($cars) {
		$data = array(
			"list" => $cars,
		);
        return $data;
    }

	function m_cars($cars) {
		$data = array(
			"list" => $cars,
		);
		return $data;
	}

	function m_article($article, $channel) {
		$relateArticle = $this->Article_service->get_list(array(
			"uid" => $article['uid'],
			"limit" => 5
		));
		$newArticle = $this->Article_service->get_list(array(
			"limit" => 10,
			"dir" => $channel['dir']
		));
		return array(
			"relateArticle" => $relateArticle,
			"newArticle" => $newArticle
		);
	}

}
