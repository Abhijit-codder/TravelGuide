<?php
require 'config.php';
if(!empty($_SESSION["id"]))
{
    $id =$_SESSION["id"];
    $result = mysqli_query($conn, "SELECT * FROM user_register WHERE id = $id");
    $row = mysqli_fetch_assoc($result);

}
else
{
    header("Location: login.php");

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer">
</head>

<body>
    <section class="header">
        <a href="index.php" class="logo">travelGuide</a>
        <nav class="navbar">
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="package.php">Package</a>
            <a href="book.php">Book</a>
            <a href="login.php">Login</a>
            <a href="logout.php">Logout</a>

        </nav>
    </section>
    <h1>Welcome <?php echo $row["username"]; ?> </h1>
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>Quick Links</h3>
                <a href="index.php"><i class="fas fa-star"></i>Home</a>
                <a href="about.php"><i class="fas fa-pen"></i>About</a>
                <a href="package.php"><i class="fas fa-moon"></i>Package</a>
                <a href="book.php"><i class="fas fa-book"></i>Book</a>
            </div>
            <div class="box">
                <h3>Follow Us</h3>
                <a href="#"><i class="fab fa-instagram"></i>Instagram</a>
                <a href="#"><i class="fab fa-linkedin"></i>Linkedin</a>
                <a href="#"><i class="fab fa-twitter"></i>Twitter</a>
                <a href="#"><i class="fab fa-facebook"></i>Facebook</a>
            </div>
            <div class="box">
                <h3>Contact Us</h3>
                <a href="#"><i class="fas fa-phone"></i>123456789</a>
                <a href="#"><i class="fas fa-envelope"></i>travelguide@mail.com</a>
                <a href="#"><i class="fas fa-map"></i>Dehradun,India</a>
                <a href="#"><i class="fas fa-phone"></i>0987654321</a>
            </div>
        </div>      
    </section>
    <div style="color:white;background-color:black;text-align:center;font-size: 1.5rem;padding:10px;" class="copyright">
        <span>-- Copyright - 2024 - TravelGuide --</span></div>    
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="js/home.js"></script>
</body>
</html>