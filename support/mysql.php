<?php
	$conn = mysql_connect("127.0.0.1", "root", "root") or die("Could not connect to mysql: " . mysql_err());
	mysql_select_db("xiaomai");
	mysql_query("SET NAMES UTF8");
?>