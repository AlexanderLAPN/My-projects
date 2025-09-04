<?php
include "config.php";
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM books WHERE id=$id";
    $result = $link->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<h2>" . $row['title'] . "</h2>";
            echo "<p>Автор: " . $row['author'] . "</p>";
            echo "<p>Издательство: " . $row['publisher'] . "</p>";
            echo "<p>Год написания: " . $row['year'] . "</p>";
            echo "<p>Количество страниц: " . $row['pages'] . "</p>";
            echo "<img src='" . $row['photo'] . "' alt='Фото обложки'>";
        }
    }
}
?>
<a href="index.php">Назад к реестру</a>
