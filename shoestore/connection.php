<?php

$hostname = 'localhost';
$username ='root';
$password = '';
$db='shoestore';

$con = new mysqli($hostname,$username,$password,$db);

if($con){
    printf("Connected to database");
}
?>