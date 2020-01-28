<?php require_once('conn.php'); ?>

<!DOCTYPE html>
<html>
<?php
$sql = "SELECT * FROM supplier";
mysqli_query($conn, $sql);
$result = mysqli_query($conn,$sql);

if($result){
//echo "Sucessfull";
}
else{
echo"failed";	
}


?>

<head>
	
	<title></title>
	<link rel="stylesheet" type="text/css" href="commonstyle.css">
	<link rel="stylesheet" type="text/css" href="viewstyle.css">
	</head>
<body>
	<?php include 'header.html'; ?>
    <?php include 'navigation.html'; ?>
		<div class=content>
		<h2>Submitted Quotation Forms</h2>
		<table>
		<tr>
			<td>Name</td>
			<td>Material</td>
			<td>Quantity</td>
			<td>Price</td>
			<td>Update</td>
			<td>delete</td>

		</tr>
		<?php
		while($row=mysqli_fetch_assoc($result)){
			?>
		
			<tr style="color: white;">
			<td><?php echo $row['name'] ?></td>
			<td><?php echo $row['material'] ?></td>
			<td><?php echo $row['quantity'] ?></td>
			<td><?php echo $row['price'] ?></td>
			
			<?php echo "<td><a href =formupdate.php?name='".$row['name']."' > update </a> </td>"?>
			<?php echo "<td><a href =formdelete.php?name='".$row['name']."' > delete </a> </td>"?>
		</tr>
		<?php
	}
	?>
		
	</table>
			<br><a href="formadd.php"><button type="button" class=button>Add</button></a>

	</div>
</body>
</html>