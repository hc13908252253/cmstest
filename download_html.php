<center>
<h1>文件列表</h1>
<table border="1">
	<tr>
		<td>序号</td>
		<td>文件名</td>
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