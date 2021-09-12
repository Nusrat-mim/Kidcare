<?php 
include 'session.php';

 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" href="review.css">
<body>
	<div class="loginbox">
	<form action="deletetutor.php" method="post">
		<h1>Delete Client</h1>
		<br><br>
		<p>Client username</p>
		<input type="text" name="pusername" placeholder="Enter parent username">
		<br><br><br>
		<input type="submit" name="submit" value="submit">
		<br>
		<center><a href="home.php">Home</a></center>
	</form>
	</div>
	<?php 
	if(isset($_POST["submit"]))
	{
		include 'dbh.php';
		$daycare=$_SESSION['username'];
		$parent=$_POST['pusername'];

		$sql1="DELETE FROM currentclient WHERE daycare='$daycare' AND parent='$parent'";
		$result=$conn->query($sql1);
		// header("Location:currenttutor.php");

		echo '<script type="text/javascript"> alert("Client deleted");window.location="currenttutor.php";</script>';
	}
	 ?>

</body>
</html>