<?php
$servername = "localhost:3308";
$username = "root";
$password = "";
$database = "banksystem";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
?>