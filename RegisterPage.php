<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <!-- Your other meta tags and links -->

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/Login.css">

    <!-- Custom styles -->
    <style>
        /* Your existing styles here */
        body {
            font-family: Arial, sans-serif;
            background-color: #ffffff;
        }

        .signup-container {
            max-width: 400px;
            margin: 70px auto;
            padding: 20px;
            border-radius: 8px;
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .signup-logo {
            text-align: center;
            margin-bottom: 20px;
        }

        .signup-logo img {
            max-width: 150px;
            height: auto;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group input[type="text"],
        .form-group input[type="password"] {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            transition: border-color 0.3s ease;
        }

        .form-group input[type="text"]:focus,
        .form-group input[type="password"]:focus {
            border-color: #007bff;
            outline: none;
        }

        .login-btn {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #090819;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .login-btn:hover {
            background-color: #1D1B37;
        }

        .login-link {
            text-align: center;
            margin-top: 15px;
        }

        .login-link a {
            color: #007bff;
            text-decoration: none;
        }

        .forgot-password {
            text-align: center;
            margin-top: 10px;
        }

        .logo {
            display: flex;
            justify-content: left;
            width: 70px;
            height: 70px;
            margin-left: 15px;
            margin-top: 15px;
            margin-bottom: 0;
        }

        @media screen and (max-width: 768px) {
            .signup-container {
                margin: 30px auto;
                padding: 15px;
                box-shadow: 0 0px 0px rgba(0, 0, 0, 0);
            }

            .signup-logo img {
                max-width: 100px;
                margin-bottom: 5px;
            }

            .form-group input[type="text"],
            .form-group input[type="password"] {
                padding: 10px;
            }

            .login-btn {
                padding: 8px;
            }
        }

        /* Media query for even smaller screens */
        @media screen and (max-width: 480px) {
            .signup-container {
                margin: 30px auto;
                padding: 15px;
                box-shadow: 0 0px 0px rgba(0, 0, 0, 0);
            }

            .signup-logo img {
                max-width: 80px;
            }

            .form-group input[type="text"],
            .form-group input[type="password"] {
                padding: 6px;
            }

            .login-btn {
                padding: 6px;
            }
        }
    </style>
</head>

<body>
    <!-- Your HTML content -->
    <div class="logo">
        <img src="../Project/images/login_logo.jpg" alt="Logo">
    </div>

    <div class="signup-container">
        <div class="signup-logo">
            <h2 style="color:#090819">Sign Up</h2>
        </div>

        <form method="post" action="N_signup.php">
            <!-- Use action for sign-up processing -->

            <!-- You can add your sign-up form fields here -->
            <div class="form-group">
                <input type="text" name="fullname" placeholder="Full Name">
            </div>

            <div class="form-group">
                <input type="text" name="email" placeholder="Email">
            </div>

            <div class="form-group">
                <input type="password" name="password" placeholder="Password">
            </div>

            <!-- Add more fields if needed for sign-up -->

            <div>
                <button type="submit" class="login-btn" name="button">Sign Up</button>
            </div>
        </form>

        <div class="login-link">
            Already have an account? <a href="Login.php" class="ml-2">Login</a>
        </div>

        <div class="forgot-password">
            <a href="#">Forgot your password?</a>
        </div>
    </div>

</body>

</html>
