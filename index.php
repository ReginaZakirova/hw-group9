<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Главная</title>
    <link rel="stylesheet" href="css/index.css">
    <?php include 'php/day-night.php';?>
</head>
<body>
<?php require 'php/header.php';?>
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
<?php require 'php/footer.php';?>
</body>
</html>