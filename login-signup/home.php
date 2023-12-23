<?php

include('config.php');
include('firebaseRDB.php');

if(!isset($_SESSION['user'])){
    header("location: login.php");
}
else{
    echo "HEllo {$_SESSION['user']['name']}, Welcome to our Website<br>";

    echo"<a href=logout.php>Logout</a>"; 
}
   

