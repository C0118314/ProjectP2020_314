<?php

   if(isset($_POST['add'])) {
      if(is_uploaded_file($_FILES['file']['tmp_name'])){
         echo "Successful:ファイルのアップロードに成功しました。";
      }else{
         echo "Error:ファイルが指定されていません。";
      }
   }
?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>phpadvance-2</title>
</head>
<body>
<h1>ファイルアップローダー</h1>

<form enctype="multipart/form-data"  action="phpadvance-2.php" method="POST">

  <input name="file" type="file" />
  <input type="submit" value="送信" />
</form>

</body>
</html>
