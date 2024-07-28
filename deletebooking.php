<?php
$connection = mysqli_connect('localhost', 'root', '', 'book_db');

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// Check if the ID parameter is set in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Prepare a delete statement
    $delete_query = "DELETE FROM book_form WHERE id = $id";

    // Execute the delete statement
    if (mysqli_query($connection, $delete_query)) {
        echo "Record with ID $id has been deleted successfully.";
    } else {
        echo "Error deleting record: " . mysqli_error($connection);
    }
} else {
    echo "No ID specified.";
}

// Close connection
mysqli_close($connection);
?>

