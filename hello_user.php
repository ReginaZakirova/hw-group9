<?
setcookie('pages',$arr,time()+3600);
$arr = [
  'Bob'=> [$page],
  'Tom'=> [$page],
  'Sam'=> [$page]
];
/*setcookie('Tom',$T_arr,time()+3600);
setcookie('Sam',$S_arr,time()+3600);*/
session_start();
?>
<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="styles/styles.php">
  <title>hello</title>
 </head>
 <body>
    <?
    include_once "scripts\day_night.php";
    require_once "inc/header.php";
    ?>
  <div class="main">
      <br><h1>Здравствуйте <? echo $_SESSION['login'];?>, Вы авторизовались!</h1><br>
      <h1> Последняя посещенная страница<?echo "{$arr[$name][$page]}";?></h1><br>
  </div>
  <div>
    <form method="post">
     <button type="submit" value="f" name="f"><a href="fact.php" title="fact">fact</a></button>
     <button type="submit" value="b" name="b"><a href="bitrix.php" title="bitrix">bitrix</a></button> 
  </form>
  <?
  $page = $_POST['f']?$_POST['f']:$_POST['b'];
  foreach ($arr as $key => $name) {
    if ($arr[$name] = $_SESSION['login'] and $page !== null) {
      foreach($name as $cite)
      $arr[$name][$site] = $page; 
    }
    }
  /*if ($page==='f') {
    // code...
  }*/
  echo '<pre';
  print_r($_SESSION);
  echo '<pre>';
  echo '<pre';
  print_r($arr);
  echo '<pre>';

  ?>
  </div>
  <?
    require_once "inc/footer.php";
  ?>
 </body>
</html>