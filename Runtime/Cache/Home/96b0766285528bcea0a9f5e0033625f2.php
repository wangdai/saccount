<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Stock Trade System--Administor</title>

  <!-- Bootstrap -->
<!-- 	<link class="bootstrap library" rel="stylesheet" type="text/css" href="http://sandbox.runjs.cn/js/sandbox/bootstrap-2.2.0/css/bootstrap.min.css">
	<script class="bootstrap library" src="http://sandbox.runjs.cn/js/sandbox/jquery/jquery-1.7.2.min.js" type="text/javascript"></script>
	<script class="bootstrap library" src="http://sandbox.runjs.cn/js/sandbox/bootstrap-2.2.0/js/bootstrap.min.js" type="text/javascript"></script> -->

	<script class="bootstrap library" src="http://sandbox.runjs.cn/js/sandbox/jquery/jquery-1.7.2.min.js" type="text/javascript"></script>
	<script class="bootstrap library" src="http://sandbox.runjs.cn/js/sandbox/bootstrap-2.2.0/js/bootstrap.min.js" type="text/javascript"></script>

      <!-- Flat UI -->
    <meta name="description" content="Flat UI Kit Free is a Twitter Bootstrap Framework design and Theme, this responsive framework includes a PSD and HTML version."/>

    <meta name="viewport" content="width=1000, initial-scale=1.0, maximum-scale=1.0">

    <!-- Loading Bootstrap -->
    <link href="../Home/View/FlatUI/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="../Home/View/FlatUI/css/flat-ui.css" rel="stylesheet">
    <link href="../Home/View/FlatUI/css/demo.css" rel="stylesheet">

	<!-- Custom styles for this template -->
  <link href="../Home/View/customer.css" rel="stylesheet">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
  <style>
  .form-control {
  display: inline;

  background-color: #fff;
  background-image: none;
    }
    </style>
</head>
<body>

<div class="container">
	<h1 class="page-header">股票交易系统</h1>
	<div class="span8"><p class="pull-right">
	<!-- <input type="text" class="form-control" placeholder=<?php echo ($user); ?> /> -->
	<button class="btn btn-inverse"  disabled="disabled" color="black"><?php echo ($user); ?></button>
	<!-- <?php echo ($user); ?>  -->
	<button class="btn btn-info" onclick="window.location.href='<?php echo U('/logout');?>'" type="button">注销</button> </p></div>
	<div class="tabbable tabs-left">
	<ul class="nav nav-tabs">
		<li><a href="<?php echo U('/welcome');?>">主页</a></li>
		<li><a href="<?php echo U('/individual/validate');?>">创建个人账户</a></li>
		<li class="active"><a href="<?php echo U('/organization/validate');?>">创建企业账户</a></li>
		<li><a href="<?php echo U('/search');?>">搜索账户</a></li>
	</ul>
	<div class="tab-content">
		<div class="tab-pane active" id="tabcreatecorp">
			<form class="form-horizontal" action="<?php echo U('insert');?>" method="post">
	  		<fieldset>
	  			<legend><font color="DarkSalmon">法人基本信息</font></legend>
				<div class="form-group">
	  				<label class="control-label">法人证券账户号</label>
	  				<div class="controls">
	  					<input class="form-control" type="text" name="no" value=<?php echo ($no); ?> readonly="true">
	  				</div>
	  			</div>
	  			<div class="form-group" id="registnum" >
	  				<label class="control-label"for="name">法人注册登记号</label>
	  				<div class="controls">
	  					<input  class="form-control" name="legal_registration_no" value=<?php echo ($legal_registration_no); ?> type="text" readonly="true">
	  				</div>
	  			</div>
	  			<div class="form-group" id="bussinesslicence">
	  				<label class="control-label"for="bussinesslicence">营业执照号码</label>
	  				<div class="controls">
	  					<input class="form-control" name="business_license_no" value=<?php echo ($business_license_no); ?> type="text" readonly="true">
	  				</div>
	  			</div>
	  		</fieldset>
	  		<fieldset>
	  			<legend><font color="DarkSalmon">法人代表详细信息</font></legend>
	  			<div class="form-group" id="repid">
	  				<label class="control-label"for="repid">身份证</label>
	  				<div class="controls">
	  					<input class="form-control"  name="legal_id" type="text" placeholder="身份证">
	  				</div>
	  			</div>
	  			<div class="form-group" id="repname">
	  				<label class="control-label"for="repname">姓名</label>
	  				<div class="controls">
	  					<input class="form-control" name="legal_name" type="text" placeholder="姓名">
	  				</div>
	  			</div>
	  			<div class="form-group" id="repphone">
	  				<label class="control-label"for="repphone">电话</label>
	  				<div class="controls">
	  					<input class="form-control" name="legal_mobile" type="text" placeholder="电话">
	  				</div>
	  			</div>
	  			<div class="form-group" id="repaddress"> 
	  				<label class="control-label"for="repaddress">住址</label>
	  				<div class="controls">
	  					<input class="form-control" name="legal_address" type="text" placeholder="住址">
	  				</div>
	  			</div>
				</fieldset>
				<fieldset>
	  			<legend ><font color="DarkSalmon">交易授权人详细信息</font></legend>
	  			<div class="form-group" id="authorpid">
	  				<label class="control-label"for="authorid">身份证</label>
	  				<div class="controls">
	  					<input class="form-control" name="authorizee_id" type="text" placeholder="身份证">
	  				</div>
	  			</div>
	  			<div class="form-group" id="authorname">
	  				<label class="control-label"for="authorname">姓名</label>
	  				<div class="controls">
	  					<input class="form-control" name="authorizee_name" type="text" placeholder="姓名">
	  				</div>
	  			</div>
	  			<div class="form-group" id="authorphone">
	  				<label class="control-label"for="authorphone">电话</label>
	  				<div class="controls">
	  					<input class="form-control" name="authorizee_mobile" type="text" placeholder="电话">
	  				</div>
	  			</div>
	  			<div class="form-group" id="authoraddress">
	  				<label class="control-label"for="authoraddress">住址</label>
	  				<div class="controls">
	  					<input class="form-control" name="authorizee_address" type="text" placeholder="住址">
	  				</div>
	  			</div>
				</fieldset>					
				<div class="form-actions" style="margin-top: 20px;">
					<button type="submit"class="btn btn-primary" >新建</button>
					<button class="btn"style="margin-left: 20px;" onclick="window.location.href='<?php echo U('/welcome');?>'">取消</button>
				</div>

	  	</form>
		</div>
	</div>
	</div>

