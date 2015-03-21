<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Stock Trade System--Administor</title>

  <!-- Bootstrap -->
	<link class="bootstrap library" rel="stylesheet" type="text/css" href="http://sandbox.runjs.cn/js/sandbox/bootstrap-2.2.0/css/bootstrap.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>
	<div class="container">
		<h1 class="page-header">Stock System</h1>
      <section class="loginBox row-fluid">
        <section class="span7 left">
        	<form action="login" class="form-horizontal"  method="post">
				<h2>登录</h2>
				<div id="username" class="control-group">
					<input type="text"  name="user" class="disabled" placeholder="username"/>				
				</div>
				
				<div id="passwd" class="control-group">
					<input type="password" id="passwd" name="passwd" placeholder="password"/>
				</div>
	           	
				<div class="control-group">
					<input type="submit" value="login" class="btn btn-primary">
				</div>  
			</form>
        </section>
        <section class="span5 right">
          <h2>some information</h2>
          <section>
            <p>the content to be added</p>
            <p><input type="button" value="not yet" class="btn"></p>
          </section>
        </section>
      </section><!-- /loginBox -->
	</div>
  <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script src="/bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript">
	var a = "#username";
	a = a+ " input";
	$(a).val("haha");
	var vusername = function() {
			console.log("a");
		//	var aa= /[0-9]+/;
			if($.trim($("#username input").val()) == ""){
				$("#username").attr({"class":"control-group error"});
				$("#username span").remove();
				$("#username").append($("<span class=\"help-inline\">Please input the username</span>"));
				return false;
			}else{
				$("#username").attr({"class":"control-group"});
				$("#username span").remove();
				return true;
			}
		}
	var vpassword = function() {
			console.log("1");

			if($.trim($("#passwd input").val()) == ""){
				$("#passwd").attr({"class":"control-group error"});
				$("#passwd span").remove();
				$("#passwd").append($("<span class=\"help-inline\">Please input the password</span>"));
				return false;
			}else{
				$("#passwd").attr({"class":"control-group"});
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