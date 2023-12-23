<?php

include('config.php');
include('firebaseRDB.php');

$email = $_POST['email'];
$password = $_POST['password'];

if($email == ""){
    echo"Email is required";
}
else if($password == ""){
    echo"Password is required";
}
else{
    $rdb = new firebaseRDB($databaseURL);
    $retrieve = $rdb->retrieve("/user","email","EQUAL", $email);
    $data = json_decode($retrieve, 1);

    if(count($data)== 0){
        echo '<script>alert("Email not Registered"); window.location.href = "login.php";</script>';
    }
    else{
        $id = array_keys($data)[0];
        if($data[$id]['password'] == $password){
            $_SESSION['user'] = $data[$id];
          header("location: home.php");
        }
        else{
            echo '<script>alert("Login Failed"); window.location.href = "login.php";</script>';
        }
    }
    
}
