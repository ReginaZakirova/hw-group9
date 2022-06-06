<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>ДЗ_Массивы</title>
	<link rel="stylesheet" type="text/css" href="styles/styles.css">
</head>
<body>
<?
require_once "inc/header.php";
echo "1. Дан массив с элементами 50, 45, 40, 35, 30. Найдите сумму элементов этого массива. Запишите ее в переменную $result.<br>";
$arr1 = [50,45,40,35,30];
$result = 0 ;
for ($i=0; $i <count($arr1); $i++) { 
	$result+=$arr1[$i];
}
echo "сумма =".$result;

echo '<p>--------</p>';
echo '<br>2. Дан массив, заполненный случайными числами. Необходимо вывести массив, заполненный случайными числами. После чего вывести данный массив в противоположном порядке.<br> ';
$arr2 = [mt_rand(),mt_rand(),mt_rand()];
for($i=0; $i <count($arr1); $i++) { 
	echo $arr2[$i].'<br>';
}
for($i=(count($arr1)-1); $i > (-1); $i--) { 
	echo $arr2[$i].'<br>';
}
echo '<p>--------</p>';
echo '<br>3. Создать массив, заполненный названиями картинок, например, 1.png. Необходимо случайным образом выбирать название картинки из массива и выводить ее на экран.<br>';
$arr3 = ['1.jpg','2.jpg','3.jpg','4.jpg'];
$ran_im = $arr3[mt_rand(0,count($arr3)-1)];
echo "<img src='images/$ran_im'>";
echo '<p>--------</p>';
echo '<br> 4. Дано N действительных случайных чисел в диапазоне от -100 до 100. Найти минимальное положительное число и максимальное отрицательное число.<br>';
$arr4 = [mt_rand(-100,100),mt_rand(-100,100),mt_rand(-100,100),mt_rand(-100,100)];
$min = 100;
$max = -100;
echo '<pre>';
print_r($arr4);
echo '<pre>';

