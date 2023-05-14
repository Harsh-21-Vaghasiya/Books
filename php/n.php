<?php
    include('../Database/connect.php');
    $query = "SELECT*from `books database`";
    $query_run = mysqli_query($conn, $query);
    $row=mysqli_fetch_assoc($query_run);
    echo "<pre>";
    print_r($row);
    echo "</pre>";


?>