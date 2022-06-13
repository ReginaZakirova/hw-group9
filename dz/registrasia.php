<!doctype html>
<html lang="ru">
<head>
    <link rel="stylesheet" href="style/style_index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- это для меню -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,500,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <!-- от меню-->
    <title>Регистрация </title>
</head>
<body>
<!-- подключаем хеадер (верх сайта) -->
<?
include 'bloki/header_verh_saita.php';    //подключаем хеадер (верх сайта)
include 'bloki/menu.php';                 //подключаем меню
?>
<main>
    <div class="shablon_osnovnoy_blok_stranits">
        <div class="div-center">
           <br><br> <h2>Регистрация</h2><br><br>
        </div>
        <div class="shablon_osnovnoy_blok_stranits">
            <div class="div-center">
            <form method="POST">
                <table border="1">
                    <tr>
                        <td>
                            <label>Ваш логин:</label>
                        </td>
                        <td>
                             <input type="text" name="login">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Ваш пароль:</label>
                        </td>
                        <td>
                            <input type="password" name="passw">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                                <input type="submit" name="submit">
                        </td>
        </tr>
        </table>
    </form>
        </div>
    <?
    // запись переменных с формы
    $name=$_POST['login']; // введеное в поле логин
    //    echo "<br>введенное имя".$name;
    $passw=$_POST['passw']; // введенный в поле пароль
    //    echo "<br> пароль".$passw;
    if(isset($_POST['submit']) and !empty($name) and !empty($passw)) {  // если кнопка нажата и в поля заполнены
        //КЛАСС АВТОРИЗАЦИИ=================================
        require_once './class/class_registrasia.php'; // подключаем файл с классом
        $registrasia = new class_registrasia(); // экземпляр класса
        $registrasia->name = $name;
        $registrasia->passw = $passw;
        echo $registrasia->registr();
        //КОНЕЦ КЛАССА АВТОРИЗАЦИИ=================================
    }      else {
echo "<br><div class='div-center'>Для регистрации пожалуйста введите логин и пароль. </div><br>";
}
    ?>
<br><br><br><br><br><br><br><br><br><br><br><br>
    </div>
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