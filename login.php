<?php 

require 'function.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=".css">
    <title>Xaynee</title>
</head>
<body>

<form action="logined.php" method="post">
<ul>
        <li>
            <label for="username">Username :</label>
            <input type="text" name="username" id="username" placeholder="mamat">
        </li>
        <li>
            <label for="password">Password :</label>
            <input type="password" name="password" id="password" placeholder="1122334455667788";> 
        </li>

</ul>

<button type="submit" name="login" class="">Login</button>

<p>Don't have any account?<a href="register.php"> Register here </a> </p>

 </form>

</body>
</html>