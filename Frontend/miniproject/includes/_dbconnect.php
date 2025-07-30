<?php

$severname = "localhost";
$username = "root";
$password = "";
$database = "healthify";

$conn = mysqli_connect($severname, $username, $password, $database);
// echo "<br>";
if (!$conn) {

    die("Connection Failed<br>". mysqli_connect_error());
}


session_start();

?>
