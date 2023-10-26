<!DOCTYPE html>
<html lang="en">
   <?php include_once('head.php')?>
   <?php include_once('header.php')?>
  
   <div class="secbill p-5">
      <div class="container-fluid summary ">
         <div class="row">
            <!-- Left side for the shopping cart -->
            <div class="col-lg-9 p-5 bg-white">
               <h2>Login or Signup</h2>
               <form class="addressform">
                  <!-- First Row -->
                  <div class="row">
                     <div class="col-lg-4">
                        <div class="form-group">
                           <input type="text" class="form-control" id="name" placeholder="Enter your name">
                        </div>
                        <div class="form-check">
                           <input type="checkbox" class="form-check-input" id="agreeCheck">
                           <label class="form-check-label" for="agreeCheck">Yes, I agree with the privacy policy</label>
                        </div>
                     </div>
                     <div class="col-lg-3">
                        <div class="form-group"><a href="payment.php">
                           <button type="button" class="btn  btn-block logsub">Submit</button></a>
                        </div>
                     </div>
                  </div>
               </form>
               <h2 style="pt-2">Shipping</h2>
               <form class="addressform">
                  <!-- First Row -->
                  <div class="row">
                     <div class="col-lg-4">
                        <div class="form-group">
                           <label for="name">Name</label>
                           <input type="text" class="form-control" id="name" placeholder="Enter your name">
                        </div>
                     </div>
                     <div class="col-lg-4">
                        <div class="form-group">
                           <label for="email">Email</label>
                           <input type="email" class="form-control" id="email" placeholder="Enter your email">
                        </div>
                     </div>
                     <div class="col-lg-4">
                        <div class="form-group">
                           <label for="phoneno">Phone No.</label>
                           <input type="tel" class="form-control" id="phoneno" placeholder="Enter your phone number">
                        </div>
                     </div>
                  </div>
                  <!-- Second Row -->
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="form-group">
                           <label for="address1">Address Line 1</label>
                           <input type="text" class="form-control" id="address1" placeholder="Enter your address line 1">
                        </div>
                     </div>
                  </div>
                  <!-- Third Row -->
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="form-group">
                           <label for="address2">Address Line 2</label>
                           <input type="text" class="form-control" id="address2" placeholder="Enter your address line 2">
                        </div>
                     </div>
                  </div>
                  <!-- Fourth Row -->
                  <div class="row">
                     <div class="col-lg-4">
                        <div class="form-group">
                           <label for="city">City</label>
                           <input type="text" class="form-control" id="city" placeholder="Enter your city">
                        </div>
                     </div>
                     <div class="col-lg-4">
                        <div class="form-group">
                           <label for="state">State</label>
                           <input type="text" class="form-control" id="state" placeholder="Enter your state">
                        </div>
                     </div>
                     <div class="col-lg-4">
                        <div class="form-group">
                           <label for="pincode">Pincode</label>
                           <input type="text" class="form-control" id="pincode" placeholder="Enter your pincode">
                        </div>
                     </div>
                  </div>
                  <!-- Fifth Row -->
                  <div class="row">
                     <div class="col-lg-4">
                        <div class="form-group">
                           <label for="country">Country</label>
                           <input type="text" class="form-control" id="country" placeholder="Enter your country">
                        </div>
                     </div>
                  </div>
                  <!-- Save Button -->
                  <div class="row">
                     <div class="col-lg-12"><a href="payment.php">
                        <button type="button" class="btn subaddress">Save Address & Continue</button></a>
                     </div>
                  </div>
               </form>
            </div>
            <!-- Right side for the order summary -->
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
   </div>
   <?php include_once('footer.php')?>
   <?php include_once('foot.php')?>
   </body>
</html>