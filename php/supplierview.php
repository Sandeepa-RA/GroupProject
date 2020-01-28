<?php require_once('connect.php'); ?>
<html>
        <?php
        $sql = "SELECT * FROM user WHERE account='supplier'";
        mysqli_query($connection, $sql);
        $result = mysqli_query($connection,$sql);

        if($result){
        //echo "Sucessfull";
        }
        else{
        echo"failed";	
        }




        ?>
    <head>
        <title>Stock View</title>
        <link rel="stylesheet" href="../css/commonstyle.css" type="text/css">
        <link rel="stylesheet" href="../css/stockviewstyle.css" type="text/css">
    </head>
    <body>
        <?php include '../html/header.html'; ?>
		<?php include '../html/navigation.html'; ?>
		

            <div class=content>
                    <h2>Registered Customers</h2>
                    <table>
                        <tr>
                        <td>ID</td>
                        <td>Company</td>
                        <td>Email</td>
                        <td>Telephone</td>
                        <td>Address</td>
                        </tr>
                        <?php
                        while($row=mysqli_fetch_assoc($result)){
                        ?>
                              <tr>
                                <td><?php echo $row['id'] ?></td>
                                <td><?php echo $row['name'] ?></td>
                                <td><?php echo $row['email'] ?></td>
                                <td><?php echo $row['telephone'] ?></td>
                                <td><?php echo $row['address'] ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </table>
                    <br><a href="quatationview.php"><button class=button type="button">Quatations View</button></a>
            </div>
    </body>
</html>