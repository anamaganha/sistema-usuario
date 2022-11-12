<?php
$server = "localhost";
$user = "root";
$password = "toor";
$dbname = "sis_web";
$port = "3300";

$connect = mysqli_connect($server, $user, $password, $dbname, $port);

if(!$connect){
    die("deu ruim: " . mysqli_connect_error());
}