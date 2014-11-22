<!DOCTYPE>
<?
require_once ("config.php");
$ad = "select * from ad";
$ad = mysql_query ( $ad, $config );
$ad = mysql_fetch_array ( $ad );
$sql = "select * from win  where id='1'";
$win = mysql_query ( $sql, $config );
$win = mysql_fetch_array ( $win );
?>
<head>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<link rel="bookmark" href="favicon.ico" type="image/x-icon" />
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<link type="text/css" href="style/index.css" rel="stylesheet" />
</head>
<title><?php echo $win['title']?></title>
<meta name="keywords" content="<?php echo $win['keywords']?>" />
<meta name="description" content="<?php echo $win['description']?>" />
<body style="margin:0px;padding:0px;">
	<div>
		<div id="top"></div>
		<div id="logo">
			<div class="left">
				<a href="?p=index"><img src="<?php echo $win['logo']?>" /></a>
			</div>
			<div class="right">
				<ul>
					<li><a href="?p=index">Home</a></li>
					<li><a href="?p=help">About Us</a></li>
					<li><a href="?p=down">Products</a></li>
					<li><a href="?p=new">Contact</a></li>
				</ul>
			</div>
		</div>
	</div>
	
	<div id="main">
	<?php
		isset ( $_GET ['p'] ) ? $p = $_GET ['p'] : $p = "index";
		$pp = preg_match ( "/^([a-z]){1,5}$/", $p );
		if ($pp == "1") {
			require ("template/$p.php");
		} else {
			echo "<script>window.onload=function(){alert('地址出错');location.href='index.php';}</script>";
		}
		
		?>
	</div>
	
	<div id="dibu">
		<div class="nr" style="margin-bottom:0px;padding-bottom:0px;"><?php echo $win['banquan']; ?><br />
			<?php echo $win['icp']?> <?php echo $win['lianxi'];?>
			<?php echo $win['cnzz']?>
		</div>
	</div>
</body>
</html>