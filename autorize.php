<? 
require_once($_SERVER['DOCUMENT_ROOT'].'/header.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/class.php'); 
if(isset($_POST['login']) && isset($_POST['password'])){
    $login = htmlspecialchars($_POST['login']);
    $password = htmlspecialchars($_POST['password']);
    $user = new Users($login, $password);
    $user_db = $user->finduser();
    if($user_db!= false){
        if($user_db['token'] < date_create()){
            $token = $user->updtoken();
            if(!isset($token['err'])){
                setcookie('token', $token);
                header( 'Location: /');
            }
        }
    }
    else echo "Пользователь не найден!";
}
?>

<main>
<form action="" method="POST">
    Логин: <input type="text" name="login"><br><br>
    Пароль: <input type="password" name="password"><br>
    <input type="submit" value="Войти">
</form>
<a href="/registration.php">Регистрация</a>
</main>
<? require_once($_SERVER['DOCUMENT_ROOT'].'/footer.php'); ?>