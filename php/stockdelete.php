<?php require_once('connect.php'); ?>
<?php
if(isset($_GET['sid'])){
$sql = "DELETE FROM user WHERE sid = ".$_GET['sid'];
mysqli_query($connection, $sql);
$result = mysqli_query($connection,$sql);
if($result){
//echo "Sucessfull";
}
else{

}
header("Location: stockview.php");
}
?>
