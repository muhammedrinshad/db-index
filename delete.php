


<?php
include("db.php");
$id=$_GET['sa'];
$sql="DELETE FROM test1 WHERE id=$id";
if(mysqli_query($mysqli,$sql)){
    echo"delete successfully";
}else{
    echo"error delete record".mysqli_error($mysqli);
}
header('Location:select.php')
?>