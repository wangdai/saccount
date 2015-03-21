<?php if (!defined('THINK_PATH')) exit();?><h1><?php echo ($title); ?></h1>
<h2>1:验证个人身份</h2>
<form method="post" action="<?php echo U('create');?>">
	<input name="name" placeholder="姓名"> <br>
	<input name="id_no" placeholder="身份证号"> <br>
	<input type="submit" value="验证">
</form>