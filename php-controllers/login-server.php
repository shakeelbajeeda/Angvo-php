<?php
session_start();

require_once 'database.php';

if (isset($_POST['login'])) {
    if ($_POST['email'] != "" || $_POST['password'] != "") {
        $email = "waheed@nodesol.com";
        $parameters['email'] = $_POST['email'];
        $parameters['password'] = $_POST['password'];
        $sql = 'SELECT * FROM users WHERE email = :email and password = :password ;';
        $query = $db->prepare($sql);
        $query->execute($parameters);
        $result = $query->fetchAll();
        $result_count = count($result);
        // var_dump($result[0]['email']);
        if ($result_count > 0) {
            $_SESSION['user'] = $result[0];
            $_SESSION['login'] = "User Login Successfully";

            header('location: ../dashboard/index.php');
            die("Loggedin Successfully");
        } else {
            $_SESSION['invalid'] = "Invalid Credentials";
            header('location: ../pages/login.php');
        }
        var_dump($result_count);
        die($result_count);
    }
}
