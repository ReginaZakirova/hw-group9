<?php
setcookie ('name','User');
?>
<!doctype html>
<html lang="ru">
<head>
    <link rel="stylesheet" href="style/style_index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- это для меню -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,500,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <!-- от меню-->
    <title>Авторизация </title>
</head>
<body>
<!-- подключаем хеадер (верх сайта) -->
<?
include 'bloki/header_verh_saita.php';    //подключаем хеадер (верх сайта)
include 'bloki/menu.php';                 //подключаем меню
?>
<main>
    <div class="shablon_osnovnoy_blok_stranits">
        <div class="div-center"><br><br>Пароль от test   test2<br> Пароль от Admin   1234 <br>    Пароль от Люцифер Люцифер1</div>
        <div class="div-center"> <br><br><h2>Авторизация</h2><br><br></div>
            <form method="POST">
                <table border="1">
                    <tr>
                        <td>
                            <label>Выбирите пользователя</label>
                        </td>
                        <td>
                            <div class="div-center"><select name="name">
                                    <?
                                    //ПОДКЛЮЧЕНИЕ К БД
                                    $hostname='localhost';
                                    $username= 'Andrey';
                                    $password=111;
                                    $dbname='bd_osnovnoy_raboti_fakt';
                                    $dbcon=mysqli_connect($hostname, $username, $password,$dbname);
                                    $massiv_vseh_loginov = mysqli_fetch_all(mysqli_query($dbcon,"SELECT login FROM zaregestrirovannie_polzovately"));
                                    For ($i=0;$i<count($massiv_vseh_loginov);$i++) {
                                        echo "<option>".$massiv_vseh_loginov[$i][0]."</option>";
                                    }
                                    ?>
                            </select></div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>пароль</label>
                        </td>
                        <td>
                            <input type="password" name="password2">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">

                            <div class="div-center">          <input type="submit" name="submit"> </div>
                        </td>
        </tr>
        </table>
    </form>
        <div class="div-center">   <p><br><br><h2>Ссылки</h2> <br><br>   </div>
            <div class="div-center">  <p><a href="obrabotka_ssilok.php?id=1"  target="_blank">ФАКТ</a></p></div>
                <div class="div-center">  <p><a href="obrabotka_ssilok.php?id=2"  target="_blank">БИТРИКС</a></p></div>
    <?
    // проверка есть ли такой логин
    $proverka_est_li_takoy_login= "SELECT login FROM `zaregestrirovannie_polzovately` WHERE login='test'";
    // если логин и пароль сопадает будет 1 если нет 0
    $proverka_sovpadenya_logina_i_parolya="SELECT * FROM zaregestrirovannie_polzovately";
    $name=$_POST['name']; // введеное в поле имя
 //   echo "<br>введенное имя".$name;
    $passw=md5($_POST['password2']); // введенный в поле пароль
  //   echo "<br> пароль".$passw;
    $zapros=mysqli_fetch_all(mysqli_query($dbcon,"SELECT count(*) FROM zaregestrirovannie_polzovately WHERE Login='$name' and pass='$passw'"));
    if(isset($_POST['submit'])) {  // если кнопка нажата
       if ($zapros[0][0]==1) {
           echo "<br>Пароль верный";
           header('Location: ./pritstvie.php');
       } else {
           echo "<br> <div class='div-center'> Пароль введен не верно пожалуйста попробуйте ещё раз</div><br>";
       }
        }
    ?>
<br><br><br><br><br><br><br>
    </div>
</main>
<!-- подключаем подвал сайта -->
<footer>
    <?
    include_once 'php/temi_noch_i_den.php';               // подключаем PHP с дневной и ночной темой
    $den_ili_noch = smena_dnya_i_nochi();                 //запускаем фукнцию по смене дня и ночи
    echo  $den_ili_noch;
    include 'bloki/footer_niz.php';
    ?>
</footer>
</body>