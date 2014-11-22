<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<script src="../editor/kindeditor.js"></script>
<script src="../jquery/jquery-1.11.1.min.js"></script>
<script src="../editor/lang/zh_CN.js"></script>
<?php
require_once("check.php");
?>
<?php isset($_GET["readonly"]) ? $readonly = true : $readonly = false; ?>
<div id="mt">后台管理 - <?php if ($readonly) echo "产品详情"; else echo "修改产品";?></div>
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
		<?php 
		if($readonly) {
			echo "editor.readonly(true);";	
		}
		?>
	});
</script>
<?php 
$id = $_GET["id"];
//require("../support/mysql.php");
$sql = "select * from products where id = " . $id;
$product = mysql_query($sql, $conn);
if (!$product) {
	die("No product data found. id = $id");
}
if ($result = mysql_fetch_array($product)) {
?>
<form method="post" action="product/action.php">
	<input type="hidden" name="action" value="edit" />
	<input type="hidden" name="id" value="<?php echo $result["id"];?>" />
	<table class="formlayout">
		<tr>
			<td>编号:</td><td><input type="text" name="partnumber" style="width: 200px;"  value="<?php echo $result["partnumber"];?>"/></td>
			<td>名称:</td><td><input type="text" name="name" style="width: 200px;" value="<?php echo $result["name"];?>"/></td>
		</tr>
		<tr>
			<td>分类:</td><td>
			<select name="category_code" style="width: 205px;">
			<?php 
			$rs = mysql_query("select * from category", $conn);
			while ($r = mysql_fetch_array($rs)) {
				if ($r['code'] == $result["category_code"]) {
					echo "<option selected='selected' value='". $r['code'] ."'>". $r["name"] ."</option>";
				} else {
					echo "<option value='". $r['code'] ."'>". $r["name"] ."</option>";
				}
			}
			?>
			</select>
			</td>
			<td>容量:</td><td><input type="text" name="capacity" style="width: 200px;"  value="<?php echo $result["capacity"];?>"/></td>
		</tr>
		<tr>
			<td>高度:</td><td><input type="text" name="height" style="width: 200px;"  value="<?php echo $result["height"];?>"/></td>
			<td>重量:</td><td><input type="text" name="weight" style="width: 200px;" value="<?php echo $result["weight"];?>" /></td>
		</tr>
		<tr>
			<td>瓶口:</td><td><input type="text" name="capsule" style="width: 200px;" value="<?php echo $result["capsule"];?>" /></td>
			<td>起定量:</td><td><input type="text" name="start_number" style="width: 200px;" value="<?php echo $result["start_number"];?>" /></td>
		</tr>
		<tr>
			<td>图片:</td><td><input type="text" name="image1" style="width: 200px;" value="<?php echo $result["image1"];?>" /></td>
			<td>状态:</td><td>
			<select name="status" style="width: 205px;">
				<option value="valid" <?php if ($result["status"] == "valid") {echo  "selected" ; } ?>>有效</option>
				<option value="offline" <?php if ($result["status"] == "offline") echo "selected"; ?>>下架</option>
			</select></td>
		</tr>
		<tr>
			<td valign="top" colspan="1">简介:</td><td colspan="3">
				<textarea name="desc" style=" width: 700px; height: 300px;" ><?php echo $result["desc"];?></textarea>
			</td>
		</tr>
		<tr><td></td><td>
			<input type="submit" style="width:150px; height: 35px; " value="提交" />
			<input type="button" class="always" onclick="history.go(-1)" style="width:150px; height: 35px; " value="取消" />
		</td></tr>
	</table>

</form>
<?php 
}
mysql_close($conn);
?>
</div>
<script type="text/javascript">
<!--
<?php 
if ($readonly) {
?>
	$("input[class!='always']").attr("disabled", "disabled");
	$("select").attr("disabled", "disabled");
<?php
}
?>
//-->
</script>
