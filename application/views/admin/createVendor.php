<!DOCTYPE html>
<html lang="zxx">

<head>


    <title>Create Vendor</title>

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
                                        <h3 class="m-0">Create Vendor Form</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="white_card_body">

                                <form id="vendorForm">
                                    <div class="mb-3">
                                        <label class="mb-0 form-label" for="VendorName">Vendor Name</label>
                                        <input type="text" name="VendorName" class="form-control" id="VendorName" aria-describedby="emailHelp" placeholder="Vendor Name">
                                        <div id="nameError" class="text-danger"></div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="mb-0 form-label" for="VendorBrandName">Vendor Brand Name</label>
                                        <input type="text" name="VendorBrandName" class="form-control" id="VendorBrandName" aria-describedby="emailHelp" placeholder="Brand Name">
                                        <div id="nameError" class="text-danger"></div>
                                    </div>

                                    <div class="mb-3">
                                        <label class="mb-0 form-label" for="VendorMobileNumber">Vendor Mobile Number</label>
                                        <input type="text" name="VendorMobileNumber" class="form-control" id="VendorMobileNumber" aria-describedby="emailHelp" placeholder="Mobile Number">
                                        <div id="nameError" class="text-danger"></div>
                                    </div>


                                    <div class="mb-3">
                                        <label class="mb-0 form-label" for="VendorEMailID">Vendor Email ID</label>
                                        <input type="text" name="VendorEMailID" class="form-control" id="VendorEMailID" aria-describedby="emailHelp" placeholder="EMail ID">
                                        <div id="nameError" class="text-danger"></div>
                                    </div>


                                    <div class="mb-3">
                                        <label class="mb-0 form-label" for="VendorUserID">Vendor User ID</label>
                                        <input type="text" name="VendorUserID" class="form-control" id="VendorUserID" aria-describedby="emailHelp" placeholder="User ID">
                                        <div id="nameError" class="text-danger"></div>
                                    </div>


                                    <div class="mb-3">
                                        <label class="mb-0 form-label" for="VendorPassword">Vendor Passowrd</label>
                                        <input type="text" name="VendorPassword" class="form-control" id="VendorPassword" aria-describedby="emailHelp" placeholder="Password">
                                        <div id="nameError" class="text-danger"></div>
                                    </div>

                                    <div class="mb-3">
                                        <label class="mb-0 form-label" for="VendorConfirmPassword">Vendor Confirm Passowrd</label>
                                        <input type="text" name="VendorConfirmPassword" class="form-control" id="VendorConfirmPassword" aria-describedby="emailHelp" placeholder="Confirm Passowrd">
                                        <div id="nameError" class="text-danger"></div>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Create Vendor</button>
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

    <style>
        .error {
            color: red;
        }
    </style>

    <?php include_once('includes/foot.php') ?>
    <script>
        $(document).ready(function() {
            $('#vendorForm').validate({
                rules: {
                    VendorName: {
                        required: true
                    },
                    VendorBrandName: {
                        required: true
                    },
                    VendorMobileNumber: {
                        required: true,
                        number: true // Only allow numeric values
                    },
                    VendorEMailID: {
                        required: true,
                        email: true
                    },
                    VendorUserID: {
                        required: true
                    },
                    VendorPassword: {
                        required: true
                    },
                    VendorConfirmPassword: {
                        required: true,
                        equalTo: "#VendorPassword"
                    }
                },
                messages: {
                    VendorName: "Vendor Name is required",
                    VendorBrandName: "Vendor Brand Name is required",
                    VendorMobileNumber: {
                        required: "Vendor Mobile Number is required",
                        number: "Please enter a valid numeric value"
                    },
                    VendorEMailID: {
                        required: "Vendor Email ID is required",
                        email: "Please enter a valid email address"
                    },
                    VendorUserID: "Vendor User ID is required",
                    VendorPassword: "Vendor Password is required",
                    VendorConfirmPassword: {
                        required: "Vendor Confirm Password is required",
                        equalTo: "Passwords do not match"
                    }
                },
                submitHandler: function(form) {
                    // AJAX request to submit the form data
                    $.ajax({
                        type: 'POST', // Change the method as needed
                        url: '<?= base_url() ?>Ajax/create_vendor', // Replace with your server endpoint
                        data: $(form).serialize(),
                        success: function(response) {
                            // Handle success response from the server
                            if (response.success == true) {
                                Swal.fire({
                                    position: 'top-end',
                                    icon: 'success',
                                    title: response.message,
                                    showConfirmButton: false,
                                    timer: 1500
                                });

                                // Use setTimeout to reload the page after 1500 milliseconds (1.5 seconds)
                                setTimeout(function() {
                                    window.location.reload();
                                }, 1500);
                            }
                        },
                        error: function(xhr, status, error) {
                            // Handle error response from the server
                            alert('An error occurred while creating the vendor');
                            console.error(xhr.responseText);
                        }
                    });
                }
            });
        });
    </script>
</body>

</html>