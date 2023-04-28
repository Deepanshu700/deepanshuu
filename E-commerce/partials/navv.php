<?php
session_start();
$count = 0;
if(isset($_SESSION['cart'])){
  $count = count($_SESSION['cart']);
}
?>

<nav class="navbar navbar-expand-lg navbar-dark" style="background-color:black">
  <div class="container-fluid">
    <a class="navbar-brand" href="/SAMAY%20BHAVAN/home.php"><span>Samay</span> Bhavan</b></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="/SAMAY%20BHAVAN/home.php">Home</a>
        </li>
       
        <li class="nav-item">
            <a class="nav-link" href="/SAMAY%20BHAVAN/blog.php">Blog</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/SAMAY%20BHAVAN/categoryList.php">Categories</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" href="/SAMAY%20BHAVAN/Contactus.php">Contact us</a>
          </li>
          
          
          <li class="nav-item">
          <a href="viewcart.php" class="btn btn-outline-secondary mx-2" style="color:white"><i
                                    class="fa-solid fa-cart-shopping"></i> (<?php echo $count ?>)</a>
          </li>
      </ul>

      <form class="d-flex">
        
     

        <a href="/SAMAY%20BHAVAN/login.php" class="btn btn-outline-secondary" style="color:white">Login</a>
        <a href="/SAMAY%20BHAVAN/signup.php" class="btn btn-outline-secondary mx-2"style="color:white">Signup</a>
        
      </form>
     
    </div>
  </div>
</nav>