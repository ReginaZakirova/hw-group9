<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="styles/styles.php">
<title>Task4</title>
<style>
</style>
</head>
 <body>
  <?php
    include_once "scripts\day_night.php";
  ?>
  <main class="main">
    <?
      require_once "inc/header.php";
      ?>
  <form action="" method="get">
    <fieldset>
      <p>
          <label>
            <select name="l" required>
              <option value="1">Lab№1</option>
              <option value="2">Lab№2</option>
              <option value="3">Lab№3</option>
              <option value="4">Lab№4</option>
            </select>
          </label>
          <button type="submit" value="push">Сгенерировать</button>
    </fieldset>
  </form>
 <?
   echo '<pre>'; 
  print_r($_GET);
  echo '<pre>';
  $n = $_GET['l'];
 ?> 
  <div>
  <?
    if( 0 < $n & $n < 4) {
      echo "<a href='phpcourse$n.php' target= '_blank'>phpcourse.php?l=$n</a>";
    }
    elseif ($n == 4) {
       echo "<a href='phpcourse$n.php'>phpcourse.php?l=$n</a>"; 
    }

  ?>
  </div>
  <?
    require_once "inc/footer.php";
  ?>
</body>
</html> 