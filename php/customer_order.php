
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/cusorder.css">
	<link rel="stylesheet" href="../css/commonstyle.css" type="text/css">
	
	<title>Customer</title>
</head>
<body>
<?php include '../html/header.html'; ?>
<?php include '../html/navigation3.html'; ?>
 
  
<div class=content>
	<h2>Customer order</h2>
	<table class="table">
	<form action='cusorder.php' method ='POST'>
		<tr>
			<td>Customer ID</td>
			<td><input type = 'text' name='id' required></td>
		</tr>
		<tr>
			<td>Order NO</td>
			<td><input type = 'text' name='orderno' required></td>
		</tr>
		<tr>
			<td>Date of order</td>
			<td><input type = 'Date' name='d_order' required></td>
		</tr>
		
		<tr>
			<td>Requied date of Delivery</td>
			<td><input type = 'date' name='d_delivery' required></td>
		</tr>
		<tr>
			<td>Order</td>
			<td>Item 1
			<select name="item1">
					<option value="-1">Select</option>
					<option value="Bricks">Bricks</option>
					<option value="Cement">Cement</option>
					<option value="Steel Bars">Steel Bars</option>
					<option value="Sand">Sand</option>
					<option value="Wood">Wood</option>
					</select>
			Qty
			<input type = 'text' name='item1_qty' required></td>
			
		</tr>
		<tr>
			<td> </td>
			<td>Item 2
			<select name="item2">
			<option value="-1">Select</option>
					<option value="Bricks">Bricks</option>
					<option value="Cement">Cement</option>
					<option value="Steel Bars">Steel Bars</option>
					<option value="Sand">Sand</option>
					<option value="Wood">Wood</option>
				</select>
			Qty
			<input type = 'text' name='item2_qty' ></td>
		</tr>
		<tr>
			<td> </td>
			<td>Item 3
			<select name="item3">
					<option value="-1">Select</option>
					<option value="Bricks">Bricks</option>
					<option value="Cement">Cement</option>
					<option value="Steel Bars">Steel Bars</option>
					<option value="Sand">Sand</option>
					<option value="Wood">Wood</option>
				</select>
			Qty
			<input type = 'text' name='item3_qty' ></td>
		</tr>
		<tr>
			<td>Additional details</td>
			<td><input type=textarea rows="5" cols="20" name='add_detail' ></td>
		</tr>
			
			<td  colspan=2><input type='submit' value="place Order" name='order' class=button>
			
		</tr>
		</form>
	
	</table>	
	
	
</div>	
	
	
</body>



</html>