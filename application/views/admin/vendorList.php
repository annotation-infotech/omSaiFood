<!DOCTYPE html>
<html lang="zxx">

<head>


    <title>Vendor's List</title>

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
                                        <h4>Vendors List</h4>

                                    </div>
                                    <div class="QA_table mb_30">

                                        <table class="table lms_table_active ">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Sr</th>
                                                    <th scope="col"> Vendor Name</th>
                                                    <th scope="col">Brand Name</th>
                                                    <th scope="col">Mobile Number</th>
                                                    <th scope="col">EMail ID</th>
                                                    <th scope="col">User ID</th>
                                                    <th scope="col">Created Date</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $sr = 0;
                                                foreach ($vendorList as $key => $value) {
                                                    $sr++;

                                                ?>
                                                    <tr>
                                                        <th scope="row" tabindex="0" class="sorting_1"> <a href="#" class="question_content"> <?= $sr ?></a></th>
                                                        <td><?= $value['VendorName'] ?></td>
                                                        <td><?= $value['VendorBrandName'] ?></td>
                                                        <td><?= $value['VendorMobileNumber'] ?></td>
                                                        <td><?= $value['VendorEmailID'] ?></td>
                                                        <td><?= $value['VendorUserID'] ?></td>
                                                        <td><?= $value['created_at'] ?></td>
                                                        <td>
                                                            <?php if ($value['status'] == 1) : ?>
                                                                <button class="btn btn-sm btn-success" onclick="changeStatus(<?= $value['ID']; ?>, '0')">Active</button>
                                                            <?php elseif ($value['status'] == 0) : ?>
                                                                <button class="btn btn-sm btn-danger" onclick="changeStatus(<?= $value['ID']; ?>, '1')">Inactive</button>
                                                            <?php endif; ?>
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
    <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="modalTitle" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Custom Modal Title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Your form structure goes here -->
                    <form id="imageForm" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label class="form-label" for="ProductImages">Product Images (3 to 4)</label>
                            <input type="file" name="ProductImages[]" class="form-control" id="ProductImages" multiple accept="image/*">
                        </div>
                        <div id="imagePreview" class="mb-3">
                            <!-- Uploaded images will be displayed here -->
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" id="submitImageBtn" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>
    <span id="productId"></span>

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

        function changeStatus(sr, status) {
            // Create an AJAX request
            $.ajax({
               url: baseUrl + 'Ajax/updateVendorStatus', // Replace with your server-side endpoint
               type: 'POST',
               data: { sr: sr, status: status },
    
               success: function (response) {
                     // Handle the success response
                     if (response.status === 'success') {
                        // Update the UI or display a success message

                        Swal.fire({
                             icon: 'success',
                             title: 'Success!',
                             text: response.message,
                            
                         }).then((result) => {
                             if (result.isConfirmed) {
                                 location.reload();
                             }
                         });
                         
                     } else {
                        // Display an error message
                        alert(response.message);
                     }
               },
               error: function (xhr, status, error) {
                     // AJAX request failed
                     console.error('AJAX request failed. Status: ' + status + ', Error: ' + error);
               },
            
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