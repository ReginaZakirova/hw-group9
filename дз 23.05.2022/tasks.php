<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/styleTasks.css">
    <title>Document</title>
</head>
<body>
<?php
        require "header.php";
?>
    <main>
        <?php

        echo "задача 4 (20 слайд)" . "<br>";
        $i = 1;
        $a = 1;
        $b = 1;
        $sum = $a / $b;
        while ($sum < 10) {
            $i++;
            $a = $a + 3;
            $b = $b + 1;
            $sum = $sum + $a / $b;
        }
        echo $i . "<br>";


        echo "задача 3 (20 слайд)" . "<br>";
        $a = 1;
        $b = 1;
        $pi4 = 0;
        $pi = 0;
        $count = 0;
        while (abs(3.14 - $pi) > 0.01) {
            $count++;
            if ($count % 2 == 0) {
                $ab = - ($a / $b);
            }
            else {
                $ab = $a / $b;
            }
            $pi4 = $pi4 + $ab;
            $b = $b + 2;
            $pi = $pi4 * 4;
        }
        echo $count . "<br>";
        echo $pi . "<br>";


        echo "задача 2 (21 слайд)" . "<br>";
        $num = 1000;
        $i = 0;
        while ($num >= 50) {
            $i++;
            $num = $num / 2;
        }
        echo $num . "<br>";
        echo $i . "<br>";
        

        echo "задача 2 (21 слайд for)" . "<br>";
        $i = 0;
        for ($num = 1000; $num >= 50; $i++) {
            $num = $num / 2;
        }
        echo $num . "<br>";
        echo $i . "<br>";


        echo "задача 3 (21 слайд)" . "<br>";
        $ii = 0;
        for ($i = 2; $i <= 10; $i++) {
            $b = 10 - $i;
            $c[$ii] = $b;
            $ii++;
        }
       $c = array_reverse($c);
       for ($i = 0; $i <= count($c); $i++) {
           echo $c[$i] . "<br>";
       }

       /*echo "задача 1 (вариативная часть)" . "<br>";
       $n = 20;
       $a = mt_rand(0,20);
       $x = mt_rand(0,20);
       $e = mt_rand(0,20);
       $y[0] = $a;
        for ($i = 1; $i <= $n; $i++) {
        $y[$i] = 0.5*($y[$i - 1] + $x/$y[$i - 1]);               //не понял что значат квадратные скобки в формуле последовательности y(i), возьму обычные скобки//
            echo $y[$i] . "<br>";
        }
        while (abs())                                            //не понял что такое _ в формуле неравенства которое должно быть выполнено//
        */

        echo "задача 3 (вариативная часть)" . "<br>";
        $a = 1;
        $b = 1;
        $sum = 0;
        $count = 0;
        while ($sum <= 10) {
            $sum = $sum + $a / $b;
            $a = $a + 3 + $count*2;
            $count++;
            $b = $b * 2;
        }
        echo $count . "<br>";


        echo "задача 8 (вариативная часть)" . "<br>";
        $n = 10000;
        $k = mt_rand(0,$n);
        $count = 0;
        for ($i = 1; ($k / $i) >= 1; $i = $i * 10) {
                $count++;
        }
        echo $count . "<br>";
        for ($i = 1; $i <= $count; $i++) {
            $b = abs((int)($k / pow(10,$i)) - $k / pow(10,$i)) * 10;
            echo (int)$b . "<br>";
        }
        

?>      
    </main>
<?php
    require "footer.php";
?>
</body>
</html>