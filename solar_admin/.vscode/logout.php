<?php
session_start();
unset($_SESSION['solar']);
session_destroy();
echo "<script>window.location='login.php';</script>";
?>