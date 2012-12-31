<?php
	require 'config.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?php echo $application_name; ?></title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/reset.css" rel="stylesheet">
	<script type="text/javascript" src="./js/jquery-1.8.3.js"></script>
	<script type="text/javascript" src="./js/jquery.js"></script>
</head>
<body class="container">

<div class="navbar">
	<div class="navbar-inner">
		<a class="brand" href="#"><?php echo $application_name; ?></a>
		<ul class="nav" id="nav-list">
			<li><a class="active" href="index.php">链接管理</a></li>
			<li><a href="category.php">分类管理</a></li>
			<li><a href="add_link.php">添加链接</a></li>
			<li><a href="add_category.php">添加分类</a></li>
			<li><a href="display.php">选项卡模式</a></li>
		</ul>
		<div class="input-append" id="input-search">
			<input class="span2" id="appendedInputButton" type="text">
			<button class="btn" type="button" id="search">Go!</button>
		</div>
	</div>
</div>