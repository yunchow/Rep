<?php
require_once("check.php");
?>
<!DOCTYPE html>
<head>
<title>PremGlass后台管理</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link type="text/css" href="../style/home.css" rel="stylesheet" />
</head>
<body>
<div id="top"></div>
<div id="main">
	<div id="tou" style="display: none;">
	<table style="float: right; text-align: center; line-height: 25px;" width="280px"><tr>
		<td><a href="../index.php">网站首页</a></td>
		<td><a href="home.php">后台首页</a></td>
		</tr>
	</table>
	</div>
	<div>&nbsp;</div>
	<div id="left">
		<div class="yi">功能列表</div>
		<ul>
			<li><a href="?h=category/list">类别管理</a></li>
			<li><a href="?h=product/list">产品管理</a></li>
			<li><a href="?h=win">系统设置</a></li>
			<li><a target="_blank" href="../phpinfo.php">系统环境</a></li>
			<li><a target="_blank" href="../l.php">PHP 探针</a></li>
			<li><a href="?h=pass">密码修改</a></li>
			<li><a href="?h=out">退出系统</a></li>
			<!-- 
			<li><a href="?h=soft">源码管理</a></li>
			<li><a href="?h=sfb">源码发布</a></li>
			<li><a href="?h=help">帮助管理</a></li>
			<li><a href="?h=helpfb">帮助发布</a></li>
			<li><a href="?h=new">动态管理</a></li>
			<li><a href="?h=newfb">动态发布</a></li>
			<li><a href="?h=ad">广告管理</a></li>
			 -->
		</ul>
	</div>
	<div id="right">
		<?php
		isset($_GET['h'])?$h=$_GET['h']:$h="liebiao";
		if($h){
		    require("$h.php");
		}
		?>
	</div>
</div>
</body>







