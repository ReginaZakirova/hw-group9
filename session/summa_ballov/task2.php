<?
session_start();
$_SESSION['task1'] = $_GET['task1'];
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
  <h1> Hello! Task2 </h1>
     <form action='task3.php'>
      <label> Напишите ответ 3+3 = 
       <input type="text" name="task2">
       </label>
       <input type="submit" >
     </form>
     <a href="task3.php">сюда</a>
 </body>
</html>