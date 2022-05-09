<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="Курсы, обучение">
    <link rel="stylesheet" href="style/style.css">
    <?php
        $time = getdate();
        $time = $time["hours"];
        if ($time < 8 || $time >= 20) {
            echo "<link rel='stylesheet' href='style/styleNight.css'>";
        }
    ?>
    <title>Домашняя работа 1</title>
</head>
<body class="night">
    <header class="page-header">
        <nav>
            <div class="mobilMenu" id="mobilMenu">м</div>
            <ul class="nav-menu menuOpen" id="navMenu">
                <li>
                    <a href="Table.html" target="_blank" title="открыть таблицу">ссылка на таблицу</a>
                </li>
                <li>элемент меню 2
                </li>
                <li>элемент меню 3
                </li>
                <li>элемент меню 4
                </li>
            </ul>
        </nav>
        <div class="header-icon">
        </div>
    </header>
    <main>
        <div class="main-iconConteiner">
            <div class="main-icon">
                <img src="img/1.png" width="230" height="160">
            </div>
        </div>
        <div class="main-inf">
            <div class="mainInf-foto"> 
                <img src="img/2.jpg" width="450" height="365">
            </div>
            <div class="mainInf-text">
                <h1>Марков Антон</h1>
                <div class="text-infMy">
                    <span>  
                            Здравствуйте. Закончил МГТУ им.Носова, специальность Промышленная электроника. 
                            Работал 8 лет электромехаником по системам автоматизации, пока не появился другой источник дохода связанный с моим хобби.
                            Несколько лет назад уже пробовал самостоятельно обучаться в сфере it, но совмещать с работой было тяжело.
                            Сейчас планирую все силы направить на обучение.
                    </span>
                </div>
                <div class="text-feedback">
                    <span>
                             Я уже был знаком с темами первых вебинаров, но не смотря на это, было тяжело вспомнить некоторые моменты и сделать задание в ограниченное время.
                            Мне кажется при изучении такого объема материала, основной упор стоит cделать на самостоятельное обучение, и обяснить это студентам. 
                            Возможно стоит обозначивать темы и выдавать задания для следующих вебинаров заранее.
                    </span>
                </div>
            </div>
        </div>
        <form>
            <p>Имя пользователя:
                <input type="text" name="nameUser">
            </p>
            <p>E-mail
                <input type="email" name="emailUser" title="Заполните это поле" required>
            </p>
            <p>Что изучали
                <select name="course">
                    <option value="P">php</option>
                    <option value="H">js</option>
                    <option value="B">pyton</option>
                    <option value="J">c++</option>
                </select>
            </p>
            <fieldset>
                <legend>хочу быть</legend>
                <input type="radio" value="click" name="radio">Junior-PHP developer
                <input type="radio" value="click" name="radio">Middle-PHP developer
                <input type="radio" value="click" name="radio">Front-end разработчик
                <input type="radio" value="click" name="radio">Неее, хочу быть дизайнером
            </fieldset>
            <fieldset>
                <legend>Мои навыки в программировании</legend>
                <input type="checkbox" value="click">Бог программирования
                <input type="checkbox" value="click">Гуру программирования
                <input type="checkbox" value="click">Эмм.. я еще учусь
            </fieldset>
            <p>Во сколько мне удобно приходить на занятия?
                <input type="date" name="date">
            </p>
            <p>Мои пожелания и комментарии по курсам
                <textarea name="textarea" id="#text" cols="30" rows="3"></textarea>
            </p>
            <input type="submit" name="button" value="Все я справился с заполнением формы">
        </form>
        <div class="block1-grid">
            <div class="foto1"></div>
            <span>Пляж Копытаж. Недалеко от города Каш. Занимает одно из первых мест в рейтинге пляжей Турции</span>
            <div class="foto2"></div>
            <span>Город Фетхие. Пещеры гробницы вырезанные в скале</span>
            <div class="foto3"></div>
            <span>Вид на город Фетхие Турция.</span>
            <div class="foto4"></div>
            <span>Вид со смотровой в Алании.</span>
        </div>
        <div class="block2-grid">
            <div class="foto5"></div>
            <span>Вид со смотровой Алании в грозу</span>
            <div class="foto6"></div>
            <span>Вид со смотровой Алании в грозу</span>
            <div class="foto7"></div>
            <span>Вид со смотровой Алании в грозу</span>
            <div class="foto8"></div>
            <span>Лодочный причал Алания</span>
        </div>
        <div class="block1-flex">
            <div class="foto-conteiner">
                <div class="foto1"></div>
                <span>Пляж Копытаж. Недалеко от города Каш. Занимает одно из первых мест в рейтинге пляжей Турции</span>
            </div>
            <div class="foto-conteiner">
                <div class="foto2"></div>
                <span>Город Фетхие. Пещеры гробницы вырезанные в скале</span>
            </div>
            <div class="foto-conteiner">
                <div class="foto3"></div>
                <span>Вид на город Фетхие Турция.</span>
            </div>
            <div class="foto-conteiner">
                <div class="foto4"></div>
                <span>Вид со смотровой в Алании.</span>
            </div>
        </div>
        <div class="block2-flex">
            <div class="foto-conteiner2">
                <div class="foto5"></div>
                <span>Пляж Копытаж. Недалеко от города Каш. Занимает одно из первых мест в рейтинге пляжей Турции</span>
            </div>
            <div class="foto-conteiner2">
                <div class="foto6"></div>
                <span>Город Фетхие. Пещеры гробницы вырезанные в скале</span>
            </div>
            <div class="foto-conteiner2">
                <div class="foto7"></div>
                <span>Вид на город Фетхие Турция.</span>
            </div>
            <div class="foto-conteiner2">
                <div class="foto8"></div>
                <span>Вид со смотровой в Алании.</span>
            </div>
        </div>
    </main>
    <script src="scripts/mobilBt.js"></script>
    <script src="scripts/night.js"></script>
</body>
</html>