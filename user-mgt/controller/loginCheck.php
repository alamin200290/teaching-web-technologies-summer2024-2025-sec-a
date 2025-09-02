<?php
    session_start();
    //include('../model/db.php');
    //include_once('../model/db.php');
    //require('../model/db.php');
    require_once('../model/userModel.php');

    $username = trim($_REQUEST['username']);
    $password = trim($_REQUEST['password']);

    if($username == "" || $password == ""){
        header('location: ../view/login.php?error=null');
        //echo "null username or password!";
    }else{
            $user = ['username'=> $username, 'password'=>$password];
            $status = login($user);
            if($status){
                //$_SESSION['status'] = true;
                $_SESSION['username'] = $username;
                setcookie('status', true, time()+3000, '/');
                header('location: ../view/home.php');
                // echo "valid user!";
            }else{
                header('location: ../view/login.php?error=invalid');
            }
    }
?>