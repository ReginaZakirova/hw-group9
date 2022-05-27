<? require_once($_SERVER['DOCUMENT_ROOT'].'/header.php'); ?>
<div>
        <p>Создайте форму, состоящую из текстового поля, многострочного поля, группы выключателей, группы переключателей. Выведите на экран значения, которые ввел/выбрал пользователь.</p>
    </div><br>
<? pre($_REQUEST); ?>
<form action="">
    Ваше имя: <input type="text" name="name"><br><br>
    Описание теоремы пифагора: <textarea name="desc"></textarea><br><br>
    <div>
        1<input type="checkbox" name="checkbox[]" value="first checkbox"><br>
        2<input type="checkbox" name="checkbox[]" value="second checkbox"><br>
        3<input type="checkbox" name="checkbox[]" value="third checkbox"><br>
        4<input type="checkbox" name="checkbox[]" value="four checkbox"><br>
    <div><br><br>
    <div>
        1<input type="radio" name="radio" value="first radio"><br>
        2<input type="radio" name="radio" value="second radio"><br>
        3<input type="radio" name="radio" value="third radio"><br>
        4<input type="radio" name="radio" value="four radio"><br>
    <div>
    <input type="submit">
</form>
<? require_once($_SERVER['DOCUMENT_ROOT'].'/footer.php'); ?>