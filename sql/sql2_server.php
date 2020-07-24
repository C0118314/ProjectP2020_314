<?php



$sql = "select * from addresses";
$pdo = new PDO(
'mysql:host=localhost;dbname=address_book;port=3306;
charset=utf8', c0118314, password);

$addresses = $pdo->query($sql) -> fetchAll(PDO::FETCH_ASSOC);

//$addresses = array();
//foreach ($sql1 as $row) {
//    $addresses[] = $row;
//}
$json_string = json_encode($addresses,JSON_UNESCAPED_UNICODE);
echo $json_string;


?>
