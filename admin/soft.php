<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php
require_once("check.php");
?>
<div id="mt">后台管理 - 源码管理</div>
<div id="nei">
<table style="border: #1b68b6; "><tr style="font-weight: bold; text-align: center; color: #1b68b6;">
<td width="440">标题</td>
<td width="200">时间</td>
<td width="150">管理操作</td>
</tr>
</table></div>
<?php 
$sql = "select * from soft";
$soft = mysql_query($sql,$config);

while($softnum = mysql_fetch_array($soft)){

?>

<div id="title"><?php echo mb_substr($softnum['title'],0,15,'utf8');?></div>
<div id="time"><?php echo $softnum['date']?></div>
<div id="up">

<!-- <div class="up">编辑</div> -->
<div class="del"><a href="del.php?del=<?php echo $softnum['id'];?>">删除</a></div>
</div>
<?php } ?>

