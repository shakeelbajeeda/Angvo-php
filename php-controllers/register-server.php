<?php
session_start();
include_once 'database.php';
if (isset($_POST['register'])) {

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $fileName = $_FILES['image']['name'];
    $sql_e = "SELECT * FROM users WHERE email='$email'";
    $res_e = $db->query($sql_e);
    if ($res_e->rowCount() > 0) {
        $_SESSION['email_exist'] = "This email is already exist";
        header('location: ../pages/register.php');
    } else {
        $insert = "INSERT INTO users (first_name, last_name, phone, email, password, image) 
        VALUES('$first_name', '$last_name', '$phone', '$email', '$password', '$fileName');";
        $result = $db->query($insert);
        if ($result) {
            $target_dir = "../uploads/";
            $target_file = $target_dir . basename($_FILES["image"]["name"]);
            if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
                // die('file uploaded');
            } else {
                die('file not uploaded');
            }
            $_SESSION['register'] = "User Registered Successfully";
            header('location: ../pages/register.php');
        }
    }

    // die("User Registered Successfully");

}
