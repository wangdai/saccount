<?php
namespace Home\Controller;
use Think\Controller;
class AccountController extends Controller {

	public function index() {
		if (IS_GET) {
			$no = I("get.no");
			$capital = I("get.capital");
			$id_no = I("get.id_no");
			if (!$no && !$capital && !$id_no) {
				return;
			} else if ($no) {
				$condition["no"] = $no;
				$model = M("Individual");
				$ret = $model->where($condition)->find();
				if ($ret === false) {
					echo "error: database problem";
				} else if ($ret === null) {
					$model = M("Organization");
					$ret = $model->where($condition)->find();
					if ($ret === false) {
						echo "error: database problem";
					} else if ($ret === null) {
						echo "error: no such account";
					} else {
						$ret["id_no"] = $ret["legal_id"];
						echo json_encode($ret);
					}
				} else {
					echo json_encode($ret);
				}
			} else if ($capital) {
				$condition["capital_account"] = $capital;
				$model = M("Individual");
				$ret = $model->where($condition)->find();
				if ($ret === false) {
					echo "error: database problem";
				} else if ($ret === null) {
					$model = M("Organization");
					$ret = $model->where($condition)->find();
					if ($ret === false) {
						echo "error: database problem";
					} else if ($ret === null) {
						echo "error: no such account";
					} else {
						echo $ret["no"];
					}
				} else {
					echo $ret["no"];
				}
			} else if ($id_no) {
				$condition["id_no"] = $id_no;
				$model = M("Individual");
				$ret = $model->where($condition)->find();
				if ($ret === false) {
					echo "error: database problem";
				} else if ($ret === null) {
					$model = M("Organization");
					$condition2["legal_id"] = $id_no;
					$ret = $model->where($condition2)->find();
					if ($ret === false) {
						echo "error: database problem";
					} else if ($ret === null) {
						echo "error: no such account";
					} else {
						echo $ret["no"];
					}
				} else {
					echo $ret["no"];
				}
			}
		}
		if (IS_POST) {
			$no = I("post.no");
			$acc = I("post.capital");
			if (!$no) {
				echo "error: no required";
				return;
			}
			$condition["no"] = $no;
			if (!$acc) {
				$data["capital_account"] = null;
			} else {
				$data["capital_account"] = $acc;
			}
			if (intval($no) < 60000000) {
				$model = M("Individual");
			} else {
				$model = M("Organization");
			}
			$ret = $model->where($condition)->save($data);
			if ($ret === false) {
				echo "database problem";
			} else if ($ret === 0) {
				echo "no rows affected";
			} else if ($ret === 1) {
				echo 0;
			} else {
				echo "unknown return value";
			}
		}
	}

}