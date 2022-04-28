<?php
session_start();
include_once 'database.php';

if (isset($_GET['id']) && $_GET['id'] != '') {
    $delete = "DELETE FROM products WHERE id='" . $_GET["id"] . "'";
    $db->exec($delete);
    $_SESSION["delete"] = "Product Removed Successfully!";
} else {
    die('invalid id');
};
header('location:../dashboard/view-all-products.php');
