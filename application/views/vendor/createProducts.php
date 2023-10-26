<!DOCTYPE html>
<html lang="zxx">

<head>


    <title>Create Products</title>

    <?php include_once('includes/head.php') ?>
    <style>
        #ColorShadesList {
            display: flex;
            gap: 10px;
            margin: 1em;
        }

        #ProductTypeList,
        #ProductSizeList {
            display: flex;
            gap: 10px;
        }

        .product-type-item,
        .product-size-item {
            background-color: #0c6c68;
            color: #fff;
            height: min-content;
            padding: 7px;
            border-radius: 11px;
        }
    </style>
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
                                        <h3 class="m-0">Create Products Form</h3>
                                    </div>
                                    <div class="main-title">
                                        <a href="<?php echo base_url()?>UploadProducts">Upload Excel</a>
                                    </div>
                                </div>
                            </div>
                            <div class="white_card_body">

                                <form id="categoryForm" action="#">
                                    <div class="mb-3">
                                        <div class="mb-3">
                                            <label class="form-label" for="CategorySelect">Select Category</label>
                                            <select name="CategoryID" class="form-select" id="CategorySelect">
                                                <option value="">Select a category</option>
                                                <?php foreach ($categories as $category) : ?>
                                                    <option value="<?php echo $category['CategoryName']; ?>"><?php echo $category['CategoryName']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>


                                        <div class="mb-3" id="subCategoryDropdown">


                                        </div>


                                        <div class="mb-3">
                                            <label class="form-label" for="ProductName">Product Name</label>
                                            <input type="text" name="ProductName" class="form-control" id="ProductName" placeholder="Enter Product Name">
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="ColorShades">Color Shades</label>
                                            <input type="text" name="ColorShades" class="form-control" id="ColorShades" placeholder="Select or enter a color">
                                            <a id="AddColor" class="btn btn-primary mt-2">Add Color</a>
                                        </div>

                                        <div id="ColorShadesList">
                                            <!-- Color badges will be displayed here -->
                                        </div>


                                        <div class="mb-3">
                                            <label class="form-label" for="ProductType">Product Type</label>
                                            <input type="text" name="ProductType" class="form-control" id="ProductType" placeholder="Enter Product Type">
                                            <a id="AddProductType" class="btn btn-primary mt-2">Add Product Type </a>
                                        </div>
                                        <div id="ProductTypeList" class="form-control" style="height: 100px; overflow-y: auto;"></div>

                                        <div class="mb-3">
                                            <label class="form-label" for="ProductSize">Product Size</label>
                                            <input type="text" name="ProductSize" class="form-control" id="ProductSize" placeholder="Enter Product Size">
                                            <a id="AddProductSize" class="btn btn-primary mt-2">Add Product Size</a>
                                        </div>
                                        <div id="ProductSizeList" class="form-control" style="height: 100px; overflow-y: auto;"></div>



                                        <div class="mb-3">
                                            <label class="form-label" for="ProductDescription">Product Description</label>
                                            <textarea name="ProductDescription" class="form-control" id="ProductDescription" rows="4" placeholder="Enter Product Description"></textarea>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="Caution">Caution</label>
                                            <textarea name="Caution" class="form-control" id="Caution" rows="2" placeholder="Enter Caution"></textarea>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="Ingredients">Ingredients</label>
                                            <textarea name="Ingredients" class="form-control" id="Ingredients" rows="2" placeholder="Enter Ingredients"></textarea>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="AdditionalInformation">Additional Information (Shades | Weight)</label>
                                            <input type="text" name="AdditionalInformation" class="form-control" id="AdditionalInformation" placeholder="Enter Additional Information">
                                        </div>


                                        <button class="btn btn-primary">Create</button>
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
            $('#AddProductSize').click(function() {
                var productSize = $('#ProductSize').val().trim();

                if (productSize !== '') {
                    // Create a new span element with the text
                    var span = $('<span class="product-size-item">' + productSize + '</span>');

                    // Add a click event handler to remove the span when clicked
                    span.click(function() {
                        span.remove();
                    });

                    // Append the span to the ProductSizeList div
                    $('#ProductSizeList').append(span);

                    // Clear the input field
                    $('#ProductSize').val('');

                    // Scroll to the bottom to show new items
                    $('#ProductSizeList').scrollTop($('#ProductSizeList')[0].scrollHeight);
                }
            });
        });

        $(document).ready(function() {
            $('#AddProductType').click(function() {
                var productType = $('#ProductType').val().trim();

                if (productType !== '') {
                    // Create a new span element with the text
                    var span = $('<span class="product-type-item">' + productType + '</span>');

                    // Add a click event handler to remove the span when clicked
                    span.click(function() {
                        span.remove();
                    });

                    // Append the span to the ProductTypeList div
                    $('#ProductTypeList').append(span);

                    // Clear the input field
                    $('#ProductType').val('');

                    // Scroll to the bottom to show new items
                    $('#ProductTypeList').scrollTop($('#ProductTypeList')[0].scrollHeight);
                }
            });
        });


        $(document).ready(function() {
            var colorArray = []; // Array to store color shades

            $('#AddColor').click(function() {
                var selectedColor = $('#ColorShades').val(); // Get the selected color
                if (selectedColor) {
                    colorArray.push(selectedColor); // Add the color to the array
                    updateColorShadesList(); // Update the list of color badges
                    $('#ColorShades').val(''); // Clear the input field
                }
            });

            // Function to update the list of color badges
            function updateColorShadesList() {
                $('#ColorShadesList').empty(); // Clear the existing list

                // Iterate through the colorArray and create badges
                for (var i = 0; i < colorArray.length; i++) {
                    var backgroundColor = colorArray[i].substring(1); // Remove '#' from the color hash code
                    var colorBadge = $('<span style="background-color: #' + backgroundColor + '; border: 1px solid #0c6c68; cursor: pointer;" class="badge">' + colorArray[i] + '</span>');

                    // Add a click event handler to remove the color badge
                    colorBadge.click(function() {
                        var indexToRemove = colorArray.indexOf($(this).text());
                        if (indexToRemove !== -1) {
                            colorArray.splice(indexToRemove, 1); // Remove the color from the array
                            updateColorShadesList(); // Update the list of color badges
                        }
                    });

                    $('#ColorShadesList').append(colorBadge);
                }
            }


        });
    </script>
    <script>
        $(document).ready(function() {


            $('#categoryForm').validate({
                rules: {
                    CategoryID: 'required',
                    ProductName: 'required',
                    ProductDescription: 'required',
                    Caution: 'required',
                    Ingredients: 'required',

                },
                messages: {
                    CategoryID: 'Please select a category',
                    ProductName: 'Please enter a product name',
                    ProductDescription: 'Please enter a product description',
                    Caution: 'Please enter caution information',
                    Ingredients: 'Please enter ingredients',

                },
                submitHandler: function(form) {
                    // Serialize the form data
                    // Serialize the form data
                    var formData = $(form).serialize();

                    var colorCodes = [];
                    $('#ColorShadesList span').each(function() {
                        // Extract the color code from the text content
                        var colorCode = $(this).text().trim();
                        colorCodes.push(colorCode);
                    });

                    // Serialize the color codes into a JSON string
                    var colorCodesJson = JSON.stringify(colorCodes);

                    // Serialize the form data
                    var formData = $(form).serialize();

                    // Include the serialized color codes in the formData


                    // Serialize the product types data
                    var productTypesData = [];
                    $('.product-type-item').each(function() {
                        var productType = $(this).text().trim();
                        productTypesData.push(productType);
                    });

                    // Serialize the product sizes data
                    var productSizesData = [];
                    $('.product-size-item').each(function() {
                        var productSize = $(this).text().trim();
                        productSizesData.push(productSize);
                    });

                    // Include the serialized data in the formData
                    formData += '&colorCodes=' + colorCodesJson;
                    formData += '&productTypesData=' + JSON.stringify(productTypesData);
                    formData += '&productSizesData=' + JSON.stringify(productSizesData);


                    // AJAX request to submit the form data
                    $.ajax({
                        type: 'POST',
                        url: baseUrl + 'Ajax/create_product', // server endpoint
                        data: formData,

                        success: function(response) {
                            if (response.success == true) {
                                if (response.success == true) {
                                    Swal.fire({
                                        position: 'top-end',
                                        icon: 'success',
                                        title: response.message,
                                        showConfirmButton: false,
                                        timer: 1500, // Set the timer to 1500 milliseconds (1.5 seconds)
                              
                                    });
                                    setTimeout(function() {
                                window.location.reload();
                            }, 1500);
                                }
                            }
                            // location.reload()
                        },
                        error: function(xhr, status, error) {
                            alert('An error occurred while creating the category');
                            console.error(xhr.responseText);
                        }
                    });
                }
            });

        });

        $(document).ready(function() {
            // Store the initial options for Subcategory
            var initialSubCategoryOptions = $('#subCategoryDropdown').html();

            $('#CategorySelect').change(function() {
                var selectedCategoryName = $(this).val();
                var subCategorySelect = $('#subCategoryDropdown');

                // If no category is selected, reset the Subcategory dropdown
                if (selectedCategoryName === '') {
                    subCategorySelect.html(initialSubCategoryOptions);
                    return;
                }

                // Fetch and update the options for Subcategory based on the selected CategoryID
                $.ajax({
                    type: 'GET',
                    url: baseUrl + 'VAjax/getSubcategory', // Replace with the actual URL to fetch subcategories
                    data: {
                        selectedCategoryName: selectedCategoryName
                    },
                    success: function(data) {
                        // Update the SubCategorySelect dropdown with the fetched subcategories
                        subCategorySelect.html(data);
                    },
                    error: function() {
                        // Handle errors if necessary
                    }
                });
            });
        })
    </script>
    <style>
        .error {
            color: red;
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
    </style>

</body>

</html>