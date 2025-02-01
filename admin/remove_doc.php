<?php

include("../include/connection.php");

// Access the id from the URL query string using $_GET
if (isset($_GET['id'])) { // Check if the id parameter exists
    $id = $_GET['id'];

    $query = "DELETE FROM doctors WHERE id='$id'";
    mysqli_query($connect, $query);
} else {
    echo "Error: Missing id parameter in the URL.";
}


?>
