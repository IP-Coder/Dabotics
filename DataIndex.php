<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dabotics Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="assets/img/favicon.png" rel="icon">
</head>

<body>

    <?php
    session_start();


    ?>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasRightLabel">Welcome</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="">
                <img src="favicon.webp" style="width: 60%; margin-left: 25%;" class="card-img-center rounded-circle" alt="...">
                <div class=" mt-3 border border-info card-body">
                    <h5 class="card-title ">Personal Details</h5>
                    <hr>
                    <div class="detail">
                        <table>
                            <tr class="mb-3">
                                <td>UserId</td>
                                <td><?php echo $_SESSION['userid'] ?></td>
                            </tr>
                            <tr class="mt-5">
                                <td>Name :- </td>
                                <td><?php echo $_SESSION['Name']; ?></td>
                            </tr>
                            <tr class="mb-1">
                                <td>Designation :- </td>
                                <td>Updated Soon</td>
                            <tr class="mb-1">
                                <td>E-Mail :-</td>
                                <td><?php echo $_SESSION['email'] ?></td>
                            </tr>
                            <tr class="mb-1">
                                <td>Phone :-</td>
                                <td><?php echo $_SESSION['number'] ?></td>
                            </tr>
                            <tr class="mb-1">
                                <td>Last login :-</td>
                                <td><?php echo $_SESSION['last_login'] ?></td>

                            </tr>

                        </table>

                    </div>
                </div>
                <div class=" mt-4 text-center">
                    <button type="button" class="btn btn-info" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop">Edit Your Info</button>
                </div>
            </div>
        </div>
    </div>
    <section class="nave mb-3">
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: rgb(55,81,126)">
            <div class="container-fluid" style="flex-direction:row-reverse;">
                <?php echo ' <a class="navbar-brand" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
        aria-controls="offcanvasRight" href="#">' . $_SESSION['Name'] . ': ' . $_SESSION['userid'] . '</a>'; ?>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="logout.php">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <section>
        <div class="container">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">S.No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Number</th>
                        <th scope="col">College</th>
                        <th scope="col">E-Mail</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    if (isset($_SESSION['loginsuccess']) && $_SESSION['loginsuccess'] == "true") {

                        include 'Connection.php';
                        $sql = "select * from `Registration` ";
                        $result = mysqli_query($conn, $sql);

                        while ($row = mysqli_fetch_assoc($result)) {
                            $sno = $row['S.No'];
                            $name = $row['Name'];
                            $email = $row['Email'];
                            $number = $row['Number'];
                            $cllguni = $row['CllgUni'];
                            $course = $row['Gyear'];
                            $cyear = $row['Cyear'];
                            echo '<tr>
                    <th scope="row">' . $sno . '</th>
                    <td>' . $name . '</td>
                    <td><a target="0" href="https://api.whatsapp.com/send/?phone=91' . $number . '">' . $number . '</a></td>
                    <td>' . $cllguni . '</td>
                    <td><a href="mailto:' . $email . '">' . $email . '</a></td>
                </tr>';
                        }
                    } else {
                        header("location: login.php");
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </section>


    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Your Info</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="h4 pb-2 mb-4 text-danger border-bottom border-danger">
                        This Functionality Is Under Construction
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>



</html>