<?
session_start();
$_SESSION['f_time'] = date("Y-m-d H:i:s") ;
echo '<pre';
print_r($_SESSION);
echo '<pre>';
echo '<br> время вашего последнего посещения '.$_SESSION['l_time'].'<br>';
?>
<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>hello</title>
  <style>
  </style>
 </head>
 <body>
  <?
  $time =$_SESSION['f_time'];
  $_SESSION['l_time'] = $time;
  ?>
 </body>
</html>
