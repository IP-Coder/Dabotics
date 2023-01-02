<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page </title>
    <link href="assets/img/favicon.png" rel="icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    if (isset($_GET['loginsuccess']) && $_GET['loginsuccess'] == "false") {
        $showError = $_GET["error"];
        $showAlert = FALSE;
        // set_time_limit(3);
        echo ' <div class="fixed-top mt-2 alert alert-danger  alert-dismissible fade show" role="alert">
            <strong>Error!</strong>' . $showError . '
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div> ';
    }
    ?>
    <div class="container Main">
        <div class="mainIN">
            <div class="col">

                <div class="text-center">
                    <img class="main-img" src="favicon.webp" alt="">

                    <!-- <h1 id="MainH">Dabotics</h1> -->
                </div>
            </div>
            <div class="col mt-4">
                <div class="container formC">

                    <form action="loginlogic.php" method="POST">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" required name="logmail" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" required name="logpass" class="form-control"
                                id="exampleInputPassword1">
                        </div>
                        <div class="text-center formBtn">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a type="button" class="mt-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                Forgotten password?
                            </a>
                            <hr>

                        </div>
                    </form>
                    <div class="text-center formBtn">
                        <a href="signup.php" class=" btn btn-success"><button type="" class="btn btn-success ">Create
                                New Account</button></a>

                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Forgot Password</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Please Enter Your Email Address to
                                    Search For Your Account</label>
                                <input type="email" class="form-control" required id="exampleInputEmail1"
                                    aria-describedby="emailHelp">

                            </div>
                            <div class="modal-footer">

                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>