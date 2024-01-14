<?php
$showAlert = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'Connection.php';
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $school = $_POST["school"];
    $course = $_POST["course"];
    $grade = $_POST["grade"];
    $demo_mode = $_POST["demo_mode"];
    $dob = $_POST["dob"];
    $address = $_POST["address"];
    $state = $_POST["state"];
    $city = $_POST["city"];

    if (filter_var($email, FILTER_VALIDATE_EMAIL) && $name != "" && $phone != "") {
        // the message
        $msg = "Name: $name\nEmail: $email\nPhone: $phone\nSchool: $school\nCourse: $course\nGrade: $grade\nDemo Mode: $demo_mode\nDOB: $dob\nAddress: $address\nState: $state\nCity: $city";

        // send email
        $to = "dabotics@gmail.com";
        $subject = "New Demo Session Registration";
        $headers = "From: $email";
        mail($to, $subject, $msg, $headers);

        // redirect to success page
    } else {
        echo "There are errors in the information provided by you.";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Success</title>
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

    #div2 {
        padding-top: 11%;
        color: rgb(55, 81, 126);
    }
</style>

<body class="d-flex flex-column min-vh-100">
    <!-- ======= Header ======= -->
    <?php
    include 'Navebar.php'
    ?>
    <!-- End Header -->
    <section id="services" class="forms" style="margin-top: px;">
        <div class="container" id="div2" mt-10>

            <h1><?php echo "Welcome $name" ?></h1>
            <h2>You have succesfully registerd for the Demo Session.</h2>
            <!-- <h3 class="mt-3 mb-5">Join our WhatsApp group for further updates.</h3> -->
        </div>
        <!-- <div class="container mt-5 text-center"><a class="btn1" href="https://chat.whatsapp.com/KZRPLIESNtxFZvklrwNUOH">Join -->
        <!-- Group</a> -->
        <!-- </div> -->
    </section>
    <?php
    include 'Footer.php'
    ?>
    <!-- End Footer -->

</body>

</html>