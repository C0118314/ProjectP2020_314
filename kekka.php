<?php
	$genkei = $_POST["genkei"];
	$credit = $_POST["credit"];
	$coupon = $_POST["coupon"];
	$number = $_POST["number"];
	$time = $_POST["time"];

	$out1 = $genkei / 1.1;
	$out2 = $credit + $coupon;
	$out2 = $out2 / 1.1;
	$out3 = $out1 + $out2;
	$out4 = $out3 / $number;
	$out5 = $number / 60;
	$out6 = $out3 / $time;

?>
<!DOCTYPE html>
<html lang="ja">
<head>

<meta name="viewport"
   content="width=320,
      height=480,
      initial-scale=1.0,
      minimum-scale=1.0,
      maximum-scale=2.0,
      user-scalable=yes" />


<style type="text/css">
table , td, th {
	border: 1px solid #595959;
	border-collapse: collapse;
}
td, th {
	padding: 30px;
	width: 300px;
	height: 25px;
}
th {
	background: #f0e6cc;
}
.even {
	background: #fbf8f0;
}
.odd {
	background: #fefcf9;
}
</style>
<meta charset="UTF-8">
<title>たのあん日報計算結果</title>
</head>
<body>
<a href = "keisan.php">前のページへ</a>

  <table>
	<tbody>
		<tr>
			<td>現金売上（税抜）</td>
			<?php echo "<td>".$out1."</td>"?>
		</tr>
		<tr>
			<td>掛売上（税抜）</td>
			<?php echo "<td>".$out2."</td>"?>
		</tr>
		<tr>
			<td>本日の総売上（税抜）</td>
			<?php echo "<td>".$out3."</td>"?>
		</tr>
		<tr>
			<td>客単価</td>
			<?php echo "<td>".$out4."</td>"?>
		</tr>
		<tr>
			<td>客回転率</td>
			<?php echo "<td>".$out5."</td>"?>
		</tr>
		<tr>
			<td>一人当1時間売上高</td>
			<?php echo "<td>".$out6."</td>"?>
		</tr>
	</tbody>
</table>
<p>入力した値</p>
<table>
	<tbody>
		<tr>
			<td>現金</td>
			<?php echo "<td>".$genkei."</td>"?>
		</tr>
		<tr>
			<td>クレジット</td>
			<?php echo "<td>".$credit."</td>"?>
		</tr>
		<tr>
			<td>クーポン</td>
			<?php echo "<td>".$coupon."</td>"?>
		</tr>
		<tr>
			<td>客数</td>
			<?php echo "<td>".$number."</td>"?>
		</tr>
		<tr>
			<td>総労働時間</td>
			<?php echo "<td>".$time."</td>"?>
		</tr>
	</tbody>
</table>

</body>
</html>
