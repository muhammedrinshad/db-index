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
   $id=$_GET['sa'];
   $sql="SELECT * FROM test1 WHERE id= '$id'";

   $result=$mysqli->query($sql);
   if($result->num_rows>0){
    while($rows=$result->fetch_assoc()){
        ?>
        <table width="600" border="1" align="center" cellpading="0" cellspacing="0">
            <tr>
                <td><form id="form1" name="form1" method="post" action="update_back.php">
                <table width="600" border="1" cellspacing="0" cellpading="0">
                    <tr>
                        <td width="175">id</td>
                        <td width="419"><input type="text" name="id" value="<?php echo $rows['id'];?>"/></td>
                    </tr>
                    <tr>
                        <td>stu_name</td>
                        <td><input type="text" name="st_name" value="<?php echo $rows['st_name'];?>"/></td>
                    </tr>
                    <tr>
                        <td>email</td>
                        <td><input type="text" name="email" value="<?php echo $rows['email'];?>"/></td>
                    </tr>
                    <tr>
                        <td>phone</td>
                        <td><input type="text" name="phone" value="<?php echo $rows['phone'];?>"/></td>
                    </tr>
                    <tr>
                        <td>address</td>
                        <td><input type="text" name="address" value="<?php echo $rows['address'];?>"/></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>
                            <input type="hidden" name="id" id="id" value="<?php echo $rows['id'];?>">
                            <input type="submit" name="button" id="button" value="submit"/>
                        </td>
                    </tr>

                </table>
                <?php
    }
}
                ?>
            </form>
        </td>
            </tr>
        </table>
</body>
</html>