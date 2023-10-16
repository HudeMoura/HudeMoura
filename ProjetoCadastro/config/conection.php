<?php 
$servername = "localhost";
$username = "root";
$password = "R00t";
$dbname = "userList";

$conn = new mysqli($servername, $username, $password, $dbname);

if(!$conn){
    die("Erro na conexão".$conn->connect_error);
} else {
    echo("Conexão ok");
}
?>