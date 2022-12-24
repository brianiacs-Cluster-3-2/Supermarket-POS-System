<!DOCTYPE html>
<html>
    
<head>
	<title>Didak POS Login</title>
	<link href="logo.png" rel="shortcut icon" alt="logo"><!--Web page logo-->

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- <link rel="stylesheet" href="./Login.css"> -->
	<link rel="stylesheet" href="./css/Login.css">
</head>
<style>
	.thin_head{
			font-weight: lighter;
			color: white;
			font-family: Tahoma;
		  }
		  .thin_head::selection {
            color:#2c6dc8;
            background: #f39c12;
			
          }
		
		  .head_text
        {
           
            
            /* font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; */
			font-family: cursive;
			
            
        }
</style>

<body>

    <div class="heading">
		<table>
        <span class="head_text">Brainiacs' <span class="thin_head" > POS SYSTEM</span> </span>
		</table>
    </div>

	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="./images/LoginLogo.jpg" class="brand_logo" alt="Logo">
						<!-- https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRwkyeEl3_SSEa5oeBx8F3lQzCZS4_E6aDpHQj3ZCtcNwQlwCGdeqLe8axWWkRTinw-cWY&usqp=CAU -->
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
					<form method="post" action="N_login.php">
					
					<?php if(isset($_GET['error'])){ ?>
							<p class="error"><?php echo $_GET['error']; ?> </p>
						<?php }	?>

						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							
							<input type="text" name="username" class="form-control input_user" value="" placeholder="username">
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="password" class="form-control input_pass" value="" placeholder="password">
						</div>
						<div class="form-group">
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="customControlInline">
								<label class="custom-control-label" for="customControlInline">Remember me</label>
							</div>
						</div>
							<div class="d-flex justify-content-center mt-3 login_container">
				 	<button type="submit" name="button" class="btn login_btn">Login</button>



				   </div>

					</form>
				</div>
		
				<div class="mt-4">
					<div class="d-flex justify-content-center links">
						Don't have an account? <a href="#" class="ml-2">Sign Up</a>
					</div>
					<div class="d-flex justify-content-center links">
						<a href="#">Forgot your password?</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
