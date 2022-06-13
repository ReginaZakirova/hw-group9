
<?php
require_once 'authorizationClass.php';

$connection = new authorization('localhost', 'Anton', 'pasw', 'autho');
$connection -> encryption($connection -> websitePass);

$connection -> dataValidation($connection -> websiteLog, $connection -> websitePass);
$connection -> authirization($connection -> websiteLog, $connection -> websitePass);
?>

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

    </main>
<?php
require "footer.php";
?>   
</body>
</html>