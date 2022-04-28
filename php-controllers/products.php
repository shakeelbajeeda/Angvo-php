<?php
require_once('auth.php');
require_once('database.php');
$sql = "select * from products";
$title = $_POST['title'];
$icon = $_POST['icon'];
$price = $_POST['price'];
$user_id = (int)$user['id'];
$insert = "INSERT INTO products (title, price, icon, user_id) 
VALUES('$title', '$price', '$icon', '$user_id');";
$db->query($insert);
$_SESSION['success'] = 'Product Added Successfully';
header('location: ../dashboard/view-all-products.php');
