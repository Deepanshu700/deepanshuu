

<?php
session_start();
require('Payment.php');
?>
 <?php
          
          $total = 0;
        
           if(isset($_SESSION['cart'])){
             foreach ($_SESSION['cart'] as $key => $value) {
               
              $total += $value['productPrice'] ; $ptotal = $value['productPrice'] ;
             

             }
           }
             
           ?>

<form action="submit.php" method="post">
	<script
		src="https://checkout.stripe.com/checkout.js" class="stripe-button"
		data-key="<?php echo $publishkey?>"
		data-amount="<?php echo $total ?>00"
		data-name="Samay Bhavan"
		data-description="Payment as per product"
		data-image="https://images.pexels.com/photos/190819/pexels-photo-190819.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
		data-currency="inr"
		data-email="samayBhavan5478@gmail.com"
	>
	</script>

</form>