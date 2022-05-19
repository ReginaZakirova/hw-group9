<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Таблица менделеева</title>
    <link rel="stylesheet" href="css/table.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <?php include 'php/day-night.php';?>
</head>
<body>
<?php require 'php/header.php';?>
<main>
    <table>
        <caption><h1>Таблица Менделеева</h1></caption>
        <tr>
            <td class="background-color_red">
                <a class="color_black" href="https://ru.wikipedia.org/wiki/Водород" target="_blank">
                    <h1 class="left_element">H</h1>
                </a>
                <div class="left_number">1</div>
                <div class="left_mass">1,00797</div>
                <div class="left_name">Водород</div>
            </td>
            <td class="background-color_grey"></td>
            <td class="background-color_grey"></td>
            <td class="background-color_grey"></td>
        </tr>
        <tr>
            <td class="background-color_red">
                <a class="color_black" href="https://ru.wikipedia.org/wiki/Литий" target="_blank">
                    <h1 class="left_element">Li</h1>
                </a>
                <div class="left_number">3</div>
                <div class="left_mass">6,939</div>
                <div class="left_name">Литий</div>
            </td>
            <td class="background-color_red">
                <a class="color_black" href="https://ru.wikipedia.org/wiki/Бериллий" target="_blank">
                    <h1 class="left_element">Be</h1>
                </a>
                <div class="left_number">4</div>
                <div class="left_mass">9,0122</div>
                <div class="left_name">Бериллий</div>
            </td>
            <td class="background-color_yellow">
                <a class="color_black" href="https://ru.wikipedia.org/wiki/Бор_(элемент)" target="_blank">
                    <h1 class="left_element">B</h1>
                </a>
                <div class="left_number">5</div>
                <div class="left_mass">10,811</div>
                <div class="left_name">Бор</div>
            </td>
            <td class="background-color_yellow">
                <a class="color_black" href="https://ru.wikipedia.org/wiki/Углерод" target="_blank">
                    <h1 class="left_element">C</h1>
                </a>
                <div class="left_number">3</div>
                <div class="left_mass">6,939</div>
                <div class="left_name">Углерод</div>
            </td>
        </tr>
        <tr>
            <td class="background-color_red">
                <a class="color_black" href="https://ru.wikipedia.org/wiki/Натрий" target="_blank">
                    <h1 class="left_element">Na</h1>
                </a>
                <div class="left_number">11</div>
                <div class="left_mass">22,9898</div>
                <div class="left_name">Натрий</div>
            </td>
            <td class="background-color_red">
                <a class="color_black" href="https://ru.wikipedia.org/wiki/Магний" target="_blank">
                    <h1 class="left_element">Mg</h1>
                </a>
                <div class="left_number">12</div>
                <div class="left_mass">24,312</div>
                <div class="left_name">Магний</div>
            </td>
            <td class="background-color_yellow">
                <a class="color_black" href="https://ru.wikipedia.org/wiki/Алюминий" target="_blank">
                    <h1 class="left_element">Al</h1>
                </a>
                <div class="left_number">13</div>
                <div class="left_mass">26,9815</div>
                <div class="left_name">Алюминий</div>
            </td>
            <td class="background-color_yellow">
                <a class="color_black" href="https://ru.wikipedia.org/wiki/Кремний" target="_blank">
                    <h1 class="left_element">Si</h1>
                </a>
                <div class="left_number">14</div>
                <div class="left_mass">28,086</div>
                <div class="left_name">Кремний</div>
            </td>
        </tr>
        <tr>
            <td class="background-color_red">
                <a class="color_black" href="https://ru.wikipedia.org/wiki/Калий" target="_blank">
                    <h1 class="left_element">K</h1>
                </a>
                <div class="left_number">19</div>
                <div class="left_mass">39,102</div>
                <div class="left_name">Калий</div>
            </td>
            <td class="background-color_red">
                <a class="color_black" href="https://ru.wikipedia.org/wiki/Кальций" target="_blank">
                    <h1 class="left_element">Ca</h1>
                </a>
                <div class="left_number">20</div>
                <div class="left_mass">40,08</div>
                <div class="left_name">Кальций</div>
            </td>
            <td class="background-color_blue">
                <a class="color_black" href="https://ru.wikipedia.org/wiki/Скандий" target="_blank">
                    <h1 class="right_element">Sc</h1>
                </a>
                <div class="right_number">21</div>
                <div class="right_mass">44,956</div>
                <div class="right_name">Скандий</div>
            </td>
            <td class="background-color_blue">
                <a class="color_black" href="https://ru.wikipedia.org/wiki/Титан_(элемент)" target="_blank">
                    <h1 class="right_element">Ti</h1>
                </a>
                <div class="right_number">22</div>
                <div class="right_mass">47,90</div>
                <div class="right_name">Титан</div>
            </td>
        </tr>
    </table>
</main>
<?php require 'php/footer.php';?>
</body>
</html>