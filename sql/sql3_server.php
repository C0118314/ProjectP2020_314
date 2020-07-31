<?php
new PDO(
'mysql:host=localhost;dbname=address_book;port=3306;
charset=utf8', c0118314, password);
$sql = "select * from addresses";

if($_GET["check"]="get"){
	$addresses = $pdo->query($sql) -> fetchAll(PDO::FETCH_ASSOC);
	$json_string = json_encode($addresses,JSON_UNESCAPED_UNICODE);
	echo $json_string;
}

$json = file_get_contents("php://input");
$contents = json_decode($json, true);

if($contents["check"] == "add"){
	$name = $contents["name"];
	$address = $contents["address"];
	$phone = $contents["phone"];
	$email = $contents["email"];

	$stmt = $pdo->prepare("INSERT INTO addresses (name, address , phone , email) VALUES (?,?,?,? )");
	$stmt->execute(array($name,$address,$phone,$email));
}
?>
