<?php
$showAlert = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'Connection.php';
    $name = $_POST["name"];
    $email = $_POST["email"];
    $number = $_POST["number"];
    $clguni = $_POST["coluni"];
    $Gyear = $_POST["Gyear"];
    $Cyear = $_POST["Cyear"];
    if (filter_var($email, FILTER_VALIDATE_EMAIL) && $name != "" && $email != "") {

        // the message
        $msg = "Name :- $name \nE-Mail :- $email \nMob. :- $number \nCollege / Uni. :- $clguni \n Graduation Year :- $Gyear \n Current Year :- $Cyear ";

        // use wordwrap() if lines are longer than 70 characters;
        $course = "Ai with python";
        // send email   
        mail("dabotics@gmail.com", "New Registration", $msg);
        $sql = "INSERT INTO `Registration` (`Name`, `Email`, `Number`, `CllgUni`, `Gyear`, `Cyear`) VALUES ('$name','$email','$number','$clguni','$Gyear','$Cyear')";
        $result = mysqli_query($conn, $sql);
        $showAlert = true;
    } else {
        echo "There are any error in information provided by you ";
    }
    // INSERT INTO `contacts` (`S.No`, `Name`, `Email`, `Subject`, `Message`, `Time`) VALUES ('1', 'Pranjal Shrivastava', 'pranjalshrivastava7388@gmail.com', 'Checking ', 'This is only for checking the database', current_timestamp())
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title>Services</title>
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
            <h2>You have succesfully registerd with DABOTICS INDIA Pvt. Ltd.</h2>
            <h3 class="mt-3 mb-5">Feel free to contact us via whatsapp</h3>
        </div>
        <div class="container mt-5 text-center"><a class="btn1"
                href="https://api.whatsapp.com/send/?phone=919368850126">Contact
                Us</a>
        </div>

    </section>
    <?php
    include 'Footer.php'
    ?>
    <!-- End Footer -->

</body>

</html>
