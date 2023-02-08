<?php

$servername = "localhost";
$username = "u523284279_DaPranjal";
$paswowrd = "Invertis@dabotics@9044#uiop";
$database = "u523284279_dabotics";
$conn = mysqli_connect($servername, $username, $paswowrd, $database);
if (!$conn) {
    //     echo "success";
    // }
    // else{
    die("Error" . mysqli_connect_error());
}
