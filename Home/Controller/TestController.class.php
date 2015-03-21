<?php
namespace Home\Controller;
use Think\Controller;
class TestController extends Controller {
	public function index() {
		echo "test";
	}

	public function hehe() {
		echo I("path.0");
	}
}
?>
