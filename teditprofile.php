<?php
if(isset($_POST["submit"])){
	include 'dbh.php';
	include 'session.php';

	$password=mysqli_real_escape_string($conn,$_POST['password']);
	$firstName=mysqli_real_escape_string($conn,$_POST['firstName']);
	$lastName=mysqli_real_escape_string($conn,$_POST['lastName']);
	$phone=mysqli_real_escape_string($conn,$_POST['phone']);
	$address=mysqli_real_escape_string($conn,$_POST['address']);
	

	// echo $username.$firstName.$address;

$sql1 = "UPDATE `currentclient` SET `parent_phone` = '$phone' WHERE `currentclient`.`parent` = '$username'";
	$result1=$conn->query($sql1);


$sql = "UPDATE `parent` SET `password` = '$password', `firstname` = '$firstName',`lastname` = '$lastName',`phone` = '$phone',`address` = '$address' WHERE `parent`.`username` = '$username'";

	$result=$conn->query($sql);


	header("Location:tprofile.php");

}


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" href="signin.css">
<body style="background-image: url(uploads/home.jpg);">
	<div class="registrationbox">
		<h1>Edit Profile</h1>
		<form action="teditprofile.php" method="post">
			<p>Password</p>
			<input type="Password" name="password" placeholder="Enter 6 digit password" minlength="6" required="">
			<p>First Name</p>
			<input type="text" name="firstName" placeholder="First Name" required="">
			<p>Last Name</p>
			<input type="text" name="lastName" placeholder="Last Name" required="">
			<p>Phone</p>
			<input type="tel" name="phone" placeholder="Enter 11 digit phone number. Eg:01XXXXXXXXX" pattern="[01]{2}[0-9]{9}" required="">
            <p>Address</p>
			<input type="text" name="address" placeholder="Address" required="">
			<br>
			<input type="submit" name="submit" value="Save Changes"><br>
			
			<center><a href="tprofile.php">Back</a></center>
			

		</form>
	</div>

</body>
</html>
