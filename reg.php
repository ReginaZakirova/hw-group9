<?
session_start();
//$use_login = 'admin';
//$use_pass = 'admin'; md5(admin);
//session_destroy(); удаление текущей сессии
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
  $log_pas = [
    'Bob' => [md5('123')],
    'Tom' => [md5('321')],
    'Sam' => [md5('777')]
  ];
  /*echo '<pre>'; 
  print_r($log_pas);
  echo '<pre>';*/
  /*$use_login = 'admin';
  $use_pass = 'admin';// md5(admin);*/
  $login = $_POST['login'];
  $pass = isset($_POST['pass']) ? md5($_POST['pass']) : Null;
  $_POST['pass'] = $pass;

  foreach ($log_pas as $arr_log => $pw) {
    if($arr_log == $login){
      foreach ($pw as $item) {
        if ($item == $_POST['pass']) {
          $_SESSION['login'] = $login;
          $_SESSION['pass'] = md5($pass);
          echo '<meta http-equiv="refresh" content="0;http://heap/hello_user.php">';

        }
        else echo 'Пароль не верен!';
      }
    }
  }


  /*echo '<pre>'; 
  print_r($_POST);
  echo '<pre>';*/
  /*if ($use_login == $_POST['login'] & md5($use_pass) == $_POST['pass']  ) { 
     echo '<meta http-equiv="refresh" content="0;http://heap/hello_user.php">';
  }
   else {
    echo "Пара логин+пароль не верна или не существует";
  }*/
?>
  </div>
  <?
    require_once "inc/footer.php";
  ?>
</body>
</html> 