<?php
//此方法是比较正式的按数据流、并以缓冲区进行。
//header('content-Type:text/html;charset=utf-8');
define('ROOT_PATH',dirname(__FILE__));
$filenamelist=scandir(ROOT_PATH."./uploads");

/**
 * 含文件名的全文件路径
 * @param $file_path
 */
function downfile($file_path)
{
    $file_path=icnov('utf-8','gb2312','$file_path');
    if(!file_exists($file_path)){exit('文件不存在！');}
    $filename = basename($file_path);
    $size = filesize($file_path);
    $filename = basename($file_path);
//设置下载页面信息
    header('content-type:octet-stream');
    header('content-length.$size');
    header("content-disposition:attachment;filename={$filename}");
//以只读方式打开文件
    $fp = fopen($filename, 'r');
    $buffer = 1024;
    $count = 0;
    while (!feof($fp) && ($size - $count) > 0) {
        echo fread($fp, $buffer);
        $count += $buffer;
    }
    fclose($fp);
}

?>