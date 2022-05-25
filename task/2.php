<?php
if (isset($_POST['password'])){
    $_POST['password_hash'] = md5($_POST['password']);
    unset($_POST['password']);
}
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
    <label>
        Login
        <input type="text" name="login">
    </label>
    <label>
        Password
        <input type="password" name="password">
    </label>
    <input type="submit">
</form>
<p>
    <?php echo $_POST['login'] ?? ''?>
</p>
</body>
</html>
