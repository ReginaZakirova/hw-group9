<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Hello</title>
</head>
<body>
<?
echo "<br>-----------<br>";
echo '1. Дана строка «fact». Привести строку к виду «Fact».';
$a = 'fact';
$b = strtoupper(mb_substr($a, 0,1)).mb_substr($a, 1);
echo "<br>ответ : $b<br>";
echo "<br>-----------<br>";
echo '2. Дана строка, в которой содержится «фамилия, имя, отчество». Преобразовать строку к виду «имя, фамилия». Например, исходная строка «Закирова Регина Артуровна», результирующая «Регина Закирова».<br>';
$fio = 'Салимов Шамиль Равилевич';
$fio1 = explode(' ', $fio);
echo '<br>';
print_r($fio1);
$fio= "$fio1[1] $fio1[0]";
echo "<br> $fio <br>";
echo "<br>-----------<br>";
echo '3. Дана строка «Привет, мир». Найти количество символа «и» в строке (регистр учитывать).';
$a = 'ПрИвет, мир';
$arr= str_split($a,2);
echo '<br>';
print_r($arr);
echo '<br>';
$count = 0;
$count2 = 0;
for ($i=0; $i < count($arr); $i++) { 
	if ($arr[$i] == 'и') {
		$count++;
	}
	elseif ($arr[$i]=='И') {
		$count2++;
	}
}
echo "<br> Количество 'и' =  $count" ;
echo "<br> Количество 'И' =  $count2" ;
echo "<br>-----------<br>";
echo "4. Дана строка ‘html css php'. Вырежьте из нее и выведите на экран слово 'html', слово 'css' и слово 'php'. <br>";
$a = 'html css php';
$b = explode (' ', $a);
for ($i=0; $i <count($b) ; $i++) { 
	echo "<br>$b[$i]<br>";
}
echo "<br>-----------<br>";
echo "5. Дана строка. Проверьте, что она заканчивается на '.png'. Если это так, выведите 'да', если не так - 'нет'.<br>";
$arr = ['1.png', '2.png', 'три' ,'4.png'];
for ($i=0; $i <count($arr) ; $i++) { 
	if (strpos($arr[$i],'.png')!= false) {
		echo "<br>да<br>";
	}
	else{
		echo "<br>нет<br>";
	}
}
echo "<br>-----------<br>";
echo "6. Дана строка. Если в этой строке более 5-ти символов - вырежете из нее первые 5 символов, добавьте троеточие в конец и выведите на экран. Если же в этой строке 5 и менее символов - просто выведите эту строку на экран.<br>";
$arr = ['пять символов','неа','пять символов','нет'];
for ($i=0; $i < count($arr) ; $i++) { 
	if (mb_strlen($arr[$i]) > 5 ) {
		echo '<br>'.mb_substr($arr[$i], 4).'...<br>';
	}
	else{
		echo '<br>'.$arr[$i].'<br>';
	}
}
echo "<br>-----------<br>";
echo "7. Дана строка str. Замените в ней все буквы 'a' на цифру 1, буквы 'b' - на 2, а буквы 'c' - на 3. <br>";
$str = 'abbcccdfgcba';
$arr = str_split($str,1);
$arr1 = str_replace(array('a','b','c'), array('1','2','3'),$arr);
$str1 = implode ($arr1);
echo '<br>';
echo "строка str: $str";
echo '<br>';
echo "строка str: $str1";
echo "<br>-----------<br>";
echo "8. Дана строка 'abc abc abc'. Определите позицию последней буквы 'b'.<br>";
$str = 'abc abc abc';
$arr = str_split($str);
echo '<pre>';
print_r($arr);
echo '<pre>';
$b_cur = 0;
for ($i=0; $i < count($arr) ; $i++) { 
	If($arr[$i] == 'b'){
		$b_cur = $i;
	}
}
echo "Позиция последней буквы 'b'= $b_cur (с началом отчета от '0')";
echo "<br>-----------<br>";
echo "9. Дана строка 'html css php'. С помощью функции explode запишите каждое слово этой строки в отдельный элемент массива.<br>";
$str = 'html css php';
$arr = explode(' ',$str);
echo '<pre>';
print_r($arr);
echo '<pre>';
echo "<br>-----------<br>";
echo "10. В двух строках содержатся даты вида День-Месяц-Год (например, 10-02-2015). Определите количество дней между датами.<br>";
$str1 = '10-02-2015';// первая дата
$str2 = '18-05-2022';// вторая дата 
$days1 = strtotime($str1);
$days2 = strtotime($str2);
echo "<br>первая дата = $str1, количество секунд относительно метки = $days1<br>";
echo "<br>вторая дата = $str2, количество секунд относительно метки = $days2<br>";
$r = ($days2-$days1)/(pow(60, 2)*24);
echo "<br> разница в днях между датами = $r<br>";
echo "<br>-----------<br>";
?>
</body>
</html>
