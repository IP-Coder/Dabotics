<?php
$showAlert = false;
$showError = false;
$err="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'Connection.php';
    if (isset($_FILES["image"]) && $_FILES["image"]["error"] == 0) {
        $allowed_types = ["image/jpeg", "image/png"]; // Allowed file types
        $max_size = 5 * 1024 * 1024; // Maximum file size (5MB)
        // Check if the file type and size are valid
        if (in_array($_FILES["image"]["type"], $allowed_types) && $_FILES["image"]["size"] <= $max_size) {
            $file_name = $_FILES["image"]["name"];
            $file_tmp = $_FILES["image"]["tmp_name"];
            // Move the uploaded file to a permanent location
            move_uploaded_file($file_tmp, "uploads/" . $file_name);
        } else {
            $err= "Invalid file type or size.";
        }
    } else {
        $err="No file was uploaded.";
    }
    $name = $_POST["name"] ?? "";
    $email = $_POST["email"] ?? "";
    $number = $_POST["number"] ?? "";
    $clguni = $_POST["coluni"] ?? "";
    $messege = $_POST["Cyear"] ?? "";
    $course = $_POST["course"] ?? "";
    if (filter_var($email, FILTER_VALIDATE_EMAIL) && $name !== "" && $email !== "") {
        // the message
        $msg = "Name: $name \nE-Mail: $email \nMob.: $number \nCollege / Uni: $clguni \nCourse: $course \nYear: $messege";
        // use wordwrap() if lines are longer than 70 characters;
        $course = "Web Development";
        $to = "hrintern@dabotics.com";
        $subject = "New Intern";
        // send email
        $headers = "From: $email";
        mail($to, $subject, $msg, $headers);
        mail("dabotics@gmail.com", $subject, $msg, $headers);
        $showAlert = true;
    } else {
        $err="There are errors in the information provided by you.";
        $showError = true;
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
    include 'Navebar.php';
    if($err!=""){
        echo '<div class=" mt-5 alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '.$err.'
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
    else
    {
        echo'<section id="services" class="forms" style="margin-top: px;">
        <div class="container text-center" id="div2" mt-10>

            <h1>"Welcome'. $name.'"</h1>
            <h2>You have succesfully registerd for the Training And Internship Program.</h2>
            

                For any query write to us at <a href="mailto:contact@dabotics.com">contact@dabotics.com</a> <br>
                To know more about us <br> <a href="https://dabotics.com">Please Click Here</a></h3>
        </div>
        <div class="container mt-5 text-center"><a class="btn1" href="https://chat.whatsapp.com/KZRPLIESNtxFZvklrwNUOH">Join
                Group</a>
        </div>
    </section>';
    }
    ?>
    <!-- End Header -->

    
    <?php
    include 'Footer.php'
    ?>
    <!-- End Footer -->

</body>

</html>
