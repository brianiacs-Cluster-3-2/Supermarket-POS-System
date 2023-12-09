<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link href="../Project/images/logo.png" rel="shortcut icon"><!-- Web page logo -->

	<link href="img/favicon.ico" rel="icon">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
		integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />

	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<--external css -->
	<link rel="stylesheet" href="./css/styles.css">


</head>

<body style="">


	<div style="
		margin-left:7px;
		margin-top:7px;
		">
		<img width="55px" height="55px" src="../Project/images/logo.png" alt="Logo">
	</div>


	<div class="login-container">

		<div class="login-logo">
			<h2 style="color:white">Login</h2>
		</div>

<!-- Login form start -->
		<form method="post" action="Login_db_conn.php">
			<?php if (isset($_GET['error'])) { ?>
				<p class="alert alert-danger" style="padding:3px; padding-left:6px">
					<?php echo $_GET['error']; ?>
				</p>
			<?php }
			?>

			<div class="form-group">
				<input type="text" name="username" placeholder="Username">
			</div>

			<div class="form-group">
				<input type="password" name="password" id="passwordField" placeholder="Password">
				<span style="color: #fff;" toggle="#passwordField" class="toggle-password fa fa-eye"></span>
			</div>


			<div class="form-group">
				<select name="role" id="selectDes">
					<option value="Employee" selected>Employee</option>
					<option value="Admin">Admin</option>
				</select>
			</div>

			

			<div>
				<button type="submit" class="login-btn" name="button">Login</button>
			</div>
		</form>

		<div class="signup-link">
			Don't have an account? <a href="RegisterPage.php" class="ml-2">Sign Up</a>
		</div>

		<div class="forgot-password">
			<a href="#">Forgot your password?</a>
		</div>
	</div>


	<script>
		document.querySelector('.toggle-password').addEventListener('click', function() {
    const passwordField = document.querySelector(this.getAttribute('toggle'));
    this.classList.toggle('fa-eye');
    this.classList.toggle('fa-eye-slash');

    const fieldType = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
    passwordField.setAttribute('type', fieldType);
});
	</script>

</body>

</html>
