<?php
    // include 'Connection.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["usernaam"];
        $password = $_POST["password"];
        if($username == "Suraj" && $password == "Zebronic"){
            header("Location: index.php");
        }
    }
    
?>
<!doctype html>
<html lang="en">

<head>
    <title>Login 08</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="assets/css/stylelogin.css">

        
    <style>
        body{
            background-color: #37517e;
        }

        .heading-section{
            font-weight: 600;
            font-size: 30px;
            letter-spacing: 2px;
            color: White;
        }

        .login-wrap h3 {
            color: black;
        }

        .login-wrap .icon{
            background-color: #47b2e4;
        }


        .btn.btn-primary {
            background: #47b2e4 !important;
            border: 1px solid #47b2e4 !important;
            color: #fff !important;
        }

        a{
            color: #37517e;
        }

        .checkbox-wrap{
            color: #37517e;
        }
        
        
    </style>
</head>

<body >
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h1 class="heading-section">DABOTICS</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-5">
                    <div class="login-wrap p-4 p-md-5">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-user-o"></span>
                        </div>
                        
                        <h3 class="text-center mb-4">Login</h3>
                        <!-- <h3 class="text-center mb-4">Have an account?</h3> -->

                        <form action="login.php" method="post" class="login-form">
                            <div class="form-group">
                                <input type="text" name="usernaam" class="form-control rounded-left" placeholder="ID"
                                    required>
                            </div>
                            <div class="form-group d-flex">
                                <input type="password" class="form-control rounded-left" name="password"
                                    placeholder="Password" required>
                            </div>
                            <div class="form-group d-md-flex">
                                <div class="w-50">
                                    <label class="checkbox-wrap checkbox-primary">Remember Me
                                        <input type="checkbox"  class="checkmark" checked>
                                        <span class="checkmark"></span>
                                    </label>
                                        <a href="#">Create a Account</a>
                                        <i class="fa fa-long-arrow-right m-l-5"> </i>
                                </div>
                                <div class="w-50 text-md-right">
                                    <a href="#">Forgot Password</a>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary rounded submit p-3 px-5">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/main2.js"></script>

</body>

</html>