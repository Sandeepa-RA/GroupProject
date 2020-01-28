<?php require_once('connect.php'); ?>
<?php
if(isset($_GET['sid'])){
$sql = "DELETE FROM stock WHERE sid = ".$_GET['sid'];
mysqli_query($connection, $sql);
$result = mysqli_query($connection,$sql);
if($result){
    echo"<script> alert('Deleted Sucessfully');
    window.location.href='stockview.php';

</script>";
}
else{

}

}
?>
