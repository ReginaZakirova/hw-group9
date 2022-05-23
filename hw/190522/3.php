<?php

# 1.	Создать файл (text.txt). В файле должен находиться текст (минимум 1000 символов). Необходимо взять содержимое из файла и подсчитать, сколько раз каждое слово встречается в тексте

function print2($data) {
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

$text = file_get_contents('text.txt');

$text = str_replace("-"," ",$text);
$text = str_replace("."," ",$text);
$text = str_replace("  "," ",$text);

$data = explode(" ",$text);
//print2($data);

foreach($data as $k => $v) {
    if($v != "") $stat[$v]++;
}

foreach($stat as $k => $v) {
    echo 'Слово <b>'.$k.'</b> встречается в тексте <b>'.$v.'</b> раза<br>';
}