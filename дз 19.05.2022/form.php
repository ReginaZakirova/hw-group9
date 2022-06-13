<?php
    session_start([
        'cookie_lifetime' => 86400,
    ]);
        if ($_GET['course']) {
            $_SESSION['name'] = $_GET['course'];
        }
    
   
    if ($_GET['course'] == 'факт') {
        header('Location: https://fact.digital/');
    }
    if ($_GET['course'] == 'битрикс') {
        header('Location: https://www.bitrix24.ru/');
    }

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
        <label>логин
            <input type="text" name="login">
        </label><br>
        <label>пароль
            <input type="password" name="password">
        </label>
        <input class="submit" type="submit" value="вход">
        <a href="registration.php" target="_blank" title="регистрация">регистрация</a>
    </form>
    <form action="" method="get">
        <legend>на какой сайт перейти?</legend>
        <select name="course">
            <option value="факт">факт</option>
            <option value="битрикс">битрикс</option>
        </select>
        <input class="submit" type="submit" value="переход на сайт">
    </form>
</body>
</html>