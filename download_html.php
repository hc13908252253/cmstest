<h1>�ļ��б�</h1><h3>(����ļ�������)</h3>
<table border="1" width="80%">
	<tr>
		<td>���</td>
		<td>�ļ���</td>
	</tr>
	<?php
	$file_dir = "./uploads/";  //����Ŀ¼���Ǳ�������¼��ļ���
	$filedatas = scandir($file_dir);
	for($i=2;$i<count($filedatas);++$i){
		echo "<tr>";
		echo "<td>".$i."</td>";
		echo "<td>";
        echo "<a href = 'download.php?filedata=".$file_dir."&filename=".$filedatas[$i]."'>".$filedatas[$i]."</a>";
		echo "</tb>";
		echo "</tr>";
	}
	?>
</table>