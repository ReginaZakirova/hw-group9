<?
$hostname='localhost';
$username = 'Zikki';
$password = '1';
$dbname='hobbi';

$dbconn = mysqli_connect($hostname,$username,$password, $dbname);
//$sql_query = "CREATE TABLE people(id_person int AUTO_INCREMENT, name varchar(30), surname varchar(50), age int, primary key(id_person))";
$sql_query = "INSERT INTO people(name, surname, age) VALUES ('yulia', 'dorokhova',26)";
mysqli_query($dbconn, $sql_query);