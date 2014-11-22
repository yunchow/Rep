<?php
$action = $_REQUEST["action"];
if ($action == "add") {
	$name = $_POST["name"];
	$code = $_POST["code"];
	$comment = $_POST["comment"];
	
	$sql = "INSERT INTO category(code,name,comment) values ('$code', '$name', '$comment')";
	
	require("../../support/mysql.php");
	$result = mysql_query($sql, $conn);
	if(!$result) {
		echo "<script>window.onload=function(){alert('Sorry, 新增产品类别失败！');location.href='../home.php?h=category/add';}</script>";
	} else {
		echo "<script>window.onload=function(){alert('操作成功！');location.href='../home.php?h=category/list';}</script>";
	}
	mysql_close($conn);
}
elseif ($action == "delete") {
	$code = $_GET["code"];
	$sql = "delete from category where code = '$code'";
	require("../../support/mysql.php");
	$result = mysql_query($sql, $conn);
	if(!$result) {
		echo "<script>window.onload=function(){alert('Sorry, 删除产品类别失败！');location.href='../home.php?h=category/list';}</script>";
	} else {
		echo "<script>window.onload=function(){alert('操作成功！');location.href='../home.php?h=category/list';}</script>";
	}
	mysql_close($conn);
}

?>