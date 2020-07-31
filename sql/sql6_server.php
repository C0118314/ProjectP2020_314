<?php
//ini_set('display_errors',1);
$pdo = new PDO(
'mysql:host=localhost;dbname=address_book;port=3306;
charset=utf8', 'c0118314', 'password');
$sql = "select id,name,address,phone,email from addresses";

if($_GET["check"]=="gets"){
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

	$stmt = $pdo->prepare("INSERT INTO addresses (id,name, address , phone , email) VALUES (?,?,?,?,? )");
	$stmt->execute(array($name,$address,$phone,$email));
}

if($contents["check"] == "search"){

	$word = $contents["word"];
	$stmt = $pdo->prepare("select * from addresses where name like ?");
	$stmt->execute(array("%".$word."%"));
	$addresses = $stmt->fetchall(PDO::FETCH_ASSOC);
	$json_string = json_encode($addresses,JSON_UNESCAPED_UNICODE);
  echo $json_string;

}

if($contents["check"] == "searchid"){

	$word = $contents["word"];
	$stmt = $pdo->prepare("select * from addresses where id = ?");
	$stmt->execute(array($word));
	$addresses = $stmt->fetchall(PDO::FETCH_ASSOC);
	$json_string = json_encode($addresses,JSON_UNESCAPED_UNICODE);
  echo $json_string;
}

if($contents["check"] == "update"){

  $id = $contents["id"];
  $name = $contents["name"];
	$address = $contents["address"];
	$phone = $contents["phone"];
  $email = $contents["email"];

	$stmt = $pdo->prepare("UPDATE addresses SET name = ?,address = ?,phone = ?,email = ? WHERE id = ?;");
  $stmt->execute(array($name,$address,$phone,$email,$id));

  $stmt = $pdo->prepare("select * from addresses where id = ?");
	$stmt->execute(array($id));
	$addresses = $stmt->fetchall(PDO::FETCH_ASSOC);
	$json_string = json_encode($addresses,JSON_UNESCAPED_UNICODE);
  echo $json_string;
}


if($contents["check"] == "delete"){
	$id = $contents["id"];

	$stmt = $pdo->prepare("delete from addresses where id = ?");
	$stmt->execute(array($id));
}

?>
