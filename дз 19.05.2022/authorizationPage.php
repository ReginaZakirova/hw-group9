<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/styleTasks.css">
    <link rel="stylesheet" href="style/headerOff.css">
    <title>Document</title>
</head>
<body>
<?php
    require "header.php";
?>
    <main>
        <?php
            require "form.php";
        ?>
    
        <?php 
        if ($_REQUEST['password']) {
            $_REQUEST['password'] = md5($_REQUEST['password']);
        }
        $b = 'log';
        $c = md5('pasw');

        if ($_REQUEST['name'] == $b && $_REQUEST['password'] == $c) {
            $kk = 'hello.php?flag=1';
            header("Location: http://hw/%D0%B4%D0%B7%2019.05.2022/$kk");
            exit( );
        }
        else {
            $kk = 'authorizationPage.php';
        }
        
       

        ?>

    </main>
<?php
require "footer.php";
?>   
</body>
</html>