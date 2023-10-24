<?php
$username = "user";
$password = "password";

if($_POST['username'] == $username && $_POST['password'] == $password){
    // login successful
    header("Location: welcome.php");
    exit;
} else {
    // login failed
    header("Location: login.php");
    exit;
}
?>
