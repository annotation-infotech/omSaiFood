<!DOCTYPE html>
<html lang="en">
<?php include_once('includes/head.php') ?>
<?php include_once('includes/header.php') ?>

<div class="secbill p-5">
   <div class="container-fluid summary bed-cart-total">
      <div class="row cart-product-mob">
         <!-- Left side for the shopping cart -->
         <div class="col-lg-9 p-0 cart-head-shop">
            <h2 class="p-3 m-0">Shopping Cart</h2>
            <table class="table ">
               <thead>
                  <tr>
                     <th class="col-lg-4">Items</th>
                     <th class="col-lg-2">Quantity</th>
                     <th class="col-lg-3">Total</th>
                  </tr>
               </thead>
               <tbody>
               <?php
            $totalProuctAmount = 0;
            $totalProuctDiscountAmont = 0;
            ?>
                  <?php foreach ($cart as $item) : ?>
                     <tr>
                        <td>
                           <?php
                           $productID = $item['ProductID'];
                           $this->db->where('ProductID', $productID);
                           $product = $this->db->get('products')->result_array();

                           ?>
                           <div class="media">
                              <?php foreach ($product as $productInfo) {
                                 $imageFilenames = explode(',', $productInfo['ProductImage']);
                              ?>
                                 <img src="<?= base_url() ?>assets/uploads/products/<?= $imageFilenames[0] ?>" alt="Product Image" class="mr-3" style="max-width: 100px;">
                                 <div class="media-body">
                                    <h5 class="mt-0"><?= $productInfo['ProductName'] ?></h5>
                                 <?php  } ?>
                                 <p class="d-flex align-items-center" style="gap: 10px;">Color: <span class="userselectedClr" style="background-color: <?= $item['ProductColor'] ?>;"></span></p>
                                 <p>Save for Later <a href="#" class="remove-<?= $item['ProductID'] ?>-<?= $item['ProductColor'] ?>" onclick="event.preventDefault(); removeProductfromCart('<?= $productID ?>',' <?= $item['ProductColor'] ?>' )">Remove</a></p>
                                 </div>
                           </div>
                        </td>
                        <td>
                           <?php
                           $qty = $item['ProductQuantity'];
                           $productID =  $item['ProductID'];

                           $productColor = $item['ProductColor'];
                        


                           echo '<div class="input-group pt-2 mob-view-sum" style="width: 150px;">
                <span class="input-group-prepend">
                    <button class="btn btn-outline-secondary minusbtn" type="button" data-product-id="' . $productID . '" onclick="decrementQuantity(this, ' . $productID . ', \'' . $productColor . '\')">
                        -
                    </button>
                </span>
                <input type="text" class="form-control text-center productcountno" value="' . $qty . '">
                <span class="input-group-append">
                    <button class="btn btn-outline-secondary plusbtn" id="plusbtn" type="button" data-product-id="' . $productID . '" onclick="incrementQuantity(this, ' . $productID . ', \'' . $productColor . '\')">
                        +
                    </button>
                </span>
            </div>';
            $productColor = str_replace('#', '', $productColor);
           
                           ?>
                        </td>
                        <td class="sumprice">
                           <del class="productDiscountPrice" id="productDiscountPrice-<?= $item['ProductID'] ?>-<?= $productColor ?>">₹<?php echo $item['ProductDiscountPrice'] * $qty; ?></del><br>
                           <span class="productPrice" id="productPrice-<?= $item['ProductID'] ?>-<?= $productColor ?>">₹<?php echo $item['ProductPrice'] * $qty; ?></span>
                        </td>
                     </tr>
                     <?php
                               $totalProuctAmount += $item['ProductPrice'] * $qty;
                               $totalProuctDiscountAmont += $item['ProductDiscountPrice'] * $qty;
                        ?>
                  <?php endforeach; ?>


                  <!-- Add more rows for other products -->
               </tbody>
            </table>
         </div>
         <!-- Right side for the order summary -->
         <div class="col-lg-3 orsumtop">
            <div class="card" style="border:none;">
               <div class="card-body ordsum">
                  <h2 class="card-title">Order Summary</h2>
                  <!-- Left-aligned order total -->
                  <hr style="border-top: 2px solid black; font-weight: bold;">
                  <!-- Add a horizontal line to separate sections -->
                  <div class="mb-2 d-flex justify-content-between">
                     <span>Price</span>
                     <span id="totalPrice">₹<?= $totalProuctAmount ?></span>
                  </div>
                  <div class="mb-2 d-flex justify-content-between">
                     <span>Shipping</span>
                     <span>₹1000</span>
                  </div>
                  <div class="mb-2 d-flex justify-content-between">
                     <span>Discount</span>
                     <span id="totalDiscountPrice">-₹<?= $totalProuctDiscountAmont ?></span>
                  </div>
                  <div class="mb-2 d-flex justify-content-between">
                     <span>Order Total</span>
                     <span>₹2,00,000</span>
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
                     <span id="finalPrice">₹<?= $totalProuctAmount ?></span>
                  </div>
                  <hr style="border-top: 2px solid black; font-weight: bold;">
                  <a href="<?= base_url() ?>checkout" <?php if (empty($cart)) {
                                                         echo 'disabled';
                                                      } ?>>
                     <button class="btn checkoutbtn btn-block" <?php if (empty($cart)) {
                                                                  echo 'disabled';
                                                               } ?>>Checkout</button></a>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php include_once('includes/footer.php') ?>
