<?php
include "config.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $author = $_POST["author"];
    $title = $_POST["title"];
    $publisher = $_POST["publisher"];
    $year = $_POST["year"];
    $pages = $_POST["pages"];
    
    
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["photo"]["name"]);
    move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file);
    $photo = $target_file; // Сохраняем путь к изображению
    
    
    $sql = "INSERT INTO books (author, title, publisher, year, pages, photo) VALUES ('$author', '$title', '$publisher', '$year', '$pages', '$photo')";

    
    if (mysqli_query($link, $sql)) {
        header("location: add_book.php");
        exit;
    } else {
        echo "Ошибка: " . mysqli_error($link);
    }
}

mysqli_close($link);
?>

