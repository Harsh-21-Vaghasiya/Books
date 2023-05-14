<?php
session_start();
session_destroy();
header("location:../Html/login.php");
exit;
?>