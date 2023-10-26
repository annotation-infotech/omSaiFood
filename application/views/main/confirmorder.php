 <!DOCTYPE html>
 <html lang="en">
 <?php include_once('includes/head.php') ?>
 <?php include_once('includes/header.php') ?>
 <style>
    @media screen and (max-width: 476px) {
       .register-text {
          line-height: 30px !important;
       }

       .gfsign button {
          color: white;
          background: #a25359;
          border: 1px solid #a25359;
          border-radius: 10px;
          padding: 5px 11px;
          font-weight: 400;
          font-size: 10px;

       }
    }
 </style>
 <style>
    .register-text {
       text-align: center;
       line-height: 40px;
    }

    .confirmord {
       padding: 20px;
    }

    .gfsign .buttons {
       color: white !important;
       background: #0c6c68;
       border: 1px solid #0c6c68;
       border-radius: 10px;
       padding: 5px 11px;
       font-weight: 400;
       font-size: 10px;

    }
 </style>
 <!-- -----------------------------------------Banner Section start-------------------------------------------- -->
 <!-- --------------------------------------product Details section start--------------------------------- -->
 <section class="contact pt-5 pb-5">
    <div class="container">
       <div class="contactcard row p-0" style="text-align:center;">
          <div class="product-info confirmord">
             <img src="<?= base_url() ?>assets/main/images/tick.svg" alt="" style="height: 80px;">
             <h2>Order Confirmed</h2>
             <p class="register-text" style="line-height: 20px;"><a href="#">Order Number <br>
                   <?= $order_data[0]['OrderNumber'] ?>
             </p>
             <p class="register-text" style="color: #0c6c68;
                  font-weight: 700;
                  font-size: 20px;
                  line-height: 40px;">Thank You For Shopping</p>
             <p class="register-text" style="line-height: 20px; font-size:13px"><a href="#">
                   We will be sharing you an email confirmation to <br>
                   <?= $user_info['UserEmail'] ?> shortly
             </p>
             <div class="gfsign pt-3">
                <a class="buttons" href="<?= base_url() ?>">Continue Shopping</a>
               
             </div>
          </div>
       </div>
    </div>
    </div>
 </section>
 
 <!-- --------------------------------------product Details section end--------------------------------- -->
 <?php include_once('includes/footer.php') ?>
 <?php include_once('includes/foot.php') ?>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>
 <style>
    .error {
       margin-bottom: 5px !important;
       text-align: left !important;
       justify-content: start;
       display: flex;
       color: red;
    }

    .share {
       display: flex;
       justify-content: space-evenly;
    }

    .modal-header {
       justify-content: space-between;
       align-items: center;
    }

    .modal-header .close {
       margin: -1rem -1rem -1rem 0 !important;
    }
 </style>
  
 <script>
    // Use jQuery Validate to validate the form
    //   $(document).ready(function () {
    //       $('#contact-form').validate({
    //           rules: {
    //             username: {
    //                   required: true,
    //                   minlength: 2 // Minimum length for the name field
    //               },
    //               password: {
    //                   required: true,

    //               }
    //           },
    //           messages: {
    //             username: {
    //                   required: 'Please enter your username.',
    //                   minlength: 'Name must be at least 2 characters long.'
    //               },
    //               password: {
    //                   required: 'Please enter a valid Passowrd.',

    //               }
    //           },
    //           submitHandler: function (form) {
    //               // If the form is valid, you can submit it via AJAX
    //               $.ajax({
    //                   type: 'POST',
    //                   url: baseUrl + 'Auth/userlogin_auth',
    //                   data: $(form).serialize(),
    //                   success: function (response) {
    //                      // Handle the response from the server
    //                      console.log(response);
    //                      if (response.success == true) {
    //                            // Redirect the user to the specified URL
    //                            window.location.href = response.redirect_url;
    //                      } else {
    //                            // Handle login failure (e.g., display an error message)
    //                      }
    //                   },
    //                   error: function (xhr, status, error) {
    //                       // Handle errors (e.g., show an error message)
    //                       console.error(xhr.responseText);
    //                   }
    //               });
    //               return false; // Prevent the default form submission
    //           }
    //       });
    //   });
 </script>
 </body>

 </html>