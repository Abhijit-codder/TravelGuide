<?php
  

   $connection = mysqli_connect('localhost','root','','book_db');

   if(isset($_POST['send'])){
    $name = $_POST['name'];
    $age = $_POST['age'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address1 = $_POST['address1'];
    $address2 = $_POST['address2'];
    $location = $_POST['location'];
    $guests = $_POST['guests'];
    $arrivals = $_POST['arrivals'];
    $leaving = $_POST['leaving'];

    $request = "insert into book_form(name , age , phone , email , address1	, address2	, location	, guests	, arrivals	, leaving	)values
    ('$name','$age','$phone','$email','$address1','$address2','$location','$guests','$arrivals','$leaving')";

    if (mysqli_query($connection, $request))
    {
        header('Location: book.php?status=success');
        exit();
    }
   else
   {
    echo 'something wrong';

   }
}
?>
