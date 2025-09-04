<?php
include "config.php";

// Проверяем, была ли отправлена форма
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем данные из формы
    $author = $_POST["author"];
    $title = $_POST["title"];
    $publisher = $_POST["publisher"];
    $year = $_POST["year"];
    $pages = $_POST["pages"];
    
    // Загружаем изображение на сервер
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["photo"]["name"]);
    move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file);
    $photo = $target_file; // Сохраняем путь к изображению
    
    // Подготавливаем SQL-запрос для добавления книги в базу данных
    $sql = "INSERT INTO books (author, title, publisher, year, pages, photo) VALUES ('$author', '$title', '$publisher', '$year', '$pages', '$photo')";

    // Выполняем SQL-запрос
    if (mysqli_query($link, $sql)) {
        // Если запрос выполнен успешно, перенаправляем пользователя обратно на страницу добавления книги
        header("location: add_book.php");
        exit;
    } else {
        // Если возникла ошибка при выполнении запроса, выводим сообщение об ошибке
        echo "Ошибка: " . mysqli_error($link);
    }
}

// Закрываем соединение с базой данных
mysqli_close($link);
?>
