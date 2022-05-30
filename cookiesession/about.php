<? 
session_start();
$time= new DateTime();
$diff = $time->format('U') - $_SESSION['time'];
?>
<? require_once($_SERVER['DOCUMENT_ROOT'].'/header.php'); ?>
<p><? echo $diff?></p>
<? require_once($_SERVER['DOCUMENT_ROOT'].'/footer.php'); ?>