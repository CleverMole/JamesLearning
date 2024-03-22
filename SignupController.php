<?php
    $name         = " ";
    $userMail     = " ";

    
    if (isset($_POST["submit"])) {
        $name = isset($_POST['user_name']) ? $_POST['user_name'] : " ";
        $userMail = isset($_POST['user_email']) ? $_POST['user_email'] : " ";
        $password = isset($_POST['user_pass']) ? $_POST['user_pass'] : " ";
        $confPass = isset($_POST['confirm_pass']) ? $_POST['confirm_pass'] : " ";
    
        
        if (empty($name) || empty($userMail)) {
            echo '<script>alert("Please provide name and email.")</script>';
        } elseif (empty($password) || empty($confPass)) {
            echo '<script>alert("Please enter password and confirm password.")</script>';
        } elseif ($password != $confPass) {
            echo '<script>alert("Your passwords do not match.")</script>';
        } else {
            echo ("Your Name is {$name} <br>");
            echo ("Your Email is {$userMail}<br>");
            echo ("Your Password is {$password}<br>");
            echo ("Your confirmed password is {$confPass}<br>");
        }

        
    }
    
?>