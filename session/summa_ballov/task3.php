<?
session_start();
$_SESSION['task2'] = $_GET['task2'];
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
  <h1> Hello! Task3 </h1>
     <form action='result.php'>
      <label> Напишите ответ 4+4 = 
       <input type="text" name="task3">
       </label>
       <input type="submit" >
     </form>
     <a href="result.php">сюда</a>
 </body>
</html>