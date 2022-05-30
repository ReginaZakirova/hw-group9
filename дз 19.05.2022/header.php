<?php
session_start();
if ($_POST['color']) {
    $_SESSION['color'] = $_POST['color'];
}





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/styleHeader.css">
    <title>header</title>
</head>
<body>
    <header class="page-header">
        <nav>
            <div class="mobilMenu" id="mobilMenu">м</div>
            <ul class="nav-menu menuOpen" id="navMenu">
                <li>
                    <a href="index.php?flag=1" target="_blank" title="открыть главную страницу">главная</a>
                </li>
                <li>
                    <a href="tasks.php" target="_blank" title="открыть задачи">задачи циклы</a>
                </li>
                <li>
                    <a href="Table.php" target="_blank" title="открыть таблицу">ссылка на таблицу</a>
                </li>
                <li>
                    <a href="tasksArray.php" target="_blank" title="открыть задачи">задачи массивы</a>
                </li>
                <li>
                    <a href="authorizationPage.php" target="_blank" title="открыть задачи">авторизация</a>
                </li>
                <li>
                    <form action="" method="post">       
                        <legend>цвет фона</legend>
                        <select name="color" style='width: 50px;'>
                            <option value="green" style='background-color: green;'></option>
                            <option value="blue" style='background-color: blue;'></option>
                            <option value="red" style='background-color: red;'></option>
                            <option value="grey" style='background-color: grey;'></option>
                        </select>
                        <input type="submit" value="выбрать">
                    </form>
                </li>
            </ul>
        </nav>
        <div class="header-icon">
        </div>
    </header>
    <script src="scripts/mobilBt.js"></script>
</body>
</html>