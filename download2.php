<meta charset="utf-8" />
<?php
$filename=$_GET['filename'];
if($filename){
	header("Content-Disposition:attachment;filename=$filename");
	readfile($filename);
	exit;
}
?>
<!DOCTYPE html>
<html>
<head>
<title>文件下载</title>
<meta charset="utf-8" />
</head>
<body>
<a href="download2.php?filename=./downloads/aa.php">通过程序下载aa.php</a>
</body>
</html>