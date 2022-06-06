<?
setcookie('last_time',date("Y-m-d H:i:s"),time()+3600);
print_r($_COOKIE);
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
  $d1 = strtotime(date("Y-m-d H:i:s"));
  $d2 = strtotime($_COOKIE['last_time']);
  $dr = round(($d1-$d2)/60);
  echo "<br> $dr минут прошло с последнего посещения <br>";
  ?>
  </div>
 </body>
</html>