<?php include_once('includes/foot.php') ?>
</body>
<style>
   .userselectedClr {
      width: 51px;
      height: 19px;
      display: block;
      flex-direction: row;
      border: 1px solid #000;
   }
</style>
<script>
   function removeProductfromCart(productId, ProductColor) {
      // Send an AJAX request to remove the product from the cart

      $.ajax({
         url: baseUrl + 'Ajax/removeProductfromCart', // Replace with your server-side endpoint
         type: 'POST',
         data: {
            productId: productId,
            ProductColor: ProductColor
         },
         success: function(response) {
            

            Swal.fire({
               position: 'top-end',
               title: 'Product removed from the cart',
               showConfirmButton: false,
               timer: 1500
            })

            setTimeout(function() {
               location.reload();
            }, 1500);

         },


         error: function(xhr, status, error) {
            // Handle errors, if any
            alert('Error removing the product from the cart');
         }
      })
   }

   function incrementQuantity(button, pID, productColor) {
      var inputField = button.parentNode.parentNode.querySelector('.productcountno');
      var currentValue = parseInt(inputField.value);
      var productId = inputField.getAttribute('data-product-id');
      inputField.value = currentValue + 1;
      console.log(productColor)

      // Send an AJAX request to update the quantity on the server
      $.ajax({
         url: baseUrl + 'Ajax/UpdateQuantity',
         type: 'POST',
         data: {
            productId: pID,
            quantity: currentValue,
            productColor: productColor,
            type: 'increment'
         },
         success: function(response) {
            // Product Price 
          
            var cleanColor = productColor.replace(/^#/, ''); 
           
            $('#productPrice-' + pID + '-' + cleanColor).text('₹' + parseFloat(response.productPrice));
            // Product Discount Price
            $('#productDiscountPrice-' + pID + '-' + cleanColor).text('₹' + response.productDiscountPrice);


            getTotalPrices()
         },
         error: function(xhr, status, error) {
            // Handle errors, if any
         }
      });
   }

   function decrementQuantity(button, pID, productColor) {
      var inputField = button.parentNode.parentNode.querySelector('.productcountno');
      var currentValue = parseInt(inputField.value);
      var productId = inputField.getAttribute('data-product-id');

      if (currentValue > 1) {
         inputField.value = currentValue - 1;

         // Send an AJAX request to update the quantity on the server
         $.ajax({
            url: baseUrl + 'Ajax/UpdateQuantity',
            type: 'POST',
            data: {
               productId: pID,
               quantity: currentValue - 1,
               productColor: productColor,
               type: 'decrement'
            },
            success: function(response) {
               // Product Price 
          
               var cleanColor = productColor.replace(/^#/, ''); 
             
               $('#productPrice-' + pID + '-' + cleanColor).text('₹' + parseFloat(response.productPrice));
               // Product Discount Price
               $('#productDiscountPrice-' + pID + '-' + cleanColor).text('₹' + response.productDiscountPrice);



               getTotalPrices()
            },
            error: function(xhr, status, error) {
               // Handle errors, if any
            }
         });
      }
   }
   // get Total Prices 
   function getTotalPrices() {

      function extractPrices(text) {
         // Match all numeric values with or without decimal points
         return text.match(/\d+(\.\d+)?/g) || [];
      }

      var productPrice = $('.productPrice').text();
      var productDiscountPrice = $('.productDiscountPrice').text();

      var productPrices = extractPrices(productPrice);
      var productDiscountPrices = extractPrices(productDiscountPrice);

      function calculateTotal(prices) {
         if (prices.length > 0) {
            return prices.reduce(function(total, price) {
               return total + parseFloat(price);
            }, 0);
         } else {
            return 0;
         }
      }

      var totalPrice = calculateTotal(productPrices);
      var totalDiscountedPrice = calculateTotal(productDiscountPrices);



      $('#totalPrice').text('₹' + totalPrice.toFixed(2));
      $('#orderTotalPrice').text('₹' + totalPrice.toFixed(2));
      $('#totalDiscountPrice').text('₹' + totalDiscountedPrice.toFixed(2) * 1);

   }
</script>

</html>