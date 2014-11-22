<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php
require_once("check.php");
?>
<div id="mt">后台管理 - 产品管理</div>
<?php 
$partnumber = isset($_REQUEST["partnumber"]) ? $_REQUEST["partnumber"] : null;
$status = isset($_REQUEST["status"]) ? $_REQUEST["status"] : null;
$name = isset($_REQUEST["name"]) ? $_REQUEST["name"] : null;
$category_code = isset($_REQUEST["category_code"]) ? $_REQUEST["category_code"] : null;
$pageno = isset($_REQUEST["pageno"]) ? $_REQUEST["pageno"] : 1;
$PAGE_SIZE = 20;
?>
<div id="nei">
	<form action="?">
		<div style="padding:10px;background:white;">
			编号：<input name="partnumber" type="text" style="width:100px;" value="<?php echo $partnumber?>">&nbsp;&nbsp;
			名称：<input name="name" type="text" style="width:100px;" value="<?php echo $name?>">&nbsp;&nbsp;
			分类：
			<select name="category_code" style="width: 105px;">
			<option value=""></option>
			<?php 
			$rs = mysql_query("select * from category", $conn);
			while ($r = mysql_fetch_array($rs)) {
				if ($category_code == $r["code"]) {
					echo "<option selected='selected' value='". $r['code'] ."'>". $r["name"] ."</option>";
				} else {
					echo "<option value='". $r['code'] ."'>". $r["name"] ."</option>";
				}
			}
			?>
			</select>&nbsp;&nbsp;
			状态：
			<select name="status" style="width: 105px;">
				<option value=""></option>
				<option value="valid" <?php if ($status == "valid") {echo  "selected" ; } ?>>有效</option>
				<option value="offline" <?php if ($status == "offline") echo "selected"; ?>>下架</option>
			</select>
			<input type="hidden" name="h" value="product/list">&nbsp;
			<input type="submit" value="搜索">
		</div>
	</form>
	<div style="padding:10px;background:white;">
		<input type="button" value="新增" onclick="location.href='home.php?h=product/add'">
		<input type="button" value="刷新" onclick="location.reload()">
		<input type="button" value="返回" onclick="history.go(-1);">
	</div>
	<table class="list">
		<tr style="font-weight: bold;text-align: center; color: #1b68b6;">
			<td><input type="checkbox" disabled="disabled"></td>
			<td class="head">编号</td>
			<td class="head">名称</td>
			<td class="head">分类</td>
			<td class="head">容量</td>
			<td class="head">高度</td>
			<td class="head">重量</td>
			<td class="head">瓶口</td>
			<td class="head">起订量</td>
			<td class="head">状态</td>
			<td class="head" width="120">管理</td>
		</tr>
		<?php 
		// where
		$where = "";
		if ($partnumber != null) {
			$where = $where . " and partnumber like '%$partnumber%'";
		}
		if ($status != null) {
			$where = $where . " and status like '%$status%'";
		}
		if ($name != null) {
			$where = $where . " and name like '%$name%'";
		}
		if ($category_code != null) {
			$where = $where . " and category_code like '%$category_code%'";
		}
		
		// page
		$result = mysql_query("select count(*) from products where 1=1 " . $where, $conn);
		$total = mysql_fetch_array($result);
		$total = $total[0];
		$pagecount = (int) ($total /  $PAGE_SIZE);
		$pagecount += $total % $PAGE_SIZE == 0 ? 0 : 1;
		if ($pageno > $pagecount) {
			$pageno = $pagecount;
		}
		if ($pageno <= 0) {
			$pageno = 1;
		}
		$start = ($pageno - 1) * $PAGE_SIZE;
		$limit = " limit $start, $PAGE_SIZE ";
		
		// list
		$products = mysql_query("select t1.*, t2.name as catename from products t1 left join category t2 on code=category_code where 1=1" . $where . $limit,$conn);
		if (!$products) {
			die("No Data Found!");
		} else {
		while($product = mysql_fetch_array($products)){
		?>
		<tr>
			<td style="text-align: center;"><input type="checkbox" disabled="disabled"></td>
			<td><?php echo $product["partnumber"];?></td>
			<td><?php echo $product["name"];?></td>
			<td><?php echo $product["catename"];?></td>
			<td><?php echo $product["capacity"];?></td>
			<td><?php echo $product["height"];?></td>
			<td><?php echo $product["weight"];?></td>
			<td><?php echo $product["capsule"];?></td>
			<td><?php echo $product["start_number"];?></td>
			<td><?php echo $product["status"] == "offline" ? "<font style='color:red;'>下架</font>" : "<font style='color:green;'>有效</font>";?></td>
			<td style="text-align: center;">
				<a href="home.php?h=product/edit&id=<?php echo $product['id'];?>&readonly=1">详情</a>
				<a href="home.php?h=product/edit&id=<?php echo $product['id'];?>">修改</a>
				<a href="product/action.php?action=delete&id=<?php echo $product['id'];?>">删除</a>
			</td>
		</tr>
		<?php }} ?>
	</table>
	<div style="padding: 10px;">
		<div style="float: left;font-size:12px;">当前页：<?php echo $pageno . "/" . $pagecount?>，共有<?php echo $total ?>条记录，每页显示<?php echo $PAGE_SIZE;?>条记录</div>
		<div style="float: right;">
			<input type="button" value="首页" onclick="page(1)" <?php if ($pageno == 1) echo "disabled" ?>>
			<input type="button" value="&lt;&lt;上一页" onclick="page(<?php echo $pageno - 1; ?>)" <?php if ($pageno <= 1) echo "disabled" ?>>
			<input type="button" value="下一页&gt;&gt;" onclick="page(<?php echo $pageno + 1; ?>)" <?php if ($pageno >= $pagecount) echo "disabled" ?>>
			<input type="button" value="尾页" onclick="page(<?php echo $pagecount; ?>)" <?php if ($pageno == $pagecount) echo "disabled" ?>>
			跳转至<select onchange="page(this.value)">
				<?php 
					for ($i = 1; $i <= $pagecount; $i++) {
						if ($i != $pageno) {
							echo "<option value='$i'>第" . $i. "页</option>";
						} else {
							echo "<option selected='selected' value='$i'>第" . $i. "页</option>";
						}
					}
				?>
			</select>
		</div>
	</div>
</div>
<form id="pagerform" action="?">
	<div style="padding:10px;background:white;">
		<input name="partnumber" type="hidden" value="<?php echo $partnumber?>">
		<input name="name" type="hidden" value="<?php echo $name?>">
		<input type="hidden" name="category_code" value="<?php echo $category_code?>">
		<input type="hidden" name="status" value="<?php echo $status?>">
		<input type="hidden" name="h" value="product/list">
		<input id="pageno" type="hidden" name="pageno" value="1">
	</div>
</form>
<script type="text/javascript">
	function page(pageno) {
		document.getElementById("pageno").value = pageno;
		document.getElementById("pagerform").submit();;
	}
</script>
