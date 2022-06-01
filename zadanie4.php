<?php

// задача 5
$file_f1=fopen('f1.txt','r'); // открытие файла, 1 атребут, название файла, 2 режим в котором будем открывать файл r для чтения
$str_f1= fread($file_f1,500);
$file_f2=fopen('f2.txt','r'); // открытие файла, 1 атребут, название файла, 2 режим в котором будем открывать файл r для чтения
$str_f2= fread($file_f2,500);
$predlogeniya_f1= (explode('.', $str_f1)); // разбиваем файл 1 на предложения
$predlogeniya_f2= (explode('.', $str_f2)); // разбиваем файл 21 на предложения
$rezz=array_merge($predlogeniya_f1, $predlogeniya_f2);
// предложения которы есть в обоих файлах
$rezz2=array_unique($rezz) ; // находит уникальные значения);
$rezz3=implode('.',$rezz2);
print_r($rezz3);
$sozd_file = fopen("rez.txt", "r+");// w создает файл
fwrite($sozd_file, $rezz3);  // записываем данные в открытый файл
fclose($sozd_file); // закрываем файл


?>