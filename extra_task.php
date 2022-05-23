<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Дополнительное задание</title>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <?php include 'php/day-night.php';?>
</head>
<body>
<?php require 'php/header.php';?>
<main>
    <h3>Задача №1</h3>
    <p>
        Создать файл (text.txt). В файле должен находиться текст (минимум 1000 символов). Необходимо взять содержимое из файла и подсчитать, сколько раз каждое слово встречается в тексте.
    </p>
    <p>
        <?php
        $text = str_replace(['.', ',', '!', '?', '(', ')'], '',file_get_contents('text.txt'));
        while(str_contains($text, "  ")){
            $text = str_replace("  ", " ", $text);
        }
        $arr = explode(' ', $text);
        $result = [];
        foreach ($arr as $value){
            $val = mb_strtolower($value);
            if (isset($result[$val])){
                $result[$val] += 1;
            }
            else{
                $result[$val] = 1;
            }
        }
        print_r($result);
        ?>
    </p>
    <h3>Задача №2</h3>
    <p>
        Волшебный мост
    </p>
    <p>
        <?php
        function bridge($rub): float
        {
            $rub -= 0.29;
            return round(fmod($rub, 1) * 100 + floor($rub) / 100, 2);
        }
        $start_money = $money = round(mt_rand(0, 99) + lcg_value(), 2);
        echo "Начальный капитал: $start_money руб.<br>";
        $maximum = $money;
        $count = $max_count = 0;
        //В другом эксперименте я перебрал все варианты и выяснил, что 197 это максимальное количество проходов,
        //которое может привести к увеличению капитала
        while ($money > 0.29 && $count++ <= 197) {
            $money = bridge($money);
            if ($maximum < $money) {
                $maximum = $money;
                $max_count = $count;
            }
        }
        echo "Оптимальное количество проходов: $max_count, сумма: $maximum, доход: " . round(100 * ($maximum - $start_money) / $start_money, 1) . "%";
        ?>
    </p>
</main>
<?php require 'php/footer.php';?>
</body>
</html>
