<?php
header("content-type:text/html;charset=utf-8");
require('./common/connection.php');
$con=get_connect();
$res=mysqli_query($con,'select * from student');
$tb='';
while($row=mysqli_fetch_assoc($res)){//����ȡ������;����
	$ln='';
	foreach($row as $field=>$value){
		$ln.='<td>'.$value.'</td>';//�
		}
		$tb.='<tr>'.$ln.'</tr>';//�
}
?>
<center>
<table border="1" width="60%">
	<?php
	header("content-type:text/html;charset=utf-8");
	echo '��ͷ----ͷ';
	echo $tb;
	?>
</table>
</center>