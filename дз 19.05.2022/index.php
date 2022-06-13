<?php
    //логин log
    //пароль pasw
    session_start();
    if ($_GET['flag'] != 1) {
        header('Location: http://hw/%d0%b4%d0%b7%2019.05.2022/authorizationPage.php');
        exit( );
    }

    //$BodyColor = $_SESSION['color'];

    //$hostName = 'localhost';
    //$UserName = 'Anton';
    //$password = 'pasw';
    //$dbname = 'город';

    
    //$dbcon = mysqli_connect($hostName, $UserName, $password, $dbname);
    //mysqli_set_charset($dbcon, 'utf8');
    //$select = "SELECT name FROM человек";
    //$arr = mysqli_fetch_all(mysqli_query($dbcon, $select), MYSQLI_ASSOC);
    
    //foreach ($arr as $key => $value) {
        //foreach ($value as $key2 => $value2)
            //echo $value2 . '<br>';
    //}

// чтобы удалить сессию session_destroy();

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="Курсы, обучение">
    <link rel="stylesheet" href="style/style.css">
    <title>Домашняя работа 1</title>
</head>
<body class="night" style='background-color: <?php echo $BodyColor; ?>'>
    <?php
        require "header.php";
    ?>
    <main>
        <div class="main-iconConteiner">
            <div class="main-icon">
                <img src="img/1.png" width="230" height="160" alt="картинка">
            </div>
        </div>
        <div class="main-inf">
            <div class="mainInf-foto"> 
                <img src="img/2.jpg" width="450" height="365" alt="картинка">
            </div>
            <div class="mainInf-text">
                <h1>Марков Антон</h1>
                <div class="text-infMy">
                    <span>  
                            <?php
                            $str2 = 'Здравствуйте. Закончил МГТУ им.Носова, специальность Промышленная электроника. 
                            Работал 8 лет электромехаником по системам автоматизации, пока не появился другой источник дохода связанный с моим хобби.
                            Несколько лет назад уже пробовал самостоятельно обучаться в сфере it, но совмещать с работой было тяжело.
                            Сейчас планирую все силы направить на обучение.';

                            function colorEvenWords($str2) {
                                $arr0 = explode(' ', $str2);
                                $arr0[0] = "<span style='color: red;'>$arr0[0]</span>";
                            
                                    for ($i = 1; $i < count($arr0); $i = $i + 2) {
                                        $arr0[$i] = "<span style='color: green; display: inline-block;'>$arr0[$i]</span>";
                                    }
                                    $str2 = implode($arr0);
                                    echo $str2;
                            }
                            colorEvenWords($str2);
                            ?>
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
    <?php
        function nightTheme() {
            $time = getdate();
            $time = $time["hours"];
            if ($time < 8 || $time >= 21) {
                echo "<link rel='stylesheet' href='style/styleNight.css'>";
            }
        }
        nightTheme();
    ?>
    <?php
        echo "задача 4 слайд 20" . '<br>';
        function task4() {
            $a = 'html css php';
            $arr = explode(" ",$a);
            return $arr;
        }
        print_r(task4());
        echo '<br>';
        
        echo "задача 5 слайд 20" . '<br>';
        function task5() {
            $a = "27.03.1991";
            $b = "18.05.2022";
            $arrMonth = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
            $n = 0;
            $NleapYear = 8;
            $monthSum = 0;
            $arr2 = explode(".",$a);
            $arr3 = explode(".",$b);
            print_r($arr2);
            echo "<br>";
            print_r($arr3);
            echo "<br>";
            for ($i = 0; $i < 3; $i++) {
                $arr4[$i] = $arr3[$i] - $arr2[$i];        
            }
            print_r($arr4);
            echo '<br>';
            for ($i = 0; $i < abs($arr3[1] - $arr2[1]); $i++) {
                if ($arr3[1] - $arr2[1] > 0) {
                    $month[$i] = $arr2[1] + $i;
                }
                else {
                    $month[$i] = (11 - abs($arr3[1] - $arr2[1])) + $i;  //запутался, тут еще нужно учесть естли $month[$i] станет больше 11 то снова с 0
                                                                    // эту задачу реализовал по другому в конце дз
                }
            }   
            print_r($month) . '<br>';

            for ($i = 0; $i < abs($arr3[1] - $arr2[1]); $i++) {  
                $monthSum = $monthSum + $arrMonth[$month[$i]];     
                $n = $arr4[2]*365 + $monthSum + $arr4[0];
            }
            return abs($n) + $NleapYear;
        }
        echo task5() . "<br>";

        echo "дз пункт 1" . '<br>';
        function paragraph1() {
            $str = file_get_contents('index.php');
            $str1 = file_get_contents('header.php');

            $a = strip_tags($str);
            echo $a;
            $arr = explode('.', $a);
            $arr[0] = "<span class='replace'>$arr[0]</span>";
            $b = implode($arr);
            echo $b;

            $b = mb_substr($arr[0], -12);
            echo str_replace($b, '<span class="replace">Здравствуйте</span>', $b);   //так и не понял в какой момент содержимое изначальной строки должно изменится.
        }
        paragraph1();


        echo "дз пункт 3" . '<br>';
        function paragraph3($str1, $a) {
            $arr2 = explode(' ', $a);
            $c = strip_tags($str1);                             //работало нормально пока не вставил пхп код для первого задания в верску
            echo "количество слов на странице = ";
            echo str_word_count($a, 0, "АаБбВвГгДдЕеЁёЖжЗзИиЙйКкЛлМмНнОоПпРрСсТтУуФфХхЦцЧчШшЩщЪъЫыЬьЭэЮюЯя") + str_word_count($c, 0, "АаБбВвГгДдЕеЁёЖжЗзИиЙйКкЛлМмНнОоПпРрСсТтУуФфХхЦцЧчШшЩщЪъЫыЬьЭэЮюЯя");
            echo '<br>';
        }
        paragraph3($str1, $a);

        echo "дз пункт 2" . '<br>';
        function paragraph2($a) {
            $count = 0;
            $arrA = ['а','у','о','ы','э','я','ю','ё','и','е'];
            $arr6 = mb_str_split($a);
            for ($i = 0; $i < count($arrA); $i++) {
                for ($j = 0; $j < count($arr6); $j++) {
                    if ($arrA[$i] == $arr6[$j]) {
                        return $count++;
                    }
                }
            }
        }   
        echo paragraph2($a) . "<br>";

        echo "дз пункт 4" . '<br>';
        function paragraph4($arrMonth) {
            echo '<form method="post">
                        <label for = "date">Введите дату рождения</label>
                        <input type = "date" id="date" name="user">
                        <input type="submit" value="отправить">
                </form>';
                echo $_POST['user'] . '<br>';
            $date = $_POST['user'];
            $dateToday = date('Y-m-d');
            echo $dateToday . '<br>';
            $NleapYear = 8;
            $arr8 = explode("-",$date);
            $arr9 = explode("-",$dateToday);
            $daysBeginningYear1 = $arr8[2];
            $daysBeginningYear2 = $arr9[2];
                for ($i = 0; $i < (int)$arr8[1]; $i++) {
                    $daysBeginningYear1 = $daysBeginningYear1 + $arrMonth[$i];
                };
                for ($i = 0; $i < (int)$arr9[1]; $i++) {
                    $daysBeginningYear2 = $daysBeginningYear2 + $arrMonth[$i];
                };
            echo $daysBeginningYear1 . '<br>';
            echo $daysBeginningYear2 . '<br>';
            $Ndays = abs(($arr9[0] - $arr8[0])*365 + ($daysBeginningYear2 - $daysBeginningYear1)) ;
            return $Ndays + $NleapYear;
        }
        echo paragraph4($arrMonth);

        echo "слайд 14 задача 3" . '<br>';
        $a = "Html, Css, Php, Bitrix";
        function f($a) {
            $str111 = null;
            $arr = explode(", ", $a);
            for ($i = 0; $i < count($arr); $i++) {
                $arr100 = str_split($arr[$i]);
                for ($j = 0; $j < count($arr100); $j++) {
                    $arr111[$j] = $arr100[count($arr100) - 1 - $j];
                    $str111 = "$str111" . "$arr111[$j]";
                }
                $str111 = "$str111" . ' ';
            }
            
            return $str111;
        }
        echo f($a) . '<br>';


        echo "слайд 14 задача 4" . '<br>';
        $a = "Html, Css, Php, Bitrix";
        function ff($a) {
            $arr = str_split($a);
            return count($arr);
        }
        print_r(ff($a));
        echo '<br>';


        echo "слайд 14 задача 5" . '<br>';
        $a = "Html, Css, Php, Bitrix";
        function fff($a) {
            $arr = str_split($a);
            $arr = array_diff($arr, [',', ' ']);
            $arr = array_values($arr);
            for ($i = 0; $i < count($arr); $i++) {
                echo $arr[$i] . '<br>';
            }
        }
        fff($a);


        echo "дз доп задание" . '<br>';
        $str100 = file_get_contents('text.txt');
        function numberIdenticalWords($str100) {
            $str1 = null;
            $count = 0;
            $arr100 = mb_str_split($str100);
            $arr100 = array_diff($arr100, [',', '!', '?', '-', '[', ']', '«', '»', '.']);
            for ($i = 0; $i < count($arr100); $i++) {
                $str1 = $str1 . $arr100[$i];
            }
            $str1 = mb_strtolower($str1);
            $arr101 = explode(" ", $str1);
            for ($i = 0; $i < count($arr101); $i++) {
                for ($j = 0; $j < count($arr101); $j++) {
                    if ($arr101[$i] == $arr101[$j]) {
                        $count++;
                    }
                }
            echo $arr101[$i] . ' повторяется ' . $count . ' раз' . '<br>';
            $count = 0;
            }
        }
        numberIdenticalWords($str100);


        echo "дз 24.05.2022 слайд 12 задача 2" . '<br>';

        $a = $_REQUEST;
        if ($a['password']) {
            $a['password'] = md5($_REQUEST['password']);
        }
        $b = 'log';
        $c = md5('pasw');
        echo $c;
        
        print_r($a);
        ?>

        <form action="" method="post">
            <label>логин
                <input type="text" name="name">         <!--У меня и так появляется выпадающий список со старыми значениями
                                                            Это делает браузер? Нужно было сделать фиксированный список как в задаче 3?-->
            </label><br>
            <label>пароль
                <input type="password" name="password">
            </label>
            <input type="submit">
        </form>
        <a href="<?php 
            if ($a['name'] == $b && $a['password'] == $c) {
                echo '1';}
            else echo '2';
            ?>.php">вход</a>

        <?php
        echo '<br>';
        echo "дз 24.05.2022 слайд 12 задача 3" . '<br>';
        $aa = $_GET;
        print_r($aa);
        ?>
        <form action="" method="get">
            <select name="l">
                <option value="1">Лаб1</option>
                <option value="2">Лаб2</option>
                <option value="3">Лаб3</option>
                <option value="4">Лаб4</option>
            </select>
            <input type="submit">
        </form>
        <a href="phpcourse.php?l=<?php echo $aa['l']; ?>">ссылка</a>
    </main>
    <?php
        require "footer.php";
    ?>
    <script src="scripts/night.js"></script>
</body>
</html>