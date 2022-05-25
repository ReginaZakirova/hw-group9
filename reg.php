<?
//$use_login = 'admin';
//$use_pass = 'admin'; md5(admin);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="styles/styles.php">
<title>Авторизация и Регистрация</title>
<style>
</style>
</head>
 <body>
  <?php
    include_once "scripts\day_night.php";
  ?>
  <main class="main">
    <?
      require_once "inc/header.php";
      ?>
  <form action="" method="post">
    <fieldset>
      <p>
        <legend>Авторизация</legend><br>
          <label>Логин:  <input type="text" size="15" name= "login" placeholder="введите логин">
          </label>
      </p><br>
      <p>
        <label>Пароль: <input type="password" name="pass" placeholder="введите пароль">
        </label>
      </p><br>
      <p>
        <input type="submit" name="send">
      </p>
    </fieldset>
  </form>
<?
  $use_login = 'admin';
  $use_pass = 'admin';// md5(admin);
  $pass = isset($_POST['pass']) ? md5($_POST['pass']) : Null;
  $_POST['pass'] = $pass;
  /*echo '<pre>'; 
  print_r($_POST);
  echo '<pre>';*/
  if ($use_login == $_POST['login'] & md5($use_pass) == $_POST['pass']  ) { 
     echo '<meta http-equiv="refresh" content="0;http://heap/hello_user.php">';
  }
   else {
    echo "Пара логин+пароль не верна или не существует";
  }
?>
  </div>
  <?
    require_once "inc/footer.php";
  ?>
</body>
</html> 