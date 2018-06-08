<?php
header("content-type:text/html;charset=utf-8");
require './common/connection.php';
$con=get_connect();
$rs=mysqli_query($con,'select * from student where classid="16class1" ORDER BY studentid ASC');
//表头
$tab_head='用户登录清单';
$cols_name=['编号','姓名','学号','密码','班号'];	//表头栏目名数组
$tab_cols_name='';			//html格式栏目名table字符串
for($i=0;$i<count($cols_name);$i++){//外理列名汉字
	$tab_cols_name.='<td>'.$cols_name[$i].'</td>';
	}
$tab_cols_name='<tr>'.$tab_cols_name.'</tr>';

//表体
$tab_body='';
while($row=mysqli_fetch_assoc($rs)){//按记录取值
	$body_line='';
	foreach($row as $col=>$value){
		$body_line.='<td>'.$row[$col].'</td>';
	}
	$tab_body.='<tr>'.$body_line.'</tr>';
}
?>
<center>
<table border="1" width="60%">
<?php
echo $tab_head.'<br>';
echo $tab_cols_name.'<br>'; 
echo $tab_body.'<br>';
?>
</table>
</center>