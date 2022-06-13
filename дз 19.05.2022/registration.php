<?php
require_once 'authorizationClass.php';
$connection2 = new authorization('localhost', 'Anton', 'pasw', 'autho');
$connection2 -> encryption($connection2 -> websitePass);

$connection2 -> dataValidation($connection2 -> websiteLog, $connection2 -> websitePass);
$connection2 -> registration($connection2 -> websiteLog, $connection2 -> websitePass);
?>

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
                <input type="text" name="login">
            </label><br>
            <label>придумайте пароль
                <input type="password" name="password">
            </label>
            <input class="submit" type="submit" value="регистрация">
            <a href="authorizationPage.php" target="_blank" title="регистрация">страница авторизации</a>
            
        </form>

    </main>
<?php
require "footer.php";
?>   
</body>
</html>