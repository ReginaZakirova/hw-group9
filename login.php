<?php
//Регистрация пользователей
$users = json_decode(file_get_contents('json/users.json'), true);
$login = $_POST['reg_login'] ?? '';
$login_occupied = False;
if ($login != '') {
    if (!isset($users[$login])) {
        $users[$login]['pass'] = md5($_POST['reg_pass']);
    }
    else {
        $login_occupied = True;
    }
}
//Авторизация
$login_failed = False;
if (isset($_POST['log_login']) ){
    $login = $_POST['log_login'];
    if (isset($users[$login]['pass']) && $users[$login]['pass'] == md5($_POST['log_pass'])) {
        if (isset($_COOKIE['user'])){
            $users[$_COOKIE['user']]['page'] = $_COOKIE['page'];
        }
        setcookie('user', $login, time() + 3600 * 24 * 7);
        setcookie('page', $users[$login]['page'], time() + 3600 * 24 * 7);
        header("Location: welcome.php");
    }
    else{
        $login_failed = True;
    }
}
file_put_contents('json/users.json', json_encode($users));
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
        <?php echo $login != '' && !$login_occupied ? "Пользователь $login успешно зарегистрирован!" : '';?>
        <?php echo $login_occupied ? "Пользователь с именем '$login' уже существует" : '';?>
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
        <?php echo $login_failed ? "Неверное имя или пароль" : '';?>
    </p>
</main>
<?php require 'php/footer.php';?>
</body>
</html>
