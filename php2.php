<Doc>

<?php
  $addresses = [
    ["name" => "名前"    , "address" => "住所","phone" => "電話","email"=>"e-mail"],
    ["name" => "東京太郎" , "address" =>"東京都","phone" => "012-345-6789","email" => "taro@ezample.com"],
    ["name" => "工科花子" , "address" =>"北海道","phone" => "987-654-3210","email" => "hana@ezample.com"]
];


  function print_table($addresses){
   echo "<table border=1>";
  foreach($addresses as $array){
    echo "<tr>";
    echo "<td>".$array["name"]."</td>";
    echo "<td>".$array["address"]."</td>";
    echo "<td>".$array["phone"]."</td>";
    echo "<td>".$array["email"]."</td>";
    echo "</tr>";
  }
}
  print_table($addresses);

?>
