<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Contact - Dentist Website</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- bootstrap cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="icon" href="images/favicon.png"/>
</head>
<body>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$conn = mysqli_connect('localhost', 'root', '', 'contact_db') or die('connection failed');

$message = '';

if (isset($_POST['submit'])) {
   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $date = $_POST['date'];

   $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');

   if ($insert) {
      $message = 'Appointment made successfully!';
   } else {
      $message = 'Appointment failed';
   }
}
?>

<!-- header section starts  -->
<header class="header fixed-top">

   <div class="container">

      <div class="row align-items-center justify-content-between">

         <a href="index.html" class="logo">dental<span>Clinic.</span></a>

         <nav class="nav">
        <a href="index.html#home">home</a>
        <a href="index.html#video">video</a>
        <a href="index.html#about">about</a>
        <a href="index.html#services">services</a>
        <a href="index.html#reviews">reviews</a>
        </nav>

         <a href="contact.php" class="link-btn">make appointment</a>
         <a href="orders.php" class="link-btn">check orders</a>

         <div id="menu-btn" class="fas fa-bars"></div>

      </div>

   </div>

</header>
<!-- header section ends -->
<br><br>
<!-- contact section starts  -->
<section class="contact fade-in-left" id="contact">
   <h1 class="heading">make appointment</h1>
   <form action="contact.php" method="post">
      <span>Enter your name :</span>
      <input type="text" name="name" placeholder="Enter your name" class="box" required>
      <span>Enter your email :</span>
      <input type="email" name="email" placeholder="Enter your email" class="box" required>
      <span>Enter your number :</span>
      <input type="number" name="number" placeholder="Enter your number" class="box" required>
      <span>Enter appointment date :</span>
      <input type="datetime-local" name="date" class="box" required>
      <input type="submit" value="make appointment" name="submit" class="link-btn">
      <br><br>
      <?php 
        if ($message) {
            echo '<div class="message-box"><p class="message">' . $message . '</p></div>';
        }
    ?>
   </form>
</section>
<!-- contact section ends -->

<!-- footer section starts  -->
<section class="footer">
   <div class="box-container container">
      <div class="box">
         <i class="fas fa-phone"></i>
         <h3>phone number</h3>
         <p>+123-456-7890</p>
      </div>
      <div class="box">
         <i class="fas fa-map-marker-alt"></i>
         <h3>our address</h3>
         <p>Xiamen Univerdity - 400054</p>
      </div>
      <div class="box">
         <i class="fas fa-clock"></i>
         <h3>opening hours</h3>
         <p>10:00am to 07:00pm</p>
      </div>
      <div class="box">
         <i class="fas fa-envelope"></i>
         <h3>email address</h3>
         <p>valentine@gmail.com</p>
      </div>
   </div>
   <div class="credit"> &copy;<?php echo date('Y'); ?> <span>DentalClinic</span> All Reserved Rights </div>
</section>
<!-- footer section ends -->

<!-- custom js file link  -->
<script src="js/script.js"></script>
</body>
</html>
