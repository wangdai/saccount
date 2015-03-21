<?php
namespace Home\Controller;
use Think\Controller;
class OrganizationController extends Controller {

	public function validate() {
		if (session("user") === null) {
			$this->redirect("/login");
		}
		$this->user = session("user");
		$this->title = "创建法人账户";
		$this->display("/head");
		$this->display("/validate_organization");
		$this->display("/foot");
	}

	public function create() {
		if (session("user") === null) {
			$this->redirect("/login");
		}
		if (!IS_POST) {
			$this->redirect("validate");
		}
		$organization = M("Organization");
		$lrn = I("post.legal_registration_no");
		$bln = I("post.business_license_no");
		$condition["legal_registration_no"] = $lrn;
		// $condition["business_license_no"] = $bln;
		$ret = $organization->where($condition)->find();
		if ($ret === null) {
			$no = $organization->order("no desc")->limit(1)->select();
			if ($no === null) {
				$no = "60000000";
			} else {
				$no = $no[0]["no"]+1;
			}
			$this->no = $no;
			$this->legal_registration_no = $lrn;
			$this->business_license_no = $bln;
			$this->user = session("user");
			$this->title = "创建法人账户";
			$this->display("/head");
			$this->display("/create_organization");
			$this->display("/foot");
		} else {
			$this->error("该法人注册号已注册过法人证券账户");
		}
	}

	public function insert() {
		if (session("user") === null) {
			$this->redirect("/login");
		}
		foreach ($_POST as $key => $value) {
			if ($value == "") {
				$_POST[$key] = null;
			}
		}
		$organization = M("Organization");
		$ret = $organization->create();
		if ($ret === false) {
			$this->error($organization->getError());
		}
		$ret = $organization->add();
		if ($ret === false) {
			$this->error("创建法人证券账户失败\n".$organization->getDbError(), U("validate"));
		}
		$this->success("创建法人证券账户成功");
	}

	public function id() {		
		if (session("user") === null) {
			$this->redirect("/login");
		}
		$organization = M("Organization");
		$no = I("path.2");
		$op = I("post.op");
		if (IS_GET) {
			$condition["no"] = $no;
			$this->data = $organization->where($condition)->find();
			// dump($this->data);
			$this->user = session("user");
			$this->type = 1;
			$this->title = "法人账户";
			$this->display("/head");
			$this->display("/detail");
			$this->display("/foot");
		} 
		if (IS_POST && $op == -1) {
			$ret = $organization->delete($no);
			if ($ret === false) {
				$this->error("销户失败\n".$organization->getDbError());
			} else {
				$this->success("销户成功", U("/search"));
			}
		}
		if (IS_POST && ($op == 0 || $op == 1)) {
			$data["status"] = $op;
			$condition["no"] = $no;
			$ret = $organization->where($condition)->save($data);
			if ($ret === false) {
				$this->error("挂失/解挂失败\n".$organization->getDbError());
			} else {
				$this->success("挂失/解挂成功");
			}
		}
		if (IS_POST && $op == 2) {
			$data = $organization->find($no);
			$organization->delete($no);
			$data["no"] = null;
			$data["status"] = 0;
			$data["create_time"] = date('Y-m-d H:i:s',time());
			$ret = $organization->add($data);
			if ($ret === false) {
				$this->error("重新办理失败\n".$organization->getDbError());
			} else {
				$condition["legal_registration_no"] = $data["legal_registration_no"];
				$info = $organization->where($condition)->select();
				if ($info) {
					$this->success("重新办理成功", U("/organization/id/".$info[0]["no"]));
				} else {
					$this->success("重新办理成功", U("/search"));
				}
			}
		}
	}

}