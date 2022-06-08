<?php
$showAlert = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'Connection.php';
    $name = $_POST["name"];
    $email = $_POST["email"];
    $number = $_POST["number"];
    $clguni = $_POST["coluni"];
    $messege = $_POST["mssg"];
    if (filter_var($email, FILTER_VALIDATE_EMAIL) && $name != "" && $email != "") {
        
        // the message
        $msg = "Name :- $name \nE-Mail :- $email \nMob. :- $number \nCollege / Uni :- $clguni \nCourse:- Web Development";

        // use wordwrap() if lines are longer than 70 characters;
        $course="Web Development";
        // send email
        mail("dabotics@gmail.com","New Registration",$msg);
        $sql = "INSERT INTO `Demo` (`Name`, `Email`, `Number`, `CllgUni`, `Message`,`Course`) VALUES ('$name','$email','$number','$clguni','$messege','$course')";

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
            
            <h1><?php echo "Welcome $name"?></h1>
            <h2>You have succesfully registerd for the Full Stack Web Development Program Demo Session.</h2>
            <h3 class="mt-3 mb-5">Join our WhatsApp group for future updates.</h3>
        </div>
        <div class="container mt-5 text-center"><a class="btn1"
                href="https://chat.whatsapp.com/FEsQPOGar1y1DZBglz3EYe">Join
                Group</a>
        </div>

    </section>
    <?php
    include 'Footer.php'
    ?>
    <!-- End Footer -->

</body>

</html>