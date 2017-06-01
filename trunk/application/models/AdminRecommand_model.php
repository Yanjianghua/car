<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class AdminRecommand_model extends MY_Model {
	const STATUS_ACTIVE = 1;
	const STATUS_FROZEN = 0;
	const OAUSER_YES = 1;
	const OAUSER_NO = 0;
	const THARDPARTY_YES = 1;
	const THARDPARTY_NO = 0;
	const BUILT_ID = 1;

	public static $_table = 'recommand';

	public function __construct() {
		parent::__construct();
	}

}
