<?php
header('Content-Type: text/html; charset=utf-8');

$servername = "localhost";
$username = "root";
$password = "";
$basename = "projekt";
$port = "3390";


// Create connection
$dbc = mysqli_connect($servername, $username, $password, $basename, $port) or die('Error connecting to MySQL server.'.mysqli_error());

mysqli_set_charset($dbc, "utf8");


// Check connection
if ($dbc) {
 #echo "Connected successfully";
}?>
