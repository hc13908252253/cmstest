<?php
header("content-type:text/html;charset=utf-8");
$con=@mysqli_connect('localhost','5i','001600k3') or die('���Ӵ�������');
	mysqli_select_db($con,'info') or die('info����ʧ��'.mysqli_error());
	//mysqli_query($con,'use info');
	mysqli_set_charset($con,'utf8');//mysqli_query($con,'set names utf8');
$res=mysqli_query($con,'select * from student');
$tb='';
while($row=mysqli_fetch_assoc($res)){
	$ln='';
	foreach($row as $field=>$value){
		$ln.='<td>'. $value.'</td>';
		}
	 $tb.='<tr>'.$ln.'</tr>';
}

?>
<table border="1" width="60%">
<?php
	echo $tb.'<br>';
	?>
</table>