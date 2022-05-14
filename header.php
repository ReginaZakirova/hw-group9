<?
function pre($data){
    echo "<pre>";
    print_r($data);
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
        <a name="lesson1" href="/index.php">О себе</a>
        <a name="lesson2" href="/tableofMendeleev.php">Таблица Менделеева</a>
        <a name="lesson3" href="/flexandgrid.php">Флексы и Гриды</a>
        <a name="cycles" href="/cycles/cycles.php">Циклы</a>
    </header>