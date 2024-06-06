<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOOKING</title>
    <link rel="stylesheet" href="book.css">
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
        </nav>
    </section>


    
   
    <div style="color: #000000;;font-size: 15px;font-weight: bold;text-align:right;margin:5px ;" class="date">
            <?php echo date("Y/m/d");?>
            <br>
            <?php echo date("l");?>
            <br>
            <?php 
            date_default_timezone_set("Asia/Kolkata");
            echo date("h:i:sa");?>
    </div>
    <section class="booking">
        <h1 class="heading-title">Book Now!</h1>
       

        
        
        

        <form action="book_form.php" method="post" class="book-form">
            <div class="flex">
                <div class="inputBox">
                    <span>Name : </span>
                    <input type="text" placeholder="Your Name" name="name" required>

                </div>
                <div class="inputBox">
                    <span>Birth Date: </span>
                    <input type="date"  name="age" required>

                </div>
                <div class="inputBox">
                    <span>Phone : </span>
                    <input type="number" placeholder="Your Mobile No." name="phone" required>

                </div>
                <div class="inputBox">
                    <span>Email : </span>
                    <input type="email" placeholder="Your Email id" name="email" required>

                </div>
                <div class="inputBox">
                    <span>Address-1: </span>
                    <input type="text" placeholder="Your Adress" name="address1" required>

                </div>
                <div class="inputBox">
                    <span>Address-2 : </span>
                    <input type="text" placeholder="Your Adress" name="address2">

                </div>
                <div class="inputBox">
                    <span>Destination : </span>
                    <input type="text" placeholder="Where you want to go?" name="location" required>

                </div>

                <div class="inputBox">
                    <span>Guest Count : </span>
                    <input type="text" placeholder="guest" name="guests" required>

                </div>
                <div class="inputBox">
                    <span>Arivals : </span>
                    <input type="date" name="arrivals" required>

                </div>
                <div class="inputBox">
                    <span>Leaving : </span>
                    <input type="date" name="leaving" required>

                </div>

            </div>
            <input type="submit" value="submit" class="btn" name="send">

        </form>
    </section>

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
    <div style="color:white;background-color:black;text-align:center;font-size: 1.5rem;padding:10px;" class="copyright"><span> © Copyright - 2024 - TravelGuide </span></div>
    
    
    
    
    <script>
        // Check for the status parameter in the URL
        function checkStatus() {
            const urlParams = new URLSearchParams(window.location.search);
            if (urlParams.get('status') === 'success') {
                alert('Thank You for booking! @travelGuide');
                // Remove the status parameter from the URL after displaying the alert
                window.history.replaceState({}, document.title, window.location.pathname);
            }
        }

        // Execute the function on page load
        window.onload = checkStatus;
    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    
    <script src="js/home.js"></script>
</body>
</html>