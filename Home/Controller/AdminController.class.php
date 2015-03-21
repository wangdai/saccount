<?php
namespace Home\Controller;
use Think\Controller\RestController;
class AdminController extends RestController {

	protected $allowMethod = array('get','post','put');

	public function index() {
		switch ($this->_method) {
		case 'get':
			$this->do_get();
			break;
		case 'put':
		break;
		case 'post':
			$this->do_post();
		break;
		}
	}

	private function do_post() {
		$admin = M("Admin");
		if ($admin->create() === false) {
			die($admin->getError());
		} 
		$admin->passwd = sha1($admin->passwd);
		if ($admin->add() === false) {
			$this->error($admin->getDbError());
		}
		$this->success();
	}

	public function do_get() {
		$this->display("/index");
	}

}