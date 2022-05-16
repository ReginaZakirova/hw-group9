<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Массивы</title>
    <link rel="stylesheet" href="css/cycles.css">
    <?php include 'php/day-night.php';?>
</head>
<body>
<?php require 'php/header.php';?>
<main>
    <h2>Обязательная часть</h2>
    <h3>Задание 1.13.1</h3>
    <p>
        <?php
        $arr = [50, 45, 40, 35, 30];
        $result = 0;
        foreach ($arr as $value){
            $result += $value;
        }
        echo "Сумма элементов массива: $result";
        ?>
    </p>
    <h3>Задание 1.13.2</h3>
    <p>
        <?php
        $arr = [];
        for ($i = 1; $i <= 10; $i++){
            $arr[] = mt_rand();
        }
        echo 'Массив в прямом порядке: <br>';
        foreach ($arr as $value){
            echo $value.' ';
        }
        echo '<br>Массив в обратном порядке: <br>';
        for ($i = count($arr)-1; $i>=0; $i--){
            echo $arr[$i].' ';
        }
        ?>
    </p>
    <h3>Задание 1.13.3</h3>
    <p>
        <?php
        $arr = ['Behance.png', 'Facebook.png', 'Instagram.png', 'LinkedIn.png', 'Mail.ru.png'];
        echo "<img src='img/ico/" . $arr[mt_rand(0,count($arr)-1)] . "' alt='Файл не найден'>";
        ?>
    </p>
    <h3>Задание 1.13.4</h3>
    <p>
        <?php
        $n = mt_rand(10,20);
        $arr = [];
        while ($i++ < $n){
            $arr[] = mt_rand(-100, 100);
        }
        $minimum = 100;
        $maximum = -100;
        foreach ($arr as $value){
            if ($value>0 && $value<$minimum){
                $minimum = $value;
            }
            if ($value<0 && $value>$maximum){
                $maximum = $value;
            }
        }
        echo '<pre>';
        print_r($arr);
        echo '</pre>';
        echo "Минимальное положительное: $minimum, максимальное отрицательное: $maximum";
        ?>
    </p>
    <h3>Задание 1.14.1</h3>
    <p>
        <?php
        $arr = [
            'Бьёрн Страуструп' => '',
            'Кэтлин Бут' => '',
            'Линус Торвальдс' => '',
            'Расмус Лердорф' => '',
        ];
        foreach ($arr as $key => $value){
            $arr[$key] = [
                'математика' => mt_rand(2,5),
                'физика' => mt_rand(2,5),
                'химия' => mt_rand(2,5),
                'информатика' => mt_rand(4,5)
            ];
        }
        $grades_sum = [];
        foreach ($arr as $name => $grades){
            foreach ($grades as $subject => $mark){
                if (isset($grades_sum[$subject])) {
                    $grades_sum[$subject] += $mark;
                }
                else{
                    $grades_sum[$subject] = $mark;
                }
            }
        }
        echo "<pre>";
        print_r($arr);
        echo "</pre>";
        foreach ($grades_sum as $subject => $mark){
            echo "$subject: сумма = $mark, средняя = " . $mark/count($arr) . "<br>";
        }
        ?>
    </p>
    <h3>Задание 1.14.2</h3>
    <p>
        <?php
        $average_temp = [
            'Январь' => '',
            'Февраль' => '',
            'Март' => '',
            'Апрель' => '',
            'Май' => '',
            'Июнь' => '',
            'Июль' => '',
            'Август' => '',
            'Сентябрь' => '',
            'Октябрь' => '',
            'Ноябрь' => '',
            'Декабрь' => ''
        ];
        foreach ($average_temp as $month => $islands) {
            $average_temp[$month] = [
                'Куба' => mt_rand(0, 40),
                'Тринидад' => mt_rand(0, 40),
                'Ямайка' => mt_rand(0, 40),
                'Гаити' => mt_rand(0, 40)
            ];
        }
        echo '<pre>';
        print_r($average_temp);
        echo '</pre>';
        $max_temp = [];
        foreach ($average_temp as $month => $islands){
            foreach ($islands as $island => $temp){
                if (isset($max_temp[$month])) {
                    if ($max_temp[$month] < $temp) {
                        $max_temp[$month] = $temp;
                    }
                }
                else{
                    $max_temp[$month] = $temp;
                }
            }
        }
        echo "Максимальные температуры на островах:<br>";
        foreach ($max_temp as $month => $temp){
            echo "$month: $temp °C<br>";
        }
        ?>
    </p>
    <h3>Задание 1.14.3</h3>
    <p>
        <?php
        $arr = [];
        $maximum_value = [];
        for ($row = 1; $row <=5; $row++){
            for ($column = 1; $column <=6; $column++){
                $arr[$row][$column] = mt_rand(0,100);
                if ((!isset($maximum_value[$column]) || $maximum_value[$column] < $arr[$row][$column]) && $column % 2 == 0){
                    $maximum_value[$column] = $arr[$row][$column];
                }
            }
        }
        $mul = 1;
        foreach ($maximum_value as $value){
            $mul *= $value;
        }
        echo 'Исходный массив:<br>';
        echo '<pre>';
        print_r($arr);
        echo '</pre>';
        echo 'Максимальные элементы в четных столбцах:<br>';
        foreach ($maximum_value as $key => $value){
            echo "Столбец №$key: $value<br>";
        }
        echo "<br>Произведение этих элементов: $mul";
        ?>
    </p>
    <h3>Задание 1.15.4</h3>
    <p>
        <?php
        $chars = "abcdefghijklmnopqrstuvwxyz";
        $arr = [];
        for ($i = 1; $i<=10; $i++){
            for ($j = 1; $j<=10; $j++){
                for ($k =1; $k<=10; $k++){
                    if (isset($arr[$i][$j])) {
                        $arr[$i][$j] .= $chars[mt_rand(0, 25)];
                    }
                    else{
                        $arr[$i][$j] = $chars[mt_rand(0, 25)];
                    }
                }
            }
        }
        echo 'Исходный строковый двумерный массив:';
        echo '<pre>';
        print_r($arr);
        echo '</pre>';
        echo 'Строки, начинающиеся на "a":<br>';
        foreach ($arr as $row){
            foreach ($row as $cell){
                if ($cell[0] == 'a'){
                    echo "$cell, ";
                }
            }
        }
        ?>
    </p>
    <h3>Задание 1.15.5</h3>
    <p>
        <?php
        $arr =[];
        for ($i = 0; $i <= mt_rand(2,10); $i++){
            for ($j = 0; $j <= mt_rand(2, 10); $j++){
                $arr[$i][$j] = mt_rand(0,100);
            }
        }
        echo 'Исходный массив:<br><pre>';
        print_r($arr);
        echo '</pre>';
        $count = 0;
        $max_column = 0;
        foreach ($arr as $row){
            foreach ($row as $column => $cell){
                if ($max_column < $column){
                    $max_column = $column;
                }
                $count++;
            }
        }
        echo "<br>Общее количество элементов: $count, строк:" . count($arr) . ", столбцов: " . $max_column + 1;
        ?>
    </p>
    <h3>Задание 2</h3>
    <p>
        <?php
        $arr = [];
        for ($i = 1; $i <= 1000; $i++){
            $arr[] = mt_rand(0,50);
        }
        echo "Исходный массив:<br>";
        print_r($arr);
        $sum = 0;
        foreach ($arr as $value){
            if ($value == 0) break;
            $sum += $value;
        }
        echo "<br>Сумма элементов до нуля: $sum";
        ?>
    </p>
    <h3>Задание 3</h3>
    <p>
        <?php
        $arr = [];
        $n = mt_rand(10,30);
        for ($i = 1; $i <= $n; $i++){
            $arr[] = mt_rand(1,100);
        }
        echo "Исходный массив:<br><pre>";
        print_r($arr);
        echo "</pre>";
        $sum = 0;
        $count = 0;
        foreach ($arr as $value){
            if ($value % 2 == 0){
                $sum += $value;
            }
            else {
                $count++;
            }
        }
        echo "<br>Сумма четных эл-тов: $sum, кол-во нечетных эл-тов: $count";
        ?>
    </p>
    <h2>Вариативная часть</h2>
    <h3>Задача №1</h3>
    <p>
        <?php
        $arr = [];
        for ($i = 1; $i <= 1000; $i++){
            $arr[] = mt_rand(-5,50);
        }
        echo "Исходный массив:<br>";
        print_r($arr);
        $start_key = 0;
        $end_key = 999;
        foreach ($arr as $key => $value){
            if ($value<0){
                $start_key = $key;
            }
        }
        $sum = 0;
        for ($i = $start_key; $i <= $end_key; $i++){
            $sum += $arr[$i];
        }
        echo "<br>Сумма эл-тов с $start_key по $end_key: $sum";
        ?>
    </p>
    <h3>Задача №2</h3>
    <p>
        <?php
        $arr = [];
        for ($i = 1; $i <= 1000; $i++){
            $arr[] = mt_rand(-5,8);
        }
        echo "Исходный массив:<br>";
        print_r($arr);
        $start_key = 0;
        $end_key = 999;
        $stop_search = 2;
        foreach ($arr as $key => $value){
            if ($value>0){
                $start_key = $end_key;
                $end_key = $key;
                if (--$stop_search == 0) break;
            }
        }
        $sum = 0;
        for ($i = $start_key; $i <= $end_key; $i++){
            $sum += $arr[$i];
        }
        echo "<br>Сумма эл-тов с $start_key по $end_key: $sum";
        ?>
    </p>
    <h3>Задача №3</h3>
    <p>
        <?php
        $arr = [];
        for ($i = 1; $i <= 1000; $i++){
            $arr[] = mt_rand(-15,14);
        }
        echo "Исходный массив:<br>";
        print_r($arr);
        $start_key = 0;
        $end_key = 999;
        foreach ($arr as $key => $value){
            if ($value<0){
                $start_key = $end_key;
                $end_key = $key;
            }
        }
        $sum = 0;
        for ($i = $start_key; $i <= $end_key; $i++){
            $sum += $arr[$i];
        }
        echo "<br>Сумма эл-тов с $start_key по $end_key: $sum";
        ?>
    </p>
    <h3>Задача №4</h3>
    <p>
        <?php
        $n = mt_rand(10, 20);
        $arr = [];
        for ($i = 1; $i <= $n; $i++){
            $arr[] = mt_rand(-4, 7) + lcg_value();
        }
        echo "Исходный массив:<br><pre>";
        print_r($arr);
        echo "</pre><br>Сортированный массив:<br>";
        for ($i = 0; $i <= count($arr) - 1; $i++){
            for ($j = $i + 1; $j <= count($arr) - 1; $j++){
                if ($arr[$i] < $arr[$j]){
                    $tmp = $arr[$j];
                    $arr[$j] = $arr[$i];
                    $arr[$i] = $tmp;
                }
            }
        }
        foreach ($arr as $value){
            if (abs($value) > 2){
                echo "$value<br>";
            }
        }
        ?>
    </p>
    <h3>Задача №5</h3>
    <p>
        <?php
        $n = mt_rand(10, 20);
        $arr = [];
        for ($i = 1; $i <= $n; $i++){
            $arr[] = mt_rand(11, 21) + lcg_value();
        }
        echo "Исходный массив:<br><pre>";
        print_r($arr);
        $A = mt_rand(11, 22);
        $B = mt_rand(11, 22);
        echo "</pre><br>Сортированный массив между A = $A и B = $B:<br>";
        for ($i = 0; $i <= count($arr) - 1; $i++){
            for ($j = $i + 1; $j <= count($arr) - 1; $j++){
                if ($arr[$i] < $arr[$j]){
                    $tmp = $arr[$j];
                    $arr[$j] = $arr[$i];
                    $arr[$i] = $tmp;
                }
            }
        }
        foreach ($arr as $value){
            if ($A < $B && $value >= $A && $value <= $B || $A > $B && $value <= $A && $value >= $B){
                echo "$value<br>";
            }
        }
        ?>
    </p>
    <h3>Задача №6</h3>
    <p>
        <?php
        $n = mt_rand(10, 20);
        $arr = [];
        for ($i = 1; $i <= $n; $i++){
            $arr[] = mt_rand(-5, 4) + lcg_value();
        }
        echo "Исходный массив:<br><pre>";
        print_r($arr);
        echo "</pre><br>Сортированный массив из отрицательных элементов:<br>";
        for ($i = 0; $i <= count($arr) - 1; $i++){
            for ($j = $i + 1; $j <= count($arr) - 1; $j++){
                if ($arr[$i] > $arr[$j]){
                    $tmp = $arr[$j];
                    $arr[$j] = $arr[$i];
                    $arr[$i] = $tmp;
                }
            }
        }
        foreach ($arr as $value){
            if ($value < 0){
                echo "$value<br>";
            }
        }
        ?>
    </p>
    <h3>Задача №7</h3>
    <p>
        <?php
        $arr = [];
        for ($i = 1; $i <= 100; $i++){
            $arr[] = mt_rand(-35, 49) + lcg_value();
        }
        echo "Исходный массив:<br><pre>";
        print_r($arr);
        $X = mt_rand(1, 49);
        echo "</pre><br>Сортированный массив (X = $X):<br>";
        for ($i = 0; $i <= count($arr) - 1; $i++){
            for ($j = $i + 1; $j <= count($arr) - 1; $j++){
                if ($arr[$i] > $arr[$j]){
                    $tmp = $arr[$j];
                    $arr[$j] = $arr[$i];
                    $arr[$i] = $tmp;
                }
            }
        }
        foreach ($arr as $value){
            if ($value > 0 && $value < $X){
                echo "$value<br>";
            }
        }
        ?>
    </p>
    <h3>Задача №8</h3>
    <p>
        <?php
        $arr = [];
        $keys = [];
        for ($i = 1; $i <= 100; $i++){
            $arr[] = mt_rand(-15, 37) + lcg_value();
            $keys[] = $i - 1;
        }
        echo "Исходный массив:<br><pre>";
        print_r($arr);
        echo "</pre><br>Сортированный массив:<br>";
        for ($i = 0; $i <= count($arr) - 1; $i++){
            for ($j = $i + 1; $j <= count($arr) - 1; $j++){
                if ($arr[$i] > $arr[$j]){
                    $tmp = $arr[$j];
                    $arr[$j] = $arr[$i];
                    $arr[$i] = $tmp;
                    $tmp = $keys[$j];
                    $keys[$j] = $keys[$i];
                    $keys[$i] = $tmp;
                }
            }
        }
        foreach ($arr as $key => $value){
            if ($value > 0 && $keys[$key] % 2 == 0){
                echo "$value<br>";
            }
        }
        ?>
    </p>
    <h3>Задача №9</h3>
    <p>
        <?php
        $arr = [];
        for ($i = 1; $i <= 100; $i++){
            $arr[] = mt_rand(3, 34) + lcg_value();
        }
        echo "Исходный массив:<br><pre>";
        print_r($arr);
        echo "</pre><br>Сортированный массив:<br>";
        for ($i = 0; $i <= count($arr) - 1; $i++){
            for ($j = $i + 1; $j <= count($arr) - 1; $j++){
                if ($arr[$i] > $arr[$j]){
                    $tmp = $arr[$j];
                    $arr[$j] = $arr[$i];
                    $arr[$i] = $tmp;
                }
            }
        }
        foreach ($arr as $value){
            if (floor($value) % 2 != 0){
                echo "$value<br>";
            }
        }
        ?>
    </p>
    <h3>Задача №10</h3>
    <p>
        <?php
        $n = mt_rand(5, 10);
        $arr = [];
        for ($i = 1; $i <= $n; $i++){
            $arr[] = mt_rand(2, 9) + lcg_value();
        }
        echo "Исходный массив:<br><pre>";
        print_r($arr);
        echo "</pre><br>";
        $minimum = 1.0;
        $task_value = $arr[0];
        foreach ($arr as $value){
            $limit1 = $value - floor($value);
            $limit2 = 1 - $limit1;
            if ($limit1 < $limit2 && $limit1 < $minimum){
                $task_value = $value;
                $minimum = $limit1;
            }
            elseif ($limit1 > $limit2 && $limit2 < $minimum){
                $task_value = $value;
                $minimum = $limit2;
            }
        }
        echo "Число, ближе всех к целому: $task_value";
        ?>
    </p>
    <h3>Задача №11</h3>
    <p>
        <?php
        $n = mt_rand(5, 10);
        $arr = [];
        $sum = 0;
        for ($i = 1; $i <= $n; $i++){
            $arr[] = mt_rand(3, 9) + lcg_value();
            $sum += $arr[$i - 1];
        }
        echo "Исходный массив:<br><pre>";
        print_r($arr);
        echo "</pre><br>";
        $minimum = 3.5;
        $task_value = $arr[0];
        foreach ($arr as $value){
            $limit = abs ($value - $sum / $n);
            if ($limit < $minimum){
                $task_value = $value;
                $minimum = $limit;
            }
        }
        echo "Число, ближе всех к среднему (". $sum / $n ."): $task_value";
        ?>
    </p>
    <h3>Задача №12</h3>
    <p>
        <?php
        $arr = [];
        $maximum_value = [];
        for ($row = 1; $row <=5; $row++){
            for ($column = 1; $column <=6; $column++){
                $arr[$row][$column] = mt_rand(0,100);
                if ($row % 2 == 0 && (!isset($maximum_value[$row]) || $maximum_value[$row] < $arr[$row][$column])){
                    $maximum_value[$row] = $arr[$row][$column];
                }
            }
        }
        echo "Исходный массив:<br><pre>";
        print_r($arr);
        echo "</pre><br>Максимальные эл-ты в каждом четном одномерном массиве: ";
        $product = 1;
        foreach ($maximum_value as $value){
            echo "$value, ";
            $product *= $value;
        }
        echo "<br>Произведение этих эл-тов: $product"
        ?>
    </p>
    <h3>Задача №13</h3>
    <p>
        <?php
        $arr = [];
        $sum = [];
        for ($row = 1; $row <=5; $row++){
            for ($column = 1; $column <=6; $column++){
                $arr[$row][$column] = mt_rand(0,1);
                if (isset($sum[$row])){
                    $sum[$row] += $arr[$row][$column];
                }
                else{
                    $sum[$row] = $arr[$row][$column];
                }
            }
        }
        echo "Исходный массив:<br><pre>";
        print_r($arr);
        echo "</pre><br>";
        $maximum = 0;
        foreach ($sum as $value){
            if ($value > $maximum){
                $maximum = $value;
            }
        }
        echo "<br>Эти массивы имеют максимальную сумму эл-тов ($maximum): ";
        foreach ($sum as $key => $value){
            if ($value == $maximum){
                echo "$key, ";
            }
        }
        ?>
    </p>
    <h3>Задача №14</h3>
    <p>
        <?php
        $arr = [];
        $minimum_value = [];
        for ($row = 1; $row <=5; $row++){
            for ($column = 1; $column <=6; $column++){
                $arr[$row][$column] = mt_rand(0,100);
                if ($row % 2 != 0 && (!isset($minimum_value[$row]) || $minimum_value[$row] > $arr[$row][$column])){
                    $minimum_value[$row] = $arr[$row][$column];
                }
            }
        }
        echo "Исходный массив:<br><pre>";
        print_r($arr);
        echo "</pre><br>Минимальные эл-ты в каждом нечетном одномерном массиве: ";
        $product = 1;
        foreach ($minimum_value as $value){
            echo "$value, ";
            $product *= $value;
        }
        echo "<br>Произведение этих эл-тов: $product"
        ?>
    </p>
    <h3>Задача №15</h3>
    <p>
        <?php
        $arr = [];
        $minimum_value = [];
        for ($row = 1; $row <=5; $row++){
            for ($column = 1; $column <=6; $column++){
                $arr[$row][$column] = mt_rand(0,100);
                if (!isset($minimum_value[$row]) || $minimum_value[$row] > $arr[$row][$column]){
                    $minimum_value[$row] = $arr[$row][$column];
                }
            }
        }
        echo "Исходный массив:<br><pre>";
        print_r($arr);
        echo "</pre><br>Минимальные эл-ты в каждом одномерном массиве: ";
        foreach ($minimum_value as $value){
            echo "$value, ";
        }
        $maximum = 0;
        foreach ($minimum_value as $value){
            if ($value > $maximum){
                $maximum = $value;
            }
        }
        echo "<br>Среди них максимальный: $maximum"
        ?>
    <h3>Задача №16</h3>
    <p>
        <?php
        $arr = [];
        $maximum_value = [];
        for ($row = 1; $row <=5; $row++){
            for ($column = 1; $column <=6; $column++){
                $arr[$row][$column] = mt_rand(0,100);
                if (!isset($maximum_value[$row]) || $maximum_value[$row] < $arr[$row][$column]){
                    $maximum_value[$row] = $arr[$row][$column];
                }
            }
        }
        echo "Исходный массив:<br><pre>";
        print_r($arr);
        echo "</pre><br>Максимальные эл-ты в каждом одномерном массиве: ";
        foreach ($maximum_value as $value){
            echo "$value, ";
        }
        $minimum = 100;
        foreach ($maximum_value as $value){
            if ($value < $minimum){
                $minimum = $value;
            }
        }
        echo "<br>Среди них минимальный: $minimum"
        ?>
    </p>
    <h3>Задача №17</h3>
    <p>
        <?php
        $arr = [];
        $minimum_value = [];
        $maximum_value = [];
        $sum = [];
        for ($row = 1; $row <=5; $row++){
            for ($column = 1; $column <=6; $column++){
                $arr[$row][$column] = mt_rand(0,100);
                if (!isset($minimum_value[$row]) || $minimum_value[$row] > $arr[$row][$column]){
                    $minimum_value[$row] = $arr[$row][$column];
                }
                if (!isset($maximum_value[$row]) || $maximum_value[$row] < $arr[$row][$column]){
                    $maximum_value[$row] = $arr[$row][$column];
                }
            }
            $sum[$row] = $minimum_value[$row] + $maximum_value[$row];
        }
        echo "Исходный массив:<br><pre>";
        print_r($arr);
        echo "</pre><br>Суммы минимального и максимального эл-тов в каждом одномерном массиве: ";
        foreach ($sum as $value){
            echo "$value, ";
        }
        $product = 1;
        foreach ($sum as $value){
            $product *= $value;
        }
        echo "<br>Произведение этих эл-тов: $product"
        ?>
    </p>
    <h3>Задача №18</h3>
    <p>
        <?php
        $arr = [];
        $minimum_value = [];
        $maximum_value = [];
        $product = [];
        for ($row = 1; $row <=5; $row++){
            for ($column = 1; $column <=6; $column++){
                $arr[$row][$column] = mt_rand(0,100);
                if (!isset($minimum_value[$row]) || $minimum_value[$row] > $arr[$row][$column]){
                    $minimum_value[$row] = $arr[$row][$column];
                }
                if (!isset($maximum_value[$row]) || $maximum_value[$row] < $arr[$row][$column]){
                    $maximum_value[$row] = $arr[$row][$column];
                }
            }
            $product[$row] = $minimum_value[$row] * $maximum_value[$row];
        }
        echo "Исходный массив:<br><pre>";
        print_r($arr);
        echo "</pre><br>Произведение минимального и максимального эл-тов в каждом одномерном массиве: ";
        foreach ($product as $value){
            echo "$value, ";
        }
        $sum = 0;
        foreach ($product as $value){
            $sum += $value;
        }
        echo "<br>Сумма этих эл-тов: $sum"
        ?>
    </p>
    <h3>Задача №19</h3>
    <p>
        <?php
        $arr = [];
        $product = [];
        for ($row = 1; $row <=5; $row++){
            for ($column = 1; $column <=6; $column++){
                $arr[$row][$column] = mt_rand(0,100);
                if (isset($product[$row])){
                    $product[$row] *= $arr[$row][$column];
                }
                else{
                    $product[$row] = $arr[$row][$column];
                }
            }
        }
        echo "Исходный массив:<br><pre>";
        print_r($arr);
        echo "</pre><br>Произведение эл-тов в каждом одномерном массиве: ";
        foreach ($product as $value){
            echo "$value, ";
        }
        $maximum = 0;
        $array_number = 1;
        foreach ($product as $key => $value){
            if ($value > $maximum){
                $maximum = $value;
                $array_number = $key;
            }
        }
        echo "<br>Максимальное произведение в массиве №$array_number"
        ?>
    </p>
    <!--<h3>Задача №20</h3>
    <p>
        //Не доделал
        <?php
