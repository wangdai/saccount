<?php
namespace Home\Controller;
use Think\Controller;
class LogoutController extends Controller {

	public function index() {
		if (session("?user")) {
			session("user", null);
		}
		$this->redirect("/login");
	}

}