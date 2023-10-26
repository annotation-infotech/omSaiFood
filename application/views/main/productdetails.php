 <!DOCTYPE html>
 <html lang="en">
 <?php include_once('includes/head.php') ?>
 <?php include_once('includes/header.php') ?>
 <style>
    /* CSS to display two cards side by side on mobile view */
    @media (max-width: 767px) {
       .col-lg-3 {
          flex: 0 0 50%;
          /* 50% width for small screens */
          max-width: 50%;
          /* 50% max width for small screens */
       }

       .category {
          padding: 0px;
       }
    }
 </style>
 <style>
    @media only screen and (max-width: 476px) {
       .container {
          padding-left: 8px !important;
          padding-right: 8px !important;
       }
    }
 </style>
 <!-- --------------------------------------product Details section start--------------------------------- -->
 <div class="detailssection">
    <div class="container pt-5 pb-5">
       <?php

         $productId = '';
         foreach ($products as $product) {
            $productId = $product['ProductID'];
            $productName = $product['ProductName'];
            $productPrice = $product['ProductPrice'];
            $discountedPrice = $product['DiscountedPrice'];
            $productPrice = str_replace('.00', '', $productPrice);
            $discountedPrice = str_replace('.00', '', $discountedPrice);
            $productImage = explode(',', $product['ProductImage']);
            $productColor = $product['ProductColor'];
            $productType = $product['ProductType'];
            $productSize = $product['ProductSize'];
            $percentageDiscount = (($productPrice - $discountedPrice) / $productPrice) * 100;
            $percentageDiscount = 100 - $percentageDiscount;
            $percentageDiscount = number_format($percentageDiscount, 2);
            echo '<div class="product-details">';
            echo '<div class="product-photo">';
            echo '<img class="product-image" src="' . base_url() . 'assets/uploads/products/' . $productImage[0] . '" alt="Product Image">';

            echo '<div class="product-images" style="left: -150px;">';
            foreach ($productImage as $index => $image) {
               echo '<img src="' . base_url() . 'assets/uploads/products/' . $image . '" alt="Product Image ' . ($index + 1) . '">';
            }
            echo '</div>';
            echo '<div class="pro-details-ptoto-btn">';
            echo '    <div class="d-flex pro-details-ptoto-btn">';
            echo '        <button class="atc">ADD TO CART</button>';
            echo '        <button class="bn">BUY NOW</button>';
            echo '    </div>';
            echo '</div>';
            echo '</div>';


            echo '<div class="product-info">';
            echo '<h1>' . $productName . '</h1>';
            echo '<p class="detail-text"><span class="product-price">₹' . $productPrice . '</span>';
            if ($discountedPrice != 0) {
               echo '<del class="discounted-price">₹' . $discountedPrice . '</del>';
               echo '<span class="product-offer">' . $percentageDiscount . '% off</span></p>';
            }

            echo '<h4>On Sale</h4>';

            // Star Rating
            if ($product['ProductStock'] <= 10) {

               echo '<div class="star-rating str-pro-details">';
               echo '<span class="stockleft">Only ' . $product['ProductStock'] . ' left in stock. Buy Now!</span>';
               echo '</div>';
            }


            $this->db->where('ProductId', $product['ProductID']);
            $productsData = $this->db->get('productprice')->result_array();


            // Color Selection
            echo '<div class="colorshade pb-3">';
            echo '<h6 class="mb-0 mt-2">Color</h6>';
            echo '<div class="dot-container">';
            $productShades = json_decode($product['ProductShades']);
            foreach ($productsData as $index => $shade) {
               echo '<div class="dot dot-' . ($index + 1) . '">';
               echo '<div class="circle" data-color="' . $shade["ProductColor"] . '"   style="background-color : ' . $shade["ProductColor"] . ' ;></div>';
               echo '<div class="color-name" "></div>';
               echo '</div>';
            }
            echo '</div>';
            echo '</div>';

            // Size Selection
            echo '<h6 class="mb-0 mt-2" >Sizes</h6>';
            echo '<div class="d-flex" style="gap: 10px;">';
            $productSizes = json_decode($product['ProductSizes']);
            foreach ($productsData as $size) {
               echo '<button class="addcardbtn size" data-size="' . $size['ProductSize'] . '" >' . $size['ProductSize'] . '</button>';
            }
            echo '</div>';

            echo '</div>'; // Close product-info

            echo '</div>'; // Close product-details


         }
         ?>

    </div>
 </div>
 <!-- --------------------------------------product Details section end--------------------------------- -->
 <style>
    .horizontal-table {
       display: table;
       width: 100%;
       table-layout: fixed;
    }

    .horizontal-table tr {
       display: table-row;
       width: 100%;
    }

    .horizontal-table th,
    .horizontal-table td {
       display: table-cell;
       text-align: left;
       width: 50%;
       /* Adjust the width as needed */
       padding: 5px;
    }
 </style>
 <div class="pillsec  pb-5" data-aos="fade-up">
    <div class="container pillhead">
       <h2>Product Description</h2>
    </div>
    <div id="exTab3" class="container">
       <ul class="nav nav-pills rate-sec-top ">
          <li class="active">
             <a href="#1b" data-toggle="tab">Description</a>
          </li>
          <li><a href="#2b" data-toggle="tab">How To Use</a>
          </li>
          <li><a href="#3b" data-toggle="tab">Product Review</a>
          </li>
          </li>
       </ul>
       <div class="tab-content clearfix">
          <div class="tab-pane active" id="1b">
             <h3>Bharat Lifestyle Thailand Queen Size Bed with Storage in multi color. Bed Will Give A Complete Look And Class To Your Bedroom.
                This Bed Is From Contemporary Range Of Furniture's. It has combination of adorable color and the beautiful paneling with melamine finishing.
             </h3>
             <div class="container">
                <div class="row">
                   <div class="col-lg-6" id="ver-table">
                      <table id="rating-table">
                         <tr>
                            <th>Firstname</th>
                            <th></th>
                         </tr>
                         <tr>
                            <td class="first-col-table">Frame Material</td>
                            <td>Solid + Manufactured Wood</td>
                         </tr>
                         <tr>
                            <td class="first-col-table">Manufactured Wood Type</td>
                            <td>Plywood/Laminate Board</td>
                         </tr>
                         <tr>
                            <td class="first-col-table">Upholstered</td>
                            <td>Yes</td>
                         </tr>
                         <tr>
                            <td class="first-col-table">Upholstery Material</td>
                            <td>100% Polyester</td>
                         </tr>
                         <tr>
                            <td class="first-col-table">Upholstery Fill Material</td>
                            <td>Foam</td>
                         </tr>
                         <tr>
                            <td class="first-col-table">Slat Material</td>
                            <td>Solid Wood</td>
                         </tr>
                         <tr>
                            <td class="first-col-table">Centre Support Legs</td>
                            <td>Yes</td>
                         </tr>
                         <tr>
                            <td class="first-col-table">Number of Centre Support Legs</td>
                            <td>4</td>
                         </tr>
                         <tr>
                            <td class="first-col-table">Weight Capacity</td>
                            <td>272kg </td>
                         </tr>
                         <tr>
                            <td class="first-col-table">Mattress Included</td>
                            <td>No</td>
                         </tr>
                         <tr>
                            <td class="first-col-table">Headboard Included</td>
                            <td>Yes</td>
                         </tr>
                      </table>
                   </div>
                   <div class="col-lg-6" id="ver-table">
                      <table id="rating-table">
                         <tr>
                            <th>Firstname</th>
                            <th></th>
                         </tr>
                         <tr>
                            <td class="first-col-table">Frame Material</td>
                            <td>Solid + Manufactured Wood</td>
                         </tr>
                         <tr>
                            <td class="first-col-table">Manufactured Wood Type</td>
                            <td>Plywood/Laminate Board</td>
                         </tr>
                         <tr>
                            <td class="first-col-table">Upholstered</td>
                            <td>Yes</td>
                         </tr>
                         <tr>
                            <td class="first-col-table">Upholstery Material</td>
                            <td>100% Polyester</td>
                         </tr>
                         <tr>
                            <td class="first-col-table">Upholstery Fill Material</td>
                            <td>Foam</td>
                         </tr>
                         <tr>
                            <td class="first-col-table">Slat Material</td>
                            <td>Solid Wood</td>
                         </tr>
                         <tr>
                            <td class="first-col-table">Centre Support Legs</td>
                            <td>Yes</td>
                         </tr>
                         <tr>
                            <td class="first-col-table">Number of Centre Support Legs</td>
                            <td>4</td>
                         </tr>
                         <tr>
                            <td class="first-col-table">Weight Capacity</td>
                            <td>272kg </td>
                         </tr>
                         <tr>
                            <td class="first-col-table">Mattress Included</td>
                            <td>No</td>
                         </tr>
                         <tr>
                            <td class="first-col-table">Headboard Included</td>
                            <td>Yes</td>
                         </tr>
                      </table>

                   </div>
                   <div class="col-lg-6" id="hor-table">
                      <table id="rating-even-table" class="horizontal-table">
                         <tr>
                            <th>Attribute</th>
                            <th>Value</th>
                         </tr>
                         <tr>
                            <td>Firstname</td>
                            <td></td>
                         </tr>
                         <tr>
                            <td class="first-col-table">Manufactured Wood Type</td>
                            <td>Plywood/Laminate Board</td>
                         </tr>
                         <tr>
                            <td class="first-col-table">Upholstered</td>
                            <td>Yes</td>
                         </tr>
                         <tr>
                            <td class="first-col-table">Upholstery Material</td>
                            <td>100% Polyester</td>
                         </tr>
                         <tr>
                            <td class="first-col-table">Upholstery Fill Material</td>
                            <td>Foam</td>
                         </tr>
                         <tr>
                            <td class="first-col-table">Slat Material</td>
                            <td>Solid Wood</td>
                         </tr>
                         <tr>
                            <td class="first-col-table">Centre Support Legs</td>
                            <td>Yes</td>
                         </tr>
                         <tr>
                            <td class="first-col-table">Number of Centre Support Legs</td>
                            <td>4</td>
                         </tr>
                         <tr>
                            <td class="first-col-table">Weight Capacity</td>
                            <td>272kg </td>
                         </tr>
                         <tr>
                            <td class="first-col-table">Mattress Included</td>
                            <td>No</td>
                         </tr>
                         <tr>
                            <td class="first-col-table">Headboard Included</td>
                            <td>Yes</td>
                         </tr>
                         <!-- Add more rows as needed -->
                      </table>
                   </div>
                </div>
             </div>
          </div>
          <div class="tab-pane" id="2b">
             <h3>ntroducing the Liquid Lip Colours that are super pigmented, long-lasting and non-drying on lips. The smooth, satin-matte formula
                stays on fresh and vibrant for upt
             </h3>
          </div>
          <div class="tab-pane" id="3b">
             <div class="container review">
                <!-- First Row -->
                <div class="row heading-top-rate p-3 ">
                   <div class="col-lg-4 verfied-rating">
                      <h2 class="mb-0">4.5/5</h2>
                      <p class="text-muted verified-buyer">456 Verified Ratings</p>
                   </div>
                   <div class="col-lg-8 rehead">
                      <p class="mb-0 repara">Review This Product</p>
                      <a href="uploadrating.php">
                         <button class="btn revbtn">Write a Review</button></a>
                   </div>
                </div>
                <!-- Second Row -->
                <div class="row mt-4 heading-top-rate p-3">
                   <div class="col-lg-9">
                      <img src="<?php echo base_url() ?>assets/main/images/bigsale.png" alt="Image 1" class="img-fluid" style="max-width: 80px;">
                      <img src="<?php echo base_url() ?>assets/main/images/bigsale.png" alt="Image 2" class="img-fluid" style="max-width: 80px;">
                      <img src="<?php echo base_url() ?>assets/main/images/bigsale.png" alt="Image 3" class="img-fluid" style="max-width: 80px;">
                      <img src="<?php echo base_url() ?>assets/main/images/bigsale.png" alt="Image 4" class="img-fluid" style="max-width: 80px;">
                      <img src="<?php echo base_url() ?>assets/main/images/bigsale.png" alt="Image 5" class="img-fluid" style="max-width: 80px;">
                   </div>
                </div>
                <!-- Third Row -->
                <div class="row mt-4  heading-top-rate p-3">
                   <div class="col-lg-4">
                      <h3>Name</h3>
                      <div class="d-flex align-items-center">
                         <img src="<?php echo base_url() ?>assets/main/images/whiteprofile.svg" alt="User Image" class="img-fluid" style="max-width: 55px;">
                         <div class="ms-3">
                            <p class="mb-0">Khushi Ansari</p>
                            <p class="text-muted "><span class="star-filled"></span>Verified Buyer</p>
                         </div>
                      </div>
                   </div>
                   <div class="col-lg-7 rateing-text">
                      <h4>Perfect Color</h4>
                      <div class="star-rating">
                         <span class="star-filled"></span>
                         <span class="star-filled"></span>
                         <span class="star-filled"></span>
                         <span class="star-filled"></span>
                         <span class="star-filled"></span>
                         <span class="rating">4.5/5</span>
                      </div>
                      <p>
                         Best Bed to purchase nice design and comfirtable, Build quality is good
                         looks perfect in my bedroom
                      </p>
                      <p class="rating-thumb">
                         20 People Found this Helpful
                         <!-- Include your SVG image here -->
                         <img src="<?php echo base_url() ?>assets/main/images/thumb.svg" alt="Helpful Icon" style="max-width: 25px;">
                      </p>
                      <div class="col-lg-9 p-0">
                         <img src="<?php echo base_url() ?>assets/main/images/bigsale.png" alt="Image 6" class="img-fluid" style="max-width: 80px;">
                         <img src="<?php echo base_url() ?>assets/main/images/bigsale.png" alt="Image 7" class="img-fluid" style="max-width: 80px;">
                         <img src="<?php echo base_url() ?>assets/main/images/bigsale.png" alt="Image 8" class="img-fluid" style="max-width: 80px;">
                      </div>
                      <p>10 July 2023</p>
                   </div>
                </div>
                <!-- Third Row -->
                <div class="row mt-4  heading-top-rate p-3">
                   <div class="col-lg-4">
                      <h3>Name</h3>
                      <div class="d-flex align-items-center">
                         <img src="<?php echo base_url() ?>assets/main/images/whiteprofile.svg" alt="User Image" class="img-fluid" style="max-width: 55px;">
                         <div class="ms-3">
                            <p class="mb-0">Khushi Ansari</p>
                            <p class="text-muted"><span class="star-filled"></span>Verified Buyer</p>
                         </div>
                      </div>
                   </div>
                   <div class="col-lg-7 rateing-text">
                      <h4>Perfect Color</h4>
                      <div class="star-rating">
                         <span class="star-filled"></span>
                         <span class="star-filled"></span>
                         <span class="star-filled"></span>
                         <span class="star-filled"></span>
                         <span class="star-filled"></span>
                         <span class="rating">4.5/5</span>
                      </div>
                      <p>
                         Looks good match with my bedroom, professional service
                         with best fitting and delivery work
                      </p>
                      <p class="rating-thumb">
                         20 People Found this Helpful
                         <!-- Include your SVG image here -->
                         <img src="<?php echo base_url() ?>assets/main/images/thumb.svg" alt="Helpful Icon" style="max-width: 25px;">
                      </p>
                      <div class="col-lg-9 p-0">
                         <img src="<?php echo base_url() ?>assets/main/images/bigsale.png" alt="Image 6" class="img-fluid" style="max-width: 80px;">
                         <img src="<?php echo base_url() ?>assets/main/images/bigsale.png" alt="Image 7" class="img-fluid" style="max-width: 80px;">
                         <img src="<?php echo base_url() ?>assets/main/images/bigsale.png" alt="Image 8" class="img-fluid" style="max-width: 80px;">
                      </div>
                      <p>10 July 2023</p>
                   </div>
                </div>
                <!-- Third Row -->
                <div class="row mt-4  heading-top-rate p-3">
                   <div class="col-lg-4">
                      <h3>Name</h3>
                      <div class="d-flex align-items-center">
                         <img src="<?php echo base_url() ?>assets/main/images/whiteprofile.svg" alt="User Image" class="img-fluid" style="max-width: 55px;">
                         <div class="ms-3">
                            <p class="mb-0">Khushi Ansari</p>
                            <p class="text-muted"><span class="star-filled"></span>Verified Buyer</p>
                         </div>
                      </div>
                   </div>
                   <div class="col-lg-7 rateing-text">
                      <h4>Perfect Color</h4>
                      <div class="star-rating">
                         <span class="star-filled"></span>
                         <span class="star-filled"></span>
                         <span class="star-filled"></span>
                         <span class="star-filled"></span>
                         <span class="star-filled"></span>
                         <span class="rating">4.5/5</span>
                      </div>
                      <p>
                         Looks good match with my bedroom, professional service
                         with best fitting and delivery work
                      </p>
                      <p class="rating-thumb">
                         20 People Found this Helpful
                         <!-- Include your SVG image here -->
                         <img src="<?php echo base_url() ?>assets/main/images/thumb.svg" alt="Helpful Icon" style="max-width: 25px;">
                      </p>
                      <div class="col-lg-9 p-0">
                         <img src="<?php echo base_url() ?>assets/main/images/bigsale.png" alt="Image 6" class="img-fluid" style="max-width: 80px;">
                         <img src="<?php echo base_url() ?>assets/main/images/bigsale.png" alt="Image 7" class="img-fluid" style="max-width: 80px;">
                         <img src="<?php echo base_url() ?>assets/main/images/bigsale.png" alt="Image 8" class="img-fluid" style="max-width: 80px;">
                      </div>
                      <p>10 July 2023</p>
                   </div>
                </div>
             </div>
             <!-- Fourth Row (Star Rating) -->
          </div>
          <!-- Seventh Row (Additional Images) -->
       </div>
    </div>
 </div>
 <!-- ----------------------------------slider cards section new start------------------------------------ -->
 <section class=" pb-5 slidersec-home" data-aos="fade-up">
    <div class="container">
       <div class="row">
          <div class="col-6">
             <div class="bestsell">
                <h3>TV Beds</h3>
             </div>
          </div>
          <div class="col-6 text-right">
             <a class="btn  mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                <i class="fa fa-arrow-left"></i>
             </a>
             <a class="btn  mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
                <i class="fa fa-arrow-right"></i>
             </a>
          </div>
          <div class="col-12">
             <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                   <div class="carousel-item active">
                      <div class="row" style="justify-content: center;">
                         <div class="col-lg-3 col-md-6">
                            <div class="card whishcard" style="width: 15rem; position: relative;">
                               <img src="<?php echo base_url() ?>assets/main/images/G4.png" class="card-img-top" alt="...">
                               <div class="card-body whishbody">
                                  <h5 class="card-title whhead">
                                     Aura Ottoman TV Bed Frame With
                                     Dolby Atmos Surround Sound
                                  </h5>
                                  <div class="bttxt d-flex">
                                     <p class="card-text"><span class="price">₹236</span><del>₹400</del></p>
                                  </div>
                                  <div class="star-rating">
                                     <span class="star-filled"></span>
                                     <span class="star-filled"></span>
                                     <span class="star-filled"></span>
                                     <span class="star-filled"></span>
                                     <span class="star-filled"></span>
                                  </div>
                               </div>
                               <!-- SVG heart image -->
                               <svg id="heart-svg" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" style="position: absolute; top: 10px; right: 10px;">
                                  <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" fill="#d7b5b7" />
                               </svg>
                            </div>
                         </div>
                         <div class="col-lg-3 col-md-6">
                            <div class="card whishcard" style="width: 15rem; position: relative;">
                               <img src="<?php echo base_url() ?>assets/main/images/G4.png" class="card-img-top" alt="...">
                               <div class="card-body whishbody">
                                  <h5 class="card-title whhead">
                                     Aura Ottoman TV Bed Frame With
                                     Dolby Atmos Surround Sound
                                  </h5>
                                  <div class="bttxt d-flex">
                                     <p class="card-text"><span class="price">₹236</span><del>₹400</del></p>
                                  </div>
                                  <div class="star-rating">
                                     <span class="star-filled"></span>
                                     <span class="star-filled"></span>
                                     <span class="star-filled"></span>
                                     <span class="star-filled"></span>
                                     <span class="star-filled"></span>
                                  </div>
                               </div>
                               <!-- SVG heart image -->
                               <svg id="heart-svg" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" style="position: absolute; top: 10px; right: 10px;">
                                  <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" fill="#d7b5b7" />
                               </svg>
                            </div>
                         </div>
                         <div class="col-lg-3 col-md-6">
                            <div class="card whishcard" style="width: 15rem; position: relative;">
                               <img src="<?php echo base_url() ?>assets/main/images/G4.png" class="card-img-top" alt="...">
                               <div class="card-body whishbody">
                                  <h5 class="card-title whhead">
                                     Aura Ottoman TV Bed Frame With
                                     Dolby Atmos Surround Sound
                                  </h5>
                                  <div class="bttxt d-flex">
                                     <p class="card-text"><span class="price">₹236</span><del>₹400</del></p>
                                  </div>
                                  <div class="star-rating">
                                     <span class="star-filled"></span>
                                     <span class="star-filled"></span>
                                     <span class="star-filled"></span>
                                     <span class="star-filled"></span>
                                     <span class="star-filled"></span>
                                  </div>
                               </div>
                               <!-- SVG heart image -->
                               <svg id="heart-svg" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" style="position: absolute; top: 10px; right: 10px;">
                                  <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" fill="#d7b5b7" />
                               </svg>
                            </div>
                         </div>
                         <div class="col-lg-3 col-md-6">
                            <div class="card whishcard" style="width: 15rem; position: relative;">
                               <img src="<?php echo base_url() ?>assets/main/images/G4.png" class="card-img-top" alt="...">
                               <div class="card-body whishbody">
                                  <h5 class="card-title whhead">
                                     Aura Ottoman TV Bed Frame With
                                     Dolby Atmos Surround Sound
                                  </h5>
                                  <div class="bttxt d-flex">
                                     <p class="card-text"><span class="price">₹236</span><del>₹400</del></p>
                                  </div>
                                  <div class="star-rating">
                                     <span class="star-filled"></span>
                                     <span class="star-filled"></span>
                                     <span class="star-filled"></span>
                                     <span class="star-filled"></span>
                                     <span class="star-filled"></span>
                                  </div>
                               </div>
                               <!-- SVG heart image -->
                               <svg id="heart-svg" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" style="position: absolute; top: 10px; right: 10px;">
                                  <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" fill="#d7b5b7" />
                               </svg>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!-- ---------------------------------two card offer sec start-------------------------------------- -->
 <!-- -------------------------img gallery sec start------------------------------------------------ -->
 <section class="gallery pb-5" data-aos="fade-up">
    <div class="container allphoto">
       <div class="" style="padding-top:20px; padding-bottom:40px;">
          <h2 style="text-align:center; color:#1f6f69; text-decoration:underline;">Top Collections</h2>
       </div>
       <div class="row pt-5">
          <!-- Large Image (col-lg-6) -->
          <div class="col-lg-4 col-md-6 mb-4">
             <img src="<?php echo base_url() ?>assets/main/images/gallbig.png" alt="Large Image" style="height:414px;" class="img-fluid">
          </div>
          <!-- Small Images (col-lg-6) -->
          <div class="col-lg-8 col-md-6">
             <div class="row">
                <!-- Small Image 1 (col-lg-6) -->
                <div class="col-lg-6 col-md-6 mb-4">
                   <img src="<?php echo base_url() ?>assets/main/images/bgal02.png" alt="Small Image 1" class="img-fluid">
                </div>
                <!-- Small Image 2 (col-lg-6) -->
                <div class="col-lg-6 col-md-6 mb-4">
                   <img src="<?php echo base_url() ?>assets/main/images/bgal03.png" alt="Small Image 2" class="img-fluid">
                </div>
                <!-- Small Image 3 (col-lg-6) -->
                <div class="col-lg-6 col-md-6 mb-4">
                   <img src="<?php echo base_url() ?>assets/main/images/bgal04.png" alt="Small Image 3" class="img-fluid">
                </div>
                <!-- Small Image 4 (col-lg-6) -->
                <div class="col-lg-6 col-md-6 mb-4">
                   <img src="<?php echo base_url() ?>assets/main/images/bgal02.png" alt="Small Image 4" class="img-fluid">
                </div>
             </div>
          </div>
       </div>
       <div class="row">
          <div class="col-lg-12 text-center pt-5">
             <div class="message-form">
                <span>Join Our Newsletter</span>
                <input type="text" placeholder="Name" class="drop-msg-here">
                <a href="contact.php"></a>
                <input type="submit" value="Subscribe">
             </div>
          </div>
       </div>
    </div>
 </section>
 <!-- -------------img gallery sec end------- -->
 <script>
    // JavaScript to handle image thumbnails
    const productImages = document.querySelector('.product-images');
    const mainProductImage = document.querySelector('.product-image');

    // Listen for clicks on thumbnail images
    productImages.addEventListener('click', (e) => {
       if (e.target.tagName === 'IMG') {
          const clickedImageSrc = e.target.src;
          mainProductImage.src = clickedImageSrc;
       }
    });

    // Show/hide the thumbnail images on hover
    const productPhoto = document.querySelector('.product-photo');
    productPhoto.addEventListener('mouseenter', () => {
       productImages.style.left = '0';
    });

    productPhoto.addEventListener('mouseleave', () => {
       productImages.style.left = '-150px';
    });
 </script>
 <?php include_once('includes/footer.php') ?>
 <?php include_once('includes/foot.php') ?>
 <script>
    var productID = <?= $productId ?>;
    var selectedColor = null; // Initialize selectedColor as null
    var selectedSize = null; // Initialize selectedSize as null

    // Set the initial active class for color and size based on your criteria
    // For example, you can select the first color and size option by default:
    $('.circle:first').addClass('active');
    $('.addcardbtn:first').addClass('selected');

    // Initialize selectedColor and selectedSize based on the initial state
    selectedColor = $('.circle.active').data('color');
    selectedSize = $('.addcardbtn.selected').data('size');

    $('.circle').on('click', function() {
       // Remove the active class from all circles
       $('.circle').removeClass('active');

       // Add the active class to the clicked circle
       $(this).addClass('active');
       selectedColor = $(this).data('color'); // Update selectedColor

       // Check if both color and size have been selected
       if (selectedColor !== null && selectedSize !== null) {
          // Perform AJAX request with both color and size
          performAjaxRequest(selectedColor, selectedSize);
       }
    });

    $('.addcardbtn').on('click', function() {
       // Remove the selected class from all addcardbtn elements
       $('.addcardbtn').removeClass('selected');

       // Add the selected class to the clicked addcardbtn
       $(this).addClass('selected');
       selectedSize = $(this).data('size'); // Update selectedSize

       // Check if both color and size have been selected
       if (selectedColor !== null && selectedSize !== null) {
          // Perform AJAX request with both color and size
          performAjaxRequest(selectedColor, selectedSize);
       }
    });

    function performAjaxRequest(color, size) {
       $.ajax({
          type: 'POST',
          url: '<?php echo base_url() ?>Ajax/getProductViewFilteredPrice',
          data: {
             color: color,
             size: size,
             productID: productID
          },
          success: function(response) {


             var productPrice = parseFloat(response[0].ProductPrice);
             var discountedPrice = parseFloat(response[0].DiscountedPrice);
             var percentageDiscount = ((productPrice - discountedPrice) / productPrice) * 100;
             percentageDiscount = 100 - percentageDiscount;
             var percentageDiscount = parseFloat(percentageDiscount).toFixed(2);

             $('.product-offer').text(percentageDiscount + '% off');
             $('.product-price').text('₹' + productPrice);
             $('.discounted-price').text('₹' + discountedPrice);
          }
       });
    }
    $('.atc').click(function() {
       // Find the parent elements and access their text and values
       var productDetails = $(this).closest('.product-details');
       var productName = productDetails.find('h1').text();
       var productPrice = productDetails.find('.product-price').text();
       var discountedPrice = productDetails.find('.discounted-price').text();
       var percentageDiscount = productDetails.find('.product-offer').text();

       // Retrieve information about colors
       var selectedColors = [];
       productDetails.find('.circle.active').each(function() {
          var color = $(this).data('color');
          selectedColors.push(color);
       });

       // Retrieve information about sizes
       var selectedSizes = [];
       productDetails.find('.addcardbtn.selected').each(function() {
          var size = $(this).data('size');
          selectedSizes.push(size);
       });

       // Create a data object
       var dataToSend = {
          productID: productID,
          productPrice: productPrice,
          discountedPrice: discountedPrice,
          percentageDiscount: percentageDiscount,
          selectedColors: selectedColors.join(', '),
          selectedSizes: selectedSizes.join(', ')
       };

       // Convert the data object to a JSON string
       var jsonData = JSON.stringify(dataToSend);

       // Log the JSON data (you can remove this line in production)


       // Now you can use jsonData in your AJAX request
       // Example AJAX request:
       $.ajax({
          type: 'POST',
          url: '<?= base_url() ?>Ajax/AddtoCart',
          data: {
             jsonData: jsonData
          },
          success: function(response) {
             if (response.success == false) {
                Swal.fire({
                   position: 'top-end',
                 
                   title: response.message,
                   showConfirmButton: false,
                   timer: 1500
                })
             } else {
                Swal.fire({
                   position: 'top-end',
                  
                   title: response.message,
                   showConfirmButton: false,
                   timer: 1500
                })
             }
          }
       });
    });
 </script>
 </body>
 <style>
    .product-images {

       scrollbar-width: thin;
       /* "thin" for a thin scrollbar, or "auto" to use the browser's default */
       scrollbar-color: #999 #ccc;
       /* Track and thumb color */
    }

    .circle.active,
    .addcardbtn.selected {
       box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
    }
 </style>

 </html>