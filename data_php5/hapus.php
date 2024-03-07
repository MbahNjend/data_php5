<?php
include('config.php');

if (isset($_POST['delete'])) {
    $id = $_POST['id'];

    // Delete the record from the database
    $sql = "DELETE FROM table_name WHERE id = $id";
    $query = mysqli_query($db, $sql);

    if ($query) {
        $_SESSION['message'] = "Data has been deleted!";
        header("location: index.php");
    } else {
        $_SESSION['message'] = "Error: Data could not be deleted!";
        header("location: index.php");
    }
} else {
    $_SESSION['message'] = "Error: Invalid request!";
    header("location: index.php");
}
?>