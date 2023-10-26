<!DOCTYPE html>
<html lang="en">
<?php include_once('includes/head.php') ?>
<?php include_once('includes/header.php') ?>

<div class="secbill p-5">
    <div class="container-fluid summary">
        <div class="row">
            <?php
            $totalProductAmount = 0;
            $totalProductDiscountAmount = 0;

            foreach ($cart as $item) {
                // Calculate the total product amount by multiplying the price by the quantity
                $productAmount = $item['ProductPrice'] * $item['ProductQuantity'];

                $productDiscountAmount = $item['ProductDiscountPrice'] * $item['ProductQuantity'];

                // Add the calculated product amount to the total
                $totalProductAmount += $productAmount;

                // Add the discounted price to the total discounted amount
                $totalProductDiscountAmount += $productDiscountAmount;
            }

            // Now $totalProductAmount contains the total price and $totalProductDiscountAmount contains the total discounted price
            ?>

            <!-- Left side for the shopping cart -->
            <div class="col-lg-9 p-5">
                <div class="address-cards">
                    <div class="row w-100">
                        <?php foreach ($user_address as $address) { ?>
                            <div class="col-lg-4">
                                <div class="address-card " data-address-id="<?php echo $address['id']; ?>">
                                    <div class="address-details">
                                        <p><strong>Email:</strong> <?php echo $address['email']; ?></p>
                                        <p><strong>Phone:</strong> <?php echo $address['phoneno']; ?></p>
                                        <p><strong>Address:</strong> <?php echo $address['address1']; ?>, <?php echo $address['address2']; ?></p>
                                        <p><strong>City:</strong> <?php echo $address['city']; ?></p>
                                        <p><strong>State:</strong> <?php echo $address['state']; ?></p>
                                        <p><strong>Pincode:</strong> <?php echo $address['pincode']; ?></p>
                                        <p><strong>Country:</strong> <?php echo $address['country']; ?></p>
                                    </div>
                                    <button class="select-address-btn">Select</button>
                                </div>
                            </div>
                        <?php } ?>
                    </div>

                </div>
                <h2 style="pt-2">Add Shipping Address</h2>
                <form class="addressform" id="addressForm">
                    <!-- First Row -->
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" value="<?= $user_info['UserFirstName'] . ' ' . $user_info['UserLastName'] ?>" readonly>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="phoneno">Phone No.</label>
                                <input type="tel" class="form-control" id="phoneno" name="phoneno" placeholder="Enter your phone number">
                            </div>
                        </div>
                    </div>
                    <!-- Second Row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="address1">Address Line 1</label>
                                <input type="text" class="form-control" id="address1" name="address1" placeholder="Enter your address line 1">
                            </div>
                        </div>
                    </div>
                    <!-- Third Row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="address2">Address Line 2</label>
                                <input type="text" class="form-control" id="address2" name="address2" placeholder="Enter your address line 2">
                            </div>
                        </div>
                    </div>
                    <!-- Fourth Row -->
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="city">City</label>
                                <input type="text" class="form-control" id="city" name="city" placeholder="Enter your city">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="state">State</label>
                                <input type="text" class="form-control" id="state" name="state" placeholder="Enter your state">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="pincode">Pincode</label>
                                <input type="text" class="form-control" id="pincode" name="pincode" placeholder="Enter your pincode">
                            </div>
                        </div>
                    </div>
                    <!-- Fifth Row -->
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="country">Country</label>
                                <input type="text" class="form-control" id="country" name="country" placeholder="Enter your country">
                            </div>
                        </div>
                    </div>
                    <!-- Save Button -->
                    <div class="row">
                        <div class="col-lg-12">
                            <button class="btn subaddress" id="saveAddressBtn">Save Address</button>
                        </div>
                    </div>
                </form>
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
                            <span>Order Total</span>
                            <span id="orderTotalPrice">₹<?= $totalProductAmount ?></span>
                        </div>
                        <hr style="border-top: 2px solid black; font-weight: bold;">
                        <!-- Add a horizontal line to separate sections -->
                        <div class="mb-2">
                            Promo Code
                            <div>
                                <input type="text" class="form-control promo" placeholder="Promo Code" name="promo_code" id="promo_code">
                                <span class="promo_code_error text-danger"></span>
                            </div>
                            <button class="btn promobtn mt-2 " onclick="checkPromoCode()">Apply</button>
                        </div>
                        <hr style="border-top: 2px solid black; font-weight: bold;">
                        <!-- Add another horizontal line -->
                        <!-- Right-aligned total price -->
                        <div class="mb-2 d-flex justify-content-between">
                            <span>Total Price</span>
                            <span id="finalPrice">₹<?= $totalProductAmount ?></span>
                        </div>
                        <hr style="border-top: 2px solid black; font-weight: bold;">
                        <div class="confirm-order d-flex justify-content-end">
                            <!-- <a href="<?php echo base_url() ?>orderOverview" class="btn promobtn mt-2 " style="color: #fff;">Confirm Order</a> -->
                            <button onclick="confirmOrder()">Confirm Order</button>
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
        // Initialize form validation
        $("#addressForm").validate({
            rules: {
                name: "required",
                email: {
                    required: true,
                    email: true
                },
                phoneno: {
                    required: true,
                    digits: true, // Allow only digits
                    minlength: 10, // Minimum length of 10 digits
                    maxlength: 10 // Maximum length of 10 digits
                },
                address1: "required",
                address2: "required",
                city: "required",
                state: "required",
                pincode: {
                    required: true,
                    digits: true, // Allow only digits
                    minlength: 6, // Assuming a 6-digit pincode
                    maxlength: 6
                },
                country: "required"
            },
            messages: {
                name: "Please enter your name",
                email: {
                    required: "Please enter your email",
                    email: "Please enter a valid email address"
                },
                phoneno: {
                    required: 'Please enter your mobile number',
                    digits: 'Please enter only digits',
                    minlength: 'Mobile number must be exactly 10 digits',
                    maxlength: 'Mobile number must be exactly 10 digits'
                },
                address1: "Please enter your address line 1",
                address2: "Please enter your address line 2",
                city: "Please enter your city",
                state: "Please enter your state",
                pincode: {
                    required: "Please enter your pincode",
                    digits: "Please enter only digits",
                    minlength: "Pincode must be 6 digits long",
                    maxlength: "Pincode must be 6 digits long"
                },
                country: "Please enter your country"
            },
            submitHandler: function(form) {
                // Serialize form data
                var formData = $(form).serialize();

                // Send form data via AJAX to the server
                $.ajax({
                    type: "POST",
                    url: baseUrl + "Ajax/AddUserAddress", // Replace with your server-side endpoint
                    data: formData,
                    success: function(response) {

                        if (response.status == 'success') {
                            Swal.fire({
                                position: 'top-end',

                                title: response.message,
                                showConfirmButton: false,
                                timer: 1500
                            })
                            setTimeout(function() {
               location.reload();
            }, 1500);
                        }
                    },
                    error: function(xhr, status, error) {
                        // Handle errors, if any
                        console.log('Error:', error);
                    }
                });
            }
        });
        $("#saveAddressBtn").click(function(event) {
            // Submit the form when the button is clicked
            $("#addressForm").submit();
        });
    });
