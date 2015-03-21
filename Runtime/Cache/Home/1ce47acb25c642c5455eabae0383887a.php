<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Stock Trade System--Administor</title>

  <!-- Bootstrap -->
<!-- 	<link class="bootstrap library" rel="stylesheet" type="text/css" href="http://sandbox.runjs.cn/js/sandbox/bootstrap-2.2.0/css/bootstrap.min.css"> -->

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

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script type="text/javascript" src="Home/View/FlatUI/js/clock.js"></script>
</head>
<body>
	<div class="container">
		<h1 class="page-header">证券账户系统</h1>
      <!-- <section class="loginBox row-fluid"> -->
      <!-- <center> -->
        <section class="span7 left" />


        	<form action="login" class="form-horizontal"  method="post" >
				<h3>登录</h3>


                <!-- <div class="row"> -->
                <table>
                    
        				<tr id="username" class="form-group has-warning">
        					<th><input type="text"  name="user" class="form-control" placeholder="用户名"/>	</th>
        				
                </tr>
                </table>
                 <!-- </div>   -->
    <!--<div class="col-lg-3"> -->
                <!-- <div class="row"> -->
                    <!-- <div class="control-group"> -->
        				<!-- <div id="passwd" class="form-group has-warning"> -->
                <table style="margin-top: 20px;">
                <tr id="passwd" class="form-group has-warning">
                <th>
        					<input type="password"  class="form-control" name="passwd" placeholder="密码" /></th>
                  <!-- <th><span>lalalal</span></th> -->
                 </tr>
                </table>
        				<!-- </div> -->
                    <!-- </div> -->
                <!-- </div> -->
<!-- 				<div id="passwd" class="form-group has-error">
					<span class="help-inline"><?php echo ($error); ?></span>
				 </div> -->
				<div class="control-group" style="margin-top: 15px;">
					<button type="submit"  class="btn btn-primary"  value="login"   >登录</button>
				</div>  
			</form>
        </section>
        <!-- </center> -->
        <!-- </div> -->
<!--         <section class="span5 right">
         
        <h3>欢迎访问Stock系统</h3>
          <section>
            <p>如有需要，请联系我们 0571-88988898</p>
            <p><script>writeclock()</script></p>
           
          </section>
        </section> -->
      <!-- </section> -->

      <!-- /loginBox -->
	</div>
  <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script src="/bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript">
	var vusername = function() {
			console.log("a");
		//	var aa= /[0-9]+/;
			if($.trim($("#username input").val()) == ""){
				$("#username").attr({"class":"form-group has-error"});
				$("#username th").remove();
        $("#username").append($("<th><input type=\"text\"  name=\"user\" class=\"form-control\" placeholder=\"用户名\"/></th>"));
				$("#username").append($("<th><span class=\"help-inline\"><font color=\"red\">请输入用户名</font></span></th>"));
				return false;
			}
            else{
				$("#username").attr({"class":"form-group has-success"});
				$("#username span").remove();
				return true;
			}
		}
	var vpassword = function() {
			console.log("1");

			if($.trim($("#passwd input").val()) == ""){
				$("#passwd").attr({"class":"form-group has-error"});
				$("#passwd th").remove();
        // $("#passwd").append($("<tr>");
        $("#passwd").append($("<th><input type=\"password\" id=\"passwd\" class=\"form-control\" name=\"passwd\" placeholder=\"密码\" /></th>"));
				$("#passwd").append($("<th><span class=\"help-inline\"><font color=\"red\">请输入密码</font></span></th>"));
        // $("#passwd").append($("</tr>");
				return false;
			}else{
				$("#passwd").attr({"class":"form-group has-success"});
				$("#passwd span").remove();
				return true;
			}	
		}
			
	$("#username").focusout(vusername);
	
	$("#passwd").focusout(vpassword);
	$("form").submit(function(e){
		if(!vusername()){
			e.preventDefault();
		}
		if(!vpassword()){
			e.preventDefault();
		}
	}		
	);
	
  </script>
</body>
</html>