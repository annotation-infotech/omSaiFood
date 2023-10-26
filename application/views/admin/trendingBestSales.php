<!DOCTYPE html>
<html lang="zxx">

<head>


    <title>Product List</title>

    <?php include_once('includes/head.php') ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">
</head>

<body class="crm_body_bg">
    <?php include_once('includes/sidebar.php') ?>

    <section class="main_content dashboard_part large_header_bg">

        <?php include_once('includes/header.php') ?>

        <div class="main_content_iner ">
            <div class="container-fluid p-0">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="white_card card_height_100 mb_30">

                            <div class="white_card_body">
                                <div class="QA_section">
                                    <div class="white_box_tittle list_header">
                                        <h4>Total Products</h4>

                                    </div>
                                    <div class="QA_table mb_30">

                                        <table class="table lms_table_active ">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Sr</th>
                                                    <th scope="col"> Category</th>
                                                    <th scope="col">Product Name</th>



                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $sr = 0;
                                                foreach ($products as $key => $value) {
                                                    $sr++;

                                                ?>
                                                    <tr>
                                                        <th scope="row" tabindex="0" class="sorting_1"> <a href="#" class="question_content"> <?= $sr ?></a></th>
                                                        <td><?= $value['CategoryName'] ?></td>
                                                        <td><?= $value['ProductName'] ?></td>





                                                        <td>
                                                            <?php if ($value['trending'] == 1) { ?>
                                                                <button class="btn btn-success" onclick="trending(this, '<?= $value['ProductID'] ?>')" data-product-id="<?= $value['ProductID'] ?>">Remove Trending</button>
                                                            <?php } else { ?>
                                                                <button class="btn btn-danger" onclick="trending(this, '<?= $value['ProductID'] ?>')" data-product-id="<?= $value['ProductID'] ?>">Add Trending</button>
                                                            <?php } ?>

                                                            <?php if ($value['bestsale'] == 1) { ?>
                                                                <button class="btn btn-success" onclick="bestSales(this, '<?= $value['ProductID'] ?>')" data-product-id="<?= $value['ProductID'] ?>">Remove Best Sale</button>
                                                            <?php } else { ?>
                                                                <button class="btn btn-danger" onclick="bestSales(this, '<?= $value['ProductID'] ?>')" data-product-id="<?= $value['ProductID'] ?>">Add Best Sale</button>
                                                            <?php } ?>


                                                            
                                                        </td>

                                                    </tr>

                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            // Function to open the modal for adding/updating images

            $(".addImageBtn, .updateImageBtn").click(function() {
                var productId = $(this).data("product-id");
                var isUpdate = $(this).hasClass("updateImageBtn");
                console.log(productId)
                // Open the modal with productId and action (Add or Update)
                openImageModal(productId, isUpdate);
            });

            // Function to open the modal
            function openImageModal(productId, isUpdate) {
                $("#myModal").modal("show");

                // Set the action (Add or Update) in a hidden input field
                $("#action").val(isUpdate ? "update" : "add");

                // Set the productId in a hidden input field
                $("#productId").val(productId);
            }

            var formData = new FormData();

            document.getElementById('ProductImages').addEventListener('change', function() {
                const fileList = this.files;
                if (fileList.length > 0) {
                    for (let i = 0; i < fileList.length; i++) {
                        formData.append("ProductImages[]", fileList[i]); // Append each file to formData
                    }
                }
            });

            // Handle form submission
            $("#submitImageBtn").click(function() {
                productId = $("#productId").val();

                formData.append("productId", productId);

                console.log(formData);

                $.ajax({
                    type: "POST",
                    url: baseUrl + "Ajax/uploadImage", // Replace with your server endpoint
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        // Handle the AJAX response here
                        alert("Images added/updated successfully");
                        // $("#myModal").modal("hide");
                    },
                    error: function(xhr, status, error) {
                        alert("An error occurred while uploading images");
                        console.error(xhr.responseText);
                    }
                });
            });
        });
        $(document).ready(function() {
            $('#ProductImages').change(function() {
                var imagePreview = $('#imagePreview');

                // Loop through selected files and display them
                for (var i = 0; i < this.files.length; i++) {
                    var file = this.files[i];
                    if (file.type.match('image.*')) {
                        var reader = new FileReader();
                        reader.onload = function(e) {
                            var imageContainer = $('<div>').addClass('image-container');
                            var image = $('<img>').attr('src', e.target.result).addClass('img-thumbnail');
                            var removeButton = $('<button>').text('X').addClass('remove-button');

                            // Add click event to remove button
                            removeButton.click(function() {
                                imageContainer.remove();
                            });

                            imageContainer.append(image, removeButton);
                            imagePreview.append(imageContainer);
                        };
                        reader.readAsDataURL(file);
                    }
                }
            });
        });
    </script>
    <script>
        // function trending(event, product_id){
        //     console.log(product_id);
        // }
        // function bestSales(event, product_id){
        //     console.log(product_id);
        // }

        // Function to update trending products using AJAX
        function trending(event, product_id) {

            $.ajax({
                type: "POST",
                url: baseUrl + "Ajax/UpdateTrending",
                data: {
                    product_id: product_id,
                    trending: 1
                },
                success: function(response) {
                    // Handle the success response if needed
                    console.log(response);
                    location.reload()

                },
                error: function(error) {
                    // Handle any errors if needed
                    console.error(error);
                }
            });

        }

        // Function to update best sales using AJAX
        function bestSales(event, product_id) {
            // Make an AJAX request to update the 'best_sales' status of the product_id
            $.ajax({
                type: "POST",
                url: baseUrl + "Ajax/UpdateBestSale",
                data: {
                    product_id: product_id
                },
                success: function(response) {
                    // Handle the success response if needed
                    console.log(response);
                    // Update the button text or styling, for example:
                        location.reload()
                },
                error: function(error) {
                    // Handle any errors if needed
                    console.error(error);
                }
            });
        }
    </script>
    <style>
        .error {
            color: red;
        }

        .product-images {
            display: flex;
            gap: 10px;
        }

        /* Style for the image container */
        #imagePreview {
            display: flex;
            flex-wrap: wrap;
        }

        /* Style for individual image containers */
        .image-container {
            position: relative;
            margin: 5px;
        }

        /* Style for the remove button */
        .remove-button {
            position: absolute;
            top: 0;
            right: 0;
            background-color: rgba(255, 0, 0, 0.7);
            /* Red background color with transparency */
            color: white;
            border: none;
            border-radius: 50%;
            padding: 5px 10px;
            cursor: pointer;
        }

        /* Style for the image itself */
        img {
            max-width: 100px;
            /* Set the maximum width of the image container */
            max-height: 100px;
            /* Set the maximum height of the image container */
        }

        .form-label {
            margin-bottom: 0.5px;
        }

        .dot-container {
            display: flex;
            gap: 10px;
        }

        .dot {
            box-shadow: rgba(0, 0, 0, 0.06) 0px 2px 4px 0px inset;
            width: 25px;
            height: 25px;
            border-radius: 50%;
        }
    </style>
</body>

</html>