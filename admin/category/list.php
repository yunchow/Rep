<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php
require_once("check.php");
?>
<div id="mt">后台管理 - 类别管理</div>

<div id="nei">
	<div style="padding:10px;background:white;">
		<input type="button" value="新增" onclick="location.href='home.php?h=category/add'">
		<input type="button" value="刷新" onclick="location.reload()">
		<input type="button" value="返回" onclick="history.go(-1);">
	</div>
	<table class="list">
		<tr style="font-weight: bold;text-align: center; color: #1b68b6;">
			<td><input type="checkbox" disabled="disabled"></td>
			<td class="head">类别编号</td>
			<td class="head">类别名称</td>
			<td class="head">类别描述</td>
			<td class="head" width="80">管理</td>
		</tr>
		<?php 
		// list
		$rs = mysql_query("select * from category",$conn);
		if (!$rs) {
			die("No Data Found!");
		} else {
		while($category = mysql_fetch_array($rs)){
		?>
		<tr>
			<td style="text-align: center;"><input type="checkbox" disabled="disabled"></td>
			<td><?php echo $category["code"];?></td>
			<td><?php echo $category["name"];?></td>
			<td><?php echo $category["comment"];?></td>
			<td style="text-align: center;">
				<a href="category/action.php?action=delete&code=<?php echo $category['code'];?>">删除</a>
			</td>
		</tr>
		<?php }} ?>
	</table>
</div>
