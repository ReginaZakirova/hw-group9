<?php
require "class/auth.php";
//Регистрация пользователей
$reg_login = $_POST['reg_login'] ?? NULL;
$reg_pass = isset($_POST['reg_pass']) ? md5($_POST['reg_pass']) : NULL;
$reg_result = -1;
if ($reg_login && $reg_pass){
    $auth = new auth($reg_login, $reg_pass);
    $reg_result = $auth->register();
}
//Авторизация
$log_login = $_POST['log_login'] ?? NULL;
$log_pass = isset($_POST['log_pass']) ? md5($_POST['log_pass']) : NULL;
$page = $_COOKIE['page'] ?? NULL;
$page_user = $_COOKIE['user'] ?? NULL;
$log_result = -1;
if ($log_login && $log_pass){
    $auth = new auth($log_login, $log_pass);
    $log_result = $auth->login($page_user, $page);
}
if ($log_result == 0) {
    header("Location: welcome.php");
}
//Удалим конфиденциальную информацию
unset($_POST['reg_login']);
unset($_POST['reg_pass']);
unset($_POST['log_login']);
unset($_POST['log_pass']);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Авторизация</title>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <?php include 'php/day-night.php';?>
    <?php include 'php/back-color.php';?>
</head>
<body>
<?php require 'php/header.php';?>
<main>
    <h4>Регистрация</h4>
    <form action="" method="post">
        <label>
            Логин:
            <input type="text" name="reg_login">
        </label>
        <label>
            Пароль:
            <input type="password" name="reg_pass">
        </label>
        <input type="submit" value="Зарегистрировать">
    </form>
    <p>
        <?php echo !is_null($reg_login) && $reg_result == 0 ? "Пользователь $reg_login успешно зарегистрирован!" : '';?>
        <?php echo $reg_result == 1 ? "Пользователь с именем '$reg_login' уже существует" : '';?>
        <?php echo $reg_result == 2 ? "Нет соединения с базой данных пользователей!" : '';?>
    </p>
    <h4>Авторизация</h4>
    <form action="" method="post">
        <label>
            Логин:
            <input type="text" name="log_login">
        </label>
        <label>
            Пароль:
            <input type="password" name="log_pass">
        </label>
        <input type="submit" value="Авторизоваться">
    </form>
    <p>
        <?php echo $log_result == 1 ? "Неверное имя или пароль" : '';?>
        <?php echo $log_result == 2 ? "Нет соединения с базой данных пользователей!" : '';?>
    </p>
</main>
<?php require 'php/footer.php';?>
</body>
</html>
