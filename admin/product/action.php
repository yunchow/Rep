<?php
$action = $_REQUEST["action"];
if ($action == "add") {
	$name = $_POST["name"];
	$partnumber = $_POST["partnumber"];
	$category_code = $_POST["category_code"];
	$capacity = $_POST["capacity"];
	$height = $_POST["height"];
	$weight = $_POST["weight"];
	$capsule = $_POST["capsule"];
	$start_number = $_POST["start_number"];
	$image1 = $_POST["image1"];
	$desc = $_POST["desc"];
	$status = $_POST["status"];
	
	$sql = "INSERT INTO products (partnumber, `category_code`, `name`, `capacity`, `height`, `weight`, `capsule`, `start_number`, 
				`image1`, `desc`, `status`, `create_time`) 
			VALUES ('$partnumber', '$category_code', '$name', '$capacity', '$height', '$weight', '$capsule', $start_number, '$image1', '$desc', '$status', now())";
	
	require("../../support/mysql.php");
	$result = mysql_query($sql, $conn);
	if(!$result) {
		echo "<script>window.onload=function(){alert('Sorry, 新增产品失败！');location.href='../home.php?h=product/add';}</script>";
	} else {
		echo "<script>window.onload=function(){alert('操作成功！');location.href='../home.php?h=product/list';}</script>";
	}
	mysql_close($conn);
}
elseif ($action == "delete") {
	$id = $_GET["id"];
	$sql = "delete from products where id = $id";
	require("../../support/mysql.php");
	$result = mysql_query($sql, $conn);
	if(!$result) {
		echo "<script>window.onload=function(){alert('Sorry, 删除产品失败！');location.href='../home.php?h=product/list';}</script>";
	} else {
		echo "<script>window.onload=function(){alert('操作成功！');location.href='../home.php?h=product/list';}</script>";
	}
	mysql_close($conn);
}
elseif ($action == "edit") {
	$id = $_POST["id"];
	$name = $_POST["name"];
	$partnumber = $_POST["partnumber"];
	$category_code = $_POST["category_code"];
	$capacity = $_POST["capacity"];
	$height = $_POST["height"];
	$weight = $_POST["weight"];
	$capsule = $_POST["capsule"];
	$start_number = $_POST["start_number"];
	$image1 = $_POST["image1"];
	$desc = $_POST["desc"];
	$status = $_POST["status"];
	
	$sql = "UPDATE products SET partnumber='$partnumber', category_code = '$category_code', name = '$name', capacity = '$capacity', height = '$height', weight = '$weight', capsule = '$capsule', start_number = $start_number, image1 = '$image1', `desc` = '$desc', status = '$status' WHERE id = $id";
	require("../../support/mysql.php");
	$result = mysql_query($sql, $conn);
	
	if(!$result) {
		echo "<script>window.onload=function(){alert('Sorry, 修改产品失败！');location.href='../home.php?h=product/list';}</script>";
	} else {
		echo "<script>window.onload=function(){alert('修改产品成功！');location.href='../home.php?h=product/list';}</script>";
	}
	mysql_close($conn);
}
?>