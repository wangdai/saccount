<?php
namespace Home\Controller;
use Think\Controller;
class IndividualController extends Controller {

	public function validate() {
		if (session("user") === null) {
			$this->redirect("/login");
		}
		$this->user = session("user");
		$this->title = "创建个人账户";
		$this->display("/head");
		$this->display("/validate_individual");
		$this->display("/foot");
	}

	public function create() {
		if (session("user") === null) {
			$this->redirect("/login");
		}
		if (!IS_POST) {
			$this->redirect("validate");
		}
		$individual = M("Individual");
		$name = I("post.name");
		$id_no = I("post.id_no");
		$condition["name"] = $name;
		$condition["id_no"] = $id_no;
		$ret = $individual->where($condition)->find();
		if ($ret === null) {
			$no = $individual->order("no desc")->limit(1)->select();
			if ($no === null) {
				$no = "10000000";
			} else {
				$no = $no[0]["no"] + 1;
			}
			$this->no = $no;
			$this->name = $name;
			$this->id_no = $id_no;
			$this->user = session("user");
			$this->title = "创建个人账户";
			$this->display("/head");
			$this->display("/create_individual");
			$this->display("/foot");
		} else {
			$this->error("该身份证号已注册过个人证券账户");
		}
	}

	public function insert() {
		if (session("user") === null) {
			$this->redirect("/login");
		}
		$individual = M("Individual");
		$ret = $individual->create();
		if (I("post.agent_id_no") == "") {
			$individual->agent_id_no = null;
		}
		// dump($individual);
		if ($ret === false) {
			$this->error($individual->getError());
		}
		$ret = $individual->add();
		if ($ret === false) {
			$this->error("创建个人证券账户失败\n".$individual->getDbError(), U("validate"));
		}
		$this->success("创建个人证券账户成功");
	}

	public function id() {
		if (session("user") === null) {
			$this->redirect("/login");
		}
		$individual = M("Individual");
		$no = I("path.2");
		$op = I("post.op");
		if (IS_GET) {
			$condition["no"] = $no;
			$this->data = $individual->where($condition)->find();
			$this->user = session("user");
			$this->type = 0;
			$this->title = "个人账户";
			$this->display("/head");
			$this->display("/detail");
			$this->display("/foot");
		} 
		if (IS_POST && $op == -1) {
			$ret = $individual->delete($no);
			if ($ret === false) {
				$this->error("销户失败\n".$individual->getDbError());
			} else {
				$this->success("销户成功", U("/search"));
			}
		}
		if (IS_POST && ($op == 0 || $op == 1)) {
			$data["status"] = $op;
			$condition["no"] = $no;
			$ret = $individual->where($condition)->save($data);
			if ($ret === false) {
				$this->error("挂失/解挂失败\n".$individual->getDbError());
			} else {
				$this->success("挂失/解挂成功");
			}
		}
		if (IS_POST && $op == 2) {
			$data = $individual->find($no);
			$individual->delete($no);
			$data["no"] = null;
			$data["status"] = 0;
			$data["create_time"] = date('Y-m-d H:i:s',time());
			$ret = $individual->add($data);
			if ($ret === false) {
				$this->error("重新办理失败\n".$individual->getDbError());
			} else {
				$condition["id_no"] = $data["id_no"];
				$info = $individual->where($condition)->select();
				if ($info) {
					$this->success("重新办理成功", U("/individual/id/".$info[0]["no"]));
				} else {
					$this->success("重新办理成功", U("/search"));
				}
			}
		}
	}

}