<?php
$hostname = "localhost";
$username = "root"; 
$password =""; 
$database = "book_registry";

// Create connection
$link =  mysqli_connect($hostname, $username, $password, $database);

// Check connection
if (!$link) {
    die("Ошибка соединения: " . mysqli_connect_error());
}

?>
