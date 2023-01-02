<!DOCTYPE html>
<html lang="en">

<head>

    <title>Registration Form</title>
    <?php
    include 'Header.php'
    ?>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7545298674584153"
        crossorigin="anonymous"></script>
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
        <div class="container">
            <h1 class=" text-center ">Registration Form</h1>

        </div>
        <div class="container my-5">
            <form class="row g-3" action="Success2.php" method="POST">
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
                    <input type="tel" name="number" pattern="[0-9]{10}" required class="form-control" id="inputAddress"
                        placeholder="9874****21">
                </div>
                <div class="col-md-6">
                    <label for="inputState" class="form-label"> Course<sup style="color: red;">*</sup>
                    </label>
                    <input type="text" name="Gyear" required class="form-control" id="inputCity">

                </div>
                <div class="col-md-6">
                    <label for="inputCity" class="form-label">Institute / University <sup style="color: red;">
                            *</sup></label>
                    <input type="text" name="coluni" required class="form-control" id="inputCity">
                </div>
                <div class="col-md-6">
                    <label for="inputState" class="form-label">Current Year <sup style="color: red;">*</sup>
                    </label>
                    <input type="text" name="Cyear" required class="form-control" id="inputCity">

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