<?php
    // Replace these database connection details with your own
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "wichxk";

    $con = mysqli_connect($host, $username, $password, $database);

    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }