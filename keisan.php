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

ul li {
    list-style: none;
	margin-top: 10px;
}
ul li.msg {
    margin-bottom: 40px;
}
label {
    margin-right: 10px;
    width:100px;
    float: left;
}
ul {
    width: 500px;
    margin: 0 auto;
}
input#button {
    display: block;
    margin: 0 auto;
}


input[type="number"]::-webkit-outer-spin-button,
input[type="number"]::-webkit-inner-spin-button {
	-webkit-appearance: none;
    margin: 0;
}

input[type="number"] {
    -moz-appearance:textfield;
}
</style>
<meta charset="UTF-8">
<title>たのあん日報計算</title>
<style type="text/css">
input[type="number"],
number {
    padding: 0.8em;
    outline: none;
    border: 1px solid #DDD;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    font-size: 16px;
}
number {
    width: 300px;
}
</style>

</head>
<body>


	<form action =kekka.php method=post>
		<ul>
    		<li>
				<label>現計</label>
				<input type=number name=genkei required>
			</li>
    		<li>
				<label>クレジット</label>
				<input type=number name=credit required>
				</li>
    		<li>
				<label>クーポン</label>
				<input type=number name=coupon required>
			</li>
    		<li>
				<label>客数</label>
				<input type=number name=number required>
			</li>
			<li>
				<label>総労働時間</label>
				<input type=number name=time step="0.01" required>
			</li>
			<li>
				<p class="help-block">※送信前に値の確認をしてください！</p>
				<input type=submit value=送信 required>
			</li>
		</ul>
	</form>

</body>
</html>
