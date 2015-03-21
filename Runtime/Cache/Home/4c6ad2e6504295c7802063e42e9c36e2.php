<?php if (!defined('THINK_PATH')) exit();?><h1><?php echo ($title); ?></h1>
<h2>2:填写法人信息</h2>
<form method="post" action="<?php echo U('insert');?>">
	<input name="no" value=<?php echo ($no); ?> readonly="true"> <br>
	<input name="legal_registration_no" value=<?php echo ($legal_registration_no); ?> readonly="true"> <br>
	<input name="business_license_no" value=<?php echo ($business_license_no); ?> readonly="true"> <br>
	<input name="legal_id" placeholder="法人身份证号"> <br>
	<input name="legal_name" placeholder="法人姓名"> <br>
	<input name="legal_mobile" placeholder="法人手机号"> <br>
	<input name="legal_address" placeholder="法人联系地址"> <br>
	<input name="authorizee_id" placeholder="授权人身份证号"> <br>
	<input name="authorizee_name" placeholder="授权人姓名"> <br>
	<input name="authorizee_mobile" placeholder="授权人手机号"> <br>
	<input name="authorizee_address" placeholder="授权人联系地址"> <br>
	<input type="submit" value="提交">
</form>