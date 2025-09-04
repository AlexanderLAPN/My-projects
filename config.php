<?php
$hostname = "localhost";
$username = "root"; // Замените на имя пользователя вашей БД
$password =""; // Замените на пароль вашей БД
$database = "book_registry";

// Create connection
$link =  mysqli_connect($hostname, $username, $password, $database);

// Check connection
if (!$link) {
    die("Ошибка соединения: " . mysqli_connect_error());
}
?>