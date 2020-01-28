<?php require_once('conect.php'); ?>
<?php
if(isset($_GET['id'])){
$sql = "DELETE FROM user WHERE id = ".$_GET['id'];
mysqli_query($conn, $sql);
$result = mysqli_query($conn,$sql);
if($result)
{
echo"<script> alert('Deleted Sucessfully');
            window.location.href='Delete_user1.php';

 </script>";
}
//header("location: Delete_user1.php");
}
else{


}
?>
