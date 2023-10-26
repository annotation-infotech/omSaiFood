<!DOCTYPE html>
<html lang="en">
   <?php include_once('head.php')?>
   <?php include_once('header.php')?>
   <style>
      .pay-chk .form-check{
      padding-bottom:2em !important;
      }
      .payimgs {
      padding-bottom:2em !important;
      }
   </style>
   <div class="secbill p-5">
   <div class="container-fluid summary">
      <div class="row">
         <!-- Left side for the shopping cart -->
         <div class="col-lg-9 p-5 bg-white ">
            <div class="row">
               <!-- Heading -->
               <div class="col-lg-5">
                  <h2>Payment Method</h2>
               </div>
            </div>
            <div class="row">
               <!-- Cash On Delivery -->
               <div class="col-lg-5 pay-chk">
                  <label class="custom-checkbox form-check-label" for="codCheck">
                  <input type="checkbox" class="form-check-input" id="codCheck">
                  <span class="checkmark"></span>
                  Pay Using Razorpay
                  </label>
               </div>
            </div>
            <div class="row">
               <!-- Payment Options -->
               <div class="col-lg-5 payimgs">
                  <div class="d-flex justify-content-between">
                     <img src="images/phonepay.svg" alt="PhonePe" width="50" height="50">
                     <img src="images/gpay.svg" alt="Google Pay" width="50" height="50">
                     <img src="images/paytm.svg" alt="Paytm" width="50" height="50">
                     <img src="images/razorpay.svg" alt="Razorpay" width="50" height="50">
                  </div>
               </div>
            </div>
            <div class="row">
               <!-- Cash On Delivery -->
               <div class="col-lg-5 pay-chk">
                  <label class="custom-checkbox form-check-label" for="codCheck">
                  <input type="checkbox" class="form-check-input" id="codCheck">
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
               <div class="col-lg-5"><a href="index.php">
                  <button type="button" class="btn checkoutbtn w-100" style="background:#0d6c68; color:white;">Place Order</button></a>
               </div>
            </div>
            <!-- Right side for the order summary -->
            
         </div>
         <div class="col-lg-3 orsumtop bg-white">
               <div class="card" style="border:none;">
                  <div class="card-body ordsum">
                     <h2 class="card-title">Order Summary</h2>
                     <!-- Left-aligned order total -->
                     <hr style="border-top: 2px solid black; font-weight: bold;">
                     <!-- Add a horizontal line to separate sections -->
                     <div class="mb-2 d-flex justify-content-between">
                        <span>Price</span>
                        <span>₹100</span>
                     </div>
                     <div class="mb-2 d-flex justify-content-between">
                        <span>Shipping</span>
                        <span>₹100</span>
                     </div>
                     <div class="mb-2 d-flex justify-content-between">
                        <span>Discount</span>
                        <span>-₹60</span>
                     </div>
                     <div class="mb-2 d-flex justify-content-between">
                        <span>Order Total</span>
                        <span>₹10000</span>
                     </div>
                     <hr style="border-top: 2px solid black; font-weight: bold;">
                     <!-- Add a horizontal line to separate sections -->
                     <div class="mb-2">
                        Promo Code
                        <input type="text" class="form-control promo" placeholder="Promo Code">
                        <button class="btn promobtn mt-2 ">Apply</button>
                     </div>
                     <hr style="border-top: 2px solid black; font-weight: bold;">
                     <!-- Add another horizontal line -->
                     <!-- Right-aligned total price -->
                     <div class="mb-2 d-flex justify-content-between">
                        <span>Total Price</span>
                        <span>₹1,376</span>
                     </div>
                     <hr style="border-top: 2px solid black; font-weight: bold;">
                     
                  </div>
               </div>
            </div>
      </div>
   </div>
   <?php include_once('footer.php')?>
   <?php include_once('foot.php')?>
   </body>
</html>