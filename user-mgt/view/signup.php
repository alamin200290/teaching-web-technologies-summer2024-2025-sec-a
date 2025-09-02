
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='../asset/css/style.css' />
    <script src="../asset/js/script.js"> </script>
    <title>Signup</title>
</head>
<body>
        <form action="../controller/signupCheck.php" method="post" enctype="multipart/form-data">
            <fieldset>
                <legend>Signup</legend>
                username: <input type="text" name="username" value="" /> <br>
                password: <input type="password" name="password" value="" /> <br>
                email: <input type="email" name="email" value="" /> <br>
                     <input type="submit" name="submit" value="Submit" />
                     <a href='login.php'>login</a>
            </fieldset>
        </form>
</body>
</html>