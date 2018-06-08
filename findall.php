<meta charset="utf-8">
<?php
$con =@mysqli_connect("localhost","5i","001600k3");//建立MYSQL连接
if (!$con)
  {
  die('连接不成功！'.mysqli_error());
  }
  else{
	//echo "数据库已成功连接！".mysql_get_host_info($con);
  }
mysqli_select_db($con,"info") or die("无法激活数据库！");//选择数据库
// 一些代码...
$qst="SELECT * FROM student";//查询语句；
$result=array();//结果集初始化！！！
mysqli_query($con,"set names utf8");//设定数据库通讯字符集为utf8;
$rs=mysqli_query($con,$qst) or die("查询错误！");//获得结果集数据记录指针
//echo "<br>"."结果集数据记录指针";
//echo $rs;
for($i=0;$i<mysqli_num_rows($rs);$i++){
	$result[$i]=mysqli_fetch_assoc($rs);//逐行获取数据
	//print_r($result[$i]);
	}
mysqli_close($con);

?>
<center>
<!--表头-->
<h1>用户列表</h1>
<table border="1">
	<tr>
		<td>序号</td>
		<td>姓名</td>
		<td>学号</td>
		<td>密码</td>
		<td>班号</td>
	</tr>
<!--表内容 -->	
	<?php
foreach($result as $rec){
	echo "<tr>";
	echo"<td>".$rec["id"]."</td>";
	echo"<td>".$rec["sname"]."</td>";
	echo"<td>".$rec["studentid"]."</td>";
	echo"<td>".$rec["password"]."</td>";
	echo"<td>".$rec["classid"]."</td>";
	echo"</tr>";
}	
?>
</table>
</center>




