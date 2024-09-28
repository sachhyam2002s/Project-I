<?php
    session_start();
    session_destroy();
    header('location:account.php');

    var_dump($_POST);
    include 'connection.php';

?>