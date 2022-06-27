<?php
    session_start();
    $username;

    function sessioncheck(){
        $_SESSION["username"] == $username;
    }

    if($_SERVER["REQUEST_METHOD"]== "GET"){
        $one = $_GET["hh"];
    }

    if ($one == "hjj"){
        sessioncheck();
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_POST["usernaam"];
        $password = $_POST["password"];
        if($username == "Suraj" && $password == "Zebronic"){
            header("Location: index.php ");
            $_SESSION["username"] = $username;
        }
    }

?>