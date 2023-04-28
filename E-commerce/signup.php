<?php
 $login = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  include 'partials/connection.php';
  
  $username = $_POST["username"];
  $email = $_POST["email"];
  $mobile = $_POST["phoneno"];
  $password = $_POST["password"];
  $cpassword = $_POST["cpassword"];
  // $exists = false;

  //vheck wheater this user name is exists
  $existSql = "SELECT * FROM `registration` WHERE username = '$username'";
  $result = mysqli_query($conn, $existSql);
  $numExistRows = mysqli_num_rows($result);

  if($numExistRows > 0){
    // $exists = true;
    $showerr = "Username Already Exists";
}
else{
    // $exists = false; 
    if(($password == $cpassword)){
        $hash = password_hash($password , PASSWORD_DEFAULT);
        $sql = "INSERT INTO `registration` (`username`, `email`, `mobileno`, `password`, `date`) VALUES ('$username', '$email', '$mobile', '$hash', current_timestamp());";
        $result = mysqli_query($conn, $sql);
        if ($result){
            $show = true;
                header("location: login.php");
        }
    }
    else{
        $showError = "Passwords do not match";
    }
}
}

?>



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="All Css/signup.css"> -->
    <link href="All Css/style.css"  rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

     <!-- font-awsome -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
   
    
    <title>Signup</title>
</head>
<style>
  body{
    background-image:url("images/image3.jpg");
  }

  </style>

<body>


<?php include("partials/navv.php") ?>
<?php
    if($login){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> You are logged in
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div> ';
    }
    if($showError){
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error</strong> '.$showError.'
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>



   
       


<div id="login-form-wrap">
  <h2>Signup</h2>
  <form id="login-form" action="/SAMAY%20BHAVAN/signup.php" method="post">
    <p>
    <input type="text" id="username" name="username" placeholder="Username" required><i class="validation"><span></span><span></span></i>
    </p>
    <p>
    <input type="email" id="email" name="email" placeholder="Enter your email" required><i class="validation"><span></span><span></span></i>
    </p>
    <p>
    <input type="number" id="email" name="phoneno" placeholder="Enter your phone no." required><i class="validation"><span></span><span></span></i>
    </p>
    <p>
    <input type="password" id="email" name="password" placeholder="Create Password" required><i class="validation"><span></span><span></span></i>
    </p>
    <p>
    <input type="password" id="email" name="cpassword" placeholder="Confirm Password" required><i class="validation"><span></span><span></span></i>
    </p>
    <p>
    <input type="submit" id="login" value="signup">
    </p>
  </form>
  <div id="create-account-wrap">
    <p>Not a member? <a href="login.php">Log in</a><p>
  </div><!--create-account-wrap-->
</div><!--login-form-wrap-->
<!-- partial -->







      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>
</body>

</html>