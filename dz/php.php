<!doctype html>
<head>
<link rel="stylesheet" href="style/style_index.css">
<link rel="stylesheet" href="style/style_FLEXBOX.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- это для меню -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,500,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
<!-- от меню-->
<title> Шондин А.С. </title>
</head>
<body>
  <!-- подключаем хеадер (верх сайта) -->
<? 
        include 'bloki/header_verh_saita.php';    //подключаем хеадер (верх сайта)
        include 'bloki/menu.php';                 //подключаем меню
?>
    <main>
  <!-- main это основная часть -->

        <style>.shablon_osnovnoy_blok_stranits{
                margin-left:70px;
            }</style>
        <div class="flex-grid">
            <div class="shablon_osnovnoy_blok_stranits">
        <?

// ----------------- 1 задача
        echo "<br><h2>Обязательная часть</h2>  <b>Здача 1.</b> (презентация урок 3-4), 19 слайд, №4<br>";
        $per= -2;
        FOR ($i = 1; $i<50; $i++) {
            $per=$per+3;
            $tselaya[$i]=$per;
        }
        FOR ($i=1; $i<50;$i++) {
            $drobn[$i] = $i;
        }
        $rez=0;
        $i=0;
        do {
            $i++;
            $rez= $rez+($tselaya[$i]/$drobn[$i]);
        }
        while  ($rez<10);
        echo "<br>Результат суммы деления больше 10 и равен " . $rez . ", на это понадобилось " . $i . " операций.";
        // -----------------  КОНЕЦ 1 задачи
        // -----------------2 задача
        echo "<br><br><b>Задача 2.</b> (презентация урок 3-4), 21 слайд, №2<br>";
        echo "<br>-----Решение через <b>while</b>-----<br>";
        $chtchik=0;
        $num=1000;
        $i=0;
        do {
            $i++;
            $num=$num/2;
        }
        while  ($num>50);
        echo "Что бы уменьшить число 1000 делением на 2 до менее 50 потребовалось ".$i." операций, в результате получили ".$num.".";
        echo "<br>-----Решение через <b>For</b>-----<br>";
        $chtchik=0;
        $num=1000;
        FOR ($i = 1; $num>50; $i++) {
            $num=$num/2;
            if ($num>50){
            }
        }
        echo "Что бы уменьшить 1000 делением на 2 до менее 50 потребовалось ".$i." операций, в результате получили ".$num.".";
        // ----------------- КОНЕЦ 2 задачи
        ?>
        <!-- ЗАДАЧА 4-->
        <br><br><b>Задача 3.</b> (презентация - урок 3-4), 21 слайд, №3<br>
        <form method="POST" >
            <p>
                Введите число от 1 до 10:
                <input type="text" name="chislo_s_formi">
            <p><input type="submit" name="button" value="Получить результат."></p>
            </p>
        </form>
        <?

        if (isset($_POST['button'])){ // isset($_POST['button'])) - кнопка нажата
        $u=$_POST["chislo_s_formi"];
        //       echo "<br>В поле введено: ".$u;
        //$u=5; // $u берем с формы input + кнопка
        // заполнием массив для вывода
        FOR ($i = 0; $i<11; $i++) {
            $massiv[$i]=$i;                       //  тут 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10
//    echo "<br>проверка ".$massiv[$i];
        }
        // делаем зависимость количества элементов массива от введенного числа
        switch ($u) {   // свич это множественный выбор
            case 0: $kolvo_sifr=11;break;
            case 1: $kolvo_sifr=10;break;
            case 2: $kolvo_sifr=9;break;
            case 3: $kolvo_sifr=8;break;
            case 4: $kolvo_sifr=7;break;
            case 5: $kolvo_sifr=6;break;
            case 6: $kolvo_sifr=5;break;
            case 7: $kolvo_sifr=4;break;
            case 8: $kolvo_sifr=3;break;
            case 9: $kolvo_sifr=2;break;
            case 10: $kolvo_sifr=1;break;
        }
        // Что бы сообщения не выводились до нажатия кнопки.

            if ((11<$u) or($u<0)) {
            echo "<br>Введено не верное число, пожалуйста введите число от 1 до 10";
        }else{
            echo "<br>Результат: ";

        //echo "<br>сколько цифр должны вывести?".$kolvo_sifr;
        // формируем массив исходя из введенного числа
        FOR ($i = 0; $i<$kolvo_sifr; $i++) {
            echo $massiv[$i].", ";
        }
        }
        }
        // -----------------  КОНЕЦ 4 задачи
        // ----------------- ВАРИАТИВНАЯ ЧАСТЬ  задача 5
        echo "<br><h2>Вариативная часть</h2>  <b>Задача 5.</b><br>";
        $per= -1;
        FOR ($i = 1; $i<50; $i++) {
            $per=$per+2;
            $tselaya[$i]=$per;
            //   echo "<br>целая часть = ". $tselaya[$i];
        }
        $per= 0;
        FOR ($i=1; $i<50;$i++) {
            $per=$per+2;
            $drobn[$i] = $per;
//    echo "<br>дробная часть = ".$drobn[$i];
        }
        $rez=0;
        $i=0;
        do {
            $i++;
            $rez= $rez+($tselaya[$i]/$drobn[$i]);
        }
        while  ($rez<10);
        echo "<br>Результат суммы деления больше 10 и равен " . $rez . ", на это понадобилось " . $i . " операций.";
        // -----------------  КОНЕЦ  ВАРИАТИВНАЯ ЧАСТЬ  задача 5
        // ----------------- ЗАДАЧА 9*
        echo "<br><br><b>Задача 9*</b><br>";
        $khislo=mt_rand(100,999999);
        //$khislo=15656;
        $kolvo_znakov=iconv_strlen($khislo); // записываем количество знаков в числе
        echo "<br> Рандомно получили число: ".$khislo." <br> Количество знаков в строке = ".$kolvo_znakov;
        for ($i=0;$i<$kolvo_znakov;$i++) {  //ЦИКЛ РАЗБИВАЕТ ЧИСЛО НА составляющие и записывает в массив $massiv_razbivae_mchislo[$i]
            $b=$khislo/10;
            $khislo=floor($b);                                                           //округление в меньшую сторону ЦЕЛАЯ ЧАСТЬ ЧИСЛА
            $drobn_iliment_chisla = round(($b-intval($b))*pow(10,1)); // выделяем дробную часть
            //  echo "<br>Дробный элемент числа = ".$drobn_iliment_chisla;
            //   echo "<br>целая часть  числа = ".$khislo;
            $massiv_razbivae_mchislo[$i]=$drobn_iliment_chisla;                            // записываем последний элемент числа в массив
        }
        $kolvo_ilimenov_v_massive= count ( $massiv_razbivae_mchislo ) ; // количество элементов в массиве
        //echo "<br>".$massiv_razbivae_mchislo[1]."<br>количество элементов в массиве ".$kolvo_ilimenov_v_massive;
        echo "<br>Число без первой и последней цифры: ";
        for ($i=($kolvo_znakov-2);$i>0;$i--) {    //выводим число без первой и последне цифры в обратном порядке
            echo $massiv_razbivae_mchislo [$i];
        }
        // КОНЕЦ ЗАДАЧИ 9*=============
        //----------------- Задача 12*
        echo "<br><br><b>Задача 12*</b><br>";
        $khislo=mt_rand(100,999999);
        //$khislo=15656;
        $kolvo_znakov=iconv_strlen($khislo); // записываем количество знаков в числе
        echo "<br> Рандомно получили число: ".$khislo;
        for ($i=0;$i<$kolvo_znakov;$i++) {  //ЦИКЛ РАЗБИВАЕТ ЧИСЛО НА составляющие и записывает в массив $massiv_razbivae_mchislo[$i]
            $b=$khislo/10;
            $khislo=floor($b);                                                           //округление в меньшую сторону ЦЕЛАЯ ЧАСТЬ ЧИСЛА
            $drobn_iliment_chisla = round(($b-intval($b))*pow(10,1)); // выделяем дробную часть
            //  echo "<br>Дробный элемент числа = ".$drobn_iliment_chisla;
            //   echo "<br>целая часть  числа = ".$khislo;
            $massiv_razbivae_mchislo[$i]=$drobn_iliment_chisla;                            // записываем последний элемент числа в массив
        }
        $kolvo_ilimenov_v_massive= count ( $massiv_razbivae_mchislo ) ; // количество элементов в массиве
        //echo "<br>".$massiv_razbivae_mchislo[1]."<br>количество элементов в массиве ".$kolvo_ilimenov_v_massive;

        $proizveden_12=1; // тут хранится прооизведение
        for ($i=0;$i<$kolvo_znakov;$i++) {  //ЦИКЛ РАЗБИВАЕТ ЧИСЛО НА составляющие и записывает в массив $massiv_razbivae_mchislo[$i]
            if ($massiv_razbivae_mchislo[$i] % 2 <> 0){
//        echo "<br>Нечетный элемент: ".$massiv_razbivae_mchislo[$i];
                $proizveden_12=$proizveden_12*$massiv_razbivae_mchislo[$i];
            }
        }
        echo "<br>Произведение всех нечетных знаков числа: ". $proizveden_12;

        //----------------- Конец задачи12*
        ?>



        </div>
    </div>


      <!-- подключаем PHP с дневной и ночной темой -->
      <?  include 'php/temi_noch_i_den.php';   ?>

</main>
  <!-- подключаем подвал сайта -->
  <?  include 'bloki/footer_niz.php';   ?>
</body>