</script>
<script>
    $(document).ready(function() {
        // Add click event handler for the "Select" button
        $('.select-address-btn').click(function() {
            // Remove any existing "selected" class from other cards
            $('.address-card').removeClass('selected');

            // Add the "selected" class to the clicked card
            $(this).closest('.address-card').addClass('selected');

            // Retrieve the selected address ID
            var selectedAddressId = $(this).closest('.address-card').data('address-id');

            // You can now use the selectedAddressId for further processing
            // For example, you can store it in a hidden input field or send it to the server via AJAX
        });
    });
    var promo = 0;

    function checkPromoCode() {
        // Get the promo code value
        var promoCode = $('#promo_code').val();

        // Check if promoCode is empty
        if (promoCode.trim() === '') {
            $('.promo_code_error').text('Please enter a promo code.');
            return; // Exit the function if promoCode is empty
        }

        // Send an AJAX request to check the promo code
        $.ajax({
            url: baseUrl + 'Ajax/checkPromoCode', // Replace with your server-side endpoint
            type: 'POST',
            data: {
                promoCode: promoCode
            },
            success: function(response) {
                if (response.status === 'success') {
                    $('.promo_code_error').text('Applied');
                    var amount = parseFloat(response.amount); // Convert response.amount to a numeric value
                    var finalAmount = parseFloat($('#orderTotalPrice').text().replace('₹', ''));
                    if (!isNaN(amount) && !isNaN(finalAmount)) {
                        // Both values are valid numbers 
                        var result = finalAmount - amount;
                        $('.promobtn').prop('disabled', true);
                        $('#finalPrice').text('₹' + result)
                        promo = $('#promo_code').val();
                    } else {

                        console.log('Invalid values for calculation');
                    }
                } else {
                    $('.promo_code_error').text('Invalid promo code.');
                }
            },
            error: function(xhr, status, error) {
                // Handle errors, if any
                alert('Error checking the promo code.');
            }
        });
    }
</script>
<script>
    var addressID = ''; // Initialize the variable

    $(document).ready(function() {
        $('.select-address-btn').click(function() {
            // Get the data-address-id attribute value from the parent .address-card
            var addressId = $(this).closest('.address-card').data('address-id');

            // Set the selected address ID to the global variable
            addressID = addressId;

            // Now, 'addressID' contains the selected address ID
            alert('Selected Address ID: ' + addressId);

            // You can use 'addressID' as needed, such as sending it via AJAX, etc.
        });
    });

    function confirmOrder() {
        // console.log(addressID);
        // console.log(promo);
        var redirectURL = "<?php echo base_url() ?>user/orderOverview/" + addressID + "/" + promo;
        window.location.href = redirectURL;
    }
</script>
<style>
    /* Add CSS styles for the address cards and selected card */
    .address-cards {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
    }

    .address-card {
        border: 1px solid #ddd;
        padding: 20px;
        border-radius: 5px;
        cursor: pointer;
        transition: border-color 0.3s, box-shadow 0.3s;
    }

    .address-card.selected {
        border-color: #007bff;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
    }

    .select-address-btn {
        background-color: #007bff;
        color: #fff;
        border: none;
        padding: 5px 10px;
        cursor: pointer;
        border-radius: 3px;
    }

    .select-address-btn:hover {
        background-color: #0056b3;
    }
</style>
<style>
    .error {
        margin-bottom: 5px !important;
        color: red;
    }
</style>
</body>

</html>