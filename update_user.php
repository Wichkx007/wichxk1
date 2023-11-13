<?php
    include 'connect.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    
    $sql = "UPDATE user SET username='$username' username='$password' fullname='$fullname' email='$email'";