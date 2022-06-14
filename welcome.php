<?php
$pages = ['fact' => 'Факт', 'bitrix' => 'Битрикс'];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Добро пожаловать</title>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <?php include 'php/day-night.php';?>
    <?php include 'php/back-color.php';?>
</head>
<body>
<?php require 'php/header.php';?>
<main>
    <p>Вы успешно авторизовались!</p>
    <p><?php echo isset($_COOKIE['user']) && isset($_COOKIE['page']) ? $_COOKIE['user'] . ', последний раз вы посещали 
    страницу "' . $pages[$_COOKIE['page']] . '"' : "Вы еще не посещали ни одной страницы";?></p>
    <img src="img/welcome.jpg" alt="">
</main>
<?php require 'php/footer.php';?>
</body>
</html>
