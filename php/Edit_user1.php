<?php require_once('conect.php'); ?>

<!DOCTYPE html>
<html>
<?php
$sql = "SELECT * FROM user";
$result = mysqli_query($conn,$sql);

if($result){
//echo "Sucessfull";
}
else{
echo"failed";	
}




?>

<head>
	
	<title>Edit User</title>
	<link rel="stylesheet" type="text/css" href="../css/edit.css">
	
	</head>
<body>
		<?php include '../html/header.html'; ?>
		<?php include '../html/navigation.html'; ?>
		

<div class="loginbox">
	<table border=1 padding=10px>
		<tr bgcolor=#4CAF50 font color= white>
			<td>ID</td>
			<td>Name</td>
			<td>User Type</td>
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
			<td><?php echo $row['account'] ?></td>
			<td><?php echo $row['email'] ?></td>
			<td><?php echo $row['telephone'] ?></td>
			<td><?php echo $row['address'] ?></td>
			<?php echo "<td><a href =Edit_user2.php?id='".$row['id']."' > update </a> </td>"?>
		</tr>
		<?php
	}
	?>
		
	</table>
		

</div>	
</body>
</html>