</div>
	<script type="text/javascript">
	var validatenum = function(a) {
			console.log(a);
			var aa= /[0-9]+/;
			if($.trim($(a +" div input").val()) != "" && !($.trim($(a +" div input").val().match(aa)))){
				$(a).attr({"class":"form-group has-error"});
				$(a + " div span").remove();
				$(a + " div").append($("<span class=\"help-inline\"><font color=\"red\">无效</font></span>"));
				return true;
			}else{
				$(a).attr({"class":"form-group has-success"});
				$(a + " div span").remove();
				return false;
			}
		}
	var validatephone = function(a) {
			console.log(a);
			var aa= /([0-9]|-)+/;
			if($.trim($(a +" div input").val()) != "" && !($.trim($(a +" div input").val().match(aa)))){
				$(a).attr({"class":"form-group has-error"});
				$(a + " div span").remove();
				$(a + " div").append($("<span class=\"help-inline\"><font color=\"red\">无效</font></span>"));
				return true;
			}else{
				$(a).attr({"class":"form-group has-success"});
				$(a + " div span").remove();
				return false;
			}
		}
	var denyemptyinput = function(a) {
			console.log(a);
		//	var aa= /[0-9]+/;
			if($.trim($(a +" div input").val()) == ""){
				$(a).attr({"class":"form-group has-error"});
				$(a + " div span").remove();
				$(a + " div").append($("<span class=\"help-inline\"><font color=\"red\">不能为空</font> </span>"));
				return true;
			}else{
				$(a).attr({"class":"form-group has-success"});
				$(a + " div span").remove();
				return false;
			}
		}
			
	$("#registnum").focusout(function(){denyemptyinput("#registnum")});
	$("#bussinesslicence").focusout(function(){denyemptyinput("#bussinesslicence")});
	$("#repid").focusout(function(){if(!denyemptyinput("#repid"))validatenum("#repid");});
	$("#repname").focusout(function(){denyemptyinput("#repname")});
	$("#repaddress").focusout(function(){denyemptyinput("#repaddress")});
	$("#repphone").focusout(function(){if(!denyemptyinput("#repphone"))validatephone("#repphone");});
	$("#authorpid").focusout(function(){if(!denyemptyinput("#authorpid"))validatenum("#authorpid");});
	$("#authorname").focusout(function(){denyemptyinput("#authorname")});
	$("#authorphone").focusout(function(){if(!denyemptyinput("#authorphone"))validatephone("#authorphone");});
	$("#authoraddress").focusout(function(){denyemptyinput("#authoraddress")});
	$("form").submit(function(e){
		if(denyemptyinput("#repid"))
			e.preventDefault();
		else if(validatenum("#repid"))
			e.preventDefault();
		if(denyemptyinput("#repname"))
			e.preventDefault();
		if(denyemptyinput("#repphone"))
			e.preventDefault();
		else if(validatephone("#repphone"))
			e.preventDefault();
		if(denyemptyinput("#repaddress"))
			e.preventDefault();
		if(denyemptyinput("#authorpid"))
			e.preventDefault();
		else if(validatenum("#authorpid"))
			e.preventDefault();
		if(denyemptyinput("#authorname"))
			e.preventDefault();
		if(denyemptyinput("#authorphone"))
			e.preventDefault();
		else if(validatephone("#authorphone"))
			e.preventDefault();
		if(denyemptyinput("#authoraddress"))
			e.preventDefault();
		if(denyemptyinput("#registnum"))
			e.preventDefault();
		if(denyemptyinput("#bussinesslicence"))
			e.preventDefault();	
	}		
	);
	
  </script>
</body>
</html>