<?php 
session_start();
unset($_SESSION['id_user']);
unset($_SESSION['name_user']);
header('location:trang-chu');
return;
?>