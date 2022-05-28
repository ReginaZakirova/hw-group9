<?php
date_default_timezone_set('Asia/Yekaterinburg');
setcookie ('vremya_coci',date("h:i:s"));
session_start();
$_SESSION['vremya']=$_COOKIE['vremya_coci'];
$a=date_create($_SESSION['vremya']);
$b=date_create(date("h:i:s"));
//echo $b>format("%H час");
$raznitsya= date_diff($a,$b);
echo "задача 2 - Время последнего захода на сайт: ".$_SESSION['vremya'];
echo "<br><br>задача 3 - Время последнего захода на сайт ".$raznitsya->format("%H час %i минуту %s секунд назад");;
?>

