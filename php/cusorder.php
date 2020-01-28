<?php require_once('connection.php');

$id=$_POST["id"];
$order=$_POST["d_order"];
$order_no=$_POST["orderno"];
$delivary=$_POST["d_delivery"];
$item1=$_POST["item1"];
$item1_qty=$_POST["item1_qty"];
$item2=$_POST["item2"];
$item2_qty=$_POST["item2_qty"];
$item3=$_POST["item3"];
$item3_qty=$_POST["item3_qty"];
$add_detail=$_POST["add_detail"];





if(isset($_POST['id'])){
	$sql="insert into customer_order values('$id','$order_no','$order','$delivary','$item1','$item1_qty','$item2','$item2_qty','$item3',
	'$item3_qty','$add_detail')";
	
	$result=mysqli_query($connection,$sql);
	
	if($result){
		echo"<script> alert('Order placed Sucessfully!');
		window.location.href='ordersucessful.php';
		</script>";
		
}
else{
	echo"<script> alert('Unable to place your order!');
	window.location.href='customer_order.php';
	</script>";
}
}

?>