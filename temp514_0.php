<?php
header("content-type:text/html;charset=utf-8");
require('./common/connection.php');
$con=get_connect();
$res=mysqli_query($con,'select * from student');
$tb='';
while($row=mysqli_fetch_assoc($res)){//按行取，索引;并联
	$ln='';
	foreach($row as $field=>$value){
		$ln.='<td>'.$value.'</td>';//妙！
		}
		$tb.='<tr>'.$ln.'</tr>';//妙！
}
?>
<center>
<table border="1" width="60%">
	<?php
	header("content-type:text/html;charset=utf-8");
	echo '表头----头';
	echo $tb;
	?>
</table>
</center>