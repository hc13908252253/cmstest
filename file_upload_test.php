<?php
header("content-type:text/html;charset=utf-8");
//上传文件处理程序
//$_FILES(上传)文件变量
echo "<pre>";
echo var_dump($_FILES);
echo "</pre>";
echo $_FILES['myfile']['name']."<br>";		//上传文件名
echo $_FILES['myfile']['size']."<br>";		//上传大小
echo $_FILES['myfile']['error']."<br>";	//上传是否成功
echo $_FILES['myfile']['type']."<br>";		//上传后的文件MIME类型，如image/jpeg
echo $_FILES['myfile']['tmp_name']."<br>";	//上传后的临时文件名，如image/jpeg
echo "当前时间：".date('h:i:s')."<br />";

//暂停最长30 秒
sleep(28);

//重新开始
echo "结束时间：".date('h:i:s');
?>