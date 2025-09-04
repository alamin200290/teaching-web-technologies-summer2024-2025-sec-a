<?php

    //sleep(3);
    $data =  $_POST['user'];
    //$user = json_decode($data);
    //echo "Your username is: {$user->email}";

    $user = ['username'=> 'alamin', 'password'=>'123', 'email'=>'alamin@aiub.edu'];
    echo json_encode($user);

?>