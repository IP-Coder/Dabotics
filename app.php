<?php
    session_start();
    // $username;

    function sessioncheck(){
        if($_SESSION["username"] == 'Suraj'){
            header("Location: mycourse.php");
        }

    }

    function loout(){
        session_unset();
        session_destroy();
        header("Location: login.php");
    }

    $lout = $_GET['logout'];    //
    if($lout=="OUT"){
        loout();
    }

    // $one;
    // if($_SERVER["REQUEST_METHOD"]== "GET"){
        // if($_GET["hh"]){          // error
            $one = $_GET["hh"];                 // giving as an ERROR
        // }                        
    // }

    if ($one == "hjj"){
        sessioncheck();
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $GLOBALS['username'] = $_POST["usernaam"];
        $password = $_POST["password"];
        if($username == "Suraj" && $password == "Zebronic"){
            header("Location: index.php");
            $_SESSION["username"] = $GLOBALS['username'];
        }
    }

?>