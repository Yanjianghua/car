<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_Login extends MY_Controller {
	const MSG_LOGIN_SUCCESS = "登录成功";
	const MSG_LOGOUT_SUCCESS = "退出成功";
    const MSG_CODE_WRRONG = "验证码错误";

	public function __construct() {
		parent::__construct();
		$this->loadService("Login");
        $this->load->library("CaptchaCode", array(
            "width" => 84,
            "height" => 26
        ));
	}

	public function index() {
        $input = $this->input->post(NULL, TRUE);
		if (!empty($input)) {
			$input['cookiename'] = Login_service::ADMIN_USER;
            if (!$this->CaptchaCode->verify($this->input->post("code"))) {
                alert(self::MSG_CODE_WRRONG, "", "", ".top");
            }
			parse_alert($this->Login_service->logindo($input), "JSON");
			alert(self::MSG_LOGIN_SUCCESS, "/Admin_Layout/index/", "", ".top");
		}
		$this->view('admin/login/index');
	}

	public function logout() {
		delete_cookie(Login_service::ADMIN_USER);
		alert(self::MSG_LOGOUT_SUCCESS, "/Admin_Layout/index/");
	}

    public function code() {
        $this->CaptchaCode->show();
    }

}
