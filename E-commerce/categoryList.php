<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Select Categories</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        
   <link rel="stylesheet" href="partials/nav.css">
   <link rel="stylesheet" href="All css/home.css">
    
</head>

<body>
  <style>
    .card{
      margin-left:80px;
      width:25rem;
    }
    @media only screen and (max-width: 420px){
                    .card {
                        width:20rem;
                        margin-left:25px;
                        margin-bottom:15px;
                    }
                  }
    </style>
  

    <?php include("partials/navv.php") ?>



    <div class="container-fluid">
        <h1 class="text-center my-5">Select Categories</h2>

  <div class="row">
    <div class="col">
    <div class="card">
  <img src="images/men.jpg" width="400" height="600"  class="card-img-top " alt="...">
  <div class="card-body">
    <h5 class="card-title">Men's Watch</h5>
    <p class="card-text">Select the best brand Titan,Fastrack,Sonata,HMT for you.</p>
    <a href="men.php" class="btn btn-outline-dark text-center pe-5">Load</a>
  </div>
</div>

    </div>
    <div class="col">
    <div class="card" >
  <img src="images/women.jpg" width="400" height="600" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Girl's watches </h5>
    <p class="card-text">Select the best brand Titan,Fastrack,Sonata,HMT for you.</p>
    <a href="girlswatch.php" class="btn btn-outline-dark text-center pe-5">Load</a>
  </div>
</div>

    </div>
    <div class="col">
    <div class="card">
  <img src="images/clock.jpg" width="400" height="600" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Clock</h5>
    <p class="card-text">Select the best brand Titan,Fastrack,Sonata,HMT for you.</p>
    <a href="clocks.php" class="btn btn-outline-dark text-center pe-5">Load</a>
  </div>
</div>

    </div>
  </div>
</div>
    
    
    

   
 
  

    <div class="container">
     <h1 class="color text-center my-5"></h1>
    </div>

   


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
</body>

</html>