<?php
header("content-type:text/html;charset=utf-8");
if(isset($_FILES['myfile']) && $_FILES['myfile']['error']==0){
    //上传成功
    move_uploaded_file($_FILES['myfile']['tmp_name'],'./uploads/8.dat');
    echo '上传成功！';
}else{
    echo '上传失败！';
}
?>