for ($i=0; $i < count($arr4) ; $i++) { 
	
	if ($arr4[$i] < $min && $arr4[$i] > 0) {
		if ($arr4[$i] > 0) {
			$min = $arr4[$i];
		}
	}
	elseif ($arr4[$i] < 0) {
		if ($arr4[$i] > $max) {
			$max = $arr4[$i];
		}
	}
}
echo '<br> минимальное положительное= '.$min.'<br>максимальное отрицательное ='.$max.'<br>';
echo '<p>--------</p>';
echo '<br> 5. Для группы учащихся известны годовые оценки по следующим предметам: математика, физика, химия, информатика. Найти среднюю в группе оценку по каждому из предметов. Суммирование оценок по каждому предмету.<br>';
$arrp = [
	'математика' => [mt_rand(1,5),mt_rand(1,5),mt_rand(1,5),mt_rand(1,5)],
	'физика' => [mt_rand(1,5),mt_rand(1,5),mt_rand(1,5),mt_rand(1,5)],
	'химия' => [mt_rand(1,5),mt_rand(1,5),mt_rand(1,5),mt_rand(1,5)],
	'информатика' => [mt_rand(1,5),mt_rand(1,5),mt_rand(1,5),mt_rand(1,5)]
];
$sr_oc = 0;
$sum = 0;
echo '<pre>';
print_r($arrp);
echo '<pre>'; 
foreach ($arrp as $key => $value) {
	if ($key== 'математика') {
		for ($i= 0; $i < count($value) ; $i++) { 
			$sum += $value[$i];
		}
		$sr_oc= $sum/$i;
		echo "<br>предмет- $key: сумма оценок= $sum <br> средняя оценка = $sr_oc";
	}
	$sum = 0;
	if ($key== 'физика') {
		foreach($value as $item){
			$sum += $item;
		}
		$sr_oc= $sum/$i;
		echo "<br>предмет- $key: сумма оценок= $sum <br> средняя оценка = $sr_oc";
	}
	$sum = 0;
	if ($key== 'химия') {
		foreach($value as $item){
			$sum += $item;
		}
		$sr_oc= $sum/$i;
		echo "<br>предмет- $key: сумма оценок= $sum <br> средняя оценка = $sr_oc";
	}
	$sum = 0;
	if ($key== 'информатика') {
		foreach($value as $item){
			$sum += $item;
		}
		$sr_oc= $sum/$i;
		echo "<br>предмет- $key: сумма оценок= $sum <br> средняя оценка = $sr_oc";
	}
}
echo '<p>--------</p>';
echo '<br> 6. Известна среднемесячная температура воздуха на следующих островах Карибского моря: Куба, Тринидад, Ямайка, Гаити. Сформировать один новый массив, содержащий месяц и максимальную температуру для островов.<br>';
$t_sr = [ 
	'Куба' => [mt_rand(0,40),mt_rand(0,40),mt_rand(0,40),mt_rand(0,40),mt_rand(0,40),mt_rand(0,40),mt_rand(0,40),mt_rand(0,40),mt_rand(0,40),mt_rand(0,40),mt_rand(0,40),mt_rand(0,40)],
	'Тринидад' => [mt_rand(0,40),mt_rand(0,40),mt_rand(0,40),mt_rand(0,40),mt_rand(0,40),mt_rand(0,40),mt_rand(0,40),mt_rand(0,40),mt_rand(0,40),mt_rand(0,40),mt_rand(0,40),mt_rand(0,40)],
	'Ямайка' => [mt_rand(0,40),mt_rand(0,40),mt_rand(0,40),mt_rand(0,40),mt_rand(0,40),mt_rand(0,40),mt_rand(0,40),mt_rand(0,40),mt_rand(0,40),mt_rand(0,40),mt_rand(0,40),mt_rand(0,40)],
	'Гаити' => [mt_rand(0,40),mt_rand(0,40),mt_rand(0,40),mt_rand(0,40),mt_rand(0,40),mt_rand(0,40),mt_rand(0,40),mt_rand(0,40),mt_rand(0,40),mt_rand(0,40),mt_rand(0,40),mt_rand(0,40)]
];
$t_max = 0;// берем макс. t для сравнения в цикле
$j = 0;// номер месяца = индекс подмассива +1 ==> [0,...,11] >> [1,...,12]
echo '<pre>';
print_r($t_sr);
echo '<pre>'; 
foreach ($t_sr as $key => $value) {
	if ($key == 'Куба') {
		foreach($value as $item){
			$j++;
			if ($item > $t_max) {
				$t_max = $item;
				$num_m_k = $j;
			}
		}
		$t_max_k = $t_max;

		echo "<br>Макс. температура на Кубе = $t_max_k <br> номер месяца = $num_m_k";
	}
	$t_max = 0;
	$j = 0;
	if ($key == 'Тринидад') {
		foreach($value as $item){
			$j++;
			if ($item > $t_max) {
				$t_max = $item;
				$num_m_t = $j;
			}
		}
		$t_max_t = $t_max;
		echo "<br>Макс. температура на Тринидаде = $t_max_t <br> номер месяца = $num_m_t";
	}
	$t_max = 0;
	$j = 0;
	if ($key == 'Ямайка') {
		foreach($value as $item){
			$j++;
			if ($item > $t_max) {
				$t_max = $item;
				$num_m_y = $j;
			}
		}
		$t_max_y = $t_max;
		echo "<br>Макс. температура на Ямайке = $t_max_y <br> номер месяца = $num_m_y";
	}
	$t_max = 0;
	$j = 0;
	if ($key == 'Гаити') {
		foreach($value as $item){
			$j++;
			if ($item > $t_max) {
				$t_max = $item;
				$num_m_g = $j;
			}
		}

		$t_max_g = $t_max;
		echo "<br>Макс. температура на Гайти = $t_max_g <br> номер месяца = $num_m_g";
	}
}
/*foreach ($t_sr as $key => $value) {
	$new_arr[] = $key;
}*/
$new_arr = [("Куба, номер месяца= $num_m_k, Макс. температура = $t_max_k"),
	("Тринидад, номер месяца= $num_m_t, Макс. температура = $t_max_t"),
	("Ямайка, номер месяца= $num_m_y, Макс. температура = $t_max_y"),
	("Гаити, номер месяца= $num_m_g, Макс. температура = $t_max_g")
];	
echo '<pre>';
print_r($new_arr);
echo '<pre>';
echo '<p>--------</p>';
echo '<br> 7.Дан двумерный массив из 5 строк и 6 столбцов. Определить для каждого четного столбца максимальный элемент. Найти произведение этих элементов.<br>';
$arr7 = [
	[mt_rand(0,9),mt_rand(0,9),mt_rand(0,9),mt_rand(0,9),mt_rand(0,9),mt_rand(0,9)],
	[mt_rand(0,9),mt_rand(0,9),mt_rand(0,9),mt_rand(0,9),mt_rand(0,9),mt_rand(0,9)],
	[mt_rand(0,9),mt_rand(0,9),mt_rand(0,9),mt_rand(0,9),mt_rand(0,9),mt_rand(0,9)],
	[mt_rand(0,9),mt_rand(0,9),mt_rand(0,9),mt_rand(0,9),mt_rand(0,9),mt_rand(0,9)],
	[mt_rand(0,9),mt_rand(0,9),mt_rand(0,9),mt_rand(0,9),mt_rand(0,9),mt_rand(0,9)]
];
$ci = count($arr7);
$cj = count($arr7[$i]);
for ($i = 0;$i < $ci ;$i++) {
    for ($j = 0;$j < $cj ;$j++) {
       echo $arr7[$i][$j].' '; //выводим элементы строки через пробел
    }
    echo '<br>';  //делаем переносы после строки
}
$max= 0;
$p = 1;
for ($j=0; $j < $cj; $j++) { 
	if ($j%2 != 0) {
		$max= 0;
		for ($i=0; $i < $ci ; $i++) { 
			if ($arr7[$i][$j] > $max){
					$max = $arr7[$i][$j];
			}	
		}
		echo "<br>max = $max <br>";
		$p *= $max;
	}
}

