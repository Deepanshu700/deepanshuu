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

    

  <title>viewcart</title>
</head>
<body class="bg-light">
  <?php include("partials/navv.php") ?>
  <div class="p-1 " style="width:100%;background-color:lightblue;">
        <h6 class="my-4 text-center"> <b>SAMAY BHAVAN</b> </h6>
    </div>
    <hr>
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-cent bg-light mb-5 rounded">
        <h1 class="text-center"><b>My Cart</b></h1>
      </div>
    </div>
  </div>



  <div class="container-fluid">
    <div class="row justify-content-around">
      <div class="col-sm-12 col-md-6 col-lg-9">
        <table class="table text-center table-bordered" >
          <thead class="bg-dark text-white fs-5">
         <th scope="col">sno</th>  
         <th scope="col">Product name</th>  
         <th scope="col">Product price</th>  
         <th scope="col">Total Price</th> 
         <th scope="col">Delete</th>  
          </thead>
          <tbody>
           <?php
           $ptotal = 0;
           $total = 0;
           $sno = 0;
            if(isset($_SESSION['cart'])){
              foreach ($_SESSION['cart'] as $key => $value) {
                $ptotal = $value['productPrice'] ;
               $total += $value['productPrice'] ; $ptotal = $value['productPrice'] ;
               $sno = $key + 1;
                echo "
                <form action ='/SAMAY%20BHAVAN/cart.php' method = 'post'>
                <tr>
                <td>$sno</td>
                <td>$value[productTitle]</td>
                <td>$value[productPrice]</td>
                <td> $ptotal</td>
                <td><button name='remove' class='btn btn-danger'>Delete </button> </td>
              </tr>
              </form>
              ";
              }
            }            
            ?>

            <?php
          if($ptotal = 0){
            echo'<h1> Cart is Empty <h1>';
          }

            ?>

          </tbody>
        </table>
          </div>
      <?php
      if(isset($_POST['pay'])){
        if($total == 0){
          echo '<script> 
          alert("Cart is empty");
          </script>';
        }else{
          echo '<script> 
          window.location.href="customersPayment.php";
          </script>';
        }
      }  
      ?>
<div class="col-lg-3  text-center">
  <h3 class="bg-dark text-light">Total Amount</h3>
  <h2 class="text-dark bg-light"><?php echo "$total" ?></h2>
  <form  method="post">
  <button  name="pay" type="submit" class="btn btn-dark">Proceed to pay </button>
    </form>


          </div>

    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>

</body>

</html>