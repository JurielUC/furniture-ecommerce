<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "db_ecommerce";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password);

    mysqli_select_db($conn, "db_ecommerce");

    // Check connection
    if (!$conn) {
        trigger_error(mysqli_connect_error());
        echo 'not connected';
        } else echo 'successfully connected';
?>