<?php require_once('connect.php'); ?>
<?php
        session_start();
        if(!isset($_SESSION["id"])){
            header('Location:../index.html');
        }
        ?>
<html>
    <head>
        <title>Stock</title>
        <link rel="stylesheet" href="../css/commonstyle.css" type="text/css">
        <link rel="stylesheet" href="../css/stockaddstyle.css" type="text/css">
    </head>
    <body>
		<?php include '../html/header.html'; ?>
		<?php include '../html/navigation.html'; ?>
		
        <div class=content>
            <div class=formArea>    
                    <h2>Add New Stock</h2>
                
                <form action='' method ='POST'>
                <div class="text_box">
                    Stock ID:
                    <input type="text" placeholder="ID" name="sid" required>
                </div>
                <div class=text_box>
                    Stock Name:
                    <input type="text" placeholder="Name" name="name" reqiired>
                </div>
                <div class="text_box">
                    Quantity:
                    <input type="text" placeholder="Quantity" name="quantity" required>
                </div>
                <div class="text_box">
                    Unit Price:
                    <input type="text" placeholder="Price" name="price" required>
                </div>  
                    <input type="submit" value="Save" name="ssubmit" class=button>
                    <a href="stockview.php"><button type="button" class=button>View</button></a>
                
                </div>
                
                </form>
            
            </div>
       
    </body>
</html>

<?php
	if(isset($_POST['ssubmit'])){

	$sql = "INSERT INTO stock (sid,name,quantity,price) VALUES ('".$_POST['sid']."','".$_POST['name']."','".$_POST['quantity']."','".$_POST['price']."')";

	$result = mysqli_query($connection,$sql);
	if($result)
echo"<script> alert('Stock Added Sucessfully') </script>";
else
echo"<script> alert('Failed! Stock ID Exists') </script>";

}

?>