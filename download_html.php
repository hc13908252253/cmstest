<center>
<h1>�ļ��б�</h1>
<table border="1">
	<tr>
		<td>���</td>
		<td>�ļ���</td>
	</tr>
	<?php
	$file_dir = "./download/";
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
</center>