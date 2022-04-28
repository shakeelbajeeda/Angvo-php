<?php
session_start();
unset($_SESSION['user']);
header('location: ../pages/login.php');
die("Logout Successfully");
