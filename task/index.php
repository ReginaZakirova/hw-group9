<?php
echo "<h3>Задача 1</h3>";
echo "<p>Создайте файл hello.txt и сохраните в него текст 'Hello, world! I'm Name'.</p>";
$file = fopen('hello.txt', 'w');
if (fwrite($file, "Hello, world! I'm Konstantin")){
    echo "Файл hello.txt создан<BR>";
}
fclose($file);

echo "<h3>Задача 2</h3>";
echo "<p>Создайте папку 'test'</p>";
if (!is_dir('test')) {
    mkdir('test');
    echo "Папка test создана";
}
else{
    echo "Папка test уже существует";
}

echo "<h3>Задача 3</h3>";
echo "<p>Дан текстовый документ, в котором есть: имя, фамилия, обратная связь. Вывести на экран только имя и фамилию.</p>";
$str = file_get_contents('info.txt');
$arr = explode(', ', $str);
echo $arr[0] . " " . $arr[1] . "<BR>";

echo "<h3>Задача 4, 5</h3>";
echo "<p>Даны два файла, состоящие из предложений. Создать третий файл, содержащий все предложения, которые есть хотя бы в одном из файлов. Повторы не добавлять в третий файл.</p>";
echo "<p>Даны два файла, состоящие из предложений. Создать третий файл, содержащий все повторяющиеся предложения.</p>";
$str1 = file_get_contents('1.txt');
$str2 = file_get_contents('2.txt');
$str1 = str_replace(['. ', '! ', '? ', '... '], ['./SPLIT', '!/SPLIT', '?/SPLIT', ".../SPLIT"], $str1);
$str2 = str_replace(['. ', '! ', '? ', '... '], ['./SPLIT', '!/SPLIT', '?/SPLIT', ".../SPLIT"], $str2);
$arr1 = explode('/SPLIT', $str1);
$arr2 = explode('/SPLIT', $str2);
$arr3 = $arr4 = [];
$arr3 = array_merge(array_diff($arr1, $arr2), array_diff($arr2, $arr1));
$arr4 = array_intersect($arr1, $arr2);
$str3 = implode(' ', $arr3);
$str4 = implode(' ', $arr4);
file_put_contents('3.txt', $str3);
file_put_contents('4.txt', $str4);
echo "Файлы 3.txt и 4.txt успешно созданы";

echo "<h3>Задача 6</h3>";
echo "<p>Дан файл (text.txt). Необходимо посчитать количество повторов каждого слова.</p>";
$str = file_get_contents('text.txt');
//Убираем дефисы, переносы строк, возврат каретки и двойные пробелы
$str = str_replace([' — ', "\r\n", "\r", "\n", "  "], ' ', $str);
//Вычищаем все, кроме пробелов, букв и дефисов
$str = preg_replace('/[^ a-zа-яё\-]/ui', '',mb_strtolower($str));
$arr = explode(' ', $str);
$count = [];
foreach ($arr as $value){
    if (isset($count[$value])){
        $count[$value]++;
    }
    else{
        $count[$value] = 1;
    }
}
arsort($count);
foreach ($count as $key => $value){
    echo "$key: $value; ";
}

echo "<h3>Доп. задача</h3>";
echo "<p>Дано время — два целых числа количество часов и минут. Необходимо определить меньший угол между часовой и минутной стрелками на циферблате часов. Тесты для проверки берутся из файла</p>";
$handle = fopen("test.csv", "r");
while ($data = fgetcsv($handle)) {
    $time = explode(':', $data[0]);
    $hour = (int)$time[0];
    $min = (int)$time[1];
    $hour = $hour > 12 ? $hour - 12 : $hour;
    $angle_hour = 360 * ($hour * 60 + $min) / (12 * 60);
    $angle_min = 360 * $min / 60;
    $angle = abs($angle_hour - $angle_min);
    $angle = $angle > 180 ? 360 - $angle : $angle;
    echo $data[0] . " - " . $angle;
    echo $data[1] == $angle ? ' ☑<BR>' : ' ❌<BR>';
}
