<?php
session_start();

?>
<?php
$show = false;
$showerr = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'partials/connection.php';

    $firstName = $_POST["fname"];
    $lastName = $_POST["lname"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $country = $_POST["country"];
    $zipcode = $_POST["zipcode"];
    $state = $_POST["state"];
    $city = $_POST["city"];
    $address = $_POST["address"];
    $nickname = $_POST["nname"];
    $phone = $_POST["phone"];

    // $exists = false;

    //vheck wheater this user name is exists

    $sql = "INSERT INTO `payment_form` ( `first_name`, `last_name`, `email`, `mobileno`, `country`, `pincode`, `state`, `city`, `address`, `nickname`, `phoneno`, `date`) VALUES ( '$firstName', '$lastName', '$email', '$mobile', '$country', '$zipcode', '$state', '$city', '$address', '$nickname', '$phone', current_timestamp());";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $show = true;
        header("location: men.php");
    } else {
        $showerr = "Product does't upload Something went wron please contact the server Host";
    }

}

?>
<!-- FOR PAYEMENT BUTTON -->
<?php 
if(isset($_POST['payment'])){
    header("location: transection.php");
}
?>


    



<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Payment</title>
</head>

<body>
    <style>
        #color {
            color: rgb(133, 133, 133);
        }

        #bgcolor {
            background-color: #f6f6f6;
        }
    </style>

    <nav class="navbar navbar-expand-lg navbar-light bg-light p-4">
        <div class="container-fluid">
            <h1 class="navbar-brand" href="#">Samay Bhavan</h1>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                </ul>
                <form class="d-flex">
                    <h6 style="font-family:'Arial Narrow', Arial, sans-serif;">DO YOU HAVE A QUESTION?<br> CONTACT US ON
                        :<b>91-7354776689</b></h6>

                </form>


            </div>

        </div>
    </nav>
    
    <div class="mt-1 mx-3 p-2">
        <h6 class="mt-5"> <b>FILL THE DETAILS TO PLACE YOUR ORDER</b> </h6>

    </div>
    <hr>

   

    <div class="container">
        <h2 class="my-2 text-center"><b>Your Delevery details</b></h2>

        <div class="col-7 my-5 mx-5" id="pid">
            <form action="/SAMAY%20BHAVAN/customersPayment.php" method="post">

                <div class="mb-3">
                    <label class="form-label" id="color" for="title"><b>FIRST NAME *</b></label>
                    <input class="form-control p-2" type="text" name="fname" id="bgcolor" required>
                   
                </div>

                <div class="mb-3">
                    <label class="form-label" id="color" for="title"><b>LAST NAME *</b></label>
                    <input class="form-control p-2" type="text" name="lname" id="bgcolor" required>
                    
                </div>

                <div class="mb-3">
                    <label class="form-label" id="color" for="title"><b>EMAIL *</b></label>
                    <input class="form-control p-2" type="email" name="email" id="bgcolor" required>
                   
                </div>

                <div class="mb-3">
                    <label class="form-label" id="color" for="title"><b>MOBILE NO. *</b></label>
                    <input class="form-control p-2" type="number" name="mobile" id="bgcolor" required>
                   
                </div>


                <div class="mb-3">
                    <label class="form-label" id="color"for="title"><b>COUNTRY *</b></label>

                    <select class="form-select p-2" id="bgcolor" name="country" aria-label="Default select example">
                        <option selected>India</option>
                        <option value="1">USA</option>
                        <option value="2">RUSSIA</option>
                        <option value="3">CHINA</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label" id="color" for="title"><b>PIN CODE/ZIP CODE *</b></label>
                    <input class="form-control p-2" type="text" name="zipcode" id="bgcolor" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label " id="color" for="title"><b>STATE *</b></label>
                    <input class="form-control p-2" type="text" name="state" id="bgcolor" required>
                    
                </div>

                <div class="mb-3">
                    <label class="form-label" id="color" for="title"><b>CITY *</b></label>
                    <input class="form-control p-2" type="text" name="city" id="bgcolor" required>
                    
                </div>

                <div class="mb-3">
                    <label class="form-label" id="color" for="title"><b>STREAT ADRESS/BUILDING/LOCALITY *</b></label>
                    <input class="form-control p-2" type="text" name="address" id="bgcolor" required>
                    
                </div>

                <div class="mb-3">
                    <label class="form-label" id="color" for="title"><b>NICKNAME</b></label>
                    <input class="form-control p-2" type="text" name="nname" id="bgcolor" required>
                    
                </div>

                <div class="mb-2">
                    <label class="form-label" id="color" for="title"><b>PHONE NO(optional)</b></label>
                    <input class="form-control p-2" type="text" name="phone" id="bgcolor" >
                    
                </div>

                <div class="mb-2">
                <button class="btn btn-dark" name="payment" >Proceed to pay</button>

    </div>

               



        </div>



        </form>



    </div>
 

   
           
          
                
       




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>

</body>

</html>