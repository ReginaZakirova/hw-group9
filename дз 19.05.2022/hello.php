<?php
session_start([
    'cookie_lifetime' => 86400,
]);

// ссылка открывает сайт в новом окне и если вернуться 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/styleTasks.css">
    <title>Document</title>
</head>
<body>
<?php
    require "header.php";
?>
    <main>
        <h1> приветственная страница </h1>
        <h2><?php 
        if ($_SESSION['name']) {
            echo 'последний раз вы посещали сайт ' . $_SESSION['name'];
        } ?>
        </h2>

    </main>
<?php
require "footer.php";
?>   
</body>
</html>