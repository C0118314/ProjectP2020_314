<?php
$sql = "select * from addresses";
$pdo = new PDO(
'mysql:host=localhost;dbname=address_book;port=3306;
charset=utf8', c0118314, password);
$sql1 = $pdo->query($sql);

$addresses = array();

var_dump($addresses);

foreach ($sql1 as $row) {
    $addresses[] = $row;
}


$json_string = json_encode($addresses,JSON_UNESCAPED_UNICODE);
echo $json_string;


?>
