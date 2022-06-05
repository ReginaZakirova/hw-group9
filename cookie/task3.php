<?
//setcookie('count_user', $count,time()+3600);
if (!isset($_COOKIE['count_user'])) {
  $count = 0;
}
else 
  $count = $_COOKIE['count_user'];
$count++;
setcookie('count_user', $count,time()+3600);
echo "Вы посетили наш сайт $count раз!";
echo '<pre>';
print_r($_COOKIE);
echo '<pre>';
?>