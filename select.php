<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
    include("db.php");
    ?>
</head>
<body>
    <table width ="654" border ="1" align ="center" cellpadding ="0" cellspacing ="0">
        <tr>
            <td width ="103">Firstname</td>
            <td width ="104">Email</td>
            <td width ="135">phone</td>
            <td width ="136">Password</td>
            <!---
            <td width ="71">images</td>
            <td width ="57">update.</td>
            !------>
        </tr>
        <?php
        $sql ="SELECT * FROM index";
        $result =$mysqli->query($sql);
        if ($result->num_rows > 0){
            while ($row=$result -> fetch_assoc())
        {
        ?>
        <tr>
            <td><?php echo $row['Firstname'];?></td>
            <td><?php echo $row['Email'];?></td>
            <td><?php echo $row['phone'];?></td>
            <td><?php echo $row['Password'];?></td>
            <!----
            <td><img src="images/<?php echo $row ['img'];?>" width ="120" height ="100"/></td> !----->
            <td align ="center"><a name="delete" href="delete.php?sa=<?php echo $row["id"];?>">delete</a></td>
            <td align ="center"><a href="updates.php?sa= <?php echo $row["id"];?>">update</a></td>
            
           
        </tr>
        
        <?php
        }
    }
    ?>

    </table>
    
</body>
</html>