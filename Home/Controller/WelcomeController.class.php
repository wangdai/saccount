<?php
namespace Home\Controller;
use Think\Controller;
class WelcomeController extends Controller {

	public function index() {
		if (session("user") === null) {
			$this->redirect("/login");
		}
		$this->title = "欢迎";
		$this->user = session("user");
		$this->display("/head");
		$this->display("/welcome");
		$this->display("/foot");
	}

}