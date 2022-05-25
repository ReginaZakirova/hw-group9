<?php
print_r($_POST);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <p>
        <label>
            Текст
            <input type="text" name="text">
        </label>
    </p>
    <p>
        <label>
            Комментарии
            <textarea name="comments"></textarea>
        </label>
    </p>
    <p>
        <label>
            1
            <input type="radio" name="radioButton" value="1">
        </label>
        <label>
            2
            <input type="radio" name="radioButton" value="2">
        </label>
    </p>
    <p>
        <label>
            Выбор 1
            <input type="checkbox" name="check[]">
        </label>
        <label>
            Выбор 2
            <input type="checkbox" name="check[]">
        </label>
    </p>
    <p>
        <input type="submit">
    </p>
</form>
</body>
</html>