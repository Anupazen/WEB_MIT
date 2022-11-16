<?php 
	require 'DBN.php';
	session_start();
	$usname = $_SESSION['usname'];
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Customer Profile</title>
		<link rel="stylesheet" type="text/css" href="Customerprofile.css">
	</head>
	<body>
<?php
	$sql = "SELECT * from user WHERE UID='$usname'";
				$res = $con->query($sql);
?>

<?php
while($row=$res->fetch_assoc())
							{
?>
		<center><form action="updateProfval.php" method="POST" id="cuspro"><br>
			<label id="cus">Profile Picture: </label>
			<input type="file" name="photo" class="photo"><br><br>
			<label id="cus" >User ID: </label>
			<input type="text" name="user" id="user" value=<?php echo $row["UID"]; ?> readonly reqired><br><br>
			<label id="cus">Name: </label>
			<input type="text" name="name" value=<?php echo $row["name"]; ?> reqired><br><br>
			<label id="cus">Password: </label>
			<input type="text" name="password" value=<?php echo $row["password"]; ?> reqired><br><br>
			<label id="cus">Age: </label>
			<input type="text" name="age" value=<?php echo $row["age"]; ?> reqired><br><br>
			<label id="cus">Email: </label>
			<input type="text" name="email" id="email" value=<?php echo $row["email"]; ?> reqired><br><br>
			<label id="cus">Address: </label>
			<input type="text" name="add" id="add" value=<?php echo $row["address"]; ?> reqired><br><br>
			<button type="submit">Update</button><br><br>
			<button type="delete">Delete</button>
		</form></center>
<?php } ?>
	</body>
</html>
