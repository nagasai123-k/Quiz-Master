<?php
include("connection.php");
if(isset($_POST['submit'])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM registration WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);
    if($count == 1){
        header("Location: quiz.html");
        exit();
    } else {
        echo '<script> 
            window.location.href = "";
            alert("Login failed. Invalid username or password.");
        </script>';
    }
}
?>
