<? session_start(); ?>
<? require_once($_SERVER['DOCUMENT_ROOT'].'/header.php'); ?>
<p> <?
$num=0;
if($_SESSION['n1'] == 10) $num++;
if($_SESSION['n2'] == 72) $num++;
if($_GET['n3'] == 138) $num++;
echo "Вы набрали $num баллов";
?>
</p>
<? require_once($_SERVER['DOCUMENT_ROOT'].'/footer.php'); ?>