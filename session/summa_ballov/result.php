<?
session_start();
$_SESSION['task3'] = $_GET['task3'];
  print_r($_SESSION);
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
  <h1> Hello! Task1 </h1>
  <?
  $summa = 0;
if ($_SESSION['task1'] == 4) {
      $summa+= 1;
   }   
if ($_SESSION['task2'] == 6) {
      $summa+= 1;
   }   
if ($_SESSION['task3'] == 8) {
      $summa+= 1;
   } 
   echo 'сумма баллов равна = '.$summa;   
  ?>
     
     <a href="task1.php">сюда</a>
 </body>
</html>