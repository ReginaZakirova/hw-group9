<? require_once($_SERVER['DOCUMENT_ROOT'].'/header.php'); ?>
<main>
<? 
$grant = false;
if(!isset($_POST['login']) && !isset($_POST['password']) && !isset($_GET['registr']) && !isset($_POST['login_registr'])){?>
<form action="" method="POST">
    Ваш логин: <input type="text" name="login"><br><br>
    Ваш пароль: <input type="password" name="password"><br>
    <input type="submit" value="Войти">
</form>
<a href="index.php?registr=yes">Зарегистрироваться</a>
<? }
elseif(isset($_GET['registr']) && $_GET['registr'] == 'yes'){ ?>
  <form action="index.php" method="POST">
    Придумайте логин: <input type="text" name="login_registr"><br><br>
    Придумайте пароль: <input type="password" name="password_registr"><br>
    <input type="submit" value="Зарегистрироваться">
</form>  
<? }
elseif(isset($_POST['login_registr']) && isset($_POST['password_registr'])){
    echo "<h1>Вы успешно зарегистрировались!</h1>";
    $access_file = htmlspecialchars(file_get_contents('access.php'));
    $new_access_file = htmlspecialchars_decode(mb_substr($access_file,0,-11)."
    '".$_POST['login_registr']."'=>'".sha1($_POST['password_registr'])."',".mb_substr($access_file,-11,-4).'>');
    file_put_contents('access.php', $new_access_file);
}
if(isset($_POST['login']) && isset($_POST['password'])){
    require_once($_SERVER['DOCUMENT_ROOT'].'/getpost/access.php');
    if(isset($access[$_POST['login']])){
        if($access[$_POST['login']] == sha1($_POST['password'])){
            $grant=true;
        }
    }
    if($grant==false){ ?>
    <p>Данный пользователь не найден в системе</p>
    <form action="" method="POST">
        Ваш логин: <input type="text" name="login"><br><br>
        Ваш пароль: <input type="password" name="password"><br>
        <input type="submit" value="Войти">
    </form>
    <a href="index.php?registr=yes">Зарегистрироваться</a>
    <? }
}
if($grant==true){
    echo "<p style ='margin: 0px;'>Последняя посещенная страница: <b>".$_COOKIE['last_page']."</b></p>";
    echo '<h1>Приветствую тебя '.$_POST['login'].' </h1>';
} ?>
</main>
<? require_once($_SERVER['DOCUMENT_ROOT'].'/footer.php'); ?>