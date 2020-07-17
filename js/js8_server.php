<?php
$addresses = [
    ["name" => "東京太郎" , "address" =>"東京都","phone" => "012-345-6789","email" => "taro@ezample.com"],
    ["name" => "工科花子" , "address" =>"北海道","phone" => "987-654-3210","email" => "hana@ezample.com"]
];

$json_string = json_encode($addresses,JSON_UNESCAPED_UNICODE);
echo $json_string;

?>
