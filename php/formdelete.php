<?php require_once('conn.php'); ?>
<?php
if(isset($_GET['name'])){
$sql = "DELETE FROM supplier WHERE name = ".$_GET['name'];
mysqli_query($conn, $sql);
$result = mysqli_query($conn,$sql);
if($result){
//echo "Sucessfull";
}
else{

}
header("Location: quatationview.php");
}
?>

