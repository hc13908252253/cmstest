<?php
header("content-type:text/html;charset=utf-8");
//建立数据库服务器连接
$con=@mysqli_connect('localhost','5i','001600k3') or die('连接创建错误！');
mysqli_select_db($con,'info') or die('info激活失败'.mysqli_error());
mysqli_set_charset($con,'utf8');//mysqli_query($con,'set names utf8');
//建立SQL字符串
$sql="SELECT * FROM student ";
$res=mysqli_query($con,$sql);
$result=mysqli_fetch_all($res,MYSQL_ASSOC);//MYSQL_NUM,MYSQL_ASSOC,
for($i=0;$i<=mysqli_num_rows($res);$i++){//行
	fore($j=0;$j<=mysqli_num_fields($res);$j++){//列
		echo $result[$i][$j];
	}
	echo '<br>' ;
}
//echo '<pre>';
//print_r($result);
//echo '</pre>';
?>