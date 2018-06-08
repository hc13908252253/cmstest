<?php
require_once '.common/config.php'; //引入配置文件
/*
 * 公共方法集，访问数据库
*/
function get_Connect() {
$connection = mysqli_connect($GLOBALS["cfg"]["server"]["adds"],
$GLOBALS["cfg"]["server"]["db_user"],$GLOBALS["cfg"]["server"]["db_psw"])
    or die(header("location: ./error.php?msg=数据库服务器参数错误"));
    $db = @mysql_select_db($GLOBALS["cfg"]["server"]["db_name"],$connection) or die(header("location: ./error.php?msg=数据库名不正确"));
    mysqli_query("set names utf8");
    return $connection;
}
/**
* 执行查询操作
*/
function execQuery($strQuery){
    $results = [];
    $connection = get_Connect();
    $rs = @mysqli_query($strQuery,$connection) or die(header("location:./error.php?msg=查询失败"));
    for ($i=0;$i<mysqli_num_rows($rs);$i++) {
        $results[$i] = mysqli_fetch_assoc($rs);//读取一条记录
    }//可用$results=mysqli_fetch_all($rs,MYSQL_ASSOC);取代该模块！
    mysqli_free_result($rs);//释放结果集
    mysqli_close();//关闭连接
    return $results;//返回查询结果
}
/**
 * 对数据表记录执行修改、删除和插入操作 header("location: ./error.php?msg=数据表操作失败")
 * @param <type> $strUpdate  sql语句
 */
function execUpdate($strUpdate){
    $connection = get_Connect();
    //执行SQL语句
    $rs = @mysqli_query($strUpdate,$connection) or die(header("location: ./error.php?msg=数据表操作失败"));
    $result = mysqli_affected_rows();
    mysqli_close();
    return $result;
}
?>
