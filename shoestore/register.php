<?php
session_start();
if(isset($_SESSION['username'])){
    header('location:account.php');
}
include('connection.php');
if (isset($_POST['submit'])){
    $username =  $_POST['username'];
    $email =  $_POST['email'];
    $password =  $_POST['password'];

        var_dump($username ,$password ,$email);
        $insertquery = "INSERT INTO users (username,email,password) VALUES ('{$username}','{$email}','{$password}')";
        var_dump($insertquery);

        $result = mysqli_query($con , $insertquery);
        var_dump($result);
        if($result){
            header("location:./account.php");
        }

       }


?>