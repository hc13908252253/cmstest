<?php
header("content-type:text/html;charset=utf-8");
$html=file_get_contents('http://soft.cqgmy.cn:8091');
var_dump($http_response_header);
echo '<hr>'.htmlspecialchars($html);
?>