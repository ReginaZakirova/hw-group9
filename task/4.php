<?php
$lab = $_GET['lab'] ?? 1;
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
<form action="">
    <label>
        Лабораторная работа
        <select name="lab">
            <option <?php echo $lab == 1 ? 'selected' : ''?> value="1">Лаб1</option>
            <option <?php echo $lab == 2 ? 'selected' : ''?> value="2">Лаб2</option>
            <option <?php echo $lab == 3 ? 'selected' : ''?> value="3">Лаб3</option>
            <option <?php echo $lab == 4 ? 'selected' : ''?> value="4">Лаб4</option>
        </select>
    </label>
    <input type="submit">
</form>
<p>
    <a href="phpcourse.php?l=<?php echo $lab?>">Лаборатория №<?php echo $lab?></a>
</p>
</body>
</html>
