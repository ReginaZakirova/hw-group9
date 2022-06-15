<?
if($_POST){
    require_once('class.php');
    $login = htmlspecialchars($_POST['login_registr']);
    $password = htmlspecialchars($_POST['password_registr']);
    $name = htmlspecialchars($_POST['name']);
    $user = new Users($login, $password);
    $token = $user->addUser($name);
    setcookie('token',$token, time()+3600);
    header( 'Location: /');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>HW 1 урок</title>
    <link rel='stylesheet' href="/style/style.css">
    <script src="/js/script.js"></script>
<style>
    form{
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%,-50%);
    }
    form input{
        border-radius: 0px;
    }
</style>
</head>
<body>
<form action="" method="POST">
    Ваше имя <input type="text" name="name"><br>
    Придумайте логин: <input type="text" name="login_registr"><br><br>
    Придумайте пароль: <input type="password" name="password_registr"><br>
    <input type="submit" value="Зарегистрироваться">
</form>
</body>
</html> 