<?php
$conn = $config = mysql_connect("127.0.0.1","root","root") or die(mysql_error());
mysql_select_db("xiaomai");
mysql_query("SET NAMES UTF8");
?>