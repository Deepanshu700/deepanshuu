<?php
session_start();
if (isset($_POST['addcart'])) {
    $product_name = $_POST['ptitle'];
    $product_price = $_POST['price'];
    // $check_product = array_column($_SESSION['cart'], 'productTitle');
    // if (in_array($product_name, $check_product)) {
    //     echo "
    //     <script>
    //     alert('Alread added');
    //     window.location.href = 'men.php';
    //     </script>
    //     ";
    // } else {
      $_SESSION['cart'][] = array('productTitle' => $product_name, 'productPrice' => $product_price);
    header("location: viewcart.php");   
    }
// }
// __________________remove______________________
        if(isset($_POST['remove'])){
            foreach($_SESSION['cart'] as $key => $value){
                if($value['productTitle'] ){
            unset($_SESSION['cart'][$key]);
            $_SESSION['cart'] = array_values( $_SESSION['cart'] );
            header("location:viewcart.php");
                }
            }
        }
?>