<?php
setcookie('page', 'fact', time() + 3600 * 24 * 7);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Факт</title>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <?php include 'php/day-night.php';?>
    <?php include 'php/back-color.php';?>
</head>
<body>
<?php require 'php/header.php';?>
<main>
    <p>Вы посетили страницу Факт!</p>
</main>
<?php require 'php/footer.php';?>
</body>
</html>
