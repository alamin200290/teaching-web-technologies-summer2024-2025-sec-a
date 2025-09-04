<?php
    session_start();
    require_once('../model/userModel.php');
    if(!isset($_COOKIE['status'])){
        header('location: login.php?error=badrequest');
    }
    $id = $_GET['id'];
    $user = getUserByID($id);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../asset/js/script.js"> </script>
    <title>Edit User</title>
</head>
<body>
        <h1> Edit User </h1>
        <a href="allUser.php">Back</a> |
        <a href="../controller/logout.php">logout </a>

        <br>

        <form action="../controller/updateCheck.php" method="post" enctype="multipart/form-data">
            <fieldset>
                <legend>Edit User</legend>
                username: <input type="text" name="username" value="<?=$user['username']?>" /> <br>
                password: <input type="password" name="password" value="<?=$user['password']?>" /> <br>
                email: <input type="email" name="email" value="<?=$user['email']?>" /> <br>
                     <input type="submit" name="submit" value="update" />
            </fieldset>
        </form>
</body>
</html>