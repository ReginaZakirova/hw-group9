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
    <div class="shablon_osnovnoy_blok_stranits">
 <center> </center><h1>Приветствуем! Вы успешно зашли в систему.</h1> </center> <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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