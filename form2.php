<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
 <div style="background-color: black; height: 40px;width: 100%;">

 </div>

   <?php
   include "side-menu.php";
   ?>
  
  
    
    <div class="content">
       
    <?php
// define variables and set to empty values
$name = $email = $address = $phone = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["st_name"]);
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["phone"]);
  $address = test_input($_POST["address"]);
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


<form method="post" action="insert_back_new.php">  
  Name: <input type="text" name="st_name">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  phone: <input type="text" name="phone">
  <br><br>
  address: <textarea name="address" rows="5" cols="40"></textarea>
  <br><br>
 
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $phone;
echo "<br>";
echo $address;

?>
    </div>
       
    
</body>
</html>