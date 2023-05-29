<?php
include("db.php");
$name=mysqli_real_escape_string($mysqli,$_POST["Firstname"]);
$email=mysqli_real_escape_string($mysqli,$_POST['Email']);
$phone=mysqli_real_escape_string($mysqli,$_POST['user_name']);
$password=mysqli_real_escape_string($mysqli,$_POST['Password']);

$sql="INSERT INTO index(
    Firstname,
    Email,
    user_name,
    Password)
    
    VALUES ('$name',
    '$email',
    '$name',
    '$password')";
    
    if(!mysqli_query($mysqli,$sql)){
        die('Error: ' . mysqli_error($mysqli));
    }
    header('location:select.php')
    ?>