<!DOCTYPE html>
<html lang="en">

<head>

    <title>WebdevSession</title>
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
        <div class="container">
            <h1 class=" text-center">Full Stack Web Development Program Demo Session</h1>
            <p style="margin-top:20px;" class=" text-center">In this demo session, you will get an overview of the
                full-stack web
                development opportunities in the
                market along with the Internship Program details like the technologies you will learn, about the product
                you will build, the certificates offered in the program, the program schedule, fees, and payment
                options. Also, there will be a live coding demo where we will walk you through a simple web application
                built from scratch.</p>
        </div>
        <div class="container">
            <form class="row g-3" action="Success.php" method="POST">
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
                    <label for="inputCity" class="form-label">College / University <sup style="color: red;">
                            *</sup></label>
                    <input type="text" name="coluni" required class="form-control" id="inputCity">
                </div>
                <div class="col-md-12">
                    <label for="inputState" class="form-label">Why you want to join this session <sub> (optional)</sub>
                    </label>
                    <input type="text" name="mssg" required class="form-control" id="inputCity">

                </div>
                <div class="text-center "><button class="btn1" type=" submit">Send Message</button></div>
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