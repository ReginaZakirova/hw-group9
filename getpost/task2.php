<? require_once($_SERVER['DOCUMENT_ROOT'].'/header.php'); ?>
<div>
    <p>Дана форма для ввода логина и пароля. Необходимо вывести на экран имя пользователя, а пароль захешировать и сохранить его в массив $_POST</p>
</div><br>
<? echo ($_POST['login'])? "Имя пользователя ".$_POST['login'] : ''; 
if($_POST['password']) $_POST['password'] = sha1($_POST['password']);
pre($_POST);
?>
<form action="" method="POST">
    Ваш логин: <input type="text" name="login"><br><br>
    Ваш пароль: <input type="text" name="password"><br>
    <input type="submit" value="Войти">
</form>
<? require_once($_SERVER['DOCUMENT_ROOT'].'/footer.php'); ?>