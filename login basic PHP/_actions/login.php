<?php
    session_start();
    $email = $_POST['email'];
    $password = $_POST['password'];
    if($email == "ak@gmail.com" and $password == "12"){
        $_SESSION['user'] = ['username' => 'akmh'];
        header('location: ../profile.php');
    }else{
        header('location: ../index.php?incorrect=1');
    }
