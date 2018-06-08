<body>
<?php
define('ROOT_PATH',dirname(__FILE__));
echo  ROOT_PATH."\uploads".'<br>';
$filenamelist=scandir(ROOT_PATH."./uploads");
//print_r($filenamelist);
echo 'fileList:<br>';
for($i=2;$i<count($filenamelist);$i++){
    $file_path=ROOT_PATH."./uploads/".$filenamelist[$i];
    echo $filenamelist[$i] .'<br>';
    // echo '<a  href="download1.php">'.$filenamelist[$i] .'</a>'.'<br>';
}

?>
