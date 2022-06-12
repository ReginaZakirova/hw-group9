<?php
//Параметры соединения с базой
$hostname = 'localhost';
$username = 'Konstantin';
$password = '123';
$dbname = 'users';
$dbconn = mysqli_connect($hostname, $username, $password, $dbname);
mysqli_set_charset($dbconn, 'utf8');
//Регистрация пользователей
$sql = 'SELECT user, pass FROM users';
$users = mysqli_fetch_all(mysqli_query($dbconn, $sql), MYSQLI_ASSOC);
$reg_login = $_POST['reg_login'] ?? NULL;
$login_occupied = False;
foreach ($users as $value){
    if ($value['user'] == $reg_login){
        $login_occupied = True;
    }
}
if (!is_null($reg_login) && !$login_occupied) {
    $reg_pass = md5($_POST['reg_pass']);
    $sql = "INSERT INTO `users` VALUES (NULL,'$reg_login','$reg_pass', NULL)";
    mysqli_query($dbconn, $sql);
}
//Авторизация
$log_login = $_POST['log_login'] ?? NULL;
$log_pass = isset($_POST['log_pass']) ? md5($_POST['log_pass']) : NULL;
$login_failed = False;
if (!is_null($log_login) && !is_null($log_pass)){
    $sql = "SELECT user, pass, page FROM users WHERE user = '$log_login'";
    $users = mysqli_fetch_all(mysqli_query($dbconn, $sql), MYSQLI_ASSOC);
    if (count($users) > 0 && $users[0]['user'] == $log_login && $users[0]['pass'] == $log_pass) {
        $page = $_COOKIE['page'] ?? NULL;
        $page_user = $_COOKIE['user'] ?? NULL;
        $sql = "UPDATE `users` SET `page`='$page' WHERE user = '$page_user'";
        mysqli_query($dbconn, $sql);
        $sql = "SELECT page FROM users WHERE user = '$log_login'";
        $arr = mysqli_fetch_all(mysqli_query($dbconn, $sql), MYSQLI_ASSOC);
        mysqli_query($dbconn, $sql);
        setcookie('user', $log_login, time() + 3600 * 24 * 7);
        setcookie('page', $arr[0]['page'], time() + 3600 * 24 * 7);
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
        <?php echo !is_null($reg_login) && !$login_occupied ? "Пользователь $reg_login успешно зарегистрирован!" : '';?>
        <?php echo $login_occupied ? "Пользователь с именем '$reg_login' уже существует" : '';?>
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
