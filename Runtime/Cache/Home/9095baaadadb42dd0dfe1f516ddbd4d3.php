<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en-us">
<head>
	<title>证券账户系统 | <?php echo ($title); ?></title>
	<meta charset="utf-8">
</head>
<body>
	<p><?php echo ($user); ?> | <a href="?a=admin_logout">注销</a></p>
	<p> <a href="?p=validate_individual">创建个人账户</a> |
		<a href="?p=validate_organization">创建法人账户</a> |
		<a href="?p=condition">条件查询</a>
	</p>