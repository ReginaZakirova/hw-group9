<?php
class class_registrasia
{
    public $name; // задаем свойство имя
    public $passw; // задаем свойства пароль

    public function registr()
    {
        $hostname = 'localhost';
        $username = 'Andrey';
        $password = 111;
        $dbname = 'bd_osnovnoy_raboti_fakt';
        $dbcon = mysqli_connect($hostname, $username, $password, $dbname);
        $proverka_est_li_takoy_login = mysqli_fetch_all(mysqli_query($dbcon, "SELECT count(login) FROM zaregestrirovannie_polzovately WHERE login='$this->name'"));
        if ($proverka_est_li_takoy_login[0][0] == 0) {     //если такого логина нет
            $passw = md5($this->passw);   // шифруем пароль
            mysqli_query($dbcon, "INSERT INTO zaregestrirovannie_polzovately (login,pass)
VALUES ('$this->name','$passw')");
            echo "<center><br>Ваш логин:" . $this->name . "<br>Ваш пароль: " . $this->passw . "<br><br>Регистрация прошла успешно! Передите на страницу <a href='./avtorizatsia.php'>авторизации.</a></center>";
            // return "<center><br>Ваш логин:".$this->name.<br>Ваш пароль: ".$this->passw."<br>"<br>Регистрация прошла успешно! Передите на страницу <a href='./avtorizatsia.php'>авторизации.</a></center>";   // this что бы получить доступ к перенной класса, ссылкается на объект из которого используется
        } else {                                          //если такой логин есть
            echo "<br><center>Такой логин уже есть, пожалуйста придумайте другой</center><br>";
        }


    }
}

?>