<?php

$file_f1=fopen('text.txt','r'); // открытие файла, 1 атребут, название файла, 2 режим в котором будем открывать файл r для чтения
$str_f1= fread($file_f1,500);
$str_f1= (preg_replace("#[[:punct:]]#", "", $str_f1)); // убрали лишние знаки примпенания
$slova_f1= (explode(' ', $str_f1)); // разбиваем по словам

print_r($slova_f1);
$unik=array_unique($slova_f1) ; // находит уникальные значения);
echo "<br>";
print_r($unik);

// для того что бы расположить элементы с верными индексами (по порядку)
$unik= implode(' ',$unik); // собираем в сроку
$unik= (explode(' ', $unik)); // разбираем на массив

for ($i=0;$i<count($unik);$i++){
    $kolvo_odinakovih_slov=0;
// echo "<br> 1 цикл ".$unik[$i];
    for ($j=0;$j<count($slova_f1);$j++) {
        if ($unik[$i]==$slova_f1[$j]){
            // echo "<br>зашли";
            $kolvo_odinakovih_slov=$kolvo_odinakovih_slov+1;
        }
      //  echo "<br>".$slova_f1[$j];
    }
    echo "<br>Количество повторов слова: ".$unik[$i]." = ".$kolvo_odinakovih_slov;
}
echo "<br>".$rezult_stroka;


?>