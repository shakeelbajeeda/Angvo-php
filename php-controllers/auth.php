<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('location: ../pages/login.php');
}
$user = $_SESSION['user'];
const base_url = 'http://localhost:8003';
const image_url = base_url . '/uploads/';
