<?php include "config.php"; ?>
<?php
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM books WHERE id=$id";
    if ($link->query($sql) === TRUE) {
        echo "Book deleted successfully";
    } else {
        echo "Error deleting book: " . $conn->error;
    }
}
?>
<a href="index.php">Back to Registry</a>