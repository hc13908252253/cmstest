<?php
header("content-type:text/html;charset=uft-8");
define('NO_CHECK_LOGIN',true);//区别登录页面与非登录页面
/**
 * Created by PhpStorm.
 * User: haiqing si
 * Date: 2018/5/31
 * Time: 22:38
 */
require './init.php';
//处理表单
if ($_POST) {
    $name = I('name', 'post', 'html');
    $password = I('password', 'post', 'string');//根据用户名提取密码
    $data = db_fetch(DB_ROW, 'select  `id`,`name`,`password` from `cms_admin` where `name`=?', 's', $name);//判断用户名和密码
    if ($data && $password == $data['password']) {
        //保存登录信息到session
        $_SESSION['cms']['admin'] = ['id' => $data['id'], 'name' => $data['name']];
        redirect('index.php');
    }
    display([false,'登录失败：用户名或密码错误。']);
}else{
    display();
}
/**
 * @param null $msg
 */
function display($msg=null){
    require './view/login.html';
    exit;
}