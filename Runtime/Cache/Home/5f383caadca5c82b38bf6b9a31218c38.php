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
		<div class="page-header">
	<!-- <div class="row"> -->
		<div class="span4"><h1>股票交易系统</h1></div>	</div>
<div class="span8"><p class="pull-right">
	<!-- <input type="text" class="form-control" placeholder=<?php echo ($user); ?> /> -->
	<button class="btn btn-inverse"  disabled="disabled" color="black"><?php echo ($user); ?></button>
	<!-- <?php echo ($user); ?>  -->
	<button class="btn btn-info" onclick="window.location.href='<?php echo U('/logout');?>'" type="button">注销</button> </p></div>
	<!-- </div> -->

	<div class="tabbable tabs-left">
	<ul class="nav nav-tabs">
		<li><a href="<?php echo U('/welcome');?>">主页</a></li>
		<li><a href="<?php echo U('/individual/validate');?>">创建个人账户</a></li>
		<li class="active"><a href="<?php echo U('/organization/validate');?>">创建企业账户</a></li>
		<li><a href="<?php echo U('/search');?>">搜索账户</a></li>
	</ul>
	<div class="tab-content">
		<div class="tab-pane active" id="tabcreatecorp">
			<form class="form-horizontal" action="<?php echo U('create');?>" method="post">
	  		<fieldset>
	  			<legend><font color="DarkSalmon">法人基本信息</font></legend>
	  			<div class="form-group" id="registnum" >
	  				<label class="control-label"for="name">法人注册登记号</label>
	  				<div class="controls">
	  					<input class="form-control input-lg" name="legal_registration_no" type="text" placeholder="法人注册登记号">
	  				</div>
	  			</div>
	  			<div class="form-group" id="bussinesslicence">
	  				<label class="control-label"for="bussinesslicence">营业执照号码</label>
	  				<div class="controls">
	  					<input class="form-control input-lg" name="business_license_no" type="text" placeholder="营业执照号码">
	  				</div>
	  			</div>
	  		</fieldset>
				<div class="form-actions"style="margin-top: 20px;">
					<button type="submit"class="btn btn-primary">创建</button>
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
            var aa= /^[0-9]+$/;
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
		var validateid = function(a) {
		console.log(a);
		var aa= /^[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]([0-9]|x)$/;
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
            var aa= /^([0-9]+)(([0-9]+)|(-[0-9]+))*$/;
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
        //  var aa= /^[0-9]+$/;
            if($.trim($(a +" div input").val()) == ""){
                $(a).attr({"class":"form-group has-error"});
                $(a + " div span").remove();
                $(a + " div").append($("<span class=\"help-inline\"><font color=\"red\">不能为空</font></span>"));
                return true;
            }else{
                $(a).attr({"class":"form-group has-success"});
                $(a + " div span").remove();
                return false;
            }
        }
			
	$("#registnum").focusout(function(){denyemptyinput("#registnum")});
	$("#bussinesslicence").focusout(function(){denyemptyinput("#bussinesslicence")});

	$("form").submit(function(e){
		if(denyemptyinput("#registnum"))
			e.preventDefault();
		if(denyemptyinput("#bussinesslicence"))
			e.preventDefault();	
	}		
	);
	
  </script>
</body>
</html>