echo "<br> Произведение максимальных значений = $p <br>";
echo '<p>--------</p>';
echo '<br> 8.Создать двумерный массив произвольной длины, содержащий строковые значения. Необходимо вывести все элементы массива, начинающиеся на А. <br>';
$arr8 = [
'цвет'=> ['алый', 'желтый','зеленый','Аквамариновый'],
'еда'=> ['дыня','Арбуз','Тыква','кабачок'],
'ягода' => ['клубника','арония','Асаи','смородина']
];
echo '<pre>';
print_r($arr8);
echo '<pre>';
foreach ($arr8 as $key => $value) {
	foreach ($value as $item) {
		if (mb_strpos($item,'А') === 0) {
			echo "<br> Есть буква 'А' в слове $item <br>";
		}
	}
}
echo '<p>--------</p>';
echo '<br> 9. Создать двумерный массив, состоящий из чисел. Необходимо вывести общее количество элементов массива и количество элементов массива для каждого измерения.<br>';
$arr9 = [
	[mt_rand(0,9)],
	[mt_rand(0,9),mt_rand(0,9)],
	[mt_rand(0,9),mt_rand(0,9),mt_rand(0,9)],
	[mt_rand(0,9),mt_rand(0,9),mt_rand(0,9),mt_rand(0,9)],
	[mt_rand(0,9),mt_rand(0,9),mt_rand(0,9),mt_rand(0,9),mt_rand(0,9)]
];
$all_el = 0;
for ($i = 0;$i < count($arr9) ;$i++) {
    for ($j = 0;$j < count($arr9[$i]);$j++) {
       echo $arr9[$i][$j].' '; 
       $all_el++;
    }
    echo '<br>';
}
echo "Общее количество элементов = $all_el";
for ($i = 0;$i < count($arr9) ;$i++) {
	$el_izm = 0;
    for ($j = 0;$j < count($arr9[$i]);$j++) {
       $all_el++;
       $el_izm++;
    }
    echo "<br>Количество элементов в $i-том измерении =$el_izm";
}
echo '<p>--------</p>';
echo "<strong>Вариативная часть: 1, 4, 10, 12 (20 задачу не сделал)</strong><br>";
echo '<p>--------</p>';
echo '<br> 1. Дан одномерный массив из 1000 элементов, состоящий из случайных целых чисел в диапазоне от -5 до 50. Найти сумму элементов массива, с конца массива, до первого отрицательного элемента.<br>';
for ($i = 0; $i < 1000 ; $i++) { 
	$var1[$i] = mt_rand(-5,50);
}
$sum = 0;
for ($i = 1000; $i >= 0 ; $i--) { 
	if ($var1[$i] > 0) {
	 	$sum += $var1[$i];
	 } 
}
echo "<br>Сумма элементов массива, с конца массива, до первого отрицательного элемента = $sum";
echo '<p>--------</p>';
echo '<br> 4. Дан одномерный массив из N случайных действительных чисел в диапазоне от -4 до 8 . Вывести в порядке невозрастания (убывания) элементы, модуль которых больше 2.<br>';
$N = mt_rand (3,10);
for ($i=0; $i < $N ; $i++) { 
	$var4[$i] = mt_rand(-4,8);
	if (abs($var4[$i]) > 2) {
		$new_var4[] = $var4[$i];
	}
}
echo '<pre>';
print_r($new_var4);
echo '<pre>';
$new_N = count($new_var4);
for ($i = $new_N; $i >= 0; $i--) {
  for ($j = 0; $j <= ($i-1); $j++)
    if ($new_var4[$j] < $new_var4[$j+1]) {
      $k = $new_var4[$j];
      $new_var4[$j] = $new_var4[$j+1];
      $new_var4[$j+1] = $k;
    }
}
echo '<pre>';
print_r($new_var4);
echo '<pre>';
echo '<p>--------</p>';
echo '<br> 10. Дано N действительных случайных чисел в диапазоне от 2 до 10. Определить, какое из них на числовой оси лежит ближе к целому числу.<br>';
$N = mt_rand (3,10);
for ($i=0; $i < $N ; $i++) { 
	$var10[$i] = mt_rand(200,1000)/100;
}
echo '<pre>';
print_r($var10);
echo '<pre>';
for ($i = $N; $i >= 0; $i--) {
  for ($j = 0; $j <= ($i-1); $j++)
    	if ((0.5 - abs(abs($var10[$j] - round($var10[$j])))) < (0.5 - abs(abs($var10[$j+1] - round($var10[$j+1]))))) {
      	$k = $var10[$j];
      	$var10[$j] = $var10[$j+1];
      	$var10[$j+1] = $k;
    	}
}
echo '<br>Массив отсортирован в поядке убывания от целого числа:<br>';       
echo '<pre>';
print_r($var10);
echo '<pre>';
echo '<p>--------</p>';
echo '<br> 12. Дан многомерный массив из 5 вложенных одномерных массивов, размеров в 6 элементов (пример массива представлен на рисунке 1). Определить для каждого четного массива максимальный элемент. Найти произведение этих элементов.<br>';
$arr12 = [
[5,-1,2,8,2,6],
[1,3,0,-2,-6,2],
[5,2,-5,1,-1,7],
[0,3,-6,4,1,-9],
[-4,2,-8,-3,4,6],
];
// $ci = count($var12);
// $cj = count($var12[$i]); 
for ($i = 0;$i < $ci ;$i++) {
    for ($j = 0;$j < $cj ;$j++) {
       echo $arr12[$i][$j].' '; 
    }
    echo '<br>'; 
}
$max= 0;
$p = 1;
for ($i=0; $i < $ci; $i++) { 
	if ($i%2 != 0) {
		$max= 0;
		for ($j=0; $j < $ci ; $j++) { 
			if ($arr12[$i][$j] > $max){
					$max = $arr12[$i][$j];
			}	
		}
		echo "<br>max = $max <br>";
		$p *= $max;
	}
}
echo "<br> Произведение максимальных значений = $p <br>";
echo '<p>--------</p>';
require_once "inc/footer.php";
?>
</body>
</html>
