<?php 
session_start();
unset($_SESSION['uid']);
unset($_SESSION['ten']);
header('location: login.php');
?>