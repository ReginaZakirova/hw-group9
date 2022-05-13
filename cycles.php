<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Циклы</title>
    <link rel="stylesheet" href="css/cycles.css">
    <?php include 'php/day-night.php';?>
</head>
<body>
<?php require 'php/header.php';?>
<main>
    <h2>Обязательная часть</h2>
    <h3>Задача №1</h3>
    <p>
        <?php
        $a = $b = 1;
        $s = 0;
        while ($s <= 10){
          $s += $a / $b++;
          $a += 3;
        }
        echo "Количество элементов: " . $b - 1 . ", сумма = $s";
        ?>
    </p>
    <h3>Задача №2.1</h3>
    <p>
        <?php
        $num = 1000;
        $i = 0;
        while ($num >= 50){
            $num /= 2;
            $i++;
        }
        echo "Получилось число: $num, за $i итераций";
        ?>
    </p>
    <h3>Задача №2.2</h3>
    <p>
        <?php
        $i = 0;
        for ($num = 1000; $num >= 50; $num /= 2){
            $i++;
        }
        echo "Получилось число: $num, за $i итераций";
        ?>
    </p>
    <h3>Задача №3</h3>
    <p>
        <?php
        $i = 0;
        for ($j = 0; $j < 10 - $i; $j++){
            echo "$j, ";
        }
        echo $j;
        ?>
    </p>
    <h2>Вариативная часть</h2>
    <h3>Задача №1</h3>
    <p>
        <?php
        $y = $A = mt_rand(1,100);
        $X = mt_rand(1,100);
        $E = mt_rand(1,100);
        $i = 0;
        do {
            $i++;
            $y_prev = $y;
            $y = 0.5 * ($y_prev + $X / $y_prev);
        } while (abs(pow($y, 2) - pow ($y_prev, 2)) >= $E);
        echo "A = $A, X = $X, E = $E. y($i) = $y";
        ?>
    </p>
    <h3>Задача №2</h3>
    <p>
        <?php
        $a = -1;
        $b = 3;
        $count = $val = 1;
        while (abs(4 * $val - 3.14) > 0.01) {
            $val += $a / $b;
            $a *= -1;
            $b += 2;
            $count++;
        }
        echo "Пи = " . 4 * $val . ", при $count слагаемых";
        ?>
    </p>
    <h3>Задача №3</h3>
    <p>
        <?php
        $a = $b = 1;
        $c = 3;
        $s = 0;
        $count = 0;
        while ($s <= 10){
            $s += $a / $b;
            $a += $c;
            $b *= 2;
            $c +=2;
            $count++;
        }
        echo "Количество элементов: $count, сумма = $s";
        ?>
    </p>
    <h3>Задача №4</h3>
    <p>
        <?php
        $a = $b = 1;
        $s = 0;
        $count = 0;
        while ($s <= 10){
            $s += $a / $b;
            $a += 2;
            $b += 1;
            $count++;
        }
        echo "Количество элементов: $count, сумма = $s";
        ?>
    </p>
    <h3>Задача №5</h3>
    <p>
        <?php
        $a = 1;
        $s = 0;
        while ($s <= 10){
            $s += $a++ / $a++;
        }
        echo "Количество элементов: " . ($a - 1) / 2 . ", сумма = $s";
        ?>
    </p>
    <h3>Задача №6</h3>
    <p>
        <?php
        $K = mt_rand(1,10000000);
        echo "$K => ";
        //Вычисляем количество цифр в числе
        $length = floor(log10($K))+1;
        for ($i = 0; $i <= 9; $i++) {
            for ($j = 1; $j <= $length; $j++) {
                //Вычленяем цифру в позиции j справа налево
                $digit = floor($K % pow(10, $j) / pow(10, $j - 1));
                if ($digit == $i) echo $digit;
            }
        }
        ?>
    </p>
    <h3>Задача №7</h3>
    <p>
        <?php
        $K = mt_rand(1,10000000);
        echo "$K => ";
        //Вычисляем количество цифр в числе
        $length = floor(log10($K))+1;
        for ($i = 9; $i >= 0; $i--) {
            for ($j = 1; $j <= $length; $j++) {
                //Вычленяем цифру в позиции j справа налево
                $digit = floor($K % pow(10, $j) / pow(10, $j - 1));
                if ($digit == $i) echo $digit;
            }
        }
        ?>
    </p>
    <h3>Задача №8</h3>
    <p>
        <?php
        $K = mt_rand(1,10000000);
        echo "$K => ";
        //Вычисляем количество цифр в числе
        $length = floor(log10($K))+1;
        for ($j = 1; $j <= $length; $j++) {
            //Вычленяем цифру в позиции j справа налево
            $digit = floor($K % pow(10, $j) / pow(10, $j - 1));
            echo $digit;
        }
        ?>
    </p>
    <h3>Задача №9</h3>
    <p>
        <?php
        $K = mt_rand(1,10000000);
        echo "$K => ";
        //Вычисляем количество цифр в числе
        $length = floor(log10($K))+1;
        for ($j = $length - 1; $j >=2; $j--) {
            //Вычленяем цифру в позиции j справа налево
            $digit = floor($K % pow(10, $j) / pow(10, $j - 1));
            echo $digit;
        }
        ?>
    </p>
    <h3>Задача №10</h3>
    <p>
        <?php
        $K = mt_rand(1,10000000);
        echo "$K => ";
        //Вычисляем количество цифр в числе
        $length = floor(log10($K))+1;
        for ($j = $length; $j >=1; $j--) {
            //Вычленяем цифру в позиции j справа налево
            $digit = floor($K % pow(10, $j) / pow(10, $j - 1));
            if ($digit % 2 != 0) echo $digit;
        }
        ?>
    </p>
    <h3>Задача №11</h3>
    <p>
        <?php
        $K = mt_rand(1, 10000000);
        $sum = 0;
        //Вычисляем количество цифр в числе
        $length = floor(log10($K)) + 1;
        for ($i = 1; $i <= $length; $i++) {
            $digit = floor($K % pow(10, $i) / pow(10, $i - 1));
            if ($digit % 2 == 0) {
                $sum += $digit;
            }
        }
        echo "К = $K, сумма четных цифр = $sum";
        ?>
    </p>
    <h3>Задача №12</h3>
    <p>
        <?php
        $K = mt_rand(1,10000000);
        $product = 1;
        //Вычисляем количество цифр в числе
        $length = floor(log10($K))+1;
        for ($i = 1; $i <= $length; $i++){
            $digit = floor($K % pow(10, $i) / pow(10, $i - 1));
            if ($digit % 2 != 0){
                $product *= $digit;
            }
        }
        echo "К = $K, произведение нечетных цифр = $product";
        ?>
    </p>
</main>
<?php require 'php/footer.php';?>
</body>
</html>
