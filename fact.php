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
  <title>fact</title>
 </head>
 <body>
    <?
    include_once "scripts\day_night.php";
    require_once "inc/header.php";
    ?>
  <div class="main">
      <br><h1>Вы на сайте fact.php!</h1><br>
      <br><h1><a href="hello_user.php">На "приветствие"</a></h1><br>

  </div>
  <?
  echo '<pre>';
  $page = $_POST;
  echo '<pre';
    require_once "inc/footer.php";
  ?>
 </body>
</html>