/*        $skiers = [];
        echo "<pre>";
        for ($start = 1; $start <= 7; $start++){
            $position_array = [1, 2, 3, 4, 5, 6, 7, 8];
            for ($skier = 1; $skier <= 8; $skier++){
                do {
                    $position = mt_rand(0, count($position_array) - 1);
                } while (!isset($position_array[$position]));
                $skiers[$skier][$start] = $position_array[$position];
                unset($position_array[$position]);
                print_r($position_array);
            }
        }
        echo "Исходный массив:<br>";
        print_r($skiers);
        echo "</pre><br>";
        */?>
    </p>-->
    <h3>Задача №22</h3>
    <p>
        <?php
        $arr = [];
        $sum = [];
        for ($car = 1; $car <= 10; $car++){
            for ($day = 1; $day <= 5; $day++){
                $arr[$car][$day] = mt_rand(0, 1000);
                if (isset($sum[$car])){
                    $sum[$car] += $arr[$car][$day];
                }
                else{
                    $sum[$car] = $arr[$car][$day];
                }
            }
        }
        echo "Пробег автомобилей:<br><pre>";
        print_r($arr);
        echo "Пробег автомобилей за всю неделю:<br>";
        print_r($sum);
        $maximum = 0;
        $car_number = 0;
        foreach ($sum as $key => $value){
            if ($value > $maximum){
                $maximum = $value;
                $car_number = $key;
            }
        }
        echo "</pre><br>Автомобиль №$car_number проехал больше всех: $maximum км.";
        ?>
    </p>
</main>
<?php require 'php/footer.php';?>
</body>
</html>
