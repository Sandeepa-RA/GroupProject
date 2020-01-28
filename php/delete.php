<?php require_once('connection.php'); ?>
<?php
if(isset($_GET['id'])){
$sql = "DELETE FROM customer_order WHERE id = ".$_GET['id'];
mysqli_query($connection, $sql);
$result = mysqli_query($connection,$sql);
if($result){
//echo "Sucessfull";
}
else{

}
header("Location: view.php");
}
?>
