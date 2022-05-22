<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Hello</title>
</head>
<body>
<?
echo "<br>-----------<br>";
echo '1.Создать функцию, которая сравнивает два числа и возвращает наибольшее.<br>';
function f($x,$y){
	if ($x > $y){
		echo " число $x больше, чем число $y";
	}
		elseif ($y > $x){
		echo " число $y больше, чем число $x";
	}
		else {
		echo " число $x и число $y равны";
	}
}
$a = mt_rand();
$b = mt_rand();
f($a,$b);
echo "<br>-----------<br>";
echo '2. Создать функцию, которая принимает длину двух катетов и возвращает значение гипотенузы прямоугольного треугольника. <br>';
function gip($x,$y){
	$c = sqrt(pow($x,2)+pow($y,2));
	return $c;
}
$r = gip($a,$b); 
echo "гипотенуза равна $r";
echo "<br>-----------<br>";
echo '3.Создать функцию, которая принимает одно число (10). В функции создать цикл, который будет увеличивать число в 10 раз и выводить его на экран. Когда число будет больше 1 000 000, на экране должно появляться сообщение, что вы достигли предела.<br>';

function q10 ($q = 10){
	while ($q <= 1000000) {
		echo $q.'<br>';
		$q*=10;
	}
	echo "Вы достигли предела";
}
echo q10();
echo "<br>-----------<br>";
echo '4. Создать функцию, в которой объявляется массив и случайными элементами.<br>';
function task4(){
	$N = mt_rand(3,10);// кол-во эелментов массива
	for ($i=0; $i < $N ; $i++) { 
		$arr[$i] = mt_rand(-100,100);
	}
	echo '<pre>';
	print_r($arr);
	echo '<pre>';
}
$arr1 = task4(); 
echo $arr1;
echo "<br>-----------<br>";
echo '5. Создать функцию, которая принимает массив и возвращает среднеарифметическое значение массива.<br>';
function task5($arr,&$sum){
	for ($i=0; $i <count($arr) ; $i++) { 
		$sum += $arr[$i];	
	}
	$sr = $sum/$i;
	return $sr;
}
$sum = 0;
$arr5 = [mt_rand(0,5), mt_rand(0,5),mt_rand(0,5)];
echo '<pre>';
print_r($arr5);
echo '<pre>';
$result = task5($arr5,$sum);
echo "<br> среднеарифметическое значение массива = $result  <br>";
echo "<br>-----------<br>";
echo '6. Создать функцию, которая принимает строку. Вернуть количество слов  в строке.<br>';
function task6(string $x){
	$arr6 = str_split($x);
	$word = 1;
	/*echo '<pre>';
	print_r($arr6);
	echo '<pre>';*/
	for ($i=0; $i <count($arr6) ; $i++) { 
		if ($arr6[$i] === ' ') {
			$word++;
		}
	}
	return $word;
}
$str6 = 'London is the capital of Great Britain';
echo '<br>количество слов '.task6($str6).'<br>';
echo "<br>-----------<br>";
echo '<br> 7. Написать функцию, которая рассчитывает последовательность чисел Фибоначчи.<br>';
function task7($p){
	echo "<br> Последовательность Фибоначчи выглядит:<br>";

	if ($p == 0) {
		$result = 0;
		echo $result;
		$n = 1;// кол-во элементов
	}
	elseif ($p == 1) {
		$result = 1;
		$n = 2;
		echo $result;
	}	
	elseif($p >= 2){
		$n0 = 0;
		$n1 = 1;
		$n = $p + 2;
		echo "<br> $n0 $n1 ";
		$a = 0;
		$b = 1;
		for ($i = 0; $i < $p ; $i++) { 
			$c = $a +$b;
			echo "$c ";
			$a = $b;
			$b = $c;
		}
	}
	echo "<br> При количестве элементов =$n. <br>";
}
$x = mt_rand(0,33);//+2, если $p>=2- максимальный по счету элемент
$r = task7($x);
echo "<br>-----------<br>";
echo '<br> 8. Создайте функцию, которая принимает одномерный массив и возвращает массив, заполненный случайными числами.<br>';
function task8( array $arrx){
	for ($i=0; $i < count($arrx) ; $i++) { 
		$arr8[$i] = mt_rand(-100,100);
	}
	return $arr8;
}
$arry = [0,1,2,3,4,5,6];
$res= task8($arry);
echo'<br>';
print_r($res);
echo "<br>-----------<br>";
echo '<br> 9. Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая посчитает количество слов строке.<br>';
function task9( string $str){
	$arr9 = explode(', ', $str);
	$nw = count($arr9);
	//return $nw;
	$for_count = 0;
	for ($i=0; $i < count($arr9) ; $i++) { 
		$for_count++;
	}
	return $for_count;
}
$str9 = 'HTML, CSS, PHP, BITRIX';
$result = task9($str9); 
echo "<br> Количество слов = $result";
echo "<br>-----------<br>";
echo '<br> 10. Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая выведет в обратном порядке буквы («XIRTIB ,PHP … »).<br>';
function task10(string $str){
	$arr10 = str_split($str);
	/*echo '<br>';
	print_r($arr10);
	echo '<br>';*/
	$j = 0;
	for ($i= count($arr10)-1 ; $i >= 0 ; $i--) { 
		if ($arr10[$i] === ' ') {
			$revers[$j] = ',';
		}
		elseif ($arr10[$i] === ',') {
			$revers[$j] = ' ';
		}
		else{
			$revers[$j] = $arr10[$i];
		}
		echo $revers[$j];
		$j++;
	}
	/*echo '<br>';
	print_r($revers);
	echo '<br>';*/
}
task10($str9); 
echo "<br>-----------<br>";
echo '<br> 11. Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая выведет на экран длину строки.<br>';
function task11(string $str, $result = 0){
	$arr11 = str_split($str);
	$result = $count;
	for ($i=0; $i < count($arr11) ; $i++) { 
		$count++;
	}
	return $count;
}
$res = task11($str9);
echo "<br> Длина строки = $res.<br>";
echo "<br>-----------<br>";
echo '<br> 12. Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая выведет каждую букву на новую строку. <br>';
function task12(string $str){
	$arr12 = str_split($str);
	for ($i=0; $i < count($arr12); $i++) { 
		if ($arr12[$i] !== ',' & $arr12[$i] !== ' ' ) {
			echo '<br>'.$arr12[$i];
		}
	}
}
task12($str9);
?>
</body>
</html>
