<?php
$showAlert = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'Connection.php';
    $name = $_POST["name"];
    $email = $_POST["email"];
    $number = $_POST["number"];
    $clguni = $_POST["coluni"];
    $messege = $_POST["Cyear"];
    $course = $_POST["course"];
    if (filter_var($email, FILTER_VALIDATE_EMAIL) && $name != "" && $email != "") {
        // the message
        $msg = "Name :- $name \nE-Mail :- $email \nMob. :- $number \nCollege / Uni :- $clguni \nCourse:- $course \nYear :- $messege";
        // use wordwrap() if lines are longer than 70 characters;
        $course = "Web Development";
        // send email
        $headers = "From: hr@dabotics.com";
        mail($to, $subject, $message, $headers);
        mail("dabotics@gmail.com", "New Demo", $msg, $headers);
    } else {
        echo "There are any error in information provided by you ";
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
        <div class="container text-center" id="div2" mt-10>

            <h1><?php echo "Welcome $name" ?></h1>
            <h2>You have succesfully registerd for the Training And Internship Program.</h2>
            <h3 class="mt-5 mb-5">Our Councellors will reach out to you soon <br>

                For any query write to us at contact@dabotics.com <br>
                To know more anout us kindly visit <a href="https://dabotics.com">Please Click Here</a></h3>
        </div>
        <div class="container mt-5 text-center"><a class="btn1" href="https://chat.whatsapp.com/KZRPLIESNtxFZvklrwNUOH">Join
                Group</a>
        </div>
    </section>
    <?php
    include 'Footer.php'
    ?>
    <!-- End Footer -->

</body>

</html>