<?
function pre($array){
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}
$time = new DateTime();
$time = $time->format('H');
if($time>=20 || $time<8) $background_color = 'header_night';
else $background_color = 'header_day';
?>
<!DOCTYPE html>
<html>
<head>
    <title>HW 1 урок</title>
    <link rel='stylesheet' href="/style/style.css">
    <!--<script src="/js/script.js"></script>-->
</head>
<body>
    <header class="<? echo $background_color; ?>">
        <img class="logo" src="/img/149452.png">
        <a href="/index.php">О себе</a>
        <a href="/tableofMendeleev.php">Таблица Менделеева</a>
        <a href="/flexandgrid.php">Флексы и Гриды</a>
        <a href="/cycles/cycles.php">Циклы</a>
        <a href="/arrays/arrays.php">Массивы</a>
        <a href="/strings/strings.php">Строки</a>
        <a href="/functions/functions.php">Функции</a>
    </header>