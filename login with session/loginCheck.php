<?php
    session_start();
    //print_r($_POST)
    //print_r($_GET);
    $username = trim($_REQUEST['username']);
    $password = trim($_REQUEST['password']);

    if($username == "" || $password == ""){
        header('location: login.php?error=null');
        //echo "null username or password!";
    }else{
        if($username == $password){
            $_SESSION['status'] = true;
            $_SESSION['username'] = $username;
            header('location: home.php');
            // echo "valid user!";
        }else{
            header('location: login.php?error=invalid');
        }
    }
?>