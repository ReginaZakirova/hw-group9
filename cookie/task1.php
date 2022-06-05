<?
setcookie('name','User');
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
  if ($_COOKIE['name'] == "User") {
    echo 'Hello'.$_COOKIE['name'];
  }

  ?>
  </div>
 </body>
</html>