<html>
<head>
	<title> Login and Registration Form in HTML5 and CSS3</title>
	<link rel="stylesheet" a href="style1.css">
	
</head>
<body>
	<div class="container">
	<div class="login-box">
	<div class="row">
	<div class="col-md-6 login-left">
		<h2> Login Here</h2>
		<form action="validation.php" method="post">
			<div class="form-group"> 
				<label> Username</label>
				<input type="text" name="user" class="form-control" required>
			</div>
			<div class="form-group"> 
				<label> Password</label>
				<input type="password" name="password" class="form-control" required>
				<button type="submit" class="btn btn-primary"> Login</button>
			</div>
		</form>
	</div>

	<div class="col-md-6 login-right">
		<h2> Register Here</h2>
		<form action="Registration.php" method="post">
			<div class="form-group"> 
				<label> Username</label>
				<input type="text" name="user" class="form-control" required>
			</div>
			<div class="form-group"> 
				<label> Password</label>
				<input type="password" name="password" class="form-control" required>
				<button type="submit" class="btn btn-primary"> Register</button>
			</div>
		</form>
		
	</div>
	
	</div>
	</div>
	</div>
	
</body>
</html>