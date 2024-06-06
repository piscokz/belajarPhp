<?php

$host = "localhost";
$port = 3306;
$database = "siswa";
$username = "root";
$password = "";

function getConnection() : PDO
{
    global $host;
    global $port;
    global $database;
    global $username;
    global $password;

    return new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
}

?>