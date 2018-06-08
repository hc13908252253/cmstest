<!doctype html>
<html lang="en">
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="重庆工贸：司海清">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>例3。1。26</title>
 </head>
 <body>
  <?php
$con =@mysql_connect("localhost:3306","root","Shq001600k3");//建立MYSQL连接
if (!$con)
  {
  die('连接不成功！' . mysql_error());
  }
  /*else{
	echo "数据库已成功连接！".mysql_get_host_info($con);
  }*/

// 一些代码...
mysql_select_db("cxbbs",$con) or die("无法激活数据库！");//选择数据库
$qst="SELECT * FROM tbl_user";//查询语句；
$result=array();
$rs=mysql_query("set names utf8");
$rs=mysql_query($qst,$con) or die("查询错误！");
for($i=0;$i<mysql_num_rows($rs);$i++){
	$result[$i]=mysql_fetch_assoc($rs);
	}
mysql_close($con);
?>
<center>
<h4>用户列表</h4>
<table border="1" >
	<tr height="30px" align="center" style="font-family:'黑体'">
		<td width="20%">序号</td>
		<td width="30%">姓名</td>
		<td width="10%">性别</td>
		<td width="40%">注册时间</td>
	</tr>
<?php
	foreach($result as $rec){
?>
 <tr  align="center" bgcolor="#eeeeee" style="font-family:'宋体'">
<?php
	echo"<td>".$rec["uId"]."</td>";
	echo"<td>".$rec["uName"]."</td>";
	echo"<td>".($rec["gender"]==2?"男":"女")."</td>";
	echo"<td>".$rec["regTime"]."</td>";
	echo"</tr>";
}
	?>
</table>
</center>
 </body>
</html>