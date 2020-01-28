<?php require_once('connect.php'); ?>
<?php
if(isset($_GET['sid'])){
$sql1 = "SELECT * FROM stock WHERE sid =".$_GET['sid'];
$result = mysqli_query($connection,$sql1);
$row=mysqli_fetch_assoc($result);
if($result){


}
//echo "Sucessfull";
else{
echo"failed";	
}

}

if(isset($_POST['supdate'])){
	$sql2 = "UPDATE stock SET name = '".$_POST['name']."',quantity = '".$_POST['quantity']."',price = '".$_POST['price']."' WHERE sid ='".$_POST['sid']."'";
$result2 = mysqli_query($connection,$sql2);

$sql3 = "SELECT * FROM stock WHERE sid =".$_POST['sid'];
$result3 = mysqli_query($connection,$sql3);
$row=mysqli_fetch_assoc($result3);
echo"<script> alert('Updated Sucessfully');
window.location.href('stockview.php');
</script>";



}
if(!isset($_GET['sid'])&&!isset($_POST['supdate'])){
header("Location: stockview.php");
}


?>
<html>
<head>

	
	<title>Stock Update</title>
	<link rel="stylesheet" type="text/css" href="../css/commonstyle.css">
	<link rel="stylesheet" type="text/css" href="../css/stockupdatestyle.css">
	
	
</head>
<body>
		<?php include '../html/header.html'; ?>
		<?php include '../html/navigation.html'; ?>
		
<div class=content>
	<h2>Stock Update</h2>
<table>
		<tr>
			<td>Stock ID</td>
			<td>Name</td>
            <td>Quantity</td>
            <td>Unit Price</td>

		</tr>
		<form action='' method ='POST'>
			<tr>
				
			<?php 
            echo "<td><input type = 'text' name='sid' class=text_box required value =".$row['sid']." readonly></td>";
			echo "<td><input type = 'text' name='name' class=text_box required value =".$row['name']."></td>";
            echo "<td><input type = 'text' name='quantity' class=text_box required value =".$row['quantity']."></td>";
			echo "<td><input type = 'text' name='price'  class=text_box required value =".$row['price']."></td>";
			?>
			
		</tr>
			<tr>
				<td></td>
				<td></td>
				<td colspan=2><input type='submit' value="Update" name='supdate' class=button>
				<a href="stockview.php"><button type="button" class=button>Stock View</button></a></td>
			</tr>
		</form>
	</table>
	
    </div>
</body>
</html>