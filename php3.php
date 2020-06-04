<?php
  $addresses = [
    ["name" => "東京太郎" , "address" =>"東京都","phone" => "012-345-6789","email" => "taro@ezample.com"],
    ["name" => "工科花子" , "address" =>"北海道","phone" => "987-654-3210","email" => "hana@ezample.com"]
];
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

if(isset($_POST['name'])){
$comment = $_POST['name'];
$addresses[] = array("name"=>$_POST["name"],"address"=>$_POST["address"],"phone"=>$_POST["phone"],"email"=>$_POST["email"]);
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<style type="text/css">
table, td, th { border: 1px #808080 solid; }
</style>
<meta charset="UTF-8">
<title>php2.php</title>
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
 <form action =php3.php method=post>
  名前<input type=text name=name>
  住所<input type=text name=address>
  電話<input type=text name=phone>
  Email<input type=text name=email>
<input type=submit value=送信>
</form>
</body>
</html>
