<?php require_once('connect.php'); ?>
<html>
        <?php
        $sql = "SELECT * FROM stock";
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
		<?php include '../html/navigation1.html'; ?>
		

            <div class=content>
                    <h2>Current Stock</h2>
                    <table>
                        <tr>
                            <td>Stock ID</td>
                            <td>Name</td>
                            <td>Quantity</td>
                            <td>Unit Price</td>
                            
                        </tr>
                        <?php
                        while($row=mysqli_fetch_assoc($result)){
                        ?>
                              <tr>
                                <td><?php echo $row['sid'] ?></td>
                                <td><?php echo $row['name'] ?></td>
                                <td><?php echo $row['quantity'] ?></td>
                                <td><?php echo $row['price'] ?></td>
                                
                            </tr>
                        <?php
                        }
                        ?>
                    </table>
                    
                
            </div>
    </body>
</html>