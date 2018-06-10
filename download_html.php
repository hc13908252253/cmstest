<h1>文件列表</h1><h3>(点击文件名下载)</h3>
<table border="1" width="80%">
	<tr>
		<td>序号</td>
		<td>文件名</td>
	</tr>
	<?php
	$file_dir = "./uploads/";  //下载目录，是本程序的下级文件夹
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