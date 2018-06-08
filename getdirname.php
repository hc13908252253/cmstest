<?php
header("content-type:text/html;charset=utf-8");
$dir= getcwd();
$files1 = scandir($dir);
$files2 = scandir($dir, 1);
echo "<pre>";
echo "目录：$dir.<br>.文件名：";
print_r($files1);
echo"</pre>";
print_r($files2);
echo filetype($files1[6]);
?>