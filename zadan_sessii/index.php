
<?php
session_start();
$_SESSION['login']=$_GET['login'];
?>
<h1>Логин (задание 1) </h1>
<form action="">
    Введите логин  <input type ="text" name="login">
    <input type ="submit">
</form>
