<?php


class auth
{
    private $dbhostname = 'localhost';
    private $dbusername = 'Konstantin';
    private $dbpassword = '123';
    private $dbname = 'users';
    private $login;
    private $password;

    public function __construct($login, $password)
    {
        $this->login = $login;
        $this->password = $password;
    }
    private function dbconnect(){
        try {
            $dbconn = mysqli_connect($this->dbhostname, $this->dbusername, $this->dbpassword, $this->dbname);
        } catch (Exception) {
            return 2;
        }
        mysqli_set_charset($dbconn, 'utf8');
        return $dbconn;
    }
    public function register(): int
    {
        $dbconn = $this->dbconnect();
        if ($dbconn != 2) {
            $sql = 'SELECT user, pass FROM users';
            $users = mysqli_fetch_all(mysqli_query($dbconn, $sql), MYSQLI_ASSOC);
            $login_occupied = False;
            foreach ($users as $value) {
                if ($value['user'] == $this->login) {
                    $login_occupied = True;
                }
            }
            if (!is_null($this->login) && !$login_occupied) {
                $sql = "INSERT INTO `users` VALUES (NULL,'$this->login','$this->password', NULL)";
                mysqli_query($dbconn, $sql);
            }
            return (int)$login_occupied;
        }
        else{
            return $dbconn;
        }
    }
    public function login($prev_user, $prev_page): int
    {
        $dbconn = $this->dbconnect();
        if ($dbconn != 2) {
            $login_failed = False;
            if (!is_null($this->login) && !is_null($this->password)) {
                $sql = "SELECT user, pass, page FROM users WHERE user = '$this->login'";
                $users = mysqli_fetch_all(mysqli_query($dbconn, $sql), MYSQLI_ASSOC);
                if (count($users) > 0 && $users[0]['user'] == $this->login && $users[0]['pass'] == $this->password) {
                    //Запишем в базу посещенную страницу предыдущего пользователя
                    $sql = "UPDATE `users` SET `page`='$prev_page' WHERE user = '$prev_user'";
                    mysqli_query($dbconn, $sql);
                    //Достанем из базы посещенную страницу текущего пользователя
                    $sql = "SELECT page FROM users WHERE user = '$this->login'";
                    $arr = mysqli_fetch_all(mysqli_query($dbconn, $sql), MYSQLI_ASSOC);
                    mysqli_query($dbconn, $sql);
                    setcookie('user', $this->login, time() + 3600 * 24 * 7);
                    setcookie('page', $arr[0]['page'], time() + 3600 * 24 * 7);
                } else {
                    $login_failed = True;
                }
            }
            return (int)$login_failed;
        }
        else{
            return $dbconn;
        }
    }
}