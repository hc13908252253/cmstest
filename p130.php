<?php
header("content-type:text/html;charset=utf-8");
//平方和
function f(){
	$par=func_get_args();
	$sum=0;
	foreach($par as $value){
		$sum+=$value*$value;
	}
	return $sum;
}
$s=f(1,2,3,4,5);
echo "1,2,3,4,5的平方和=$s<br/>";
function bar(){
	$param=func_get_args();
	return implode('-',$param);
}
echo "<br>bar(1,2,3,4,5)=".bar(1,2,3,4,5);
echo "<br>bar('a','b','c','d')=".bar('a','b','c','d');
?>