
<html>
  <head>
    <title>Add User</title>
	<link rel="stylesheet" type="text/css" href="../css/acc.css">
	
<script>
function validate()
{
	if(document.Form.S_ID.value=="")
	{
		alert("Error in Supplier ID field!");
	}
		
	if(document.Form.S_Name.value=="")
	{
		alert("Error in Supplier Name field!");
	}
			
	if(document.Form.Material.selectedIndex==0)
	{
		alert("Empty Material field!");
	}
	
			
	if(document.Form.Email_Id.value=="")
	{
		alert("Missing Email field!");
	}
	
	if(document.Form.TP_Number.value=="")
	{
		alert("Missing contact number field!");
	}
		
	if(isNaN(document.Form.TP_Number.value))
	{
		alert("Enter Contact number in correct format!");
	}
	
	if(document.Form.Address.value=="")
	{
		alert("Missing Address field!");
	}
	
	if(document.Form.pw.value=="")
	{
		alert("Missing password field!");
	}
	
}
</script>
  </head>
 
<body>
		<?php include '../html/header.html'; ?>
		<?php include '../html/navigation.html'; ?>
		

     

  
<div class="loginbox"> 
<form name="Form" action="add_user.php" method="post">
	
 <h3 align="center">USER REGISTRATION FORM</h3>

 
<table align="center" cellpadding = "10">
 

<tr>
<td>USER ID</td>
<td><input type="text" name="id" maxlength="30"/>
</tr>
 

<tr>
<td>USER NAME</td>
<td><input type="text" name="name" maxlength="30"/>
(max 30 characters a-z and A-Z)
</td>
</tr>
  

<tr>
<td>EMAIL ID</td>
<td><input type="text" name="email" maxlength="100" /></td>
</tr>
 

<tr>
<td>TELEPHONE NUMBER</td>
<td>
<input type="text" name="telephone" maxlength="10" />
(10 digit number)
</td>
</tr>


<tr>
<td>ADDRESS <br /><br /><br /></td>
<td><textarea name="address" rows="4" cols="30"></textarea></td>
</tr>

<tr>
<td>ACCOUNT TYPE</td>
 
<td>
<select name="account" id="account">
<option value="-1">Account:</option>
<option value="admin">admin</option>
<option value="supplier">supplier</option>
<option value="customer">customer</option>
 

</select>
</td>
</tr>
 
 

<tr>
<td>PASSWORD</td>
<td><input type="text" name="password" />
</td>
</tr>
 

<tr>
<td colspan="2" align="center">
  <input type="submit" value="submit" id="submit" name="submit" onclick="validate()">
</td>
</tr>
</table>
 
</form>

</div>
 
</body>


</html>
 
