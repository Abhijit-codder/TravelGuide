<?php
require 'config.php';
if(isset($_POST["submit"]))
{
    $name = $_POST["name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["pass"];
    $confirmpassword = $_POST["cpass"];
    $duplicate = mysqli_query($conn,"SELECT * FROM user_register WHERE username = '$username' OR email = '$email'");
    if(mysqli_num_rows($duplicate)>0)
    {
        echo
        "<script> alert('Username or Email Already Exists');</script>";
    }
    else
    {
        if($password == $confirmpassword)
        {
            $query = "INSERT INTO user_register VALUES('','$name','$username','$email','$password') ";
            mysqli_query($conn,$query);
            echo "<script> alert('Register Successful');</script>";

        }
        else
        {
            echo "<script> alert('Password doesnot match');</script>";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN UP</title>
</head>
<body>
    <h1>Registration<h1>
    <form class="" action="" method="post" autocomplete="off">
        <label for="name">Name :</label>
        <input type="text" name="name" id="name" required>
        <label for="username">USER :</label>
        <input type="text" name="username" id="username" required>
        <label for="email">Email :</label>
        <input type="email" name="email" id="email" required>
        <label for="pass">Password :</label>
        <input type="password" name="pass" id="pass" required>
        <label for="cpass">Confirm Password :</label>
        <input type="password" name="cpass" id="cpass" required>
        <button type="submit" name="submit">Sign Up</button>
    </form>
    <br>
    <a href="login.php">LOGIN</a>
        
     
</body>
</html>