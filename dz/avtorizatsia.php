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
    <!--   <center> <h2>Регистрация</h2></center>
        <center>   <form action="" method="POST">

        <label>имя пользователя</label>        <input type="text" name="name"><br>
        <label>пароль</label>          <input type="password" name="password2"><br>
        <input type="submit" name="submit">
    </form></center>
-->
    <div class="shablon_osnovnoy_blok_stranits">
        <center>
            <h2>Авторизация</h2></center>
        <center>
            <form action="" method="POST">
                <table border="1">
                    <tr>
                        <td>
                            <label>имя пользователя</label>
                        </td>
                        <td>
                            <input type="text" name="name">
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
                            <center>
                                <input type="submit" name="submit">
                        </td>
        </center>
        </tr>
        </table>
    </form></center>
    <?
    // логин   Andr
    // пароль  1234
    if(isset($_POST['submit'])) {  // если кнопка нажата
        if (($_POST['name']=="Andr" ) and (md5($_POST['password2']) == md5("1234")) ) {
            echo "<br> Вы получили доступ к секретным документам!<br>";
            header('Location: ./pritstvie.php');
        } else {
            echo "<br><center>Пароль введен не верно пожалуйста попробуйте ещё раз</center><br>";
        }
    }

    ?>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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