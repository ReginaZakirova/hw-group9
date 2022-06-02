<? require_once($_SERVER['DOCUMENT_ROOT'].'/header.php'); ?>
<? 
$str = file('task3.txt');
echo $str[0].' '.$str[1];
?>
<? require_once($_SERVER['DOCUMENT_ROOT'].'/footer.php'); ?>