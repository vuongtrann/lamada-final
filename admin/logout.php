<?php
if(!isset($_SESSION)) session_start();
unset($_SESSION['quantri']);
// session_destroy();
header('location:login.php');