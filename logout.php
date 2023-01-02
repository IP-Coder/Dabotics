<?php
session_destroy();
session_start();
session_unset();
session_destroy();
header("location: login.php");
exit;