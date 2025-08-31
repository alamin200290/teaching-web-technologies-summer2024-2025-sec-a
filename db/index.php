<?php

    //mysql_connect();
    $con = mysqli_connect('127.0.0.1', 'root', '', 'webtech');
    //$sql = "insert into users values (null, 'xyz', '123', 'xyz@aiub.edu')";
    // if(mysqli_query($con, $sql)){
    //     echo "inserted";
    // }else{
    //     echo "Error!";
    // }
    //mysqli_close($con);
    $sql = "select * from users";
    $result = mysqli_query($con, $sql);
    // $row = mysqli_fetch_assoc($result);
    // print_r($row);
    // $row1 = mysqli_fetch_assoc($result);
    // print_r($row1);
    
    //$count = mysqli_num_rows($result);
    // for ($i=0;$i<$count ; $i++){
    //     $row = mysqli_fetch_assoc($result);
    //     print_r($row);
    //     echo "<br>";
    // }

    while($row = mysqli_fetch_assoc($result)){
        print_r($row);
        echo "<br>";
    }
?>