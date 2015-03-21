<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Stock Trade System--Administor</title>

    <!-- Bootstrap -->
		<!-- <link class="bootstrap library" rel="stylesheet" type="text/css" href="http://sandbox.runjs.cn/js/sandbox/bootstrap-2.2.0/css/bootstrap.min.css">
		<script class="bootstrap library" src="http://sandbox.runjs.cn/js/sandbox/jquery/jquery-1.7.2.min.js" type="text/javascript"></script>
		<script class="bootstrap library" src="http://sandbox.runjs.cn/js/sandbox/bootstrap-2.2.0/js/bootstrap.min.js" type="text/javascript"></script> -->
		<!-- Custom styles for this template -->

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

        
  <link href="../Home/View/customer.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <div class="container">
		<div class="page-header">
	<!-- <div class="row"> -->
		<div class="span4"><h1>证券账户系统</h1></div></div>
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
		<li><a href="<?php echo U('/organization/validate');?>">创建企业账户</a></li>
		<li class="active"><a href="<?php echo U('/search');?>">搜索账户</a></li>
	</ul>
	<div class="tab-pane active" id="tabsearch">
		<fieldset>
  	
  	<h3>账户搜索结果</h3>
	<?php if($type == 0): ?><table class="table table-condensed table-striped">
			<thead>
				<tr bgcolor=ffbb99>
					<th width ="30%">个人账户号</th>
					<th width ="30%">姓名</th>
					<th width ="30%">身份证号</th>
					<th width ="10%">账户状态</th>
				</tr>
			</thead>
			<tbody>
			
			<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
				<td><a href="<?php echo U('/individual/id/'.$vo['no']);?>"><?php echo ($vo["no"]); ?></a></td>
				<td><?php echo ($vo["name"]); ?></td>
				<td><?php echo ($vo["id_no"]); ?></td>
				<td><?php echo $vo["status"]?"挂失":"正常";?></td>
			</tr><?php endforeach; endif; else: echo "" ;endif; ?>
			</tbody>
		</table>
	<?php elseif($type == 1): ?>
		<table class="table table-condensed table-striped">
			<thead>
				<tr bgcolor=ffbb99>
					<th width ="20%">法人账户号</th>
					<th width ="25%">法人注册号</th>
					<th width ="20%">法人姓名</th>
					<th width ="25%">法人身份证号</th>
					<th width ="10%">账户状态</th>
				</tr>
			</thead>
			<tbody>
			
			<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
				<td><a href="<?php echo U('/organization/id/'.$vo['no']);?>"><?php echo ($vo["no"]); ?></a></td>
				<td><?php echo ($vo["legal_registration_no"]); ?></td>
				<td><?php echo ($vo["legal_name"]); ?></td>
				<td><?php echo ($vo["legal_id"]); ?></td>
				<th><?php echo $vo["status"]?"挂失":"正常";?></th>
			</tr><?php endforeach; endif; else: echo "" ;endif; ?>
			</tbody>
		</table><?php endif; ?>
		<button class="btn btn-success" onclick="window.location.href='<?php echo U('/search');?>'">返回</button>

<!--   	<div class="pager">
  	<ul>
  		<li><a href="#">前一页</a></li>
  		<li><a href="#">后一页</a></li>
  	</ul>
  	</div> -->

    <div class="pagination">
  <ul>
    <li class="previous">
      <a href="#" class="fui-arrow-left"></a>
    </li>

    <li class="active"><a href="#fakelink">1</a></li>
    <li><a href="#fakelink">2</a></li>
    <li><a href="#fakelink">3</a></li>
    <li><a href="#fakelink">4</a></li>
    <li><a href="#fakelink">5</a></li>
    <li><a href="#fakelink">6</a></li>
    <li><a href="#fakelink">7</a></li>
    <li><a href="#fakelink">8</a></li>
    <li><a href="#fakelink">9</a></li>
    <li><a href="#fakelink">10</a></li>
    <li class="next">
      <a href="#" class="fui-arrow-right"></a>
    </li>
  </ul>
</div>

  </div>
  		</fieldset>

	</div>
</div>
  </body>
</html>