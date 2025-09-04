<?php
    session_start();
    require_once('../model/userModel.php');
    if(!isset($_COOKIE['status'])){
        header('location: login.php?error=badrequest');
    }
    $users = getAllUser();
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
</head>
<body>
        <h1> User List </h1>
        <a href="home.php">Back</a> |
        <a href="../controller/logout.php">logout </a>

        <br>

        <table border=1>
            <tr>
                <td>ID</td>
                <td>USERNAME</td>
                <td>PASSWORD</td>
                <td>EMAIL</td>
                <td>ACTION</td>
            </tr>
        <?php foreach($users as $u) { ?>
            <tr>
                <td><?php echo $u['id']; ?></td>
                <td><?=$u['username'] ?></td>
                <td><?=$u['password'] ?></td>
                <td><?=$u['email'] ?></td>
                <td>
                    <a href="editUser.php?id=<?=$u['id']?>"> EDIT </a> |
                    <a href="detailsUser.php"> DETAILS </a> |
                    <a href="deleteUser.php"> DELETE </a> 
                </td>
            </tr>
        <?php } ?>
        </table>
</body>
</html>