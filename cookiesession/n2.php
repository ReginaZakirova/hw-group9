<? session_start(); 
$_SESSION['n1'] = intval($_GET['n1']);
?>

<? require_once($_SERVER['DOCUMENT_ROOT'].'/header.php'); ?>
<p>14+58 = </p>
<form action="n3.php">
    <input type="text" name="n2">
    <input type="submit">
</form>
<? require_once($_SERVER['DOCUMENT_ROOT'].'/footer.php'); ?>