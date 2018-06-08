<?php
header("content-type:text/html;charset=utf-8");
require './common/connection.php';
$con=get_connect();
$res=mysqli_query($con,'select * from student');
$result=mysqli_fetch_all($res,MYSQLI_BOTH);

echo '<pre>';
print_r($result);
echo '</pre>';
?>