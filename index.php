<?
$time = new DateTime();
$time = $time->format('H');
if($time>=20 || $time<8) $background_color = 'header_night';
else $background_color = 'header_day';
?>
<!DOCTYPE html>
<html>
<head>
    <title>HW 1 урок</title>
    <link rel='stylesheet' href="style/style.css">
    <script src="js/script.js"></script>
</head>
<body>
    <header class="<? echo $background_color; ?>">
        <img class="logo" src="https://cdn-icons-png.flaticon.com/512/149/149452.png">
        <a name="lesson1" onclick="changeWork()">О себе</a>
        <a name="lesson2" onclick="changeWork()">Таблица Менделеева</a>
        <a name="lesson3" onclick="changeWork()">Флексы и Гриды</a>
    </header>
    <main>
        <div class="lesson1">
            <div class="left">
                <img class='photo' src="img/IM.jpg">
            </div>
            <div class="right">
                <div class="fio"><h1>Максим Дорохов</h1></div>
                <div class="info">
                    <div class="infoAboutYourself"> 
                        <div class="textInfo">
                            В общем и целом, я довольно скучный.<br> 
                            Пришел на курсы подтянуть знания по битриксу и гит.<br>
                            Хобби нет, точно так же как и свободного времени для этого хобби.<br>
                            Работаю специалистом по штатным возможностям Б24. <br>
                        </div>
                    </div>
                    <div class="review">
                        <div class="textInfo">
                            Все супер, пока предложений нет.<br> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lesson2" style="display: none">
            <table>
                <tr>
                    <td class="red">
                        <a href="https://ru.wikipedia.org/wiki/%D0%92%D0%BE%D0%B4%D0%BE%D1%80%D0%BE%D0%B4" target="_blank"></a>
                        <b>H</b>
                        <div>
                            <b>1</b>
                            <p>1.00797</p>
                        </div>
                        <p>Водород</p>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td class="red">
                        <a href="https://ru.wikipedia.org/wiki/%D0%9B%D0%B8%D1%82%D0%B8%D0%B9" target="_blank"></a>
                       <b>Li</b>
                        <div>
                            <b>3</b>
                            <p>6.939</p>
                        </div>
                        <p>Литий</p>
                    </td>
                    <td class="red">
                        <a href="https://ru.wikipedia.org/wiki/%D0%91%D0%B5%D1%80%D0%B8%D0%BB%D0%BB%D0%B8%D0%B9" target="_blank"></a>
                        <b>Be</b>
                        <div>
                            <b>4</b>
                            <p>9,0122</p>
                        </div>
                        <p>Берилий</p></td>
                    <td class="yellow">
                        <a href="https://ru.wikipedia.org/wiki/%D0%91%D0%BE%D1%80_(%D1%8D%D0%BB%D0%B5%D0%BC%D0%B5%D0%BD%D1%82)" target="_blank"></a>
                        <b>В</b>
                        <div>
                            <b>5</b>
                            <p>10,811</p>
                        </div>
                        <p>Бор</p></td>
                    <td class="yellow">
                        <a href="https://ru.wikipedia.org/wiki/%D0%A3%D0%B3%D0%BB%D0%B5%D1%80%D0%BE%D0%B4" target="_blank"></a>
                        <b>С</b>
                        <div>
                            <b>6</b>
                            <p>12,01115</p>
                        </div>
                        <p>Углерод</p></td>
                </tr>
                <tr>
                    <td class="red">
                        <a href="https://ru.wikipedia.org/wiki/%D0%A3%D0%B3%D0%BB%D0%B5%D1%80%D0%BE%D0%B4" target="_blank"></a>
                        <b>Na</b>
                        <div>
                            <b>11</b>
                            <p>22.9898</p>
                        </div>
                        <p>Натрий</p>
                    </td>
                    <td class="red">
                        <a href="https://ru.wikipedia.org/wiki/%D0%9C%D0%B0%D0%B3%D0%BD%D0%B8%D0%B9" target="_blank"></a>
                        <b>Mg</b>
                        <div>
                            <b>12</b>
                            <p>24.312</p>
                        </div>
                        <p>Магний</p>
                    </td>
                    <td class="yellow">
                        <a href="https://ru.wikipedia.org/wiki/%D0%90%D0%BB%D1%8E%D0%BC%D0%B8%D0%BD%D0%B8%D0%B9" target="_blank"></a>
                        <b>Al</b>
                        <div>
                            <b>13</b>
                            <p>36,9815</p>
                        </div>
                        <p>Алюминий</p>
                    </td>
                    <td class="yellow">
                        <a href="https://ru.wikipedia.org/wiki/%D0%9A%D1%80%D0%B5%D0%BC%D0%BD%D0%B8%D0%B9" target="_blank"></a>
                        <b>Si</b>
                        <div>
                            <b>14</b>
                            <p>28,086</p>
                        </div>
                        <p>Кремний</p>
                    </td>
                </tr>
                <tr>
                    <td class="red">
                        <a href="https://ru.wikipedia.org/wiki/%D0%9A%D0%B0%D0%BB%D0%B8%D0%B9" target="_blank"></a>
                            <b>K</b>
                            <div>
                                <b>19</b>
                                <p>39,102</p>
                            </div>
                            <p>Калий</p>
                    </td>
                    <td class="red">
                        <a href="https://ru.wikipedia.org/wiki/%D0%9A%D0%B0%D0%BB%D1%8C%D1%86%D0%B8%D0%B9" target="_blank"></a>
                        <b>Ca</b>
                        <div>
                            <b>20</b>
                            <p>40,08</p>
                        </div>
                        <p>Кальций</p>
                    </td>
                    <td class="blue">
                        <a href="https://ru.wikipedia.org/wiki/%D0%A1%D0%BA%D0%B0%D0%BD%D0%B4%D0%B8%D0%B9" target="_blank"></a>
                        <b>Sc</b>
                        <div>
                            <b>21</b>
                            <p>44,956</p>
                        </div>
                        <p>Скандий</p>
                    </td>
                    <td class="blue">
                        <a href="https://ru.wikipedia.org/wiki/%D0%A2%D0%B8%D1%82%D0%B0%D0%BD_(%D1%8D%D0%BB%D0%B5%D0%BC%D0%B5%D0%BD%D1%82)" target="_blank"></a>
                        <b>Ti</b>
                        <div>
                            <b>22</b>
                            <p>47,90</p>
                        </div>
                        <p>Титан</p>
                    </td>
                </tr>                
            </table>
        </div>
        <div class="lesson3" style="display: none">
        <div class="flex_horizontal">
            <div>
                <img src="img/MedalMaterinstva.jpg"/>
                <div class="text">«Медаль материнства»</div>
            </div>
            <div>
                <img src="img/MedalNahimova.jpg"/>
                <div class="text">«Медаль Нахимова»</div>
            </div>
            <div>
                <img src="img/MedalPartizany.jpg"/>
                <div class="text">Медаль СССР «Партизану Отечественной войны»</div>
            </div>
            <div>
                <img src="img/MedalUshakova.jpg"/>
                <div class="text">«Медаль Ушакова»</div>
            </div>
        </div>
        <div class="flex_vertical">
            <div>
                <img src="img/medalXX.jpg"/>
                <div class="text">Медаль СССР «ХХ лет Рабоче-Крестьянской Красной Армии»</div>
            </div>
            <div>
                <img src="img/MedalZaBoevieZaslugi.jpg"/>
                <div class="text">Медаль СССР «За боевые заслуги»</div>
            </div>
            <div>
                <img src="img/MedalZaDoblestniyTrud.jpg"/>
                <div class="text">Медаль СССР «За доблестный труд в Великой Отечественной войне 1941—1945 гг.»</div>
            </div>
            <div>
                <img src="img/MedalZaOboronyKavkaza.jpg"/>
                <div class="text">Медаль СССР «За оборону Кавказа»</div>
            </div>
        </div>
        <div class="grid_horizontal">
            <div>
                <img src="img/MedalZaOboronyLeninGrada.jpg"/>
                <div class="text">Медаль «За оборону Ленинграда»</div>
            </div>
            <div>
                <img src="img/MedalZaOboronyMoscow.jpg"/>
                <div class="text">Медаль «За оборону Москвы»</div>
            </div>
            <div>
                <img src="img/MedalZaOboronyOddesy.jpg"/>
                <div class="text">Медаль «За оборону Одессы»</div>
            </div>
            <div>
                <img src="img/MedalZaOboronySevastopolya.jpg"/>
                <div class="text">Медаль «За оборону Севастополя»</div>
            </div>
        </div>
        <div class="grid_vertical">
            <div>
                <img src="img/MedalZaOboronyStalinGrada.jpg"/>
                <div class="text">Медаль «За оборону Сталинграда»</div>
            </div>
            <div>
                <img src="img/MedalZaOboronyZapolyariya.jpg"/>
                <div class="text">Медаль «За оборону Советского Заполярья»</div>
            </div>
            <div>
                <img src="img/MedalZaOtvagy.jpg"/>
                <div class="text">Медаль «За отвагу»</div>
            </div>
            <div>
                <img src="img/MedalZaPobedyVOV.jpg"/>
                <div class="text">Медаль «За победу над Германией в Великой Отечественной войне 1941—1945 гг.»</div>
            </div>        
        </div>
        </div>
    </main>
</body>
</html>