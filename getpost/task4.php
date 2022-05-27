<? require_once($_SERVER['DOCUMENT_ROOT'].'/header.php'); ?>
<div>
    <p>Создайте форму и в ней добавьте поле со списком выбора – Лаб1, Лаб2, Лаб3, Лаб4<br>  
    При нажатии на кнопку должно быть сформирована ссылка следующего вида: phpcourse.php?l=3 , где 3 – это номер выбранной лабораторной работы
    </p>
</div><br>
<form action="" method="POST">
Выбор лабы: <select name="lab">
        <option>Lab1</option>
        <option>Lab2</option>
        <option>Lab3</option>
        <option>Lab4</option>
    </select><br>
    <input type="submit" value="сгенерировать ссылку">
</form>
<? 
if(isset($_POST['lab'])){
    echo '<a href="task4.php?l='.mb_substr($_POST['lab'],3,1).'"> task4.php?l='.mb_substr($_POST['lab'],3,1).'</a>';
}
else echo '<a href="task4.php"> task4.php</a>';
?>
<? require_once($_SERVER['DOCUMENT_ROOT'].'/footer.php'); ?>