<?php
$showAlert = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'Connection.php';
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $messege = $_POST["message"];
    if (filter_var($email, FILTER_VALIDATE_EMAIL) && $name != "" && $email != "" && $subject != "" && $messege != "") {
        $sql = "INSERT INTO `contacts` (`Name`, `Email`, `Subject`, `Message`) VALUES ('$name', '$email', '$subject', '$messege')";
        $result = mysqli_query($conn, $sql);
        $showAlert = true;
    } else {
        $showError = "There are any error in information provided by you ";
    }
    // INSERT INTO `contacts` (`S.No`, `Name`, `Email`, `Subject`, `Message`, `Time`) VALUES ('1', 'Pranjal Shrivastava', 'pranjalshrivastava7388@gmail.com', 'Checking ', 'This is only for checking the database', current_timestamp())
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title>DaBotics</title>
    <?php
    include 'Header.php'
    ?>

</head>

<body>
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="index.php">DaBotics</a></h1>
        </div>
    </header><!-- End Header -->


    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up" data-aos-delay="200" style="width: 80%;">
                    <h1>Thanks For Contacting Us.</h1>
                    <h2>Your request is considerd succesfully we will contact you shortly.</h2>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="index.php" class="btn-get-started scrollto">Go Back To The Site</a>
                    </div>
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>