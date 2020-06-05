
<?php

  if(file_exists("addresses.json")){

  $file = "addresses.json";
  $jsonfile = file_get_contents($file);
  $addresses = json_decode($jsonfile,true);


  }else{
  echo "ファイルが存在しません";
  file_put_contents("addresses.json",$json);
  }

function print_table($addresses){
  foreach($addresses as $array){
    echo "<tr>";
    echo "<td>".$array["name"]."</td>";
    echo "<td>".$array["address"]."</td>";
    echo "<td>".$array["phone"]."</td>";
    echo "<td>".$array["email"]."</td>";
    echo "</tr>";
  }
}


if(!empty($addresses)){

$addresses[] = array("name"=>$_POST["name"],"address"=>$_POST["address"],"phone"=>$_POST["phone"],"email"=>$_POST["email"]);
$json = json_encode($addresses,JSON_UNESCAPED_UNICODE);

file_put_contents("addresses.json",$json);


}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
<style type="text/css">
table, td { border: 1px #808080 solid; }
</style>
<meta charset="UTF-8">
<title>php5.php</title>
</head>
<body>
  <table>
    <tr>
      <td>名前</td>
      <td>電話</td>
      <td>住所</td>
      <td>e-mail</td>
    </tr>

    <?php print_table($addresses);?>
  </table>

  <form action =php5.php method=post>
  名前<input type=text name=name>
  住所<input type=text name=address>
  電話<input type=text name=phone>
  Email<input type=text name=email>
<input type=submit value=送信>
</form>

</body>
</html>
