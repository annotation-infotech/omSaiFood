<!DOCTYPE html>
<html lang="en">
   <?php include_once('head.php')?>
   <?php include_once('header.php')?>
   

<div class="secbill p-5">
   <div class="container-fluid summary">
  <div class="row">
    <!-- Left side for the shopping cart -->
    <div class="col-lg-9">
  <h2>Order Summary</h2>
  <table class="table ordersummary">
    <thead>
      <tr>
        <th class="col-lg-4">Items</th>
        <th class="col-lg-2">Quantity</th>
        <th class="col-lg-3">Total</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>
          <div class="media">
            <img src="images/lip.png" alt="Product Image" class="mr-3" style="max-width: 100px;">
            <div class="media-body">
              <h5 class="mt-0">Snowy Glowy Ink Liquid Lipstick</h5>
              <p>(1.9g)</p>
              <p>Save for Later Remove</p>
            </div>
          </div>
        </td>
        <td>
          <div class="input-group pt-2" style="width: 150px;">
            <span class="input-group-prepend">
              <button class="btn btn-outline-secondary minusbtn" type="button">-</button>
            </span>
            <input type="text" class="form-control text-center productcountno" value="1">
            <span class="input-group-append">
              <button class="btn btn-outline-secondary plusbtn" type="button">+</button>
            </span>
          </div>
        </td>
        <td class="sumprice"><del>₹2000</del><br><span>₹10000 </span></td>
      </tr>
      <tr>
        <td>
          <div class="media">
            <img src="images/lip.png" alt="Product Image" class="mr-3" style="max-width: 100px;">
            <div class="media-body">
              <h5 class="mt-0">Snowy Glowy Ink Liquid Lipstick</h5>
              <p>(1.9g)</p>
              <p>Save for Later Remove</p>
            </div>
          </div>
        </td>
        <td>
          <div class="input-group pt-2" style="width: 150px;">
            <span class="input-group-prepend">
              <button class="btn btn-outline-secondary minusbtn" type="button">-</button>
            </span>
            <input type="text" class="form-control text-center productcountno" value="1">
            <span class="input-group-append">
              <button class="btn btn-outline-secondary plusbtn" type="button">+</button>
            </span>
          </div>
        </td>
        <td class="sumprice"><del>₹2000</del><br><span>₹10000 </span></td>
      </tr>
      <!-- Add more rows for other products -->
    </tbody>
  </table>
  <div class="col-lg-3">
                        <div class="form-group">
                           <button type="submit" class="btn  btn-block logsub">Continue</button>
                        </div>
                     </div>
</div>

    
    <!-- Right side for the order summary -->
    <div class="col-lg-3 orsumtop">
  
  <div class="card" style="border:none;">
    <div class="card-body ordsum">
      <h2 class="card-title">Order Summary</h2>
      <!-- Left-aligned order total -->
      
      <hr style="border-top: 2px solid black; font-weight: bold;"> <!-- Add a horizontal line to separate sections -->
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
      <hr style="border-top: 2px solid black; font-weight: bold;"> <!-- Add a horizontal line to separate sections -->
      <div class="mb-2">
        Promo Code
        <input type="text" class="form-control promo">
        <button class="btn promobtn mt-2 ">Apply</button>
      </div>
      <hr style="border-top: 2px solid black; font-weight: bold;"> <!-- Add another horizontal line -->
      <!-- Right-aligned total price -->
      <div class="mb-2 d-flex justify-content-between">
        <span>Total Price</span>
        <span>₹1,376</span>
      </div>
      <hr style="border-top: 2px solid black; font-weight: bold;">
      <button class="btn checkoutbtn btn-block">Checkout</button>
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