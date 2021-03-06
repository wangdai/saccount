<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Stock Trade System--Administor</title>

  <!-- Bootstrap -->
<!--    <link class="bootstrap library" rel="stylesheet" type="text/css" href="http://sandbox.runjs.cn/js/sandbox/bootstrap-2.2.0/css/bootstrap.min.css">
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
        <div class="span4"><h1>股票交易系统</h1></div>    </div>
    <div class="span8"><p class="pull-right">
    <!-- <input type="text" class="form-control" placeholder=<?php echo ($user); ?> /> -->
    <button class="btn btn-inverse"  disabled="disabled" color="black"><?php echo ($user); ?></button>
    <!-- <?php echo ($user); ?>  -->
    <button class="btn btn-info" onclick="window.location.href='<?php echo U('/logout');?>'" type="button">注销</button> </p></div>
    <div class="tabbable tabs-left">
    <ul class="nav nav-tabs">
        <li><a href="<?php echo U('/welcome');?>">主页</a></li>
        <li class="active"><a href="<?php echo U('/individual/validate');?>">创建个人账户</a></li>
        <li><a href="<?php echo U('/organization/validate');?>">创建企业账户</a></li>
        <li><a href="<?php echo U('/search');?>">搜索账户</a></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane active" id="tabcreateperson">
        <form class="form-horizontal" action="<?php echo U('insert');?>" method="post">
            <fieldset>
                <legend><font color="DarkSalmon">基本信息</font></legend>
                <div class="form-group">
                    <label class="control-label">个人证券账户号</label>
                    <div class="controls">
                        <input class="form-control" type="text" name="no" value=<?php echo ($no); ?> readonly="true">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label" for="name">名字</label>
                    <div class="controls">
                        <input class="form-control" type="text" name="name" value=<?php echo ($name); ?> readonly="true">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label"for="personid">身份证号码</label>
                    <div class="controls">
                        <input class="form-control" type="text" name="id_no" value=<?php echo ($id_no); ?> readonly="true">
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <legend><font color="DarkSalmon">详细信息</font></legend>
                <div class="form-group" id="address">
                    <label class="control-label"for="address">家庭住址</label>
                    <div class="controls">
                        <input class="form-control" name="address"type="text" placeholder="家庭住址">
                    </div>
                </div>
                <div class="form-group" id="occupation">
                    <label class="control-label"for="occupation">工作</label>
                    <div class="controls" >
                        <input class="form-control" name="occupation" type="text" placeholder="工作">
                    </div>
                </div>
                <div class="form-group" id="education">
                        <label class="control-label"for="education">教育程度</label>
                        <div class="controls">
                            <select  name="education">

                                <option>初中及以下</option>
                                <option>高中</option>
                                <option>本科</option>
                                <option>硕士</option>
                                <option>博士</option>
                            </select>
                        </div>
                    </div>
                <div class="form-group" id="company" >
                    <label class="control-label"for="work place" >工作单位</label>
                    <div class="controls">
                        <input class="form-control" name="company" type="text" placeholder="工作单位">
                    </div>
                </div>
                <div class="form-group"  id="mobile" >
                    <label class="control-label"for="phonenum">电话号码</label>
                    <div class="controls">
                        <input class="form-control"  name="mobile" type="text" placeholder="电话号码">
                    </div>
                </div>
                <div class="form-group">
                        <label class="control-label"for="gender">性别</label>
                        <div class="controls">
                            <select id="gender" name="gender">
                                <option>男</option><option>女</option>
                            </select>
                        </div>
                    </div>
                <div class="form-group"  id="agent_id_no" >
                    <label class="control-label"for="phonenum">代理人身份证号</label>
                    <div class="controls">
                        <input class="form-control"  name="agent_id_no" type="text" placeholder="代理人身份证号">
                    </div>
                </div>
                </fieldset>         
                <div class="form-actions" style="margin-top: 20px;">
                    <button type="submit"class="btn btn-primary" >创建</button>
                    <button class="btn" style="margin-left: 20px;" onclick="window.location.href='<?php echo U('/welcome');?>'">取消</button>
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
            
    $("#address").focusout(function(){denyemptyinput("#address")});
    $("#occupation").focusout(function(){denyemptyinput("#occupation")});
    $("#company").focusout(function(){denyemptyinput("#company")});
    $("#mobile").focusout(function(){if(!denyemptyinput("#mobile")) validatephone("#mobile");});
    $("#agent_id_no").focusout(function(){if(!denyemptyinput("#agent_id_no")) validateid("#agent_id_no");});
    
    $("form").submit(function(e){
        if(denyemptyinput("#address"))
            e.preventDefault();
        if(denyemptyinput("#occupation"))
            e.preventDefault();
        if(denyemptyinput("#company"))
            e.preventDefault();
        if(denyemptyinput("#mobile"))
            e.preventDefault();
        else if(validatephone("#mobile"))
            e.preventDefault();
        if(denyemptyinput("#agent_id_no"))
            e.preventDefault();
        else if(validateid("#agent_id_no"))
            e.preventDefault();
        
    }       
    );
    
  </script>
</body>
</html>