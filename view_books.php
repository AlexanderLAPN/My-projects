<?php
$sql = "SELECT id, author, title FROM books";
$result = $link->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div class='book'>";
        echo "<p><a href='view_book.php?id=" . $row['id'] . "'>" . $row['title'] . "</a> " . $row['author'] . "</p>";
        echo "<a href='delete_book.php?id=" . $row['id'] . "'>Удалить книгу</a>";
        echo "</div>";
    }
} else {
    echo "0 results";
}
?>