<? require_once($_SERVER['DOCUMENT_ROOT'].'/header.php'); ?>
<? 
$file1 = explode('.',file_get_contents('file1.txt'));
$file2 = explode('.',file_get_contents('file2.txt'));
$file = array_unique(array_merge($file1, $file2));
file_put_contents('file_result.txt', implode('.',$file));
?>

<? require_once($_SERVER['DOCUMENT_ROOT'].'/footer.php'); ?>