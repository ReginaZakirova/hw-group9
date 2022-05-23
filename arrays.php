<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Массивы</title>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <?php include 'php/day-night.php';?>
    <?php
    function fill_array($start, $length, $min = 0, $max = 100): array
    {
        $arr = [];
        for ($i = $start; $i <= $start + $length - 1; $i++){
            $arr[$i] = mt_rand($min, $max);
        }
        return $arr;
    }
    function fill_array_float($start, $length, $min = 0, $max = 100): array
    {
        $arr = [];
        for ($i = $start; $i <= $start + $length - 1; $i++){
            $arr[$i] = mt_rand($min, $max) + lcg_value() - 1;
        }
        return $arr;
    }
    function minimum_array($arr): float{
        $minimum = current($arr);
        foreach ($arr as $value){
            if ($value < $minimum){
                $minimum = $value;
            }
        }
        return $minimum;
    }
    function maximum_array($arr): float{
        $maximum = current($arr);
        foreach ($arr as $value){
            if ($value > $maximum){
                $maximum = $value;
            }
        }
        return $maximum;
    }
    function sort_array($arr, $ascend = True){
        for ($i = 0; $i <= count($arr) - 1; $i++){
            for ($j = $i + 1; $j <= count($arr) - 1; $j++){
                if (($ascend && $arr[$i] > $arr[$j]) || (!$ascend && $arr[$i] < $arr[$j])){
                    $tmp = $arr[$j];
                    $arr[$j] = $arr[$i];
                    $arr[$i] = $tmp;
                }
            }
        }
        return $arr;
    }
    function sum_array($arr, $start_key = 0, $end_key = 'LAST_ELEMENT'){
        if ($end_key == 'LAST_ELEMENT') $end_key = array_key_last($arr);
        $sum = 0;
        for ($i = $start_key; $i <= $end_key; $i++){
            if (isset($arr[$i])){
                $sum += $arr[$i];
            }
        }
        return $sum;
    }
    function product_array($arr, $start_key = 0, $end_key = 'LAST_ELEMENT'){
        if ($end_key == 'LAST_ELEMENT') $end_key = array_key_last($arr);
        $product = 1;
        for ($i = $start_key; $i <= $end_key; $i++){
            if (isset($arr[$i])){
                $product *= $arr[$i];
            }
        }
        return $product;
    }
    function pre($arr){
        echo "<pre>";
        print_r($arr);
        echo "</pre>";
    }
    ?>
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
        $arr = fill_array(0, 10);
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
        $arr = fill_array(0, $n, -100);
        $minimum = 100;
        $maximum = -100;
        foreach ($arr as $value){
            if ($value>0 && $value < $minimum){
                $minimum = $value;
            }
            if ($value<0 && $value > $maximum){
                $maximum = $value;
            }
        }
        pre($arr);
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
        pre($arr);
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
        pre($average_temp);
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
            $arr[$row] = fill_array(1, 6);
            for ($column = 1; $column <=6; $column++){
                if ((!isset($maximum_value[$column]) || $maximum_value[$column] < $arr[$row][$column]) && $column % 2 == 0){
                    $maximum_value[$column] = $arr[$row][$column];
                }
            }
        }
        $mul = 1;
        foreach ($maximum_value as $value){
            $mul *= $value;
        }
        echo 'Исходный массив:';
        pre($arr);
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
        pre($arr);
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
            $arr[$i] = fill_array(0, mt_rand(2, 10));
        }
        pre($arr);
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
        $arr = fill_array(0, 1000, 0, 50);
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
        $arr = fill_array(0, $n, 1);
        echo "Исходный массив:<br>";
        pre($arr);
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
        $arr = fill_array(0, 1000, -5, 50);
        echo "Исходный массив:<br>";
        print_r($arr);
        $start_key = 0;
        $end_key = 999;
        foreach ($arr as $key => $value){
            if ($value<0){
                $start_key = $key;
            }
        }
        $sum = sum_array($arr, $start_key, $end_key);
        echo "<br>Сумма эл-тов с $start_key по $end_key: $sum";
        ?>
    </p>
    <h3>Задача №2</h3>
    <p>
        <?php
        $arr = fill_array(0, 1000, -5, 8);
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
        $sum = sum_array($arr, $start_key, $end_key);
        echo "<br>Сумма эл-тов с $start_key по $end_key: $sum";
        ?>
    </p>
    <h3>Задача №3</h3>
    <p>
        <?php
        $arr = fill_array(0, 1000, -15, 14);
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
        $sum = sum_array($arr, $start_key, $end_key);
        echo "<br>Сумма эл-тов с $start_key по $end_key: $sum";
        ?>
    </p>
    <h3>Задача №4</h3>
    <p>
        <?php
        $n = mt_rand(10, 20);
        $arr = fill_array_float(0, $n, -4, 8);
        echo "Исходный массив:<br>";
        pre($arr);
        echo "<br>Сортированный массив:<br>";
        $arr = sort_array($arr, False);
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
        $arr = fill_array_float(0, $n, 11, 22);
        echo "Исходный массив:<br>";
        pre($arr);
        $A = mt_rand(11, 22);
        $B = mt_rand(11, 22);
        echo "<<br>Сортированный массив между A = $A и B = $B:<br>";
        $arr = sort_array($arr, False);
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
        $arr = fill_array_float(0, $n, -5, 5);
        echo "Исходный массив:<br>";
        pre($arr);
        echo "<br>Сортированный массив из отрицательных элементов:<br>";
        $arr = sort_array($arr);
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
        $arr = fill_array_float(0, 100, -35, 50);
        echo "Исходный массив:<br>";
        pre($arr);
        $X = mt_rand(1, 49);
        echo "<br>Сортированный массив (X = $X):<br>";
        $arr = sort_array($arr);
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
        echo "Исходный массив:<br>";
        pre($arr);
        echo "<br>Сортированный массив:<br>";
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
        $arr = fill_array_float(0, 100, 3, 35);
        echo "Исходный массив:<br>";
        pre($arr);
        echo "<br>Сортированный массив:<br>";
        $arr = sort_array($arr);
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
        $arr = fill_array_float(0, $n, 2, 10);
        echo "Исходный массив:<br>";
        pre($arr);
        echo "<br>";
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
        $arr = fill_array_float(0, $n, 3, 10);
        $sum = sum_array($arr);
        echo "Исходный массив:<br>";
        pre($arr);
        echo "<br>";
        $minimum = 7;
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
            $arr[$row] = fill_array(1, 6);
            if ($row % 2 == 0){
                $maximum_value[$row] = maximum_array($arr[$row]);
            }
        }
        echo "Исходный массив:<br>";
        pre($arr);
        echo "<br>Максимальные эл-ты в каждом четном одномерном массиве: ";
        foreach ($maximum_value as $value){
            echo "$value, ";
        }
        $product = product_array($maximum_value);
        echo "<br>Произведение этих эл-тов: $product"
        ?>
    </p>
    <h3>Задача №13</h3>
    <p>
        <?php
        $arr = [];
        $sum = [];
        for ($row = 1; $row <=5; $row++){
            $arr[$row] = fill_array(1, 6, 0, 1);
            $sum[$row] = sum_array($arr[$row]);
        }
        echo "Исходный массив:<br>";
        pre($arr);
        $maximum = maximum_array($sum);
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
            $arr[$row] = fill_array(1, 6);
            if ($row % 2 != 0) {
                $minimum_value[$row] = minimum_array($arr[$row]);
            }
        }
        echo "Исходный массив:<br>";
        pre($arr);
        echo "<br>Минимальные эл-ты в каждом нечетном одномерном массиве: ";
        foreach ($minimum_value as $value){
            echo "$value, ";
        }
        $product = product_array($minimum_value);
        echo "<br>Произведение этих эл-тов: $product"
        ?>
    </p>
    <h3>Задача №15</h3>
    <p>
        <?php
        $arr = [];
        $minimum_value = [];
        for ($row = 1; $row <=5; $row++){
            $arr[$row] = fill_array(1, 6);
            $minimum_value[$row] = minimum_array($arr[$row]);
        }
        echo "Исходный массив:<br>";
        pre($arr);
        echo "<br>Минимальные эл-ты в каждом одномерном массиве: ";
        foreach ($minimum_value as $value){
            echo "$value, ";
        }
        $maximum = maximum_array($minimum_value);
        echo "<br>Среди них максимальный: $maximum"
        ?>
    <h3>Задача №16</h3>
    <p>
        <?php
        $arr = [];
        $maximum_value = [];
        for ($row = 1; $row <=5; $row++){
            $arr[$row] = fill_array(1, 6);
            $maximum_value[$row] = maximum_array($arr[$row]);
        }
        echo "Исходный массив:<br>";
        pre($arr);
        echo "<br>Максимальные эл-ты в каждом одномерном массиве: ";
        foreach ($maximum_value as $value){
            echo "$value, ";
        }
        $minimum = minimum_array($maximum_value);
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
            $arr[$row] = fill_array(1, 6);
            $minimum_value[$row] = minimum_array($arr[$row]);
            $maximum_value[$row] = maximum_array($arr[$row]);
            $sum[$row] = $minimum_value[$row] + $maximum_value[$row];
        }
        echo "Исходный массив:<br>";
        pre($arr);
        echo "<br>Суммы минимального и максимального эл-тов в каждом одномерном массиве: ";
        foreach ($sum as $value){
            echo "$value, ";
        }
        $product = product_array($sum);
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
            $arr[$row] = fill_array(1, 6);
            $minimum_value[$row] = minimum_array($arr[$row]);
            $maximum_value[$row] = maximum_array($arr[$row]);
            $product[$row] = $minimum_value[$row] * $maximum_value[$row];
        }
        echo "Исходный массив:<br>";
        pre($arr);
        echo "<br>Произведение минимального и максимального эл-тов в каждом одномерном массиве: ";
        foreach ($product as $value){
            echo "$value, ";
        }
        $sum = sum_array($product);
        echo "<br>Сумма этих эл-тов: $sum"
        ?>
    </p>
    <h3>Задача №19</h3>
    <p>
        <?php
        $arr = [];
        $product = [];
        for ($row = 1; $row <=5; $row++){
            $arr[$row] = fill_array(1, 6);
            $product[$row] = product_array($arr[$row]);
        }
        echo "Исходный массив:<br>";
        pre($arr);
        echo "<br>Произведение эл-тов в каждом одномерном массиве: ";
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
    <h3>Задача №20</h3>
    <p>
        <?php
        $skiers = [];
        for ($start = 1; $start <= 7; $start++){
            for ($position = 1; $position <= 8; $position++){
                do{
                    $skier = mt_rand(1, 8);
                } while (isset($skiers[$skier][$start]));
                $skiers[$skier][$start] = $position;
            }
        }
        echo "Места, занятые лыжниками:<br>";
        pre($skiers);
        echo "<br>";
        //Суммируем позиции
        $sum = [];
        foreach ($skiers as $skier => $starts) {
            $sum[$skier] = sum_array($starts);
        }
        //Ищем минимум
        $minimum = minimum_array($sum);
        //Определяем кандидатов на первое место
        $contenders = [];
        foreach ($sum as $skier => $value){
            if ($value == $minimum){
                $contenders[] = $skier;
            }
        }
        echo "Претенденты на первое место: ";
        //Определяем победителя
        $minimum = $skiers[$contenders[0]][7];
        $winner = $contenders[0];
        foreach ($contenders as $skier){
            echo "Лыжник №$skier, ";
            if ($skiers[$skier][7] < $minimum){
                $minimum = $skiers[$skier][7];
                $winner = $skier;
            }
        }
        echo "<br>Победил лыжник №$winner";
        ?>
    </p>
    <h3>Задача №21</h3>
    <p>
        <?php
        $sunny_days = [];
        //$distance = [];
        $sum = [];
        $distance = fill_array(1, 5, 0, 20000);
        for ($resort = 1; $resort<=5; $resort++){
            $sunny_days[$resort] = fill_array(1, 10, 0, 365);
            $sum[$resort] = sum_array($sunny_days[$resort]);
        }
        echo "Количество солнечных дней:<br>";
        pre($sunny_days);
        echo "Расстояние до курортов:<br>";
        pre($distance);
        echo "<br>";
        //Определяем максимум
        $maximum = maximum_array($sum);
        //Определяем претендентов
        $contenders = [];
        foreach ($sum as $resort => $value){
            if ($value == $maximum){
                $contenders[] = $resort;
            }
        }
        echo "Претенденты на первое место: ";
        //Определяем победителя
        $minimum = $distance[$contenders[0]];
        $winner = $contenders[0];
        foreach ($contenders as $resort){
            echo "курорт №$resort, ";
            if ($minimum > $distance[$resort]){
                $minimum = $distance[$resort];
                $winner = $resort;
            }
        }
        echo "<br>Ближе всех из них: курорт №$winner";
        ?>
    </p>
    <h3>Задача №22</h3>
    <p>
        <?php
        $arr = [];
        $sum = [];
        for ($car = 1; $car <= 10; $car++){
            $arr[$car] = fill_array(1, 5, 0, 1000);
            $sum[$car] = sum_array($arr[$car]);
        }
        echo "Пробег автомобилей:<br>";
        pre($arr);
        echo "Пробег автомобилей за всю неделю:<br>";
        pre($sum);
        $maximum = 0;
        $car_number = 0;
        foreach ($sum as $key => $value){
            if ($value > $maximum){
                $maximum = $value;
                $car_number = $key;
            }
        }
        echo "<br>Автомобиль №$car_number проехал больше всех: $maximum км.";
        ?>
    </p>
    <h3>Задача №23</h3>
    <p>
        <?php
        $production =[];
        $sum = [];
        for ($worker = 1; $worker <= 8; $worker++){
            $production[$worker] = fill_array(1, 5, 0, 10);
            $sum[$worker] = sum_array($production[$worker]);
        }
        echo "Производство деталей:<br>";
        pre($production);
        echo "<br>";
        $maximum = maximum_array($sum);
        echo "Рабочие, кот. произвели наибольшее кол-во деталей ($maximum): ";
        foreach ($sum as $worker => $value){
            if ($value == $maximum){
                echo "рабочий №$worker, ";
            }
        }
        ?>
    </p>
    <h3>Задача №24</h3>
    <p>
        <?php
        $house = [];
        $sum = [];
        for ($floor = 1; $floor <= 3; $floor++){
            for ($room = 1; $room <= 6; $room++){
                //Размеры в мм
                $house[$floor][$room]["width"] = mt_rand(1000, 5000);
                $house[$floor][$room]["length"] = mt_rand(1000, 5000);
                $area = $house[$floor][$room]["width"] * $house[$floor][$room]["length"];
                if (isset($sum[$floor])){
                    $sum[$floor] += $area;
                }
                else{
                    $sum[$floor] = $area;
                }
            }
        }
        echo "Размеры комнат в доме:<br>";
        pre($house);
        echo "<br>";
        $minimum = minimum_array($sum);
        echo "Этажи с минимальной жилой площадью ($minimum): ";
        foreach ($sum as $floor => $value){
            if ($value == $minimum){
                echo "этаж №$floor, ";
            }
        }
        ?>
    </p>
    <h3>Задача №25</h3>
    <p>
        <?php
        $exams = [];
        $sum = [];
        for ($subject = 1; $subject <=4; $subject++){
            $exams[$subject] = fill_array(1, 20, 2, 5);
            $sum[$subject] = sum_array($exams[$subject]);
        }
        echo "Результаты экзаменов:<br>";
        pre($exams);
        echo "<br>";
        $maximum = maximum_array($sum);
        echo "Максимальный средний бал (" . $maximum / count($exams[1]) . ") получен по: ";
        foreach ($sum as $subject => $value){
            if ($value == $maximum){
                echo "предмету №$subject, ";
            }
        }
        ?>
    </p>
</main>
<?php require 'php/footer.php';?>
</body>
</html>
