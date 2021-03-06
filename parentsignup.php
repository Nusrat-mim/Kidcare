<!DOCTYPE html>
<html>
<head>
	<title>Parent Register</title>
	<link rel="shortcut icon" type="image/png" href="img/icons/favicon.png"/>
</head>
<link rel="stylesheet" href="signin.css">
<body>

	<header>
		<div class="container">
			<div id="branding">
				<a href="index.html"><h1>KID CARE!</h1></a>
			</div>
			<nav>
				<ul>
					<li><a href="about.html"><button class="button">About Us</button></a></li>
					<li><a href="FAQ.html"><button class="button">FAQ</button></a></li>
					<li><a href="signinas.html"><button class="button">Sing In</button></a></li>
					<li><a href="registeras.html"><button class="button">Sing Up</button></a></li>
				</ul>
			</nav>
		</div>
	</header>
	
	<div class="registrationbox">
		<h1>Parent Register</h1>
		<form action="signup.php" method="post">
			<div class="form-group">
				<label for="email">Email</label>
				<input type="text" class="form-control" id="email" name="email">
			</div>
			<div class="form-group">
				<label for="username">Username</label>
				<input type="text" class="form-control" id="username" name="username">
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" class="form-control" id="password" name="password">
			</div>
			<div class="form-group">
				<label for="phone">Phone</label>
				<input type="tel" class="form-control" id="phone" name="phone">
			</div>
			<div class="form-group">
				<label for="address">Address</label>
				<input type="text" class="form-control" id="address" name="address">
			</div>
			<br>
			<input type="submit" class="btn btn-primary"><br>
			
			<p>Already have an account ?     </p>
			<a href="signin.html">Sign In</a>

		</form>
	</div>

</body>
</html>
