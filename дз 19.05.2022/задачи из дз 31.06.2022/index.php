<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo 'задача 5' . '<br>';
        $str = file_get_contents('1.txt');
        $str = str_replace(" ", "", $str);
        $arr = explode('.',$str);

        $str2 = file_get_contents('2.txt');
        $str2 = str_replace(' ', '', $str2);
        $arr2 = explode('.',$str2);

        $str3 = fopen('3.txt', 'r+');
        for ($i = 0; $i < count($arr); $i++) {
            for ($j = 0; $j < count($arr2); $j++) {
                if ($arr[$i] == $arr2[$j]) {
                    $flag = 1;
                }
            }
            
            if ($flag == 1 && $arr[$i] != null) {
                $str4 = fwrite($str3, $arr[$i] . '.');
            }
            $flag = 0;
        }



        echo 'доп задача' . '<br>';
        $nHour = mt_rand(1,12);
        $nMin = mt_rand(0,59);
                                                            // всего 360 градусов, промежуток в 1 час 30 градусов
        $cornerHour =  $nHour * 30;                         //угол между часовой стрелкой и 12часами без учета минут
        $cornerHour2 = $cornerHour + 30/60*$nMin;           //1 час == 30 градусов находим количество градусов на которые отклонится часовая стрелка с учетом минут           

        $corner =  $cornerHour2 - $nMin*360/60;
        if ($corner >= 360) {
            $corner = $corner -360;
        }
        echo abs($corner);


    ?>
</body>
</html>