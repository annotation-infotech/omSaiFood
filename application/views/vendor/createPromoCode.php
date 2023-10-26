<!DOCTYPE html>
<html lang="zxx">

<head>


    <title>Create Category</title>

    <?php include_once('includes/head.php') ?>
</head>

<body class="crm_body_bg">
    <?php include_once('includes/sidebar.php') ?>

    <section class="main_content dashboard_part large_header_bg">

        <?php include_once('includes/header.php') ?>

        <div class="main_content_iner ">
            <div class="container-fluid p-0">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="white_card card_height_100 mb_30">
                            <div class="white_card_header">
                                <div class="box_header m-0">
                                    <div class="main-title">
                                        <h3 class="m-0">Create PromoCode Form</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="white_card_body">
                                <form id="promoCodeForm">
                                    <div class="mb-3">
                                        <label class="form-label" for="PromoCode">PromoCode</label>
                                        <input name="PromoCode" class="form-control" id="PromoCode" placeholder="Add Promocode">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="PromoCode">Add Offer Amount</label>
                                        <input name="PromoCodeAmount" class="form-control" id="PromoCodeAmount" placeholder="Add Offer Amount">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="Description">Description</label>
                                        <textarea name="Description" class="form-control" id="Description" placeholder="Add Description"></textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="StartDate">Start Date</label>
                                        <input type="date" name="StartDate" class="form-control" id="StartDate">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="ExpiryDate">Expiry Date</label>
                                        <input type="date" name="ExpiryDate" class="form-control" id="ExpiryDate">
                                    </div>

                                    <button type="submit" class="btn btn-primary">Create</button>
                                </form>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once('includes/footer.php') ?>

    </section>



    <div id="back-top" style="display: none;">
        <a title="Go to Top" href="#">
            <i class="ti-angle-up"></i>
        </a>
    </div>



    <?php include_once('includes/foot.php') ?>
    <script>
$(document).ready(function() {
    // Initialize form validation
    $("#promoCodeForm").validate({
        rules: {
            PromoCode: "required",
            Description: "required",
            PromoCodeAmount: 'required',
            StartDate: "required",
            ExpiryDate: "required"
        },
        messages: {
            PromoCode: "Please enter a promo code",
            Description: "Please enter a description",
            PromoCodeAmount: "Please enter a promo code offer amount",
            StartDate: "Please select a start date",
            ExpiryDate: "Please select an expiry date"
        },
        submitHandler: function(form) {
            // Serialize form data
            var formData = $(form).serialize();

            // Submit form data via AJAX
            $.ajax({
                type: "POST",
                url: baseUrl + "VAjax/addPromoCode",
                data: formData,
                success: function(response) {
                    if (response.success == true) {
                            Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: response.message,
                            showConfirmButton: false,
                            timer: 1500
                            })
                        }
                    
                }
            });
        }
    });
});
</script>
<style>
    .error{
        color: red;
    }
</style>
</body>

</html>