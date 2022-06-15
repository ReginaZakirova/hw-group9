<?
require_once($_SERVER['DOCUMENT_ROOT'].'/header.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/class/class.php');

$string = new Stringg('привет');
echo ($string->find('пр'))? 'Содержит': "Не содержит";
echo '<br>';
echo ($string->copy(2,5));
echo '<br>';
echo $string->replace("ив", "иииииииивееее");
echo '<br>';
echo $string->delete("ив");
echo '<br>';
echo $string->len();
?>

<? require_once($_SERVER['DOCUMENT_ROOT'].'/footer.php'); ?>