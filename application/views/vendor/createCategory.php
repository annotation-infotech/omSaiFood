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
                                        <h3 class="m-0">Create Cateogy Form</h3>
                                    </div>
                                    <div class="main-title">
                                        <a href="<?php echo base_url()?>UploadCategories">Upload Excel</a>
                                    </div>
                                </div>
                            </div>
                            <div class="white_card_body">

                                <form id="categoryForm">
                                    <div class="mb-3">
                                        <label class="form-label" for="RoomSegregation">Add Room Segregation</label>
                                        <input type="text" name="RoomSegregation" class="form-control" id="RoomSegregation" aria-describedby="emailHelp" placeholder="Add Room Segregation">
                                        <div id="nameError" class="text-danger"></div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="CategoryName">Add Product Category</label>
                                        <input type="text" name="CategoryName" class="form-control" id="CategoryName" aria-describedby="emailHelp" placeholder="Add Category Name">
                                        <div id="nameError" class="text-danger"></div>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="SubCategoryName">Add Product SubCategory</label>
                                        <input type="text" name="SubCategoryName" class="form-control" id="SubCategoryName" aria-describedby="emailHelp" placeholder="Add SubCategory Name">
                                        <div id="nameError" class="text-danger"></div>
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
            // Handle form submission
            $('#categoryForm').submit(function(e) {
                e.preventDefault(); // Prevent default form submission

                // Clear previous errors
                $('#nameError').text('');

                // Get input value
                var roomSegregation = $('#RoomSegregation').val();
                var categoryName = $('#CategoryName').val();
                var SubCategoryName = $('#SubCategoryName').val();

                // Perform client-side validation
                if (!roomSegregation) {
                    $('#nameError').text('Category Name is required');
                    return;
                }

                // AJAX request to submit the form data
                $.ajax({
                    type: 'POST', // Change the method as needed
                    url: '<?= base_url() ?>VAjax/create_category', // Replace with your server endpoint
                    data: {
                        RoomSegregation:roomSegregation,
                        CategoryName: categoryName,
                        SubCategoryName: SubCategoryName
                    },
                    success: function(response) {
                        // Handle success response from the server
                        //  console.log(response.success == true);
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
                        alert('An error occurred while creating the category');
                        console.error(xhr.responseText);
                    }
                });
            });
        });
    </script>
</body>

</html>