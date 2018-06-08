<?php
header("content-type:text/html;charset=utf-8");
/**
*初始变量
*/
//数据库参数配置
$cfg=['server'=>
['adds'=>'localhost','db_user'=>'root','db_pwd'=>'root','db_name'=>'info','page_size'=>20]
];
/**
*网站错误处理方法
*@param <type>	$error	错误编号
*@param <type>	$errstr	错误信息
*/
function err($error,$errstr){
//使用响应头函数header()将错误信息转发到错误显示页面
die(header("location:.error.php?msg=$errstr"));
	//header()是web服务器响应头函数，它有三种用法：
	/*
	*1.设定编码格式：header('content-type:text/html;charset=utf-8');
	*2.响应404消息：herder('http://1.1 404 NOT Found');
	*3.页面重定向：header('location:login.php');
	*/
}
//设置错误捕获器
//set_error_handler("err",E_Error);
?>
