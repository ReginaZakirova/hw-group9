<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Главная</title>
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/index.css">
    <?php include 'php/day-night.php';?>
    <link rel="stylesheet" href="css/<?php echo $day_night_style?>.css">
</head>
<body>
<header>
    <div class="header__logo"></div>
    <div class="main-menu">
        <div class="menu-item">
            <a class="menu-link" href="index.php">Главная</a>
        </div>
        <div class="menu-item">
            <a class="menu-link" href="table.php">Таблица Менделеева</a>
        </div>
    </div>
</header>
<main>
    <div class="photo">
        <img alt="Фотография" class="photo__img_width_100-percent" src="img/photo.jpg">
    </div>
    <div class="content">
        <div class="content__name">
            <h1>Константин Никитин</h1>
        </div>
        <div class="content__info">
            <p>Привет, я инженер по автоматизации.</p>
            <p>Практически каждый день на работе я подключаю разные устройства друг к другу и пишу для них программы на
                различных языках. Также я разрабатываю программное обеспечение для ПК, проектирую БД, добавляю новый функционал
                для корпоративного портала и пишу ботов для телеграм. В общем делаю все и сразу, но сейчас хочу сосредоточиться на
                чем-то одном - стать профессионалом в области веб-разработки.</p>
            <p>Люблю горные велосипеды и горные горы.</p>
        </div>
        <div class="content__review">
            <p>Обучение мне нравится, но, возможно, следовало бы разделить студентов по уровням знания, чтобы все обучались своим темпом.</p>
        </div>
    </div>
    <h1 class="clear_both">Flexbox - Макет 1</h1>
    <div class="flex-container">
        <div class="flex-item">
            <img alt="Outventure Creek 65" src="img/1.jpg">
            <p>
                Outventure Creek 65. Новая версия популярного туристического рюкзака с улучшенной комплектацией от Outventure.
            </p>
        </div>
        <div class="flex-item">
            <img alt="Outventure Trekker 60" src="img/2.jpg">
            <p>
                Outventure Trekker 60. Надежный и функциональный треккинговый рюкзак Outventure.
            </p>
        </div>
        <div class="flex-item">
            <img alt="Рюкзак Outventure Trace 60" src="img/3.jpg">
            <p>
                Рюкзак Outventure Trace 60. Функциональный туристический рюкзак от Outventure.
            </p>
        </div>
        <div class="flex-item">
            <img alt="Рюкзак Northland Camino 60" src="img/4.jpg">
            <p>
                Рюкзак Northland Camino 60. Легкий треккинговый рюкзак позволит удобно разместить всю необходимую экипировку.
            </p>
        </div>
    </div>
    <h1>Flexbox - Макет 2</h1>
    <div class="flex-container">
        <div class="flex-item">
            <img alt="Outventure Creek 65" src="img/1.jpg">
            <p>
                Outventure Creek 65. Новая версия популярного туристического рюкзака с улучшенной комплектацией от Outventure.
            </p>
        </div>
        <div class="flex-item">
            <img alt="Outventure Trekker 60" src="img/2.jpg">
            <p>
                Outventure Trekker 60. Надежный и функциональный треккинговый рюкзак Outventure.
            </p>
        </div>
    </div>
    <div class="flex-container">
        <div class="flex-item">
            <img alt="Рюкзак Outventure Trace 60" src="img/3.jpg">
            <p>
                Рюкзак Outventure Trace 60. Функциональный туристический рюкзак от Outventure.
            </p>
        </div>
        <div class="flex-item">
            <img alt="Рюкзак Northland Camino 60" src="img/4.jpg">
            <p>
                Рюкзак Northland Camino 60. Легкий треккинговый рюкзак позволит удобно разместить всю необходимую экипировку.
            </p>
        </div>
    </div>
    <h1>Grid - Макет 1</h1>
    <div class="grid-container-1">
        <div>
            <img alt="Outventure Creek 65" src="img/1.jpg">
            <p>
                Outventure Creek 65. Новая версия популярного туристического рюкзака с улучшенной комплектацией от Outventure.
            </p>
        </div>
        <div>
            <img alt="Outventure Trekker 60" src="img/2.jpg">
            <p>
                Outventure Trekker 60. Надежный и функциональный треккинговый рюкзак Outventure.
            </p>
        </div>
        <div>
            <img alt="Рюкзак Outventure Trace 60" src="img/3.jpg">
            <p>
                Рюкзак Outventure Trace 60. Функциональный туристический рюкзак от Outventure.
            </p>
        </div>
        <div>
            <img alt="Рюкзак Northland Camino 60" src="img/4.jpg">
            <p>
                Рюкзак Northland Camino 60. Легкий треккинговый рюкзак позволит удобно разместить всю необходимую экипировку.
            </p>
        </div>
    </div>
    <h1>Grid - Макет 2</h1>
    <div class="grid-container-2">
        <div>
            <img alt="Outventure Creek 65" src="img/1.jpg">
            <p>
                Outventure Creek 65. Новая версия популярного туристического рюкзака с улучшенной комплектацией от Outventure.
            </p>
        </div>
        <div>
            <img alt="Outventure Trekker 60" src="img/2.jpg">
            <p>
                Outventure Trekker 60. Надежный и функциональный треккинговый рюкзак Outventure.
            </p>
        </div>
        <div>
            <img alt="Рюкзак Outventure Trace 60" src="img/3.jpg">
            <p>
                Рюкзак Outventure Trace 60. Функциональный туристический рюкзак от Outventure.
            </p>
        </div>
        <div>
            <img alt="Рюкзак Northland Camino 60" src="img/4.jpg">
            <p>
                Рюкзак Northland Camino 60. Легкий треккинговый рюкзак позволит удобно разместить всю необходимую экипировку.
            </p>
        </div>
    </div>
</main>
</body>
</html>