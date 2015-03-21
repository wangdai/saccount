<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {

	public function index($p="validate_individual") {
		if (session("user") === null) {
			$this->redirect("/login");
		} else {
			$this->redirect("/welcome");
		}
		// if (session("?user")) {
		// 	$this->user = session("user");
		// 	switch ($p) {
		// 		case "validate_individual":
		// 			$this->validate_individual();
		// 			break;
		// 		case "create_individual":
		// 			$this->create_individual();
		// 			break;
		// 		case "validate_organization":
		// 			$this->validate_organization();
		// 			break;
		// 		case "create_organization":
		// 			$this->create_organization();
		// 			break;
		// 		case "condition":
		// 			$this->condition();
		// 			break;
		// 		case "query":
		// 			$this->query();
		// 			break;
		// 		case "detail":
		// 			$this->detail(I("get.code"));
		// 			break;
		// 		default:
		// 			$this->validate_individual();
		// 			break;
		// 	}
		// }
		// else {
		// 	$this->redirect("admin_login");
		// }
	}

	public function validate_individual() {
		$this->title = "创建个人账户";
		$this->act = "?p=create_individual";
		$this->display("main_header");
		$this->display("validate_individual");
		$this->display("main_footer");
	}

	private function create_individual() {
		$this->title = "创建个人账户";
		$this->act = "?a=insert&t=Individual";
		$individual = M("Individual");
		$condition["name"] = I("post.name");
		$condition["id_no"] = I("post.id_no");
		$data = $individual->where($condition)->find();
		if (!$data) {
			$no = $individual->order("no desc")->limit(1)->select();
			// dump($no);
			if (!$no) {
				$no = "I000000001";
			} else {
				$no = $no[0]["no"];
				$no = sprintf("I%09d", substr($no, 1)+1);
			}
			$this->no = $no;
			$this->name = $condition["name"];
			$this->id_no = $condition["id_no"];
			$this->display("main_header");
			$this->display("create_individual");
			$this->display("main_footer");
		}
		else {
			$this->error("抱歉，验证失败");
		}
	}

	private function validate_organization() {
		$this->title = "创建法人账户";
		$this->act = "?p=create_organization";
		$this->display("main_header");
		$this->display("validate_organization");
		$this->display("main_footer");
	}

	private function create_organization() {
		$this->title = "创建法人账户";
		$this->act = "?a=insert&t=Organization";
		$individual = M("Organization");
		$condition["legal_registration_no"] = I("post.legal_registration_no");
		$condition["business_license_no"] = I("post.business_license_no");
		$data = $individual->where($condition)->find();
		if (!$data) {
			$no = $individual->order("no desc")->limit(1)->select();
			if (!$no) {
				$no = "B000000001";
			} else {
				$no = $no[0]["no"];
				$no = sprintf("B%09d", substr($no, 1)+1);
			}
			$this->no = $no;
			$this->legal_registration_no = $condition["legal_registration_no"];
			$this->business_license_no = $condition["business_license_no"];
			$this->display("main_header");
			$this->display("create_organization");
			$this->display("main_footer");
		}
		else {
			$this->error("抱歉，验证失败");
		}
	}

	private function condition() {
		$this->title = "条件查询";
		$this->act = "?p=query";
		$this->display("main_header");
		$this->display("condition");
		$this->display("main_footer");
	}

	private function query($base=0) {
		$this->title = "条件查询";
		$type = I("post.type");
		$this->type = $type;
		if ($type == 0) {
			$individual = M("Individual");
			if (I("post.no") != "")
				$condition["no"] = I("post.no");
			if (I("post.name") != "")
				$condition["name"] = I("post.name");
			if (I("post.id_no") != "")
				$condition["id_no"] = I("post.id_no");
			if (I("post.gender") != "")
				$condition["gender"] = I("post.gender");
			if (I("post.mobile") != "")
				$condition["mobile"] = I("post.mobile");
			if (I("post.education") != "")
				$condition["education"] = I("post.education");
			$this->list = $individual->field("no, name, id_no, status")->where($condition)->limit(10*$base,10)->select();
			$this->display("main_header");
			$this->display("query");
			$this->display("main_footer");
		} else if ($type == 1) {
			$organization = M("Organization");
			if (I("post.no") != "")
				$condition["no"] = I("post.no");
			if (I("post.legal_registration_no") != "")
				$condition["legal_registration_no"] = I("post.legal_registration_no");
			if (I("post.business_license_no") != "")
				$condition["business_license_no"] = I("post.business_license_no");
			if (I("post.legal_id") != "")
				$condition["legal_id"] = I("post.legal_id");
			if (I("post.legal_name") != "")
				$condition["legal_name"] = I("post.legal_name");
			if (I("post.legal_mobile") != "")
				$condition["legal_mobile"] = I("post.legal_mobile");
			if (I("post.authorizee_id") != "")
				$condition["authorizee_id"] = I("post.authorizee_id");
			if (I("post.authorizee_name") != "")
				$condition["authorizee_name"] = I("post.authorizee_name");
			if (I("post.authorizee_mobile") != "")
				$condition["authorizee_mobile"] = I("post.authorizee_mobile");
			$this->list = $organization->field("no, legal_registration_no, legal_name, legal_id, status")->where($condition)->limit(10*$base,10)->select();
			$this->display("main_header");
			$this->display("query");
			$this->display("main_footer");
		}
		// dump($this->list);
	}

	public function detail($code) {
		if ($code[0] == "I") {
			$this->type = 0;
			$individual = M("Individual");
			$condition["no"] = $code;
			$this->data = $individual->where($condition)->find();
		} else if ($code[0] == "B") {
			$this->type = 1;
			$organization = M("Organization");
			$condition["no"] = $code;
			$this->data = $organization->where($condition)->find();
		}
		// dump($data);
		$this->del_url = "?a=delete";
		$this->lost_url = "?a=lost";
		$this->nolost_url = "?a=nolost";
		$this->recreate_url = "?a=recreate";
		$this->display("main_header");
		$this->display("detail");
		$this->display("main_footer");
	}

	public function delete() {
		$no = I("post.no");
		$type = I("post.type");
		if ($type == 0) {
			$ff = M("Individual");

		} else if ($type == 1) {
			$ff = M("Organization");
		}
		$result = $ff->delete($no);
		if ($result === false) {
			$this->error("销户不成功");
		} else {
			$this->success("销户成功", "?p=condition");
		}
	}

	public function lost() {
		$no = I("post.no");
		$type = I("post.type");
		if ($type == 0) {
			$ff = M("Individual");

		} else if ($type == 1) {
			$ff = M("Organization");
		}
		$condition["no"] = $no;
		$data["status"] = 1;
		$result = $ff->where($condition)->save($data);
		if ($result === false) {
			$this->error("挂失不成功");
		} else {
			$this->success("挂失成功");
		}
	}

	public function nolost() {
		$no = I("post.no");
		$type = I("post.type");
		if ($type == 0) {
			$ff = M("Individual");

		} else if ($type == 0) {
			$ff = M("Organization");
		}
		$condition["no"] = $no;
		$data["status"] = 0;
		$result = $ff->where($condition)->save($data);
		if ($result === false) {
			$this->error("解挂不成功");
		} else {
			$this->success("解挂成功");
		}
	}

	public function recreate() {
		$no = I("post.no");
		$type = I("post.type");
		if ($type == 0) {
			$ff = M("Individual");

		} else if ($type == 0) {
			$ff = M("Organization");
		}
		$newno = $ff->order("no desc")->limit(1)->select();
		$newno = $newno[0]["no"];
		$newno = sprintf("%s%09d", $newno[0], substr($newno, 1)+1);
		$condition["no"] = $no;
		$data["no"] = $newno;
		$data["status"] = 0;
		$result = $ff->where($condition)->save($data);
		if ($result === false) {
			$this->error("重新办理不成功");
		} else {
			$this->success("重新办理成功", "?p=detail&code=$newnoa");
		}
	}

    public function admin_login() {
    	$this->title = "管理员登录";
    	$this->check_url = "?a=admin_check";
    	$this->success_url = "index.php";
    	$this->display("admin_header");
    	$this->display("admin_login");
    	$this->display("admin_footer");
    }

    public function admin_logout() {
    	session("[destroy]");
    	$this->redirect("admin_login");
    }

    public function admin_check() {
    	$admin = M("Admin");
    	$condition["user"] = I("post.user");
    	$condition["passwd"]= sha1(I("post.passwd"));
    	$data = $admin->where($condition)->find();
    	if ($data) {
    		$result["code"] = 0;
    		session("user", $data["user"]);
    	} else {
    		$result["code"] = 1;
    		$result["message"] = "用户名/密码错误";
    	}
    	$this->ajaxReturn($result);
    }

    public function admin_reg() {
    	$this->title = "管理员注册";
    	$this->act = U("/Index/insert/t/Admin");
    	$this->display("admin_header");
    	$this->display("admin_reg");
    	$this->display("admin_footer");
    }

	public function insert($t) {
		$form = D($t);
		if ($form->create()) {
			if ($t == "Admin") {
				$form->passwd = sha1($form->passwd);
			}
			$result = $form->add();
			if ($result === false) {
				$this->error("插入记录失败");
			} else {
				if ($t == "Admin" || $t == "Individual") {
					$redirect_url = "index.php";
				} else if ($t == "Organization") {
					$redirect_url = "?p=validate_organization";
				}
				$this->success("插入记录成功", $redirect_url);
			}
		} else {
			$this->error($form->getError());
		}
	}

}
