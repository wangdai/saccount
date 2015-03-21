<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en-us">
<head>
	<title>证券账户系统 | <?php echo ($title); ?></title>
	<meta charset="utf-8">
</head>
<body>
	<p><?php echo ($user); ?> | <a href="<?php echo U('/logout');?>">注销</a></p>
	<p> 
		<a href="<?php echo U('/welcome');?>">首页</a> |
		<a href="<?php echo U('/individual/validate');?>">创建个人账户</a> |
		<a href="<?php echo U('/organization/validate');?>">创建法人账户</a> |
		<a href="<?php echo U('/search');?>">条件查询</a>
	</p>