<?php
    session_start();
    // if(isset($_REQUEST['status'])){
    //     if($_REQUEST['status'] != 'valid'){
    //         header('location: login.php?error=badrequest');
    //     }
    // }else{
    //     header('location: login.php?error=badrequest');
    // }

    if(!isset($_COOKIE['status'])){
        header('location: login.php?error=badrequest');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
        <h1>welcome Home! <?=$_SESSION['username']?></h1>
        <a href="../controller/logout.php">logout </a>
</body>
</html>