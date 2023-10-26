<script data-cfasync="false" src="<?php echo base_url() ?>assets/main/../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="<?php echo base_url() ?>assets/main/js/3943-js-jquery-3.3.1.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>assets/main/js/9899-js-popper.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>assets/main/js/bootstrap-bootstrap.min.js" type="text/javascript"></script>

<script src="<?php echo base_url() ?>assets/main/js/owlcarousel-owl.carousel.min.js" type="text/javascript"></script>

<script src="<?php echo base_url() ?>assets/main/js/7054-js-parallaxie.js" type="text/javascript"></script>

<script src="<?php echo base_url() ?>assets/main/js/4952-js-jquery.appear.js"></script>

<script src="<?php echo base_url() ?>assets/main/js/452-js-jquery.magnific-popup.js"></script>

<script src="<?php echo base_url() ?>assets/main/js/8236-js-jquery-countTo.js"></script>

<!-- <script src="<?php echo base_url() ?>assets/main/js/4504-js-script.js" type="text/javascript"></script> -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.31/dist/sweetalert2.all.min.js"></script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<!-- <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script> -->


<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
<div class="loader" id="loader" style="display: none;"></div>

<script>
    let baseUrl = '<?= base_url() ?>';

    function getCartCount() {
        $.ajax({
            url: baseUrl + 'Ajax/getCartCount',
            type: 'GET',
            success: function(response) {
                console.log(response.cartCount)
                if (response.cartCount >= 1) {
                    $('.cartcount').attr('id', 'cart-counter').text(response.cartCount);
                } else {
                    console.log('not working');
                }
            },
            error: function(xhr, status, error) {
                // Handle errors
            }
        });
    }

    $(document).ready(function() {
        getCartCount(); // Call it on document ready

    });

    $(document).ready(function() {
        var selectedFilters = {
            type: [],
            size: [],
            color: [],
            material: []
        };

        // Function to update the selected filters based on user input
        function updateSelectedFilters() {
            selectedFilters.type = getSelectedFilterValues('type');
            selectedFilters.size = getSelectedFilterValues('size');
            selectedFilters.color = getSelectedFilterValues('color');
            selectedFilters.material = getSelectedFilterValues('material');

            // Call the filtering function to update the displayed products
            filterProducts();
        }

        // Function to get selected filters of a specific type (e.g., 'type', 'size', etc.)
        function getSelectedFilterValues(filterType) {

            var selected = [];
            $('input[type="checkbox"][data-filter="' + filterType + '"]:checked').each(function() {
                selected.push($(this).val());
            });
            console.log(selected)
            return selected;
        }

        // Function to filter products based on selected filters
        function filterProducts() {
            // Create an object with the selected filter values
            var filterData = {
                type: selectedFilters.type,
                size: selectedFilters.size,
                color: selectedFilters.color,
                material: selectedFilters.material,

            };
            if (typeof value === 'undefined') {
                filterData.requestType = '';
            } else {
                filterData.requestType = value;
            }
            //   console.log(filterData)
            $('#loader').show();
            // Make an AJAX request to fetch filtered products from the server
            $.ajax({
                url: "<?php echo base_url() ?>Ajax/getFilteredProduct", // Replace with the actual server-side script URL
                method: 'POST',
                data: filterData,
                success: function(response) {
                    $('#loader').hide();
                    $('#productList').html(response);
                },
                error: function() {
                    // Handle any errors
                    $('#loader').hide();
                }
            });
        }

        // Event listener for filter checkboxes
        $('input[type="checkbox"][data-filter]').on('change', function() {
            updateSelectedFilters();

        });

        // Initial call to load all products (you can replace this part with actual product data)
        filterProducts();
    });
</script>
<style>
    .loader {
        color: #000;
        font-size: 45px;
        text-indent: -9999em;
        overflow: hidden;
        width: 1em;
        height: 1em;
        border-radius: 50%;
        position: relative;
        transform: translateZ(0);
        animation: mltShdSpin 1.7s infinite ease, round 1.7s infinite ease;
    }

    @keyframes mltShdSpin {
        0% {
            box-shadow: 0 -0.83em 0 -0.4em,
                0 -0.83em 0 -0.42em, 0 -0.83em 0 -0.44em,
                0 -0.83em 0 -0.46em, 0 -0.83em 0 -0.477em;
        }

        5%,
        95% {
            box-shadow: 0 -0.83em 0 -0.4em,
                0 -0.83em 0 -0.42em, 0 -0.83em 0 -0.44em,
                0 -0.83em 0 -0.46em, 0 -0.83em 0 -0.477em;
        }

        10%,
        59% {
            box-shadow: 0 -0.83em 0 -0.4em,
                -0.087em -0.825em 0 -0.42em, -0.173em -0.812em 0 -0.44em,
                -0.256em -0.789em 0 -0.46em, -0.297em -0.775em 0 -0.477em;
        }

        20% {
            box-shadow: 0 -0.83em 0 -0.4em, -0.338em -0.758em 0 -0.42em,
                -0.555em -0.617em 0 -0.44em, -0.671em -0.488em 0 -0.46em,
                -0.749em -0.34em 0 -0.477em;
        }

        38% {
            box-shadow: 0 -0.83em 0 -0.4em, -0.377em -0.74em 0 -0.42em,
                -0.645em -0.522em 0 -0.44em, -0.775em -0.297em 0 -0.46em,
                -0.82em -0.09em 0 -0.477em;
        }

        100% {
            box-shadow: 0 -0.83em 0 -0.4em, 0 -0.83em 0 -0.42em,
                0 -0.83em 0 -0.44em, 0 -0.83em 0 -0.46em, 0 -0.83em 0 -0.477em;
        }
    }

    @keyframes round {
        0% {
            transform: rotate(0deg)
        }

        100% {
            transform: rotate(360deg)
        }
    }
</style>