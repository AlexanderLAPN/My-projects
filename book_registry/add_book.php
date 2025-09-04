<form action="add_book_process.php" method="post" enctype="multipart/form-data">
    <input type="text" name="author" placeholder="Автор" required><br>
    <input type="text" name="title" placeholder="Название" required><br>
    <input type="text" name="publisher" placeholder="Издательство" required><br>
    <input type="text" name="year" placeholder="Год выпуска" required><br>
    <input type="text" name="pages" placeholder="Количество страниц" required><br>
    <input type="file" name="photo" required><br> <!-- Добавляем поле для выбора изображения -->
    <input type="submit" value="Добавить книгу">
</form>

<a href="index.php">Назад к реестру</a>
