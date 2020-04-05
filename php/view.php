<?php require_once('connection.php'); ?>
<?php
        session_start();
        if(!isset($_SESSION["id"])){
            header('Location:../index.html');
        }
        ?>
<!DOCTYPE html>
<html>
<?php
$sql = "SELECT * FROM customer_order";
mysqli_query($connection, $sql);
$result = mysqli_query($connection,$sql);

if($result){
//echo "Sucessfull";
}
else{
echo"failed";	
}




?>
<html>
<head>
	
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/stockviewstyle.css">
	<link rel="stylesheet" href="../css/commonstyle.css" type="text/css">
	
	</head>
<body>
		<?php include '../html/header.html'; ?>
		<?php include '../html/navigation.html'; ?>
		<div class=content>
		<h2>Customer Orders</h2>
	<table >
		<tr  font color= white>
			<td>ID</td>
			<td>Order No</td>
			<td>Date of order</td>
			<td>Date of delivery</td>
			<td>Item 1</td>
			<td>qty</td>
			<td>Item 2</td>
			<td>qty</td>
			<td>Item 2</td>
			<td>qty</td>
			<td>Additional details</td>
			<td colspan=2>Action</td>
			

		</tr>
		<?php
		while($row=mysqli_fetch_assoc($result)){
			?>
		
			<tr>
			<td><?php echo $row['id'] ?></td>
			<td><?php echo $row['order_no'] ?></td>
			<td><?php echo $row['order'] ?></td>
			<td><?php echo $row['delivary'] ?></td>
			<td><?php echo $row['item1'] ?></td>
			<td><?php echo $row['item1_qty'] ?></td>
			<td><?php echo $row['item2'] ?></td>
			<td><?php echo $row['item2_qty'] ?></td>
			<td><?php echo $row['item3'] ?></td>
			<td><?php echo $row['item3_qty'] ?></td>
			<td><?php echo $row['add_details'] ?></td>
			<?php echo "<td><a href =update.php?id='".$row['id']."' > confirm </a> </td>"?>
			<?php echo "<td><a href =delete.php?id='".$row['id']."' > delete </a> </td>"?>
		</tr>
		<?php
	}
	?>
		
	</table>
			

	</div>
</body>
</html>

