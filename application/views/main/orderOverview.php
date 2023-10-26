<?php
$totalProductAmount = 0;
$totalProductDiscountAmount = 0;

$this->db->where('promo_code', $para['pormoCode']);
$promo_codes = $this->db->get('promo_codes')->result_array();

$cart[0]['promoCode'] = !empty($promo_codes[0]['promo_code_amount']) ? $promo_codes[0]['promo_code_amount'] : "";

 
foreach ($cart as $item) {
   // Calculate the total product amount by multiplying the price by the quantity
   $productAmount = $item['ProductPrice'] * $item['ProductQuantity'];

   $productDiscountAmount = $item['ProductDiscountPrice'] * $item['ProductQuantity'];

   // Add the calculated product amount to the total
   $totalProductAmount += $productAmount;

   // Add the discounted price to the total discounted amount
   $totalProductDiscountAmount += $productDiscountAmount;
}


?>
<!DOCTYPE html>
<html lang="en">
<?php include_once('includes/head.php') ?>
<?php include_once('includes/header.php') ?>
<style>
   .pay-chk .form-check {
      padding-bottom: 2em !important;
   }

   .payimgs {
      padding-bottom: 2em !important;
   }
</style>
<div class="secbill p-5">
   <div class="container-fluid summary">
      <div class="row">
         <!-- Left side for the shopping cart -->
         <div class="col-lg-9 p-5">
            <div class="row">
               <!-- Heading -->
               <div class="col-lg-5">
                  <h2>Payment Method</h2>
               </div>
            </div>
            <div class="row">
               <!-- Pay Using Razorpay -->
               <div class="col-lg-5 pay-chk">
                  <label class="custom-checkbox form-check-label" for="razorpayRadio">
                     <input type="checkbox" value="rozarpay" class="form-check-input" name="paymentMethod" id="razorpayRadio">
                     <span class="checkmark"></span>
                     Pay Using Razorpay
                  </label>
               </div>
            </div>

            <div class="row">
               <!-- Payment Options -->
               <div class="col-lg-5 payimgs">
                  <div class="d-flex justify-content-between">
                     <img src="<?php echo base_url() ?>assets/main/images/phonepay.svg" alt="PhonePe" width="50" height="50">
                     <img src="<?php echo base_url() ?>assets/main/images/gpay.svg" alt="Google Pay" width="50" height="50">
                     <img src="<?php echo base_url() ?>assets/main/images/paytm.svg" alt="Paytm" width="50" height="50">
                     <img src="<?php echo base_url() ?>assets/main/images/razorpay.svg" alt="Razorpay" width="50" height="50">
                  </div>
               </div>
            </div>
            <div class="row">
               <!-- Cash On Delivery -->
               <div class="col-lg-5 pay-chk">
                  <label class="custom-checkbox form-check-label" for="codRadio">
                     <input type="checkbox" value="cod" class="form-check-input" name="paymentMethod" id="codRadio">
                     <span class="checkmark"></span>
                     Cash On Delivery
                  </label>
               </div>
            </div>
            <div class="row pb-2">
               <!-- Cash On Delivery -->
               <div class="col-lg-5 pay-text-last">
                  <p>Your personal data will be used to process your order,
                     support your experience throughout this website, and
                     for other purposes described In Our privacy policy.</p>
               </div>
            </div>
            <div class="row">
               <!-- Place Order Button -->
               <div class="col-lg-5">
                  <button onclick="paymentProcess(event)" class="btn checkoutbtn w-100">Place Order</button>

               </div>
            </div>
            <!-- Right side for the order summary -->

         </div>

         <div class="col-lg-3 orsumtop">
            <div class="card" style="border:none;">
               <div class="card-body ordsum">
                  <h2 class="card-title">Order Summary</h2>
                  <!-- Left-aligned order total -->
                  <hr style="border-top: 2px solid black; font-weight: bold;">
                  <!-- Add a horizontal line to separate sections -->
                  <div class="mb-2 d-flex justify-content-between">
                     <span>Price</span>
                     <span id="totalPrice">₹<?= $totalProductAmount ?></span>
                  </div>
                  <div class="mb-2 d-flex justify-content-between">
                     <span>Shipping</span>
                     <span>₹100</span>
                  </div>
                  <div class="mb-2 d-flex justify-content-between">
                     <span>Discount</span>
                     <span id="totalDiscountPrice">₹<?= $totalProductDiscountAmount ?></span>
                  </div>
                  <div class="mb-2 d-flex justify-content-between">
                     <span>Promo Code Offer</span>
                     <span>₹100</span>
                  </div>
                  <div class="mb-2 d-flex justify-content-between">
                     <span>Order Total</span>
                     <span id="orderTotalPrice">₹<?= $totalProductAmount ?></span>
                  </div>

                  <hr style="border-top: 2px solid black; font-weight: bold;">
                  <!-- Add another horizontal line -->
                  <!-- Right-aligned total price -->
                  <div class="mb-2 d-flex justify-content-between">
                     <span>Total Price</span>
                     <span id="finalPrice">₹<?= $totalProductAmount ?></span>
                  </div>


               </div>
            </div>
         </div>


      </div>
   </div>
</div>
<?php include_once('includes/footer.php') ?>
<?php include_once('includes/foot.php') ?>
<script>
   $(document).ready(function() {
      // Listen for changes to checkboxes
      $('input[type="checkbox"]').change(function() {
         if ($(this).prop('checked')) {
            // Uncheck all other checkboxes
            $('input[type="checkbox"]').not(this).prop('checked', false);
         }
      });
   });

   function paymentProcess(e) {
      e.preventDefault()

      var isChecked = $('input[name="paymentMethod"]:checked').length > 0;

      if (isChecked) {
         // At least one checkbox is checked, proceed with your logic
         console.log('At least one checkbox is checked');
         var value = $('input[name="paymentMethod"]:checked').val()
         var cartJson = JSON.stringify(<?php echo json_encode($cart); ?>);

         // Encode the cart JSON string for safe inclusion in the URL
         var encodedCart = encodeURIComponent(cartJson);

         if (value == 'rozarpay') {
            // rozarpay
            var redirectURL = "<?php echo base_url() ?>user/paymentProcess/" + encodedCart;

            // Redirect to the new URL
            window.location.href = redirectURL;

         } else {
            // cash ond Delivery 

            // Construct the URL with the parameters
            var redirectURL = "<?php echo base_url() ?>user/offlineOrder/" + encodedCart;

            // Redirect to the new URL
            window.location.href = redirectURL;
         }

      } else {

         alert('Pelase choose payment method');

      }
   }
</script>
</body>

</html>