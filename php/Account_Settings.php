<html>
<head>Account Settings</title>
<link rel="stylesheet" href="../css/style_acc.css " type="text/css">

</head>

<body>
        <?php include '../html/header.html'; ?>
		<?php include '../html/navigation.html'; ?>
		
<div class="loginbox">
        <h1>What do you want to do?</h1><br><br>
        <form>
           
            <input type="button" onClick="location.href='add_user1.php'" name="Add" value="Add a new user"><br><br>
			<input type="button" onClick="location.href='delete_user1.php'" name="Delete" value="Delete an existing user"><br><br>
			<input type="button" onClick="location.href='edit_user1.php'" name="Edit" value="Edit user information">
        </form>
        
    </div>
</body>
</html>