<?php
namespace Home\Controller;
use Think\Controller;
class SearchController extends Controller {

	public function index() {
		if (session("user") === null) {
			$this->redirect("/login");
		}
		$this->title = "查询";
		$this->user = session("user");
		$this->display("/head");
		$this->display("/search");
		$this->display("/foot");
	}

	public function result($page = 1) {
		if (session("user") === null) {
			$this->redirect("/login");
		}
		$this->type = I("param.type");
		if ($this->type == 0) {
			$form = M("Individual");
			if (I("param.no") != "")
				$condition["no"] = I("param.no");
			if (I("param.name") != "")
				$condition["name"] = I("param.name");
			if (I("param.id_no") != "")
				$condition["id_no"] = I("param.id_no");
			if (I("param.gender") != "")
				$condition["gender"] = I("param.gender");
			if (I("param.mobile") != "")
				$condition["mobile"] = I("param.mobile");
			if (I("param.education") != "")
				$condition["education"] = I("param.education");
		} else {
			$form = M("Organization");
			if (I("param.no") != "")
				$condition["no"] = I("param.no");
			if (I("param.legal_registration_no") != "")
				$condition["legal_registration_no"] = I("param.legal_registration_no");
			if (I("param.business_license_no") != "")
				$condition["business_license_no"] = I("param.business_license_no");
			if (I("param.legal_id") != "")
				$condition["legal_id"] = I("param.legal_id");
			if (I("param.legal_name") != "")
				$condition["legal_name"] = I("param.legal_name");
			if (I("param.legal_mobile") != "")
				$condition["legal_mobile"] = I("param.legal_mobile");
			if (I("param.authorizee_id") != "")
				$condition["authorizee_id"] = I("param.authorizee_id");
			if (I("param.authorizee_name") != "")
				$condition["authorizee_name"] = I("param.authorizee_name");
			if (I("param.authorizee_mobile") != "")
				$condition["authorizee_mobile"] = I("param.authorizee_mobile");
		}
		$this->list = $form->where($condition)->limit(10*($page-1), 10)->select();
		// dump($this->list);
		$this->title = "查询结果";
		$this->user = session("user");
		$this->display("/head");
		$this->display("/searchresult");
		$this->display("/foot");
	}

}