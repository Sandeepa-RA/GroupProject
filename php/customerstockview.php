<?php require_once('connect.php'); ?>
<html>
<?php
        session_start();
        if(!isset($_SESSION["id"])){
            header('Location:../index.html');
        }
        ?>
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
		<?php include '../html/navigation3.html'; ?>
		

            <div class=content>
                    <h2>Available Stock</h2>
                    <table>
                        <tr>
                            <td>Stock ID</td>
                            <td>Name</td>
                            <td>Unit Price</td>
                            
                        </tr>
                        <?php
                        while($row=mysqli_fetch_assoc($result)){
                        ?>
                              <tr>
                                <td><?php echo $row['sid'] ?></td>
                                <td><?php echo $row['name'] ?></td>
                                <td><?php echo $row['price'] ?></td>
                                
                            </tr>
                        <?php
                        }
                        ?>
                    </table>
                    <br><a href="customer_order.php"><button class=button type="button">Order</button></a>
                    
                
            </div>
    </body>
</html>