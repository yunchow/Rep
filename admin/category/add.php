<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php
require_once("check.php");
?>
<div id="mt">后台管理 - 新增产品类别</div>
<div>&nbsp;</div>
<div id="nei">
<form method="post" action="category/action.php">
	<input type="hidden" name="action" value="add" />
	<table class="formlayout">
		<tr>
			<td>类别编号:</td><td><input type="text" name="code" style="width:350px;"/><span style="color:red;font-size:13px;">&nbsp;*不能为空并且要求惟一<span></td>
		</tr>
		<tr>
			<td>类别名称:</td><td><input type="text" name="name" style="width:350px;" /><span style="color:black;font-size:13px;">&nbsp;(最多支持50个字符长度)<span></td>
		</tr>
		<tr>
			<td valign="top" colspan="1">类别描述:</td><td colspan="3"><textarea name="comment" style=" width: 500px; height: 100px;" ></textarea></td>
		</tr>
		<tr><td></td><td>
			<input type="submit" style="width:150px; height: 35px; " value="确定" />
			<input type="button" class="always" onclick="history.go(-1)" style="width:150px; height: 35px; " value="取消" />
		</td>
		</tr>
	</table>

</form>

</div>

