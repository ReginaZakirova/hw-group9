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
        while (strlen(explode('.', $pi)[1]) < 2) {
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
        //не могу понять задачу по этой формуле никак 3.14 не получается. С точностью 0.01 это значит должно быть 2 знака после точки?//


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
           echo $c[$i];
       }
?>      
    </main>
<?php
    require "footer.php";
?>
</body>
</html>