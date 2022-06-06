<?
session_start();
//$_SESSION['f_time'] = date("Y-m-d H:i:s") ;
/*echo '<pre';
print_r($_SESSION);
echo '<pre>';*/
?>
<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="styles/styles.php">
  <title>Bitrix</title>
 </head>
 <body>
    <?
    include_once "scripts\day_night.php";
    require_once "inc/header.php";
    ?>
  <div class="main">
      <br><h1>Вы на сайте bitrix.php!</h1><br>
  </div>
  <?
  echo '<pre>';
  $page = $_POST;
  echo '<pre';
    require_once "inc/footer.php";
  ?>
 </body>
</html>