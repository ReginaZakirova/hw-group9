<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/styleTasks.css">
    <link rel="stylesheet" href="style/headerOff.css">
    <title>Document</title>
</head>
<body>
<?php
    require "header.php";
?>
    <main>
        <form action="" method="get">
            <label>придумайте логин
                <input type="text" name="name">
            </label><br>
            <label>придумайте пароль
                <input type="password" name="password">
            </label>
            <input class="submit" type="submit" value="регистрация">
            
        </form>
        <?php
        if ($_GET['name'] && $_GET['password']) {
            $a = $_GET['name'];
            $b = $_GET['password'];
            $kk = "authorizationPage.php?name=$a&password=$b";
            header("Location: http://hw/%D0%B4%D0%B7%2019.05.2022/$kk");
            exit( );
        }
        //чтобы войти по новым данным нужно как то их сохранить в базу я так понял это будет дальше поэтому пока войти можно только по одному паролю
        ?>

    </main>
<?php
require "footer.php";
?>   
</body>
</html>