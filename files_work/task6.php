<? require_once($_SERVER['DOCUMENT_ROOT'].'/header.php'); ?>
<? 
$file = fopen('task6.txt','r');
while($str = fgets($file,4096)){
    $hour = mb_substr($str,0,2);
    $minutes = mb_substr($str,3,5);
    $degrees_hour = ($hour+$minutes/60)*30;
    $degrees_minutes = $minutes*6;
    if($degrees_hour-$degrees_minutes > $degrees_minutes+360-$degrees_hour) echo $degrees_minutes+360-$degrees_hour;
    else echo abs($degrees_hour-$degrees_minutes);
    echo '<br>';
}
?>
<? require_once($_SERVER['DOCUMENT_ROOT'].'/footer.php'); ?>