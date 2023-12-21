<!DOCTYPE html>
<html lang="en">

<head>
    <title>Registration Form</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">


    <meta content="" name="description">
    <meta content="" name="keywords">
    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous"> -->
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7545298674584153"
        crossorigin="anonymous"></script>

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
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
            <h1 class=" text-center ">REGISTRATION FORM</h1>

        </div>
        <div class="container my-5">
            <form class="row g-3" action="Success.php" method="POST">
                <div class="col-md-6">
                    <label for="name" class="form-label">Name <sup style="color: red;"> *</sup></label>
                    <input type="text" name="name" required class="form-control" id="name">
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">Email Address <sup style="color: red;">*</sup></label>
                    <input type="email" name="email" required class="form-control" id="email">
                </div>
                <div class="col-md-6">
                    <label for="school" class="form-label">School/College <sup style="color: red;">*</sup></label>
                    <input type="text" name="school" required class="form-control" id="school">
                </div>
                <div class="col-md-6">
                    <label for="course" class="form-label">Our Courses<sup style="color: red;">*</sup></label>
                    <select name="course" id="course" class="form-select">
                        <option value="">-- Select One --</option>
                        <option value="STEM">STEM</option>
                        <option value="Coding">Coding</option>
                        <option value="Robotics">Robotics</option>
                        <option value="3D printing">3D Printing</option>
                        <option value="Aeromodelling">Aeromodelling</option>

                    </select>
                </div>
                <div class="col-md-6">
                    <label for="grade" class="form-label">Grade <sup style="color: red;">*</sup></label>
                    <select name="grade" id="grade" class="form-select">
                        <option value="">-- Select One --</option>
                        <option value="1st to 3rd">1st to 3rd</option>
                        <option value="4th to 6th">4th to 6th</option>
                        <option value="7th to 9th">7th to 9th</option>
                        <option value="10th to 12th">10th to 12th</option>
                        <option value="UG/PG">UG/PG</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="demo_mode" class="form-label">Demo Mode <sup style="color: red;">*</sup></label>
                    <select name="demo_mode" id="demo_mode" class="form-select">
                        <option value="">-- Select One --</option>
                        <option value="Offline">Offline</option>
                        <option value="Online">Online</option>
                    </select>
                </div>
                <div class="col-6">
                    <label for="phone" class="form-label">Phone Number <sup style="color: red;"> *</sup></label>
                    <input type="tel" name="phone" pattern="[0-9]{10}" required class="form-control" id="phone"
                        placeholder="9874****21">
                </div>
                <div class="col-md-6">
                    <label for="dob" class="form-label">Date Of Birth <sup style="color: red;">*</sup></label>
                    <input type="text" name="dob" required class="form-control" id="dob">
                </div>
                <div class="col-md-12">
                    <label for="inputAddress" class="form-label">Address <sup style="color: red;">*</sup>
                    </label>
                    <input type="text" name="address" required class="form-control" id="inputAddress">
                </div>
                <div class="col-md-6">
                    <label for="inputState" class="form-label">State <sup style="color: red;">*</sup>
                    </label>
                    <input type="text" name="state" required class="form-control" id="inputState">
                </div>
                <div class="col-md-6">
                    <label for="inputCity" class="form-label">City <sup style="color: red;">*</sup>
                    </label>
                    <input type="text" name="city" required class="form-control" id="inputCity">
                </div>
                <div class="col-md-12">
                    <label for="inputQuery" class="form-label">Any query <sup style="color: red;">*</sup>
                    </label>
                    <input type="text" name="query" required class="form-control" id="inputQuery">
                </div>
                <div class="text-center ">
                    <button class="btn1" type="submit">Register Here</button>
                </div>

            </form>
        </div>
    </section>
    <!-- ======= Footer ======= -->
    <!-- ======= Footer ======= -->
    <footer id="footer" class="mt-auto">
        <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; Copyright <strong><span>DaBotics</span></strong>. All Rights Reserved
            </div>

        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <!-- <script src="assets/vendor/php-email-form/validate.js"></script> -->
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>



    <script src="assets/js/main.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>
    <!-- End Footer -->

</body>

</html>