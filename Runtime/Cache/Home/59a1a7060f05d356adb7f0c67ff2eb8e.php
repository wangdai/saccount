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
    <link href="Home/View/FlatUI/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="Home/View/FlatUI/css/flat-ui.css" rel="stylesheet">
    <link href="Home/View/FlatUI/css/demo.css" rel="stylesheet">

	<!-- Custom styles for this template -->
    <link href="Home/View/customer.css" rel="stylesheet">
	
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
    <script type="text/javascript" src="Home/View/FlatUI/js/clock.js"></script>

</head>
<body bgcolor="red">

<div class="container">
		<div class="page-header">
	<!-- <div class="row"> -->
		<div class="span4"><h1>证券账户系统</h1></div>
  </div>
  <!-- </div> -->
<div class="span8"><p class="pull-right">
  <!-- <input type="text" class="form-control" placeholder=<?php echo ($user); ?> /> -->
  <button class="btn btn-inverse"  disabled="disabled" color="black"><?php echo ($user); ?></button>
  <!-- <?php echo ($user); ?>  -->
  <button class="btn btn-info" onclick="window.location.href='<?php echo U('/logout');?>'" type="button">注销</button> </p></div>
	
	
	<div class="tabbable tabs-left">
	<ul class="nav nav-tabs">
		<li class="active"><a href="<?php echo U('/welcome');?>">主页</a></li>
		<li><a href="<?php echo U('/individual/validate');?>">创建个人账户</a></li>
		<li><a href="<?php echo U('/organization/validate');?>">创建企业账户</a></li>
		<li><a href="<?php echo U('/search');?>">搜索账户</a></li>
	</ul>
	<div class="tab-content">
		<div class="tab-pane active" id="tabhome">
            <h3>欢迎访问Stock系统</h3>
            <p>如有需要，请联系我们 0571-88988898</p>
            <p><script>writeclock()</script></p>
		</div>
	</div>
	</div>

</div>
</body>
</html>