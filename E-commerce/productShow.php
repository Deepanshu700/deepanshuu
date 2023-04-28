<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Product Review/Show</title>
</head>

<body>
    <?php include("partials/navv.php"); ?>
    <?php include("partials/connection.php"); ?>

    <?php
    $id = $_GET['pid'];
    $sql = "SELECT * FROM `productupload` WHERE Product_id='$id'"; 
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
        $ptitle = $row['Product_title'];
        $price = $row['Product_price'];
        $pimg = $row['Product_img'];
        $pbrand = $row['Product_brand'];
    }
    
    ?>

    <div class="p-1 " style="width:100%;background-color:lightblue;">
        <h6 class="my-4 text-center"> <b><span>SAMAY</span> BHAVAN</b> </h6>

    </div>
    <hr>
    <h1 class="my-5 mx-5"><?php echo strtoupper($pbrand); ?></h1>

    <div class="container-fluid">
        <div class="row mx-5">
            <div class="col" >
                <p> <?php echo "$ptitle";?> </p>
                <img src="<?php echo "$pimg"; ?>" style="margin-left:200px;margin-top:50px" width="400" height="400" alt="">
            </div>
            <div class="col">
                <h2 class="mb-5"><?php echo " $ptitle" ?></h2>

                    <h5 class=""><b>Price ₹ <?php echo "$price";?></b><br><p>(Inclusive of all taxes) </p></h5>
                    <div class="container-fluid mb-3" style="border:1px solid grey;padding:3px;">
                    <h6 class="text-center">EMI starts at ₹480.No Cost EMI</h6>

                    </div>
                    <p >Net Qty<br><p class="" style="background-color:grey;width:85px;">1 unit        <button class="btn btn-secondary"> + </button></p></p>
                  <h6 class="mb-5" ><b>Colors avalable:</b></h6>



                  <button class="btn btn-info text-light text-center p-3 mb-2" style="width:420px;">Add to cart</button>


                  
                  <a href="/SAMAY%20BHAVAN/customersPayment.php"class="btn btn-dark text-center p-3 mb-2" style="width:420px;">Purchase now</a>
                  <button class="btn btn-dark text-light text-center p-3 " style="width:420px;">Pick up at store</button>
                  <button class="btn btn-outline-dark text-center p-3" style="width:420px;">Book an appoinment</button>
            </div>
        </div>
    </div>

<hr>


<?php include("footer.php") ?>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>

</body>

</html>