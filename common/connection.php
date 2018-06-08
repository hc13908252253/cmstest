<?php
/*


*/
header("content-type:text/html;charset=utf-8");
//建立连接
function get_Connect(){
	$con=@mysqli_connect('localhost','5i','001600k3') or die('连接创建错误！');
	mysqli_select_db($con,'info') or die('info激活失败'.mysqli_error());
	//mysqli_query($con,'use info');
	mysqli_set_charset($con,'utf8');//mysqli_query($con,'set names utf8');
	return $con;
}
if($con=get_Connect()){
	echo "连接成功！".mysqli_get_host_info($con);
}
?>