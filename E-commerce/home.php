<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Samay bhavan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Font awasome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link rel="stylesheet" href="partials/nav.css">
    <link rel="stylesheet" href="All Css/home.css">

</head>

<body>
<?php
$count = 0;
if(isset($_SESSION['cart'])){
  $count = count($_SESSION['cart']);
}
?>
    <!-- include navbar -->


    <!-- include caurosal from bootstrap -->

    <?php include("partials/navv.php") ?>
    <?php include("boilerplates/carousel.php") ?>

    <!-- <div class="container-fluid" style="background-color:#ede9e8;">
        <h1 class="text-center my-5"><b><span class="span-color1">ESSEN</span>TIALS<b></h1>
    </div> -->

    <div class="container-fluid my-5">
        <h1 class="text-center my-5"><b>TRENDING</b></h1>


        <div class="container-fluid " style="background-color: rgb(37, 36, 36); height=100px;">
            <img src="images/home/Trending/trandingimg.jpg" id="trending" class="img-margin" width="400" height="400"
                alt="">
            <img src="images/home/Trending/trending2.jpg" id="trending" class="img-margin1" width="400" height="400"
                alt="">
            <img src="images/home/Trending/trending3.jpg" id="trending" class="img-margin2" width="400" height="400"
                alt="">
        </div>

    </div>
    <style>
 
 .card{
  width:27rem;
  margin-left:10px;
  margin-top:20px;
 }
 @media only screen and (max-width: 420px){
              .card {
                  width:20rem;
                  margin-left:25px;
              }
              
          }
        



  
</style>

    <!-- Trending products -->
    <div class="container-fluid">
        <h1 class="text-center my-5"><b><span>TRENDING</span> PRODUCT</b></h1>



        <div class="row row-cols-auto" id="cardd">
        <?php include("partials/connection.php")?>

       
                
        <?php

        $sql = "SELECT * FROM `productupload` WHERE `Product_id` ='5' OR `Product_id` ='10' OR `Product_id` ='7' OR `Product_id` ='15'";
        $result = mysqli_query($conn, $sql);
       while ($row = mysqli_fetch_assoc($result)) {
           //  echo $row['category_id'];
           //  echo $row['category_name'];
           $pimg = $row['Product_img'];
           $ptitle = $row['Product_title'];
           $price = $row['Product_price'];
           $id = $row['Product_id'];
          
       
           echo '   
                   
                 
           <div class="col" >
           <form action="/SAMAY%20BHAVAN/cart.php"  method="post">
            <div class="card "   >
        <img src="' . $pimg . '" width="500" height="450" class="card-img-top " alt="...">
        <div class="card-body">
            <h6 class="card-title "><b>' . substr($ptitle , 0 , 40) . '...</b></h6>
            <h6 class="text-center mt-4 mb-4">Price: Rs ' . $price . ' </h6>
       
            <div class="text-center">
                <input type="hidden" name="ptitle" value="'.$ptitle.'">
                <input type="hidden" name="price" value="'.$price.'">
                <input type="submit" value="ADD TO CART " class="btn btn-dark" name="addcart"> 
                <a href="productShow.php?pid=' . $id . '" class="btn btn-dark">Purchase</a>

               
            </div>
            

        </div>
        </form>
       </div>
       </div>

      
       

    

';
       }

      
?>
</div>



    </div>

    <hr class="my-5">

    <!-- TOP SELLER -->

    <div class="container-fluid">
        <h1 class="text-center my-5"><b>TOP<span> SELLER</span></b></h1>


        <div class="row row-cols-auto" id="card">
        <?php include("partials/connection.php")?>

       
                
        <?php

        $sql = "SELECT * FROM `productupload` WHERE `Product_id` ='17' OR `Product_id` ='18' OR `Product_id` ='19' OR `Product_id` ='20'";
        $result = mysqli_query($conn, $sql);
       while ($row = mysqli_fetch_assoc($result)) {
           //  echo $row['category_id'];
           //  echo $row['category_name'];
           $pimg = $row['Product_img'];
           $ptitle = $row['Product_title'];
           $price = $row['Product_price'];
           $id = $row['Product_id'];
          
       
           echo '   
                   
                 
           <div class="col" >
           <form action="/SAMAY%20BHAVAN/cart.php"  method="post">
            <div class="card "   >
        <img src="' . $pimg . '" width="500" height="450" class="card-img-top " alt="...">
        <div class="card-body">
            <h6 class="card-title "><b>' . substr($ptitle , 0 , 40) . '...</b></h6>
            <h6 class="text-center mt-4 mb-4">Price: Rs ' . $price . ' </h6>
       
            <div class="text-center">
                <input type="hidden" name="ptitle" value="'.$ptitle.'">
                <input type="hidden" name="price" value="'.$price.'">
                <input type="submit" value="ADD TO CART " class="btn btn-dark" name="addcart"> 
                <a href="productShow.php?pid=' . $id . '" class="btn btn-dark">Purchase</a>

               
            </div>
            

        </div>
        </form>
       </div>
       </div>

      
       

    

';
       }

      
?>
</div>



    </div>

    <hr class="my-5">


   



    <?php include("footer.php") ?>





    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
</body>

</html>