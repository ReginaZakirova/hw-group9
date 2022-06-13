<?php
class authorization {
    public $hostName;
    public $UserName;
    public $password;
    public $dbname;

    public $websiteLog;
    public $websitePass;
    public $access;

    public function __construct($hostName, $UserName, $password, $dbname)
    {
        $this -> hostName = $hostName;
        $this -> UserName = $UserName;
        $this -> password = $password;
        $this -> dbname = $dbname;

        if ($_REQUEST['password'] && $_REQUEST['login']) {
        $this -> websiteLog = $_REQUEST['login'];
        $this -> websitePass =  $_REQUEST['password'];
        }
    }

    public function encryption($websitePass) {
        $this -> websitePass = md5($websitePass);
    }

    public function dataValidation($websiteLog, $websitePass) {
        $select = "SELECT * FROM userData";

        $dbcon = mysqli_connect($this -> hostName, $this -> UserName, $this -> password, $this -> dbname);

        $arr = mysqli_fetch_all(mysqli_query($dbcon, $select),  MYSQLI_ASSOC);
    
        $flagLog = 0;
        $flagPass = 0;

        foreach ($arr as $key => $value) {
            foreach ($value as $key2 => $value2) {
                if ($key2 == 'login' && $value2 == $websiteLog) {
                    $flagLog = true;
                }
                if ($key2 == 'password' && $value2 == $websitePass) {
                    $flagPass = true;
                }
            }
        }
        $this -> access = $flagLog && $flagPass;
    }

    public function authirization($websiteLog, $websitePass) {

        if ($this -> access == true) {
            header('Location: http://hw/%d0%b4%d0%b7%2019.05.2022/index.php?flag=1');
            exit( );
         }
        else if ($websiteLog != NULL && $websitePass != NULL) echo 'вы ввели неверные данные';
        
    }

    public function registration($websiteLog, $websitePass) {
        if ($this -> access == true) {
            echo "пользователь уже зарегистрирован";
        }
        else if ($websiteLog == NULL || $websitePass == NULL) {
            echo "введите логин и пароль для регистрации";
        }
        else {
            $insert = 'INSERT INTO userData VALUES (NULL, ' . '"' . $websiteLog . '"' . ',' . '"' . $websitePass . '"' . ')';
            echo $insert;
            $dbcon = mysqli_connect($this -> hostName, $this -> UserName, $this -> password, $this -> dbname);
            mysqli_query($dbcon, $insert);
            header('Location: http://hw/%d0%b4%d0%b7%2019.05.2022/authorizationPage.php');
            exit( );
        }
        
    }

    
}



?>