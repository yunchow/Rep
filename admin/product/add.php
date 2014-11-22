<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<script src="../editor/kindeditor.js"></script>
<script src="../javascript/jquery-1.11.1.min.js"></script>
<script src="../editor/lang/zh_CN.js"></script>
<?php
require_once("check.php");
?>
<div id="mt">后台管理 - 新增产品</div>
<div>&nbsp;</div>
<div id="nei">
<script>
	var editor;
	KindEditor.ready(function(K) {
		editor = K.create('textarea[name="desc"]', {
			resizeType : '0',
			allowPreviewEmoticons : true,
			allowImageUpload : true
		});
	});
</script>
<form method="post" action="product/action.php">
	<input type="hidden" name="action" value="add" />
	<table class="formlayout">
		<tr>
			<td>编号:</td><td><input type="text" name="partnumber" style="width: 200px;" /></td>
			<td>名称:</td><td><input type="text" name="name" style="width: 200px;" /></td>
		</tr>
		<tr>
			<td>分类:</td><td>
			<select name="category_code" style="width: 205px;">
			<?php 
			$rs = mysql_query("select * from category", $conn);
			while ($r = mysql_fetch_array($rs)) {
				echo "<option value='". $r['code'] ."'>". $r["name"] ."</option>";
			}
			?>
			</select>
			</td>
			<td>容量:</td><td><input type="text" name="capacity" style="width: 200px;" /></td>
		</tr>
		<tr>
			<td>高度:</td><td><input type="text" name="height" style="width: 200px;" /></td>
			<td>重量:</td><td><input type="text" name="weight" style="width: 200px;" /></td>
		</tr>
		<tr>
			<td>瓶口:</td><td><input type="text" name="capsule" style="width: 200px;" /></td>
			<td>起定量:</td><td><input type="text" name="start_number" style="width: 200px;" value="1" /></td>
		</tr>
		<tr>
			<td>图片:</td><td><input type="text" name="image1" style="width: 200px;" /></td>
			<td>状态:</td><td>
			<select name="status" style="width: 205px;">
				<option value="valid">有效</option>
				<option value="offline">下架</option>
			</select></td>
		</tr>
		<tr>
			<td valign="top" colspan="1">简介:</td><td colspan="3"><textarea name="desc" style=" width: 700px; height: 300px;" ></textarea></td>
		</tr>
		<tr><td></td><td>
			<input type="submit" style="width:150px; height: 35px; " value="确定" />
			<input type="button" class="always" onclick="history.go(-1)" style="width:150px; height: 35px; " value="取消" />
		</td>
		</tr>
	</table>

</form>

</div>

