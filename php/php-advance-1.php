<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>phpadvance-1</title>
</head>
<body>

<?php

    if (!isset($_SESSION["visited"])){
        print('');
        $_SESSION["visited"] = 1;
    }else{
        $visited = $_SESSION["visited"];
        $visited++;

        print($visited.'回目の訪問です！');

        $_SESSION["visited"] = $visited;
    }

?>

</body>
</html>
