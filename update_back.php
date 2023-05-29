<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
   include("db.php");


   $id =mysqli_real_escape_string($mysqli,$_POST['id']);
   $name =mysqli_real_escape_string($mysqli,$_POST['Firstname']);
   $email =mysqli_real_escape_string($mysqli,$_POST['Email']);
   $phone =mysqli_real_escape_string($mysqli,$_POST['user_name']);
   $address =mysqli_real_escape_string($mysqli,$_POST['Password']);


   $sql="UPDATE index SET
   Firstname='$name',
   Email='$email',
   user_name='$name',
   Password='$Password'
   WHERE id='$id'";
    if(!mysqli_query($mysqli,$sql)){
        die ('Error:'.mysqli_error($mysqli));

    }
   
$success="updated successfulluy";
   ?> 
</body>
</html>