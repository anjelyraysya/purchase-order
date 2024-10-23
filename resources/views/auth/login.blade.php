<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - AdminLTE</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <style>
        /* Custom style for AdminLTE-like login page */
        body {
            background-color: #e9ecef;
            font-family: 'Arial', sans-serif;
        }

        .login-page {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh; /* Full height */
        }

        .login-box {
            width: 420px; /* Fixed width for the login box */
            padding: 20px;
            margin: 0 20px; /* Equal margin on left and right */
        }

        .login-logo {
            text-align: center;
        }

        .login-logo a {
            color: #007bff;
            font-size: 35px;
            font-weight: 700;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .card {
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            border: none;
            border-radius: 10px;
            overflow: hidden;
            background: linear-gradient(135deg, #ffffff, #f8f9fa); /* Gradient for card background */
        }

        .card-header {
            background-color: #007bff; /* Primary color for header */
            height: 5px; /* Adjusted height of the border */
        }

        .card-body {
            padding: 30px;
            background-color: #ffffff; /* White background for the card body */
        }

        .btn-primary {
            background-color: #007bff; /* Primary button color */
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3; /* Darker shade on hover */
            border-color: #004085;
        }

        .btn-danger {
            background-color: #dc3545; /* Danger button color */
            border-color: #dc3545;
        }

        .btn-danger:hover {
            background-color: #c82333; /* Darker shade on hover */
            border-color: #bd2130;
        }

        .social-auth-links .btn {
            display: block;
            width: 100%;
            margin-bottom: 10px;
            border-radius: 4px;
        }

        .input-group .form-control {
            border-radius: 4px;
            border: 1px solid #ced4da; /* Formal border color */
        }

        .input-group-text {
            border-radius: 0 4px 4px 0;
            background-color: #f8f9fa; /* Light background for input group */
            border: 1px solid #ced4da; /* Formal border color */
        }

        .icheck-primary {
            display: inline-block;
            padding-left: 1.25rem;
        }

        .icheck-primary input[type="checkbox"] {
            position: absolute;
            opacity: 0;
        }

        .icheck-primary label {
            margin-bottom: 0;
            font-weight: bold;
            cursor: pointer;
            color: #000;
        }

        .login-box-msg {
            font-size: 18px;
            color: #000;
            font-weight: 500;
            text-align: center;
        }

        .footer {
            background-color: #343a40; /* Dark gray */
            color: white; /* Text color */
            text-align: center;
            padding: 10px 0;
            width: 100%;
            position: relative;
            bottom: 0;
            margin-top: auto; /* Push footer to bottom of the page */
        }

        .footer a {
            color: #007bff; /* Link color */
            text-decoration: none;
        }

        .btn:focus {
            outline: none;
            box-shadow: none;
        }
    </style>
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="card-header"></div>
    <div class="login-logo">
        <a href="#"><b>Admin</b>LTE</a>
    </div>
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Sign in to start your session</p>

            <!-- Login form -->
            <form action="javascript:void(0);" id="loginForm">
                <div class="input-group mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                            <input type="checkbox" id="remember">
                            <label for="remember">
                                Remember Me
                            </label>
                        </div>
                    </div>
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                    </div>
                </div>
            </form>

            <!-- Social login buttons -->
            <div class="social-auth-links text-center mt-2 mb-3">
                <a href="https://www.facebook.com/login" class="btn btn-block btn-primary">
                    <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
                </a>
                <a href="https://accounts.google.com/signin" class="btn btn-block btn-danger">
                    <i class="fab fa-google-plus mr-2"></i> Sign in using Google
                </a>
            </div>

            <p class="mb-1">
                <a href="https://support.google.com/accounts/bin/answer.py?hl=en&answer=7682439">I forgot my password</a>
            </p>
            <p class="mb-0">
                <a href="https://accounts.google.com/signup" class="text-center">Register a new membership</a>
            </p>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>

<script>
    $(document).ready(function() {
        $('#loginForm').on('submit', function() {
            alert('Login successful!');
            window.location.href = 'http://localhost:8000/admin/dashboard';
        });
    });
</script>
</body>
</html>
