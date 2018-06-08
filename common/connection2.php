<?php
header("content-type:text/html;charset=utf-8");
//建立连接
function get_Connect(){
	$con=@mysql_connect('localhost','root','root') or die(print('连接创建错误！'));//注意@和or的作用！
	mysql_select_db("info",$con) or die(print("无法激活学生登录数据库！"));//选择数据库
	return $con;
}
if($con=get_Connect()){
	echo "连接成功！".mysql_get_host_info($con);
}
$str="select * from student";
$rs=mysql_query($str,$con);//取得返回资源集引用
$result=[];

?>