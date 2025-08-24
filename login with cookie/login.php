<?php
    session_start();
    //print_r($_REQUEST);
    if(isset($_REQUEST['error'])){
        if($_REQUEST['error'] == "invalid"){
            echo "invalid username/password!";
        }elseif($_REQUEST['error'] == "null"){
            echo "null username or password!";
        }
    }
    //print_r($_SESSION);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
        <form action="loginCheck.php" method="post" enctype="multipart/form-data">
            <fieldset>
                <legend>Signin</legend>
                username: <input type="text" name="username" value="" /> <br>
                password: <input type="password" name="password" value="" /> <br>
                     <input type="submit" name="submit" value="Submit" />
            </fieldset>
        </form>
</body>
</html>