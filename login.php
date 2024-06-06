<?php
require 'config.php';
if(isset($_POST["submit"]))
{
    $usernameemail = $_POST["usernameemail"];
    $password = $_POST["password"];
    $result = mysqli_query($conn,"SELECT * FROM user_register WHERE username = '$usernameemail' OR email = '$usernameemail'");
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result)>0){
        if($password == $row["password"])
        {
            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["id"];
            header("Location: index.php");
        }
        else
        {
            echo "<script> alert('Wrong Password');</script>";
        }
    }
    else
        {
            echo "<script> alert('Please Register');</script>";
        }
    }





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOG IN</title>
</head>
<body>
    <h1>login<h1>
        <form class=" " action="" method="post" autocomplete="off">
            <br>
            <label for="usernameemail">Username or Email : </label>
            <input type="text" name="usernameemail" id="usernameemail" required>
            <br>
            <label for="password">Password : </label>
            <input type="password" name="password" id="password" required>
            <br>
            <button type="submit" name="submit">Log In</button>
        </form>
        <br>
        <a href="register.php">Register Now</a>
    
</body>
</html>