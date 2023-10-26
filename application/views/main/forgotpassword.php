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
            <img src="<?= base_url() ?>assets/main/images/brush.jpg" alt="">
         </div>

         <div class="product-info borlef"  style="height: 120px; padding-top:20px;">

       
            <h2  style="height: 120px; padding-top:20px;">Beds World Forgot Passowrd</h2>

            <form id="contact-form" method="post" class="p-4">
               <div class="">
                  <div class="col-lg-12 mb-2">
                     <input name="username" class="username" id="username" placeholder="User Name" type="text" class="mt-2">
                     <div class="error" id="error"></div>
                  </div>
                  <div class="col-lg-12 mb-5">
                     <input name="otp" class="otp mb-0" id="otp" placeholder="OTP" type="text" class="mt-2" style="display: none;">
                     <div class="error" id="otp-error"></div>
                  </div>

                  <div class="col-lg-12 mb-2">
                     <button type="submit" class="log-btn-sub forgotbutton">Forgot Password</button>
                     <a href="#" id="forogot-passowrd" class="log-btn-sub" style="display: none;">Submit</a>
                     <div id="ajax-loader"></div>
                  </div>
               </div>
            </form>

            <p class="register-text">Login | Register</p>


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
      margin-bottom: 0px !important;
      text-align: left !important;
      justify-content: start;
      display: flex;
      color: red;
   }

   .username {
      margin: 0 !important;
   }

   .green {
      color: green;
   }

   #ajax-loader {
      display: none;
      height: 50px;
      width: 50px;
      margin: auto;
      border-radius: 50%;
      border: 5px solid #ddd;
      border-top-color: #333;
      animation: rotate 1s infinite;
   }

   @keyframes rotate {
      100% {
         rotate: 360deg;
      }
   }
</style>
<script>
   $(document).ready(function() {
    otp = ''; // Initialize the global variable here
    $('#error').hide();

    $('#contact-form').validate({
        rules: {
            username: {
                required: true,
            },
        },
        messages: {
            username: {
                required: 'Please enter your username.',
            },
        },
        submitHandler: function(form) {
            // If the form is valid, you can submit it via AJAX
            $('#forogot-passowrd').hide()
            $('.forgotbutton').hide()
            $('#ajax-loader').show()
            $.ajax({
                type: 'POST',
                url: baseUrl + 'Auth/forgotPassowrdProcess',
                data: $(form).serialize(),
                success: function(response) {
                    // Handle the response from the server

                    if (response.success == true) {
                        $('.forgotbutton').hide()
                        $('#error').show()
                        $('#error').text(response.message)
                        $('#error').addClass('green')
                        $('#forogot-passowrd').show()
                        $('#ajax-loader').hide()
                        $('#forogot-passowrd').show()
                        $('#otp').show();

                        otp = response.otp; // Assign the value to the global variable

                    } else {
                        $('#error').show()
                        $("#username-error").remove()
                        $('#error').text(response.message)
                        $('.username').val('')
                        $('.forgotbutton').show()
                        $('#ajax-loader').hide()
                    }
                },
                error: function(xhr, status, error) {
                    // Handle errors (e.g., show an error message)
                    console.error(xhr.responseText);
                    $('.forgotbutton').hide()
                    $('#ajax-loader').hide()
                }
            });
            return false; // Prevent the default form submission
        }
    });

    $("#forogot-passowrd").click(function(event) {
        console.log(otp)
        event.preventDefault();
        $('#forogot-passowrd').hide()
        $('#ajax-loader').show()
        var userOtp = $('#otp').val()
        var username = $('#username').val()
        if (otp == userOtp) {
            // If the OTP is correct, send an AJAX request here
            $.ajax({
                type: "POST",
                url: baseUrl + "Ajax/SendPassword",
                data: {
                    username: username,
                    otp: otp
                },
                success: function(response) {
                    if (response.success == true) {
                        Swal.fire('Please check your email. We have sent a new password to your registered email address.');
                        location.reload()
                    } else {

                    }
                },
                error: function(xhr, textStatus, errorThrown) {
                    console.error("AJAX Error:", textStatus, errorThrown);
                }
            });
        } else {
            $('#forogot-passowrd').show()
            $('#ajax-loader').hide()
            $('#otp-error').text('Please Enter Valid OTP');
        }
    });
});

</script>
</body>

</html>