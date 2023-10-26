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

              
                <h2 class="mt-4">Beds World User Sign-up</h2>

                <form id="contact-form" class="p-2 registration-form">
                    <div class="">
                        <div class="col-lg-12 mb-2">
                            <input name="firstName" placeholder="First Name" type="text" class="mt-2">
                        </div>
                        <div class="col-lg-12 mb-2">
                            <input name="lastName" placeholder="Last Name" type="text" class="mt-2">
                        </div>
                        <div class="col-lg-12 mb-2">
                            <input name="mobileNumber" placeholder="Mobile Number" type="text" class="mt-2">
                        </div>
                        <div class="col-lg-12 mb-2">
                            <input name="emailID" placeholder="E-Mail ID" type="text" class="mt-2" id="emailID">
                        </div>
                        <div class="col-lg-12 mb-2">
                            <input name="userID" placeholder="User ID" type="text" class="mt-2" id="userID">
                            <span id="serverUnique-error" class="error"></span>
                           <div class="checkbox d-flex align-items-center">
                           <input name="useSameAsEmail" type="checkbox" id="use-same-as-email" class="mb-0" style="flex: 0.04;">
                          <small>  <label for="use-same-as-email">Use same as Email for User ID</label></small>
                           </div>
                        </div>
                        <div class="col-lg-12 mb-2">
                            <input name="password" placeholder="Password" type="password" class="mt-2">
                        </div>

                        <div class="col-lg-12 mb-2">
                            <input name="confirmPassword" placeholder="Confirm Password" type="password" class="mt-2">
                        </div>

                        <div class="col-lg-12 mb-2">

                            <button type="" class="log-btn-sub">Register</button>
                        </div>
                    </div>
                </form>

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

    form input {
        margin-bottom: 5px !important;
    }

    .cardleft img {
        height: 100%;
    }
</style>
<script>
$(document).ready(function() {
    // Define the removeHtmlTags function
    function removeHtmlTags(inputString) {
        if (inputString === undefined) {
            return ""; // Return an empty string if inputString is undefined
        }
        return inputString.replace(/<\/?[^>]+(>|$)/g, "");
    }

    $('.registration-form').validate({
        rules: {
            firstName: 'required',
            lastName: 'required',
            mobileNumber: {
                required: true,
                digits: true, // Allow only digits
                minlength: 10, // Minimum length of 10 digits
                maxlength: 10 // Maximum length of 10 digits
            },
            emailID: {
                required: true,
                email: true
            },
            userID: {
                required: function() {
                    return !$('#use-same-as-email').is(':checked');
                }
            },
            password: 'required',
            confirmPassword: {
                required: true,
                equalTo: '[name="password"]' // Confirm password must match password
            }
        },
        messages: {
            firstName: 'Please enter your first name',
            lastName: 'Please enter your last name',
            mobileNumber: {
                required: 'Please enter your mobile number',
                digits: 'Please enter only digits',
                minlength: 'Mobile number must be exactly 10 digits',
                maxlength: 'Mobile number must be exactly 10 digits'
            },
            emailID: {
                required: 'Please enter your email address',
                email: 'Please enter a valid email address'
            },
            userID: 'Please enter a user ID',
            password: 'Please enter a password',
            confirmPassword: {
                required: 'Please confirm your password',
                equalTo: 'Passwords do not match'
            }
        },
        submitHandler: function(form) {
            // If the form is valid, you can submit it via AJAX
            $.ajax({
                type: 'POST',
                url: baseUrl + 'Auth/register_process', // Replace with your server-side processing script
                data: $(form).serialize(),
                success: function(response) {
                    // Handle the response from the server (e.g., show a success message)
                    console.log(response)
                    if (response.success == true) {
                        location.href = baseUrl + 'User/index'
                    } else {
                        console.log(response)

                        var stringWithoutTags = removeHtmlTags(response.message);
                        $('#serverUnique-error').text(stringWithoutTags)
                    }
                },
                error: function(xhr, status, error) {
                    // Handle errors (e.g., show an error message)
                    console.error(xhr.responseText);
                }
            });
            return false; // Prevent the default form submission
        }
    });

    // Add event handler for the "use same as Email for User ID" checkbox
    $('#use-same-as-email').click(function() {
        if ($(this).is(':checked')) {
            // Copy the value from emailID to userID
            console.log($('#emailID').val())
            $('#userID').val($('#emailID').val());
        } else {
            $('#userID').val('');
        }
    });
});


  
</script>
</body>

</html>