<?php if (!defined('THINK_PATH')) exit();?><h1>条件查询</h1>
<p>留空表示忽略该条件</p>
<select id="type">
	<option value="0">个人账户</option>
	<option value="1">法人账户</option>
</select>
<form method="post" action=<?php echo ($act); ?> id="form-0">
	<input name="type" value="0" hidden>
	<input name="no" placeholder="个人账户号"> <br>
	<input name="name" placeholder="姓名"> <br>
	<input name="id_no" placeholder="身份证号"> <br>
	<select name="gender">
		<option value="">性别...</option>
		<option value="男">男</option>
		<option value="女">女</option>
	</select> <br>
	<input name="mobile" placeholder="手机号码"> <br>
	<select name="education">
		<option value="">教育背景...</option>
		<option value="初中及以下">初中及以下</option>
		<option value="高中">高中</option>
		<option value="本科">本科</option>
		<option value="硕士">硕士</option>
		<option value="博士">博士</option>
	</select> <br>
	<input type="submit" value="查询">
</form>
<form method="post" action=<?php echo ($act); ?> id="form-1" hidden>
	<input name="type" value="1" hidden>
	<input name="no" placeholder="法人账户号"> <br>
	<input name="legal_registration_no" placeholder="法人注册号"> <br>
	<input name="business_license_no" placeholder="营业执照号"> <br>
	<input name="legal_id" placeholder="法人身份证号"> <br>
	<input name="legal_name" placeholder="法人姓名"> <br>
	<input name="legal_mobile" placeholder="法人手机号"> <br>
	<input name="authorizee_id" placeholder="授权人身份证号"> <br>
	<input name="authorizee_name" placeholder="授权人姓名"> <br>
	<input name="authorizee_mobile" placeholder="授权人手机号"> <br>
	<input type="submit" value="查询">
</form>

<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script>
$("#type").change(function () {
	if ($("#type").val() == 0) {
		$("#form-0").show();
		$("#form-1").hide();
	} else if ($("#type").val() == 1) {
		$("#form-0").hide();
		$("#form-1").show();
	}
});
</script>