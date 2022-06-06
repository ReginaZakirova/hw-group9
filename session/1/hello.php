<?
session_start();
$_SESSION['name'] = $_POST['name'];
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
  <div class="main">
      <h1> Hello, <?echo $_SESSION['name'];?>!</h1>
  </div>
 </body>
</html>
