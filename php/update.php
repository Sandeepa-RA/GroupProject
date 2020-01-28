<?php require_once('connection.php'); ?>
<?php
if(isset($_GET['id'])){
$sql1 = "SELECT * FROM customer_order WHERE id =".$_GET['id'];
$result = mysqli_query($connection,$sql1);
$row=mysqli_fetch_assoc($result);
if($result){


}
//echo "Sucessfull";
else{
echo"failed";	
}

}

if(isset($_POST['updateB'])){
	$sql2 = "UPDATE customer_order SET d_order = '".$_POST['d_order']."',d_delivery = '".$_POST['d_delivery']."' WHERE id ='".$_POST['id']."'";
$result2 = mysqli_query($connection,$sql2);

$sql3 = "SELECT * FROM customer_order WHERE id =".$_POST['id'];
$result3 = mysqli_query($connection,$sql3);
$row=mysqli_fetch_assoc($result3);
echo"<script> alert('Updated Sucessfully') </script>";

}
if(!isset($_GET['id'])&&!isset($_POST['updateB'])){
header("Location: view.php");
}


?>
<!DOCTYPE html>
<html>
<head>
	
	<link rel="stylesheet" type="text/css" href="cus.css">
	<link rel="stylesheet" href="../css/commonstyle.css" type="text/css">
	
	<title></title>
	<table>
		<tr>
			<td>ID</td>
			<td>Date of order</td>
			<td>Date of delivery</td>
			<td>Item 1</td>
			<td>qty</td>
			<td>Item 2</td>
			<td>qty</td>
			<td>Item 2</td>
			<td>qty</td>
			<td>Additional details</td>

		</tr>
		<form action='update.php' method ='POST'>
			<tr>
			<?php echo "<td><input type = 'text' name='id' required value =".$row['id']." readonly></td>";
			echo "<td><input type = 'text' name='d_order' required value =".$row['d_order']."></td>";
			echo "<td><input type = 'text' name='d_delivery' required value =".$row['d_delivery']."></td>";
			?>
		</tr>
		<tr>
			<td colspan =3><input type='submit' value="Update" name='updateB'></td>
			<td colspan =3><a href="view.php"><button type="button">view</button></a></td>
		</tr>
		</form>
	</table>
</head>
<body>
	
</body>
</html>