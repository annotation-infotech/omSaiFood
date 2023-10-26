<!DOCTYPE html>
<html lang="zxx">

<head>


    <title>Update/Create Products Price</title>

    <?php include_once('includes/head.php') ?>
    <style>
        #ColorShadesList {
            display: flex;
            gap: 10px;
            margin: 2em;
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
                                        <h3 class="m-0">Create/Update Products Price</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="white_card_body">

                                <form id="ProductPriceForm" action="#">
                                    <div class="mb-3">
                                        <div class="mb-3">
                                            <label class="form-label" for="ProductSelect">Select Product</label>
                                            <select name="ProductID" class="form-select" id="ProductSelect" required>
                                                <option value="">Select a category</option>
                                                <?php foreach ($products as $product) : ?>
                                                    <option value="<?php echo $product['ProductID']; ?>"><?php echo $product['ProductName']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="ProductColors">Product Colors</label>
                                            <select id="ProductColors" class="form-control" required>

                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="ProductType">Product Type</label>
                                            <select id="ProductType" class="form-control" required>

                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="ProductSize">Product Size</label>
                                            <select id="ProductSize" class="form-control" required>

                                            </select>
                                        </div>


                                        <div class="mb-3">
                                            <label class="form-label" for="ProductPrice">Product Price</label>
                                            <input type="text" name="ProductPrice" class="form-control" id="ProductPrice" placeholder="Enter Product Name">
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="DiscountedPrice">Product Discount Price</label>
                                            <input type="text" name="DiscountedPrice" class="form-control" id="DiscountedPrice" placeholder="Enter Product Name">
                                        </div>


                                        <div class="mb-3">
                                            <label class="form-label" for="ProductStock">Product Stock</label>
                                            <input type="text" name="ProductStock" class="form-control" id="ProductStock" placeholder="Enter Product Name">
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
            $('#AddPrice').click(function() {
                var productPrice = $('#ProductPrice').val().trim();

                if (productPrice !== '') {
                    // Append the product price to the textarea
                    $('#PriceList').append(productPrice + '\n');

                    // Clear the input field
                    $('#ProductPrice').val('');

                    // Add a visual indication (e.g., background color) to the added text
                    $('#PriceList').scrollTop($('#PriceList')[0].scrollHeight);
                }
            });



            // Handle clicks on the textarea content to remove text
            $('#PriceList').on('click', function(event) {
                if (event.target.tagName === 'TEXTAREA') {
                    return;
                }

                // Get the clicked text content
                var clickedText = event.target.textContent.trim();

                // Get the current content of the textarea
                var textareaContent = $('#PriceList').val();

                // Remove the clicked text from the textarea content
                var updatedContent = textareaContent.replace(clickedText, '').trim();

                // Update the textarea with the modified content
                $('#PriceList').val(updatedContent);
            });
        });
    </script>
    <script>
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
            $('#ProductPriceForm').validate({
                rules: {
                    ProductSelect: 'required',
                    ProductColors: 'required',
                    ProductType: 'required',
                    ProductSize: 'required',
                    ProductPrice: 'required',
                    DiscountedPrice: 'required',
                    ProductStock: 'required',

                },
                messages: {
                    ProductSelect: 'Please select a Product',
                    ProductColors: 'Please enter the product color',
                    ProductType: 'Please enter the product type',
                    ProductSize: 'Please enter the product size',
                    ProductPrice: 'Please enter the product price',
                    DiscountedPrice: 'Please enter the discounted price',
                    ProductStock: 'Please enter the product stock'

                },
                submitHandler: function(form) {
                    // Serialize the form data
                    var formData = $(form).serialize();

                    var selectedColor = $('#ProductColors').val();
                    var selectedType = $('#ProductType').val();
                    var selectedSize = $('#ProductSize').val();


                    formData += '&ProductColors=' + selectedColor;
                    formData += '&ProductType=' + selectedType;
                    formData += '&ProductSize=' + selectedSize;
              


                    // AJAX request to submit the form data
                    $.ajax({
                        type: 'POST',
                        url: baseUrl + 'Ajax/create_product_price', // Replace with the actual server endpoint
                        data: formData,
                        success: function(response) {
                            if (response.success == true) {
                                Swal.fire({
                                    position: 'top-end',
                                    icon: 'success',
                                    title: response.message,
                                    showConfirmButton: false,
                                    timer: 1500,
                           
                                });
                                setTimeout(function() {
                                window.location.reload();
                            }, 1500);
                            }
                        },
                        error: function(xhr, status, error) {
                            alert('An error occurred while creating/updating the product price');
                            console.error(xhr.responseText);
                        }
                    });
                }
            });
        });


        $(document).ready(function() {
            // Store references to the three dropdown elements
            var $colorDropdown = $('#ProductColors');
            var $typeDropdown = $('#ProductType');
            var $sizeDropdown = $('#ProductSize');

            // Store the initial options for each dropdown
            var initialColorOptions = $colorDropdown.html();
            var initialTypeOptions = $typeDropdown.html();
            var initialSizeOptions = $sizeDropdown.html();

            $('#ProductSelect').change(function() {
                var selectedProductName = $(this).val();

                // Fetch data for all three dropdowns using a single AJAX request
                $.ajax({
                    type: 'GET',
                    url: baseUrl + 'Ajax/getAllProductData', // Replace with the actual URL
                    data: {
                        selectedProductName: selectedProductName
                    },
                    dataType: 'json', // Expect JSON response
                    success: function(data) {
                        if (data) {
                            // Parse the string representations into arrays
                            var colors = JSON.parse(data.shades[0]);
                            var types = JSON.parse(data.types[0]);
                            var sizes = JSON.parse(data.sizes[0]);

                            // Update the options for each dropdown based on the received data
                            updateColorDropdownOptions($colorDropdown, colors, initialColorOptions);
                            updateDropdownOptions($typeDropdown, types, initialTypeOptions);
                            updateDropdownOptions($sizeDropdown, sizes, initialSizeOptions);
                        } else {
                            // Handle the case where no data is received or an error occurred
                            console.error('No data received or an error occurred.');
                        }
                    },
                    error: function(xhr, status, error) {
                        // Handle AJAX errors here, e.g., display an error message
                        console.error('AJAX request error:', status, error);
                    }
                });
            });

            // Function to update dropdown options
            function updateDropdownOptions($dropdown, newData, initialOptions) {
                $dropdown.empty(); // Clear existing options
                $dropdown.append(initialOptions); // Restore initial options

                // Add new options from the received data
                newData.forEach(function(option) {
                    $dropdown.append('<option value="' + option + '">' + option + '</option>');
                });
            }


            // Function to update color dropdown options
            function updateColorDropdownOptions($dropdown, colors, initialOptions) {
                $dropdown.empty(); // Clear existing options
                $dropdown.append(initialOptions); // Restore initial options

                // Add new options with color code and colored box
                colors.forEach(function(color) {
                    var option = $('<option value="' + color + '"></option>');
                    var colorBox = $('<span class="color-box"></span>'); // Create a colored box
                    colorBox.css('background-color', color); // Set the background color of the box
                    option.append(colorBox); // Append the colored box to the option
                    option.append(' ' + color); // Append the color code text to the option
                    $dropdown.append(option); // Append the option to the dropdown
                });
            }

        });
    </script>
    <style>
        .error {
            color: red;
        }
    </style>

</body>

</html>