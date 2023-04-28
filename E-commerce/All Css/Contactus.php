<?php
$show = false;
$showError = false;
include("partials/connection.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $name = $_POST["name"];
  $email = $_POST["email"];
  $desc = $_POST["desc"];



  $sql = "INSERT INTO `contactus` (`email`, `description`, `name`, `date`) VALUES (  '$email', '$desc', '$name', current_timestamp());";
  $result = mysqli_query($conn, $sql);
  if ($result) {
    $show = true;
  } else {
    $showError = "Your message was not sent please try after some time. ";
  }

}



?>










<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <!-- <title> Responsive Contact Us Form  | CodingLab </title>-->
  <link rel="stylesheet" href="All Css/contact.css">


  <!-- Fontawesome CDN Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>


  <div class="container">
    <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Address</div>
          <div class="text-one">Aggresen Chowk , Bilaspur</div>
          <div class="text-two">Front of Sriram cloth market</div>
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Phone</div>
          <div class="text-one">7354776689</div>
          <div class="text-two">9826552368</div>
        </div>
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one">pragyang2809@gmail.com</div>
          <div class="text-two">pragyangupta41765@gmail.com</div>
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Send us a message</div>
        <p>If you have any quires please contact us.</p>
        <?php 
if($show){
  echo '<p style="color:green; font-size:large;">Your Message is delevered we will contact you Shortly</p>.';
}
?>

        <!-- ___________________________FORM STARTED______________________________ -->

        <form action="/SAMAY%20BHAVAN/Contactus.php" method="post">
          <div class="input-box">
            <input type="text" name="name" placeholder="Enter your name" required>
          </div>
          <div class="input-box">
            <input type="text" name="email" placeholder="Enter your email" required>
          </div>
          <div class="input-box message-box">
            <textarea name="desc" id="" cols="30" rows="10" placeholder="Enter your message" required></textarea>

          </div>
          <div class="button">
            <button type="submit" >Send Now</button>
          </div>
          <div class="button">
            <a href="home.php">Go Back</a>


          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>