<? require_once($_SERVER['DOCUMENT_ROOT'].'/header.php'); ?>
<style>
form *{
    border-radius: 0px;
}
</style>
<?
//pre($_POST);
if(!isset($_POST['password']) && !isset($_POST['login'])){
?>
<div>
    <p>Создать страницу для ввода имени пользователя (login) и пароля (passwd). <br>
    Если пользователь вводит правильную пару (login/passwd), то сервер выдает страницу с сообщением, что доступ к секретным страницам открыт. Login предлагается выбирать из списка.</p>
</div><br>
<form action="" method="POST">
Ваш логин: <select name="login">
        <option>Tom</option>
        <option>Bob</option>
        <option>Jerry</option>
    </select><br>
    Ваш пароль: <input type="text" name="password"><br>
    <input type="submit" value="Войти">
</form>
<? 
}
elseif(sha1($_POST['password']) == 'd135b5130cd6b446693ecb1cfe81e3721f66079f' && $_POST['login'] == 'Bob'){
    echo '<h1 style="color: green">Вы получили доступ к секретным данным </h1>';
}
else{ ?>
<div>
    <p><span style="color: red">Введенные данные неверные!</span><br>
    <p>Создать страницу для ввода имени пользователя (login) и пароля (passwd). <br>
    Если пользователь вводит правильную пару (login/passwd), то сервер выдает страницу с сообщением, что доступ к секретным страницам открыт. Login предлагается выбирать из списка.</p>
</div><br>
<form action="" method="POST">
Ваш логин: <select name="login">
        <option>Tom</option>
        <option>Bob</option>
        <option>Jerry</option>
    </select><br>
    Ваш пароль: <input type="text" name="password"><br>
    <input type="submit" value="Войти">
</form>
<? }
//login Bob 
//password asdasdasda
?>
<? require_once($_SERVER['DOCUMENT_ROOT'].'/footer.php'); ?>