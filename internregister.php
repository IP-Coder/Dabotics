<!DOCTYPE html>
<html lang="en">

<head>
    <title>Internship</title>
    <?php
    include 'Header.php'
    ?>
</head>
<style>
    .btn1 {
        background: #47b2e4;
        border: 0;
        padding: 12px 34px;
        color: #fff;
        transition: 0.4s;
        border-radius: 50px;
    }
</style>

<body class="d-flex flex-column min-vh-100">
    <!-- ======= Header ======= -->
    <?php
    include 'Navebar.php'
    ?>
    <!-- End Header -->
    <!-- ======= Form Section ======= -->
    <section id="services" class="forms" style="margin-top: 60px;">
        <div class="container text-center">
            <h1 class=" text-center ">Internship<br>Registration Form</h1>

        </div>
        <div class="container my-5">
            <form class="row g-3" action="int.php" method="POST" enctype="multipart/form-data>
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Name <sup style="color: red;"> *</sup></label>
                    <input type="text" name="name" required class="form-control" id="inputEmail4">
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Email Address <sup style="color: red;">
                            *</sup></label>
                    <input type="email" name="email" required class="form-control" id="inputPassword4">
                </div>
                <div class="col-6">
                    <label for="inputAddress" class="form-label">Phone Number <sup style="color: red;"> *</sup></label>
                    <input type="tel" name="number" pattern="[0-9]{10}" required class="form-control" id="inputAddress" placeholder="9874****21">
                </div>
                    <div class="col-6">
                        <label for="inputAddress" class="form-label">Payment Screenshot<sup style="color: red;">*</sup><sub>Maximum Size (5MB)</sub></label>
                        <input type="file" name="image" accept="image/jpeg, image/png" required class="form-control" id="inputimage" >
                    </div>
                <div class="text-center "><button class="btn1" type=" submit">Register Here
                    </button></div>
            </form>
        </div>
    </section>
    <!-- ======= Footer ======= -->
    <?php
    include 'Footer.php'
    ?>
    <!-- End Footer -->

</body>

</html>
