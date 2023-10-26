<!DOCTYPE html>
<html lang="en">
<?php include_once('includes/head.php') ?>
<?php include_once('includes/header.php') ?>
<style>
   .register-text {
      text-align: center;
      line-height: 40px;
   }
</style>

<!-- -----------------------------------------Banner Section start-------------------------------------------- -->
<!-- --------------------------------------product Details section start--------------------------------- -->
<section class="contact pt-5 pb-5">
   <div class="container">
      <div class="contactcard row p-0" style="text-align:center;">

         <div class="cardleft col-lg-4 p-0">
            <img src="<?= base_url() ?>assets/main/images/loginbed.jpg" alt="">
         </div>

         <div class="product-info borlef">

            <h2 class="pt-5" style="font-size: 44px;color: #1f6f69;font-weight: 800;">Beds World</h2>

            <form id="contact-form" action="<?php echo base_url('Auth/userlogin_auth'); ?>" method="post" class="p-4">
    <div class="">
        <div class="col-lg-12 mb-2">
            <input name="username" placeholder="User Name" type="text" class="mt-2" value="<?php echo set_value('username'); ?>">
            <?php echo form_error('username', '<span class="text-danger">', '</span>'); ?>
        </div>
        <div class="col-lg-12 mb-2">
            <input name="password" placeholder="Password" type="password" class="mt-2" value="<?php echo set_value('password'); ?>">
            <?php echo form_error('password', '<span class="text-danger">', '</span>'); ?>
            <?php
            if ($this->session->flashdata('error')) {
                echo '<span class="text-danger">' . $this->session->flashdata('error') . '</span>';
            }
            ?>
        </div>
        <div class="col-lg-12 mb-2">
            <button type="submit" class="log-btn-sub">Login</button>
        </div>
    </div>
</form>



            <p class="register-text"><a href="<?= base_url() ?>register">Register</a> | <a href="<?= base_url() ?>forgotpassword">Forgot Password?</a></p>


         </div>
      </div>
   </div>
   </div>
</section>
<!-- --------------------------------------product Details section end--------------------------------- -->


<?php include_once('includes/footer.php') ?>
<?php include_once('includes/foot.php') ?>
<style>
   .error {
      margin-bottom: 5px !important;
      text-align: left !important;
      justify-content: start;
      display: flex;
      color: red;
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