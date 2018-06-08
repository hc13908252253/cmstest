<?php
header("content-type:text/html;charset=utf-8");
//建立连接
require'./common/connection.php';
/**增加用户模块函数
*@param <type> $uId	用户编号（自动）
*@param <type> $uName	用户名；
*@param <type> $gender	性别（1或0）；
*@param <type> $regTime 注册时间（当前时间）；
*/
date_default_timezone_set("Asia/Shanghai");
function addUser($name,$gender){
	$conn=get_connect();
	$regtime=date("Y-m-d H:i:s",time());
	$sql="insert into tbl_user(uName,gender,regTime) values('$name','$gender','$regtime')";
	$res=mysqli_query($conn,$sql);
	return $res;//返回执行结果 
}
/*修改用户信息模块函数---只能改“性别”
*@param <type> $uId	用户编号（自动）
*@param <type> $uName	用户名；
*@param <type> $gender	性别（1或0）；
*@param <type> $regTime 注册时间（当前时间）；
*/
function updateUser($name,$gender='1'){
	$conn=get_connect();
	$sql="update tbl_user set gender=$gender where uName='$name' ";//
	$res=mysqli_query($conn,$sql);
	mysqli_close();
	return $res;//返回执行结果 
}
function deleteUser($name){
	$conn=get_connect();
	$sql="delete tbl_user  where uName='$name' ";//
	$res=mysqli_query($conn,$sql);
	mysqli_close();
	return $res;//返回执行结果 
}
//insert模块调用
/*$res=addUser('杜共群起而攻之','1');//新增一个用户
echo date("Y-m-d H:i:s",time());
echo "新增用户：".($res?"成功":"失败");*/
//update模块调用
$res=updateUser('shq2');//修改一个用户
echo date("Y-m-d H:i:s",time());
echo "修改用户：".($res?"成功":"失败");
?>