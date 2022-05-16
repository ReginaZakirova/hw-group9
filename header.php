<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Домашняя страница</title>
        <link href="css/table.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <?php
        if(date("H") >= 20 || date("H") < 8) # в интервале c 20 до 8 утра подключаем ночные стили (меняем цвет фона и заголовков)
        {
            echo '<link href="css/night_styles.css" rel="stylesheet">';
        }
    ?>
</head>
<body>

    <a href="index.php">
        <div class="main_header"><img src="images/logo.png"></div>
    </a>

