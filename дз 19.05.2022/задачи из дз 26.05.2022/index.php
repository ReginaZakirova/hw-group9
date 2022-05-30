<?php
    session_start();
    print_r($_SESSION['time']);

    $_SESSION['name'] = $_GET['User'];
    print_r($_GET['User']);
    if ($_GET['User']) {
        $time = date('Y,m,d h-m-s');
    }
    $_SESSION['time'] = $time;
    echo '<br>';

    $Dtime = 0;
    if ($_SESSION['name2']) {
        if ($_SESSION['name2'] == $_GET['User']) {
            $time3 = time();
        }
        else {
            $_SESSION['name2'] = $_GET['User'];
            $_SESSION['time2'] = time();
        }
    }
    else {
        $_SESSION['name2'] = $_GET['User'];
        $_SESSION['time2'] = time();
    }
    if ($time3 !== null &&  $_SESSION['time2'] !== null) {
        $Dtime = $time3 - $_SESSION['time2'];
    }
    
    echo 'вы вошли на сайт ' . $Dtime . ' секунд назад';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <legend>ваше имя?
        <input type="text" name="User"> 
        <input type="submit">
    </form>
    <a href="hello.php">ссылка на хелло</a>
</body>
</html>