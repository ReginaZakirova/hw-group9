
<?php
session_start();  // это сессия тестовая, для того что бы затем её удалить, функционала в себе не несет
// это для окрашивания фона
$_SESSION['testovaya_sessia']=$_GET['color'];
?>

<!doctype html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
    <link rel="stylesheet" href="style/style_index.css">
    <link rel="stylesheet" href="style/style_FLEXBOX.css">
    <link rel="stylesheet" href="style/style_GRID.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- это для меню -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,500,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <!-- от меню-->
    <title>Шондин А.С. </title>
</head>
<body>
<!-- подключаем хеадер (верх сайта) -->
<?
include 'bloki/header_verh_saita.php';    //подключаем хеадер (верх сайта)
include 'bloki/menu.php';                 //подключаем меню
?>
<main>
    <div class="shablon_osnovnoy_blok_stranits" style="background-color: <? echo $_SESSION['testovaya_sessia'];?>">
 <center> </center><h1>Приветствуем! Вы успешно зашли в систему.</h1> </center> <br>
        <center><h3>В последний раз вы переходили по ссылке <? echo $_COOKIE['ssilk'] ?></h3> </center>   <br><br><br><br>
        <center>
            <form  action=''>
                <p>Выберите  цвет:</p>
                    <input name="color" type="color" value="#ff0000">
                <input  name="knopka_svet" type='submit'      value='выбрать цвет' />
            </form>
            <br><br><br><br>


            <form action="" method="POST">
                <label>Выход из системы:</label><br>
                <input type="submit" name="del_ses" value="удалить сессию">
            </form></center>
        <br><br><br><br><br><br><br>
    </div>
    </main>
<!-- подключаем подвал сайта -->
<footer>
    <?
    // УДАЛЯЕМ Сессию и выходим на предыдущую страницу
    if(isset($_POST['del_ses'])) {  // если кнопка нажата

        unset($_SESSION['testovaya_sessia']); // удаляем данные сессии всего содержимого, в том числе файла на сервере
        session_destroy();                     // закрытие сессии
        header('Location: ./avtorizatsia.php');
    }
    include_once 'php/temi_noch_i_den.php';               // подключаем PHP с дневной и ночной темой
    $den_ili_noch = smena_dnya_i_nochi();                 //запускаем фукнцию по смене дня и ночи
    echo  $den_ili_noch;
    include 'bloki/footer_niz.php';
    ?>
</footer>
</body>