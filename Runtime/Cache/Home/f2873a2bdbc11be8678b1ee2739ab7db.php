<?php if (!defined('THINK_PATH')) exit();?><h1><?php echo ($title); ?></h1>
<h2>1:验证法人注册信息</h2>
<form method="post" action="<?php echo U('create');?>">
	<input name="legal_registration_no" placeholder="法人注册号"> <br>
	<input name="business_license_no" placeholder="营业执照号"> <br>
	<input type="submit" value="验证">
</form>