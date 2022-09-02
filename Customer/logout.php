<?php 
session_start();

session_destroy();

header('Location: ../c login.php');

?>