<?php

// задача 5
$file_f1=fopen('f1.txt','r'); // открытие файла, 1 атребут, название файла, 2 режим в котором будем открывать файл r для чтения
$str_f1= fread($file_f1,500);
$file_f2=fopen('f2.txt','r'); // открытие файла, 1 атребут, название файла, 2 режим в котором будем открывать файл r для чтения
$str_f2= fread($file_f2,500);
$predlogeniya_f1= (explode('.', $str_f1)); // разбиваем файл 1 на предложения
$predlogeniya_f2= (explode('.', $str_f2)); // разбиваем файл 21 на предложения
//echo $rez[0]." ".$rez[1];
//print_r($predlogeniya_f1);
// print_r($predlogeniya_f2);
$rezult_stroka=''; // сюда будет записан
for ($i=0;$i<count($predlogeniya_f1);$i++){
    for ($j=0;$j<count($predlogeniya_f2);$j++) {
        if ($predlogeniya_f1[$i]==$predlogeniya_f2[$j]){
            // echo "<br>зашли";
            $rezult_stroka=$rezult_stroka.$predlogeniya_f1[$i].".";
        }
    }
}
echo "<br>".$rezult_stroka;



$sozd_file = fopen("rez2.txt", "r+");// w создает файл
fwrite($sozd_file, $rezult_stroka);  // записываем данные в открытый файл
fclose($sozd_file); // закрываем файл


?>