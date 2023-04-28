<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- font awsome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Women Watches</title>
</head>

<body>

    <style>
 
 .card{
        width:27rem;
        margin-left:10px;
        margin-top:20px
       }
       @media only screen and (max-width: 420px){
                    .card {
                        width:20rem;
                        margin-left:25px;
                    }
                    
                }
              

      

        
    </style>

    <?php include("partials/navv.php") ?>
    <?php include("partials/connection.php")?>
    <div class="p-1 " style="width:100%;background-color:lightblue;">
        <h6 class="my-4 text-center"> <b>SAMAY BHAVAN</b> </h6>

    </div>
    <hr>
   
    <div class="container-fluid">

        <h1 class="text-center my-5">Top Watches to buy</h1>
       
                   <div class="row row-cols-auto" id="cardd">
        

       
                
                <?php

                $sql = "SELECT * FROM `productupload` WHERE `product_category` ='clocks'";
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
            <hr>


<?php include("footer.php") ?>






    <!-- Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>

</body>

</html>