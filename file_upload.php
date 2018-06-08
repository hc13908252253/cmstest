<?php
header("content-type:text/html;charset=utf-8");
if(isset($_FILES['myfile0']) && $_FILES['myfile0']['error']==0){
	//上传成功
	move_uploaded_file($_FILES['myfile0']['tmp_name'],'./uploads/5.dat');
	echo '上传成功！';
}else{
	echo '上传失败！';
}
if(isset($_FILES['myfile1']) && $_FILES['myfile1']['error']==0){
	//上传成功
	move_uploaded_file($_FILES['myfile1']['tmp_name'],'./uploads/6.dat');
	echo '上传成功！';
}else{
	echo '上传失败！';
}
if(isset($_FILES['myfile2']) && $_FILES['myfile2']['error']==0){
	//上传成功
	move_uploaded_file($_FILES['myfile2']['tmp_name'],'./uploads/7.dat');
	echo '上传成功！';
}else{
	echo '上传失败！';
}
?>