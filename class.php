<?php
class DBconn{
    private $hostname='localhost';
    private $username = 'Zikki';
    private $password = '1';
    private $dbname='users';
    private $db_conn;

    public function __construct(){
        $this->dbconnect();
    }

    private function dbconnect(){
        $this->db_conn = mysqli_connect($this->hostname,$this->username,$this->password, $this->dbname);
    }

    public function sql_query($query){
        $res = mysqli_query($this->db_conn, $query);
        return $res;
    }
    public function lastErr(){
        if(mysqli_errno($this->db_conn)){
            return mysqli_error($this->db_conn);
        } 
    } 
}

class Users{
    public $name;
    public $login;
    public $password;
    public $token;
    private $dbconn;

    public function __construct($login, $password){
        $this->login = $login;
        $this->password = $password;
        $this->dbconn = new DBconn();
    }

    public function addUser($name){
        $this->name = $name;
        $this->dbconn->sql_query("INSERT INTO users VALUES('$this->login' , '".sha1($this->password)."' , '$this->name')");
        $date_time = date_format(date_modify(date_create(), '+1 hour'), "Y-m-d H:i:s");
        $this->token = $this->rand_string(30);
        $this->dbconn->sql_query("INSERT INTO tokens VALUES('$this->login' , '".$this->token."' , '$date_time')");
        return $this->token;
    }

    public function rand_string($n){
        $str_res = '';
        $str = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        for($i=0;$i<$n;$i++){
            $str_res.= substr($str,mt_rand(0,strlen($str)),1);
        }
        return $str_res;
    }

    public function finduser(){
        $query = "SELECT * from tokens JOIN users ON tokens.user_login = users.login WHERE users.login='".$this->login."' AND users.password='".sha1($this->password)."'";
        $user = mysqli_fetch_assoc($this->dbconn->sql_query($query));
        if($user != null){
            return $user;
        }
        else return false;
    }

    public function updtoken(){
        $this->token = $this->rand_string(30);
        $date_time = date_format(date_modify(date_create(), '+1 hour'), "Y-m-d H:i:s");
        $this->dbconn->sql_query("UPDATE tokens SET token='".$this->token."', actually='".$date_time."' WHERE user_login='".$this->login."'");
        if(!$this->dbconn->lastErr()){
            return $this->token;
        }
        else{
            return ['err'=>$this->dbconn->lastErr()];
        }
    }
}

?>