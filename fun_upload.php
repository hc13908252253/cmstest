<?php
/**
 * @param $fileInfo
 * @param string $path
 * @param int $maxSize
 * @return string
 */
function uploadFile($fileInfo, $path="uploads", $maxSize=10485760){	//文件大小10M==10485760=10*1024*1024
$filename=$fileInfo["name"];
$tmp_name=$fileInfo["tmp_name"];
$size=$fileInfo["size"];
$error=$fileInfo["error"];
$type=$fileInfo["type"];

//目的信息
if (!file_exists($path)) {  
  mkdir($path,0777,true);//创建目录
  chmod($path, 0777);//改变文件模式,所有人都有执行权限、写权限、度权限
}

$destination=$path."/".$filename;
//当文件上传成功，存入临时文件夹，服务器端开始判断
if ($error==0) {
  if ($size>$maxSize) {
    exit("上传文件过大！");
  }
    if (!is_uploaded_file($tmp_name)) {
    exit("上传方式有误，请使用post方式");
  }
    if (@move_uploaded_file($tmp_name, $destination)) {//@错误抑制符，不让用户看到警告
    echo "文件".$filename."上传成功!";
  }else{
    echo "文件".$filename."上传失败!";
  }
}else{
  switch ($error){
    case 1:  echo "超过了上传文件的最大值，请上传2M以下文件";
      break;
    case 2:   echo "上传文件过多，请一次上传20个及以下文件！";
      break;
    case 3:  echo "文件并未完全上传，请再次尝试！";
      break;
    case 4:   echo "未选择上传文件！";
      break;
    case 7:   echo "没有临时文件夹";
      break;
  }
}
return $destination;
}