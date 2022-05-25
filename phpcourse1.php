<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="styles/styles.php">
  <title>Task1</title>
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
      <div>
        <br>
  <form action="" method="post">
    <p>
      <label>Имя пользователя:  <input type="text" size="20" name="name user">
      </label>
    </p><br>
    <p>
      <label for="comments"> Мои пожелания и комментарии по курсам</label>
        <textarea name="comments" rows="3">
        </textarea>
    </p><br>
    <fieldset>
      <legend>Хочу быть</legend>
      <p>
        <input type="radio" value="jun" name="radio"> Junior php developer 
      
        <input type="radio" value="mid" name="radio"> Middle php developer 
      
        <input type="radio" value="front-end" name="radio">Front-end разработчик
      
        <input type="radio" value="disign" name="radio"> Нет, хочу быть дизайнером 
      </p><br>
    </fieldset><br>
    <fieldset>
      <legend>Мои навыки в программировании</legend>
      <p>
        <input type="checkbox" value="god" name="checkbox"> Бог программирования
      
        <input type="checkbox" value="guru" name="checkbox"> Гуру программирования 
      
        <input type="checkbox" value="easy" name="checkbox">
         Эм, я еще учусь
      </p>  
    </fieldset><br>
    <input type="submit" name="отправить">
  </form>
  <div>
  <?
echo '<pre>'; 
print_r($_REQUEST);
echo '<pre>';
?>
  </div>
  <?
    require_once "inc/footer.php";
  ?>
 </body>
</html>