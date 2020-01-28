<?php require_once('conect.php'); ?>

<!DOCTYPE html>
<html>
<body>
<?php include '../html/header.html'; ?>
</body>
<?php
	

session_start();
if(isset($_POST["submit"]))
{
	

  $id   = $_POST["id"];
  $password	   =$_POST["password"];
  $account;
  
      
      $sql = "SELECT * FROM user WHERE id = '$id' and password = '$password'";
	  
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

      $count = mysqli_num_rows($result);
      

      if($count == 1) 
	  {
      
         $_SESSION['id'] = $id;
		 
	  $account=$row['account'];
		 
		 
		 
         if($account=="admin")
		 {
			echo"<script> 
				alert('Welcome Admin');
				window.location.href='../html/index.html';
				</script>";
		 }
		 
		 if($account=="supplier")
		 {
			//header("location: stockviewsupplier.php");
			echo"<script> 
				alert('Welcome Supplier');
				window.location.href='stockviewsupplier.php';
				</script>";
		 }
		 
		 if($account=="customer")
		 {
			//header("location:customerstockview.php");
			echo"<script> 
				alert('Welcome Customer');
				window.location.href='customerstockview.php';
				</script>";
		 }
      }
	  else {
        
		echo"<script> 
				alert('Login Failed!Username or Password is invalid.');
				window.location.href='../index.html';
				</script>";

}
	 }

?>


