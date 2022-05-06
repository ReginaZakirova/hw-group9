<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Домашняя страница</title>
    <link href="css/styles.css" rel="stylesheet">
    <?php
        if(date("H") >= 20 || date("H") < 8) # в интервале c 20 до 8 утра подключаем ночные стили (меняем цвет фона и заголовков)
        {
            echo '<link href="css/night_styles.css" rel="stylesheet">';
        }
    ?>
</head>
<body>

<section class="main_container">
    <div class="main_header"><img src="images/logo.png"></div>
    <div class="main_menu">
        <div class="razdel"><a href="#" target="_blank">Главная</a></div>
        <div class="razdel"><a href="table.html" target="_blank">Таблица Менделеева</a></div>
    </div>
    <div class="about">
        <div class="main_photo">
            <img src="images/DSC072291221234.jpg" width="250px">
        </div>
        <div class="main_info">
            <div class="main_fio"><h1>Тарасенко Андрей Юрьевич</h1></div>
            <div class="about_me">
                <div class="biography">Добрый день, меня зовут Андрей. Живу в Москве, работаю в сфере ИТ более 15 лет, интересуюсь веб-разработкой.</div>
                <div class="feedback">Известная студия веб-разработки и создания сайтов на Битрикс, хорошая школа, профессиональные преподаватели!</div>
            </div>
        </div>
    </div>
</section>

<!--
<br>

<header>
    <img src="images/logo.png">

    <nav class="main">
            <div class="razdel"><a href="#" target="_blank">Главная</a></div>
            <div class="razdel"><a href="table.html" target="_blank">Таблица Менделеева</a></div>
            <!--
            <div class="razdel"><a href="flex.html" target="_blank">Пример работы Flex</a></div>
            <div class="razdel"><a href="grid.html" target="_blank">Пример работы Grid</a></div>

    </nav>
</header>

<div class="photo">
    <img src="images/DSC072291221234.jpg" width="300px">
</div>

<div class="fio"><h2>Тарасенко Андрей Юрьевич</h2></div>
<div class="info">Добрый день, меня зовут Андрей. Живу в Москве, работаю в сфере ИТ более 15 лет, интересуюсь <b>веб-разработкой</b>.</div>
<div class="mnenie">Известная студия веб-разработки и создания сайтов на Битрикс, хорошая школа, профессиональные преподаватели!</div>
-->
<div style="clear:both"></div>


<h1>Использую технологии (flex)</h1>
<section class="container">
    <div class="one">
        <div class="img"><img src="images/html.jpg"></div>
        <div class="desc">HTML</div>
    </div>
    <div class="two">
        <div class="img"><img src="images/css.jpg"></div>
        <div class="desc">CSS</div>
    </div>
    <div class="three">
        <div class="img"><img src="images/php.jpg"></div>
        <div class="desc">PHP</div>
    </div>
    <div class="four">
        <div class="img"><img src="images/bitrix.png"></div>
        <div class="desc">Bitrix</div>
    </div>
</section>

<h1>Использую технологии (grid)</h1>
<div class="container1">
    <div class="one">
        <div class="img"><img src="images/html.jpg"></div>
        <div class="desc">HTML</div>
    </div>
    <div class="two">
        <div class="img"><img src="images/css.jpg"></div>
        <div class="desc">CSS</div>
    </div>
    <div class="three">
        <div class="img"><img src="images/php.jpg"></div>
        <div class="desc">PHP</div>
    </div>
    <div class="four">
        <div class="img"><img src="images/bitrix.png"></div>
        <div class="desc">Bitrix</div>
    </div>
</div>


</body>
</html>