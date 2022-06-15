<?
require_once($_SERVER['DOCUMENT_ROOT'].'/class.php');
if(isset($_GET['do'])){
    if($_GET['do'] = 'out');
    setcookie("token", "", time() - 3600);
    header( 'Location: /');
}
if(isset($_COOKIE['token']) && !empty($_COOKIE['token'])){
    $db = new DBconn();
    $query = "SELECT name from tokens JOIN users ON tokens.user_login = users.login WHERE tokens.token='".$_COOKIE['token']."'";
    $user_name = mysqli_fetch_assoc($db->sql_query($query));
} 
session_start(); 
if(!isset($_REQUEST['color_main']) && !isset($_SESSION['color_main'])){
    $_SESSION['color_main'] = '#2f4f4f';
}
elseif(isset($_REQUEST['color_main'])) {
    $_SESSION['color_main'] = $_REQUEST['color_main'];
}
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
    <title>Главная</title>
    <link rel='stylesheet' href="/style/style.css">
    <script src="/js/script.js"></script>
</head>
<body style="background-color: <? echo $_SESSION['color_main'] ? $_SESSION['color_main'] : '#2f4f4f'; ?>">
    <header class="<? echo $background_color; ?>">
        <div class="color">
            <? if(isset($user_name)){ ?>
                <span> <? echo $user_name['name']; ?> </span>
                <a href="/autorize.php?do=out">Выйти</a>
                <? }
                else{ ?> 
                <a href="/autorize.php">Авторизация</a>
                <? } ?>
            <form action="" method="POST">
            <span>Выберите цвет сайта</span>
                <input type='color' oninput="changeColor()" name='color_main' value=<? echo $_SESSION['color_main'] ? $_SESSION['color_main'] : '#2f4f4f'; ?>>
                <input style="background-color: <? echo $_SESSION['color_main'] ? $_SESSION['color_main'] : '#2f4f4f'; ?>" type="submit" value="Применить">
            </form>
        </div>
        <img class="logo" src="/img/149452.png">
        <a href="/index.php">О себе</a>
        <a href="/tableofMendeleev.php">Таблица Менделеева</a>
        <a href="/flexandgrid.php">Флексы и Гриды</a>
        <a href="/cycles/cycles.php">Циклы</a>
        <a href="/arrays/arrays.php">Массивы</a>
        <a href="/strings/strings.php">Строки</a>
        <a href="/functions/functions.php">Функции</a>
        <a href="/getpost/index.php">Гет и пост</a>
        <a href="/cookiesession/index.php">Сессии и куки</a>
        <a href="/class/index.php">Классы</a>
    </header>