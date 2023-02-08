<?php
$showError = "false";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include "Connection.php";
    $logmail = $_POST["logmail"];
    $logpass = $_POST["logpass"];
    if ($logpass != "" && $logmail != "") {
        // $hash = password_hash($logpass, PASSWORD_DEFAULT);
        $sql  = "SELECT * FROM `login` WHERE `email` = '$logmail'";
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);
        echo "Kuch to hua hai";
        if (!$result) {
            echo  "re";
        }
        if ($num == 1) {
            echo "Kuch to hua hai1";
            $row = mysqli_fetch_assoc($result);
            if ($logpass == $row['Password']) {
                echo "Kuch to hua hai2";
                $updatesql = "UPDATE `login` SET `last_login` = current_timestamp() WHERE `login`.`email` = '$logmail'";
                mysqli_query($conn, $updatesql);
                $login = true;
                session_start();
                $_SESSION['loginsuccess'] = true;
                $_SESSION['Name'] = $row['Name'];
                $_SESSION['userid'] = $row['UserId'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['last_login'] = $row['last_login'];
                $_SESSION['password'] = $row['Password'];
                $_SESSION['number'] = $row['mobile_number'];

                header("location: DataIndex.php");
            } else {
                $showError = "Please Enter Correct Password";
                header("location: login.php?loginsuccess=false&error=$showError");
            }
        }
    } else {
        $showError = "Please Enter Password";
        echo $showError;
        header("location: login.php?loginsuccess=false&error=$showError");
    }
}
