<?php require_once('conn.php'); ?>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/commonstyle.css">
	<link rel="stylesheet" type="text/css" href="../css/addstyle.css">
	<title>FORM</title>
</head>

<body>

<?php Include '../html/header.html'; ?>
<?php Include '../html/navigation1.html'; ?>

<div class=content>
<div class=formArea>


	<h2>Quotation</h2>

	<form action='formadd.php' method ='POST'>
	
		
		<div class=text_box>
			Supplier Company:
			<input type = 'text' placeholder="Name" name='name' required>
		</div>
		
		<div class=text_box>
			Type of Material:
			 <input type = 'text' placeholder="type" name='mt' class=text_box required>
		</div>
		
		<div class=text_box>
			Quantity:
			<input type = 'text' placeholder="quantity" name='qn' required>
		</div>
		
		<div class=text_box>
			Unit Price:
			<input type = 'text' placeholder="price" name='pr' required>
		</div>
		
	
		<div>
		
			<input type='submit' value="Save" name='signB' class=button>
			
		</div>
		
		
	</form>

	</div>
	
</body>
</html>

<?php	
	if(isset($_POST['signB'])){

	$sql = "INSERT INTO supplier (name,material,quantity,price) VALUES ('".$_POST['name']."','".$_POST['mt']."','".$_POST['qn']."','".$_POST['pr']."')";

	$result = mysqli_query($conn,$sql);
	if($result)
echo"<script> alert('Submission is Sucessfull') </script>";
else
echo"failed";

}

?>
