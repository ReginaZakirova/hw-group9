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
        <select name="login">
            <option value="su">su</option>
            <option value="user">user</option>
        </select>
    </label>
    <label>
        Password
        <input type="password" name="password">
    </label>
    <input type="submit">
</form>
<p>
    <?php
    //su - 123, user - 321
    $users = ['su' => '202cb962ac59075b964b07152d234b70', 'user' => 'caf1a3dfb505ffed0d024130f58c5cfa'];
    $pas = md5($_POST['password'] ?? "");
    $user = $_POST['login'] ?? "";
    if (isset($users[$user]) && $users[$user] == $pas){
        echo "Доступ к секретным страницам открыт";
    }
    else{
        echo "Доступ ограничен";
    }
    ?>
</p>
</body>
</html>
