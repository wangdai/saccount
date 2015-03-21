<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {

	public function index() {
		if (session("user") != null) {
			$this->redirect("/welcome");
		}
		if (IS_POST) {
			$condition["user"] = I("post.user");
			$condition["passwd"] = sha1(I("post.passwd"));
			$admin = M("Admin");
			// dump($condition);
			$ret = $admin->where($condition)->find();
			if ($ret === false) {
				$this->error = $admin->getDbError();
			} else if ($ret === null) {
				$this->error = "用户名/密码错误";
			} else {
				// dump($ret);
				session("user", $ret["user"]);
				$this->redirect("/welcome");
			}
		}
		$this->display("/login");
	}

	public function register() {
		if (IS_POST) {
			$admin = M("Admin");
			$ret = $admin->create();
			if ($ret === false) {
				$this->error($admin->getError());
			}
			$admin->passwd = sha1($admin->passwd);
			$ret = $admin->add();
			if ($ret === false) {
				$this->error($admin->getDbError());
			} else {
				$this->success("插入记录成功");
			}
		} else {
			$this->display("/register");
		}
	}

}