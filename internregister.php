<?php
$err = "";
$succ=false;
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Check if a file was uploaded
  $name = $_POST["name"];
  $email = $_POST["email"];
  $number = $_POST["number"];
  $clguni = $_POST["coluni"];
  $messege = $_POST["Cyear"];
  $course = $_POST["course"];
  if (isset($_FILES["image"]) && $_FILES["image"]["error"] == 0) {
    $allowed_types = ["image/jpeg", "image/png"]; // Allowed file types
    $max_size = 5 * 1024 * 1024; // Maximum file size (5MB)

    // Check if the file type and size are valid
    if (in_array($_FILES["image"]["type"], $allowed_types) && $_FILES["image"]["size"] <= $max_size) {
      $file_name = $_FILES["image"]["name"];
      $file_tmp = $_FILES["image"]["tmp_name"];
      // Move the uploaded file to a permanent location
      move_uploaded_file($file_tmp, "uploads/" . $file_name);
      $succ=true;
    } else {
        $err ="Invalid file type or size.";
    }
  } else {
    $err = "No file was uploaded.";
  }
  
    if (filter_var($email, FILTER_VALIDATE_EMAIL) && $name != "" && $email != "") {
        // the message
        $msg = "Name :- $name \nE-Mail :- $email \nMob. :- $number \nCollege / Uni :- $clguni \nCourse:- $course \nYear :- $messege";
        // use wordwrap() if lines are longer than 70 characters;
        $course = "Web Development";
        // send email
        $headers = "From: hrVintern@dabotics.com";
        mail($to, $subject, $message, $headers);
        mail("dabotics@gmail.com", "Valid Intern", $msg, $headers);
    } else {
        $err="There are any error in information provided by you ";
    }
    

}
?>




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
<?php
    if ($err!="") {
        // set_time_limit(3);
        echo ' <div  style="margin-top: 20px;" class="fixed-top mt-2 alert alert-danger  alert-dismissible fade show" role="alert">
            <strong>Error!</strong>' . $err . '
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div> ';
    }
    if($succ){
        echo ' <div  style="margin-top: 20px;" class="fixed-top mt-2 alert alert-success  alert-dismissible fade show" role="alert">
            <strong>Congrets!</strong>You complete your registration yow will get id pass on your mail shortly.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div> ';
    }
    ?>
    <!-- End Header -->
    <!-- ======= Form Section ======= -->
    <section id="services" class="forms" style="margin-top: 60px;">

        <div class="container text-center">
            <h1 class=" text-center ">Internship<br>Registration Form</h1>

        </div>
        <div class="container my-5">
            <form class="row g-3" action="#"  method="post" enctype="multipart/form-data">
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
                        <label for="inputAddress" class="form-label">Payment Screenshot<sup style="color: red;">*</sup><sub>Minimum Size (5MB)</sub></label>
                        <input type="file" name="image" accept="image/jpeg, image/png" required class="form-control" id="inputAddress" placeholder="9874****21">
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