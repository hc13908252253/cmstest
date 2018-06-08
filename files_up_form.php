<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>文件上传</title>
 </head>
  <body>
        <form method="post" action="files_upload.php" enctype="multipart/form-data">
          请选择您要上传的文件：<br/>
            <input type="file" name="myfile0"><br>
            <input type="file" name="myfile1"><br>
            <input type="file" name="myfile2"><br>
            <input type="file" name="myfile3"><br>
            <input type="file" name="myfile4"><br>
            <input type="submit" value="上传">
        </form>
      <div>
          <input type="button" value="下载" onclick="download.php">
      </div>
 </body>
</html>
