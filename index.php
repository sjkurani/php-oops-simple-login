<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
</head>
<body>
	<legend><center><h1>Login Form</h1></center></legend>
	<form method="post" action="action.php" class="well row">
		<div class="col-lg-6">
			<label class="col-lg-12">Username</label>
			<input class="col-lg-12" type="text" name="userName">
		</div>
		<div class="col-lg-6">
			<label class="col-lg-12">Email</label>
			<input class="col-lg-12" type="text" name="email">
		</div>
		<div class="col-lg-12"><br>
			<center><input type="submit" name="login" value="Submit" class="btn btn-info"></center>
			<br>
			<center><a href="register.php">New Member? Register Here</a></center>
		</div>
	</form>
</body>
</html>