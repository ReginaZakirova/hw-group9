<?php

echo '<br>================ слайд 18, 1 задача================<br>';
// 18 слайд 1 задача
$fakt="fact";
// 1 вариант
echo '<br>Решение 1 вариантом '.strtoupper(mb_substr($fakt,0,1)).mb_substr($fakt,1,3);
// 2 вариант
echo '<br>Решение 2 вариантом '.str_replace( "f",'F',$fakt);
echo '<br><br>================ 18 слайд, 2 задача================<br>';
$str="Шондин Андрей Сергеевич";
echo mb_substr($str,6,8).mb_substr($str,0,6);
echo '<br><br>================ 18 слайд, 3 задача  ================<br>';
$str="Privet, mir";
$mass = str_split($str); // преобразовали строку в массив
//echo "всего символов в строке: ".strlen($str);    // всего символов
    $kolvo_simvolov=0;
for ($i=0;$i<strlen($str);$i++){
    if ($mass[$i]=="i"){
        $kolvo_simvolov=$kolvo_simvolov+1;
    }
}
echo "<br>Количество символов i в строке ".$str." = ".$kolvo_simvolov;
echo '<br><br>================ 18 слайд 4 задача ================<br>';
$str="html css php";
$mass2 = explode(' ', $str);
for ($i=0;$i<3;$i++){
    echo "<br>".$mass2 [$i]; // выводим на массив
}
echo '<br><br>================ 18 слайд 5 задача ================<br>';
$str="ggfrt.png";
if ((mb_substr($str,-4,4))===".png"){
    echo "да";
} else {
    echo "нет";
}
echo '<br><br>================ 19 слайд 1 задача ================<br>';
$str="html css php";
if (strlen($str)>5){
    echo substr($str,0,5)."..."  ;
} else {
    echo $str;
}

echo '<br>================ 19 слайд 2 задача ================<br>';
$str="ваbbbcgsdgabc";
echo "<br>начальная строка: ".$str;
$rez='';
$kolvo=strlen($str);
for ($i=0;$i<$kolvo;$i++){
    $str=str_replace( "а",'1',$str);
    $str=str_replace( "b",'2',$str);
    $str=str_replace( "c",'3',$str);

    //можно вот так написать, чтобы сократить количество строк
    //str_replace([a,b,c], [1,2,3], $arr)
}
echo "<br>Результат:  ".$str;

echo '<br><br>================= 19 слайд 3 задача ================<br>';
$str="abc abc abc";
// echo "<br>".mb_strpos($str,'b');
$arr3 =str_split($str);
for ($i=0;$i<strlen($str);$i++){
    if ($arr3[$i]="b"){
        $rez1=$i;
    }
}
echo "Последняя b находится на месте (если считать от 0) ".$rez1;
echo '<br><br>================ 19 слайд 4 задача ================<br><br>';
$str="html css php";
$a=explode(' ', $str);
//print_r($a );
for ($i=0;$i<3;$i++){
    echo "<br>".$mass2 [$i]; // выводим на массив
}
echo '<br><br>================ 19 слайд 5 задача ================<br><br>';
$nachalo = strtotime("05-01-2021");
$kones = strtotime("01-01-2020");
$datediff = $nachalo - $kones;
echo "Количество дней между датами = ".round($datediff / (60 * 60 * 24)); //делим нк количество секунд в день
?>


