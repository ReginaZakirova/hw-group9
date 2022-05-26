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
        echo "слайд 14 задача 2" . "<br>";
        function slide14task2() {
            $arr11 = [
                'куба' => ['январь'=>'30', 'февраль'=>'35', 'март'=>'50'],
                'тринидад' => ['январь'=>'25','февраль'=>'30', 'март'=>'30'],
                'ямайка' => ['январь'=>'30', 'февраль'=>'32', 'март'=>'20'],
                'гаити' => ['январь'=>'37', 'февраль'=>'40', 'март'=>'49']
            ];
        
            $i = 0;
            foreach ($arr11 as $key => $value) {     
                $maxT = 0;  
                $i++;
                foreach ($value as $newKey => $new_value) {
                    if ($new_value > $maxT) {
                        $maxT = $new_value;
                        $arr12[$i] = [
                            $key => $maxT
                        ];
                    }
                }
            }
            return $arr12;
        }
        echo "<pre>";
        print_r(slide14task2());
        echo "</pre>" . "<br>";



        echo "слайд 14 задача 3" . "<br>";
        function slide14task3() {
            for ($i = 0; $i < 6; $i++) {
                for($j = 0; $j < 5; $j++) {
                    $arr14[$j] = mt_rand(0,20);
                }
                $arr13[$i] = $arr14;
            }
            echo "<pre>";
            print_r($arr13);
            echo "</pre>" . "<br>";
            $i = 1;
            $j = 0;
            foreach ($arr13 as $value) {
                $max = 0;
                if ($i % 2 == 0) {
                    foreach ($value as $newKey => $new_value) {
                        if ($new_value > $max ) {
                            $max = $new_value;
                        }
                    }
                    $arr15[$j] = $max;
                    $j++;
                }
                $i++;
            }
            echo "<pre>";
            print_r($arr15);
            echo "</pre>" . "<br>";

            $multiply = 1;
            foreach ($arr15 as $value) {
                $multiply = $multiply * $value;
            }
            echo $multiply . "<br>";
        }
        slide14task3();


        echo "дз задача 2" . "<br>";
        function task2() {
            for ($i = 0; $i < 100; $i++) {
                $arr16[$i] = mt_rand(0,50);
            }

            echo "<pre>";
            print_r($arr16);
            echo "</pre>" . "<br>";
            
            $sum = 0;
            for ($j = 0; $arr16[$j] !== 0; $j++) {
                $sum = $sum + $arr16[$j];
            }

            echo $sum . "<br>";
        }
        task2();

        echo "дз задача 3" . "<br>";
        $n = 10;
        function task3($n) {
            for ($i = 0; $i < $n; $i++) {
                $arr17[$i] = mt_rand(1,100);
            }
            echo "<pre>";
            print_r($arr17);
            echo "</pre>" . "<br>";

            $sum = 0;
            $nN = 0;
            for ($i = 0; $i < $n; $i++) {
                if ($arr17[$i] % 2 == 0) {
                    $sum = $sum + $arr17[$i];
                }
                else $nN++;
            }
            echo $sum . "<br>";
            echo $nN . "<br>";
        }
        task3($n);

        echo "дз вариативная часть задача 3" . "<br>";
        function variablePartTask3() {
            for ($i = 0; $i < 10; $i++) {
                $arr18[$i] = mt_rand(-15,14);
            }

            echo "<pre>";
            print_r($arr18);
            echo "</pre>" . "<br>";

            $j = 0;
            $sum = 0;
            $b = 0;
            $c = 0;
            for ($i = 0; $i < 10; $i++) {
                if ($arr18[$i] < 0) {
                    $b = $i;
                }
            }
            echo $b . "<br>";
            for ($j = 0; $j < $b; $j++) {
                if ($arr18[$j] < 0) {
                    $c = $j;
                }
            }
            echo $c . "<br>";
            for ($i = $c; $i <= $b; $i++) {
                $sum = $arr18[$i] + $sum;
            }

            echo $sum . "<br>";
        }
        variablePartTask3();

        echo "слайд 15 задача 4" . "<br>";
        function Task4() {
            $string = null;
            $arr19 = ['а','б','в','г','д'];
            for ($i = 0; $i < 8; $i++) {
                for($j = 0; $j < 7; $j++) {
                    $t = mt_rand(1,5);
                    for ($ii = 0; $ii <= $t; $ii++) {
                        $s = mt_rand(0,4);
                        $string = $string . $arr19[$s];
                        if ($arr19[$s] == 'а' && $ii == 0) {
                            $flag = 1;
                        }
                    }
                    $arr21[$j] = $string;
                    if ($flag == 1) {
                        echo $string . "<br>";
                    }
                    $string = null;
                    $flag = 0;
                }
                $arr20[$i] = $arr21;
            }
            echo "<pre>";
            print_r($arr20);
            echo "</pre>" . "<br>";
        }
        Task4();


        echo "слайд 15 задача 5" . "<br>";
        function Task5() {
            $count2 = 0;
            $count = 0;
            for ($i = 0; $i < 6; $i++) {
                $count2++;
                $count3 = 0;
                for($j = 0; $j < 5; $j++) {
                    $arr23[$j] = mt_rand(0,20);
                    $count++;
                    $count3++;            
                }
                $arr22[$i] = $arr23;
            }
            echo "<pre>";
            print_r($arr22);
            echo "</pre>" . "<br>";
            echo $count . " общее количество элементов" . "<br>";
            echo $count2 . " количество элементов первого измерения" . "<br>";
            echo $count3 . " количество элементов второго измерения" . "<br>";   //при условии что во всех столбцах количество элементов одинаковое, в условии не совсем понятно//
        }
        Task5();
    ?>      
    </main>
<?php
require "footer.php";
?>
</body>
</html>