<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php
require_once("check.php");
?>
<div id="mt">后台管理 - 帮助管理</div>
<div id="nei">
<table style="border: #1b68b6; "><tr style="font-weight: bold; text-align: center; color: #1b68b6;">
<td width="440">标题</td>
<td width="200">时间</td>
<td width="150">管理操作</td>
</tr>
</table></div>
<?php 
$sql = "select * from help";
$help = mysql_query($sql,$config);

while($helpnum = mysql_fetch_array($help)){

?>

<div id="title"><?php echo mb_substr($helpnum['title'],0,15,'utf8');?></div>
<div id="time"><?php echo $helpnum['date']?></div>
<div id="up">
<div class="del"><a href="hdel.php?del=<?php echo $helpnum['id'];?>">删除</a></div>
</div>
<?php } ?>