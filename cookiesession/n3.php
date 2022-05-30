<? 
session_start();
$_SESSION['n2'] = intval($_GET['n2']);
?>

<? require_once($_SERVER['DOCUMENT_ROOT'].'/header.php'); ?>
<p>62+76 = </p>
<form action="result.php">
    <input type="text" name="n3">
    <input type="submit">
</form>
<? require_once($_SERVER['DOCUMENT_ROOT'].'/footer.php'); ?>