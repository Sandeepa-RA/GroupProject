<?php require_once('conn.php'); ?>
<?php
if(isset($_GET['name'])){
$sql1 = "SELECT * FROM supplier WHERE name =".$_GET['name'];
$result = mysqli_query($conn,$sql1);
$row=mysqli_fetch_assoc($result);
if($result){


}
//echo "Sucessfull";
else{
echo"failed";	
}

}

if(isset($_POST['updateB']))
	{
		$sql2 = "UPDATE supplier SET material = '".$_POST['mt']."',quantity = '".$_POST['qn']."',price = '".$_POST['pr']."' WHERE name ='".$_POST['name']."'";

		$sql3 = "SELECT * FROM supplier WHERE name =".$_POST['name'];
		$result3 = mysqli_query($conn,$sql3);
		$row=mysqli_fetch_assoc($result3);
		echo"<script> alert('Updated Sucessfully') </script>";

	}
if(!isset($_GET['name'])&&!isset($_POST['updateB'])){
header("Location: formview.php");
}


?>
<!DOCTYPE html>
<html>
<head>
	
	<link rel="stylesheet" type="text/css" href="commonstyle.css">
	<link rel="stylesheet" type="text/css" href="updatestyle.css">
	<title>update</title>
</head>
<body>
<?php include 'header.html'; ?>
<?php include 'navigation.html'; ?>
<div class=content>
	<h2>Update details</h2>
	<table>
		<tr>
			<td>Name</td>
			<td>Material</td>
			<td>Quantity</td>
			<td>Price</td>
			
		</tr>
		<form action='formupdate.php' method ='POST'>
			<tr>
			<?php 
			echo "<td><input type = 'text' name='name' required value =".$row['name']." readonly></td>";
			echo "<td><input type = 'text' name='mt' required value =".$row['material']."></td>";
			echo "<td><input type = 'text' name='qn' required value =".$row['quantity']."></td>";
			echo "<td><input type = 'text' name='pr' required value =".$row['price']."></td>";
			?>
		</tr>
		<tr>
			<td><input type='submit' value="Update" name='updateB' class=button></td>
			<td><a href="formview.php"><button type="button" class=button>view</button></a></td>
		</tr>
		</form>
	</table>
</div>

	
</body>
</html>