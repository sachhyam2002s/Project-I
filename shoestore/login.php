<?php
session_start();
if(isset($_SESSION['username'])){
    header('location:account.php');
}
var_dump($_POST);
include 'connection.php';

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $pass = $_POST['password'];
    //checking of email and password in database
    $check = "SELECT * FROM users WHERE email = '$email' and password = '$pass'";
    var_dump($check);
    $query = mysqli_query($con,$check);
    var_dump($query);
    $row = mysqli_num_rows($query);
    $fetch = mysqli_fetch_array($query);
    if($row == 1){
        $username = $fetch['username'];
        $user_type = $fetch['user_type'];
        $_SESSION['username'] = $username;
        $_SESSION['$user_type'] = $user_type;
        header('location:web.php');
    }
    else{
        $error = 'Invalid email and password';
    }
}

?>