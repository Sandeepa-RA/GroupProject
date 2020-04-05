<?php require_once('conn.php'); ?>
<?php
        session_start();
        if(!isset($_SESSION["id"])){
            header('Location:../index.html');
        }
        ?>
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
	<link rel="stylesheet" type="text/css" href="../css/commonstyle.css">
	<link rel="stylesheet" type="text/css" href="../css/viewstyle.css">
	</head>
<body>
	<?php include '../html/header.html'; ?>
    <?php include '../html/navigation.html'; ?>
		<div class=content>
		<h2>Submitted Quotation Forms</h2>
		<table>
		<tr>
			<td>Company</td>
			<td>Material</td>
			<td>Quantity</td>
			<td>Price</td>
			<td colspan=2>Action</td>
			

		</tr>
		<?php
		while($row=mysqli_fetch_assoc($result)){
			?>
		
			<tr style="color: white;">
			<td><?php echo $row['name'] ?></td>
			<td><?php echo $row['material'] ?></td>
			<td><?php echo $row['quantity'] ?></td>
			<td><?php echo $row['price'] ?></td>
			
			<?php echo "<td><a href =formupdate.php?name='".$row['name']."' > confirm </a> </td>"?>
			<?php echo "<td><a href =formdelete.php?name='".$row['name']."' > delete </a> </td>"?>
		</tr>
		<?php
	}
	?>
		
	</table>
			

	</div>
</body>
</html>