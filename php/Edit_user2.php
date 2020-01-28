<?php
require_once('conect.php');
$userid;
if(isset($_POST['update']))
{
	$sql2 = "UPDATE user SET name = '".$_REQUEST['name']."',email = '".$_REQUEST['email']."',telephone = '".$_REQUEST['telephone']."',address = '".$_REQUEST['address']."' WHERE id =".$_REQUEST['id']."";
	$result2 = mysqli_query($conn,$sql2);
	if ($conn->query($sql2) === TRUE) {
        echo("Done");
    } else {
        echo "Error: " . $sql2 . "<br>" . $conn->error;
    }

    $conn->close();
	$sql3 = "SELECT * FROM user WHERE id =".$_POST['id'];
	$result3 = mysqli_query($conn,$sql3);
	$row=mysqli_fetch_assoc($result3);
	
    echo"<script> 
				alert('Updated Sucessfully');
				window.location.href='Edit_user1.php';
				</script>";
}
if(isset($_GET['id']))
{
	$userid = $_GET['id'];
	echo $userid;
	$sql1 = "SELECT * FROM user WHERE id =".$_GET['id'];
	$result = mysqli_query($conn,$sql1);
	$row=mysqli_fetch_assoc($result);
	
	if($result)
	{
	}
	echo "Sucessfull";
}
?>




<html>
<head>
    <title>Edit User</title>
    <link rel="stylesheet" type="text/css" href="../css/edit.css">
</head>

<body>
        <?php include '../html/header.html'; ?>
		<?php include '../html/navigation.html'; ?>
    <div class="loginbox">
        <table id="edituser" border=1 padding=10px>
            <tr bgcolor=#4CAF50 font color= white>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Telephone No</th>
                <th>Address</th>
            </tr>
            <form action="" method="POST">
				<?php
					$userid = $_GET['id'];
                    $sql1 = "SELECT * FROM user WHERE id =$userid";
                    $result = $conn-> query($sql1);
                    if($result-> num_rows > 0){
                        while($row = $result-> fetch_assoc()){
                            echo '<tr>
                                    <td>
                                        <input type="text" name="id" class=text_box required value='.$row['id'].' disabled>
                                    </td>
                                    <td>
                                        <input type="text" name="name" required value='.$row['name'].'>
                                    </td>
                                    <td>
                                        <input type="text" name="email" required value='.$row['email'].'></td>
                                    </td>
                                    <td>
                                        <input type="text" name="telephone" required value='.$row['telephone'].'></td>
                                    </td>
                                    <td>
                                        <input type="text" name="address" required value='.$row['address'].'></td>
                                    </td>
                                </tr>';
                        }
                    }
                ?>
                <tr>
                    <td colspan=5><input type="submit" value="update" name="update"></td>
                </tr>
            </form>
        </table>
    </div>
</body>

</html>