
<html>
<?php
        session_start();
        if(!isset($_SESSION["id"])){
            header('Location:../index.html');
        }
        ?>
<head>
	<link rel="stylesheet" type="text/css" href="../css/image.css">
	<link rel="stylesheet" href="../css/commonstyle.css" type="text/css">
	
	<title>Customer</title>
</head>
<body>
<?php include '../html/header.html'; ?>
<?php include '../html/navigation3.html'; ?>
 
  
<div class=content>
    <img src="../images/success.png" alt="" class="imgpos">
    <div>
        <h1>Order Placed Sucessfully!</h1>
    </div>
    <a href="customer_order.php"><button type="button" class=button>Cick here to place new order</button></a>
	
</div>	
	
	
</body>



</html>