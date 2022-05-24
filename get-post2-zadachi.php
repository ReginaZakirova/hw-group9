<?php
//print_r($_REQUEST);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
=====================   Задание 1 =====================<br>
<form action="" method="POST">
    <label>Текстовое поле</label>   <input type="text" name="name"><br>
    <label>Мнострочное текстовое поле</label><textarea type="textarea" name="mnpole"> </textarea><br>
    <label>группа выключателей</label> <br>
    <label>1</label>   <input type="checkbox" name="check1" value="галочка 1" /></p>
    <label>2</label>    <input type="checkbox" name="check2" value="налочка 2" /></p>
    <label>3</label>    <input type="checkbox" name="check3" value="галочка 3" /></p>
    <label>группа переключателей</label><br>
    <p><input name="perek" type="radio" value="1"> переключатель 1 </p>
    <p><input name="perek" type="radio" value="2"> переключатель 2</p>
    <p><input name="perek" type="radio" value="3" > переключатель 3</p>
    <input type="submit" name="submit" value="посмотреть что введено"><br>

    <?
    echo "В текстовое поле веедено: ".$_POST['name']."<br>";
    echo "В многострочное текстовое поле введено: ".$_POST['mnpole']."<br>";
    echo "Выбран перелючатель  ".$_POST['check1']." ".$_POST['check2']." ".$_POST['check3']."<br>";
    echo "Выран перелючатель № ".$_POST['perek']."<br>";
    ?>
    <br><br>
    <br><br> =====================   Задание 2 =====================<br>
    <form action="" method="POST">
        <label>имя пользователя</label>        <input type="text" name="name"><br>
        <label>пароль</label>          <input type="password" name="password"><br>
        <input type="submit" name="submit">
    </form>
       <?
       $_POST['password']=md5($_POST['password']);
    echo "имя: ".$_POST['name']."<br>";
    echo "пароль зашифрованный в md5 ". $_POST['password'];
    ?>
    <br><br> =====================   Задание 3 =====================<br>
    3 задание<br>
    Для Васи пароль 123<br>
    Для Пети 1234<br>
    <br>
    <form action="" method="POST">
        <label>выберете пользователя</label>        <br>
        <select name="spisok">
            <option value ="vasi">Вася</option>
            <option value ="petya">Петя</option>
        </select>
        <label>пароль</label>          <input type="password" name="password2"><br>
        <input type="submit" name="submit">
    </form>

    <?
    if(isset($_POST['submit'])) {  // если кнопка нажата
    if ($_POST['spisok']=="vasi") {
        if ($_POST['password2']=="123"){
            echo "<br> Вася Вы получили доступ к секретным документам!<br>";
        } else {
            echo "<br>Пароль введен не верно пожалуйста попробуйте ещё раз<br>";
        }
    } else {
        if ($_POST['password2']=="1234"){
            echo "<br>Петя Вы получили доступ к секретным документам!<br>";
        } else {
            echo "<br>Пароль введен не верно пожалуйста попробуйте ещё раз<br>";
        }
    }
    }
    ?>
    <br><br> =====================   Задание 4 (изменение ссылки) =====================<br>
    <form>
    <select name="l">
        <option name="l13" value ="1">лаб 1</option>
        <option name="l23" value ="2">лаб 2</option>
        <option name="l33" value ="3">лаб 3</option>
    </select>
        <br><input method="POST"  type="submit"  >
    </form>
    <?
  //  if(isset($_POST['submit2'])) {  // если кнопка нажата
      //  echo("<script>location.href='http://sss'</script>");
    //}
    ?>
</body>
</html>