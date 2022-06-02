<? require_once($_SERVER['DOCUMENT_ROOT'].'/header.php'); ?>
<?
if($_FILES['file']){
    pre($_FILES);
    rename($_FILES["file"]['tmp_name'],"files/new_file.png");
}
$str = fopen($_SERVER['DOCUMENT_ROOT'].'/files_work/text.txt','r');
while($strtotxt = fread($str,1)){
    if($strtotxt != "\n" && $strtotxt != "\r") echo $strtotxt.'<br>';
} 
?>
<form method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="submit">
</form>
<? require_once($_SERVER['DOCUMENT_ROOT'].'/footer.php'); ?>