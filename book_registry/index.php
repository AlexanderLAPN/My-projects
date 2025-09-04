<?php include "config.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Book Registry</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Электронный реестр книг</h1>
    <a href="add_book.php">Добавить книгу</a>
    <div class="book-list">
        <?php include "view_books.php"; ?>
    </div>
</body>
</html>
