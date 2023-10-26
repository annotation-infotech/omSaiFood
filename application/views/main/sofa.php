<!DOCTYPE html>
<html lang="en">
<?php include_once('includes/head.php') ?>
<?php include_once('includes/header.php') ?>
<style>
   /* CSS to display two cards side by side on mobile view */
   @media (max-width: 767px) {
      .slidersec-home .col-lg-4 {
         flex: 0 0 50%;
         /* 50% width for small screens */
         max-width: 50%;
         /* 50% max width for small screens */
      }

      .slidersec-home .category {
         padding: 0px;
      }
   }
</style>
<!-- -----------Banner Section start-------------------- -->
<div class="section-banner-bed">
   <div class="container rec-sofa pt-5 ">
      <div class="row">
         <div class="col-lg-5 sofa-top-head pt-5" style="padding-left:87px;">
            <h1>BIG SALE</h1>
            <h2>On SOFAS</h2>
            <p>Upto</p>
            <h1>50% OFF</h1>
            <div class="educare-btn-style1 topbt" style="background:#990e35 !important;">
               <div class="educare-btn-effect "></div>
               <a href="#bestselling" data-aos="fade-right" style="font-weight: 600;">Know More</a>
            </div>
         </div>
         <div class="col-lg-7 bed-img-top rec-sofa-img">
            <img src="<?= base_url() ?>assets/main/images/sofaimghead.png" alt="Image Description" style="max-width: 120%; margin-top:-70px;">
         </div>
      </div>
   </div>
</div>
<!-- -----------Banner Section end-------------------- -->

<!-- -------------------------------------------filter button mobile --------------------------------------------- -->

<div class="p-3">
   <button type="button" class="btn filter-btn-mob" data-toggle="modal" data-target="#uniqueModal">
      <img src="<?= base_url() ?>assets/main/images/filter.svg" alt="" style="height: 30px;">
   </button>
</div>

<div class="modal fade come-from-modal right" id="uniqueModal" tabindex="-1" role="dialog" aria-labelledby="uniqueModalLabel">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="uniqueModalLabel"></h4>
         </div>
         <div class="modal-body">
            <div class="col-lg-2">
               <h3>Filter</h3>
               <!-- Filter Section -->
               <div class="filter-section" style="background-color: white; padding: 20px;">
                  <h4>Categories</h4>
                  <label> Beds</label><br>
                  <label> Sofa</label><br>
                  <label> Mattresses</label><br>
                  <label> Kids</label><br>
                  <!-- Add more color checkboxes as needed -->
               </div>
               <div class="filter-section" style="background-color: white; padding: 20px;">
                  <h4>Type</h4>
                  <label><input type="checkbox"> Bed frames</label><br>
                  <label><input type="checkbox"> Divan beds</label><br>
                  <label><input type="checkbox"> Ottoman beds</label><br>
                  <label><input type="checkbox"> TV beds</label><br>
                  <label><input type="checkbox"> Adjustable beds</label><br>
                  <label><input type="checkbox"> Sofa beds</label><br>
                  <label><input type="checkbox"> Kids beds</label><br>
                  <!-- Add more color checkboxes as needed -->
               </div>
               <div class="filter-section" style="background-color: white; padding: 20px;">
                  <h4>By Size</h4>
                  <label><input type="checkbox"> Single</label><br>
                  <label><input type="checkbox"> Double</label><br>
                  <label><input type="checkbox"> King</label><br>
                  <label><input type="checkbox"> Qeen</label><br>
                  <!-- Add more color checkboxes as needed -->
               </div>
               <div class="filter-section" style="background-color: white; padding: 20px;">
                  <h4>Color</h4>
                  <label><input type="checkbox"> Sea Blue</label><br>
                  <label><input type="checkbox"> Black</label><br>
                  <label><input type="checkbox"> Beige</label><br>
                  <label><input type="checkbox"> Brown</label><br>
                  <!-- Add more color checkboxes as needed -->
               </div>
               <div class="filter-section" style="background-color: white; padding: 20px;">
                  <h4>Material</h4>
                  <label><input type="checkbox"> Oak Wood</label><br>
                  <label><input type="checkbox"> Metal</label><br>
                  <label><input type="checkbox"> Maple</label><br>
                  <label><input type="checkbox"> Pine</label><br>
                  <!-- Add more color checkboxes as needed -->
               </div>
            </div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
            <button type="button" class="btn mob-filter-apply">Apply</button>
         </div>
      </div>
   </div>
</div>

<!-- ------------------------------fillter section mobile end--------------------------- -->

<!-- ----------------------------------slider cards section new start------------------------------------ -->
<section class="p-5 slidersec-home" data-aos="fade-up">
   <div class="container">
      <div class="row product-filter">
         <?php include_once('includes/filter.php') ?>
         <div class="col-lg-10">
               <div class="row" id="productList">
 
               </div>
         </div>
      </div>
   </div>
</section>


<!-- ---------------------------------two card offer sec start-------------------------------------- -->
<div class="section-twocard-offer pt-5 pb-5">
   <div class="container">
      <div class="row">
         <div class="col-lg-6">
            <div class="card c-one">
               <div class="card-body">
                  <h5 class="card-title">Big Sale upto <br> 30% off</h5>
                  <a href="#" class="btn offer-bed-btn-one">Shop Now</a>
                  <img src="<?= base_url() ?>assets/main/images/bigsale.png" alt="Image 1">
               </div>
            </div>
         </div>
         <div class="col-lg-6">
            <div class="card c-two">
               <div class="card-body">
                  <h5 class="card-title">Top Deals
                     <br> on Top Brads
                  </h5>
                  <a href="#" class="btn offer-bed-btn-two">Shop Now</a>
                  <img src="<?= base_url() ?>assets/main/images/bigsale.png" alt="Image 1">
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- -------------------------whychoose us sec start------------------------------------------------ -->
<section id="about-sev" class="padding">
   <div class="container">
      <div class="row mb-30">
         <div class="col-lg-6 col-sm-12 col-xs-12" data-aos="fade-right">
            <div class="about-sev-img "> <img src="<?= base_url() ?>assets/main/images/whywe.png" alt="image" style="    width: 90%;"> </div>
         </div>
         <div class="col-lg-6 col-sm-12 col-xs-12" data-aos="fade-left">
            <div class="container ">
               <div class="row" style="padding-top:50px;">
                  <div class="col-lg-12 ">
                     <div class="line_1"></div>
                     <div class="line_2"></div>
                     <div class="line_3"></div>
                  </div>
               </div>
               <h1 class="caps mt-2"><strong> <span class="color_red" style="color:#005e58;"> Why Choose Us?</span> </strong></h1>
               <h3>Unlock Your True Glow: The Snowy Glow Difference</h3>
               <p class="text-lowercase">Beds World has established itself as a trusted name in
                  the world of furniture. We take pride in being a premier
                  dropshipping agency, specializing in delivering top-quality
                  beds to our valued customers across the UK. Our journey
                  has been built upon a foundation of excellence,
                  commitment, and innovation.
               </p>
               <br>
               <br>
               <div class="educare-btn-style1 topbt" style="margin: 0px 0 auto;">
                  <div class="educare-btn-effect"></div>
                  <a href="about.php"> Read More </a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- ---------------whychoose us sec end------------- -->
<!-- ----------------------------------gallary section start------------------------------ -->
<section class="gallery pb-5" data-aos="fade-up">
   <div class="container allphoto">
      <div class="" style="padding-top:20px; padding-bottom:40px;">
         <h2 style="text-align:center; color:#1f6f69; text-decoration:underline;">Top Collections</h2>
      </div>
      <div class="row pt-5">
         <!-- Large Image (col-lg-6) -->
         <div class="col-lg-4 col-md-6 mb-4">
            <img src="<?= base_url() ?>assets/main/images/gallbig.png" alt="Large Image" style="height:414px;" class="img-fluid">
         </div>
         <!-- Small Images (col-lg-6) -->
         <div class="col-lg-8 col-md-6">
            <div class="row">
               <!-- Small Image 1 (col-lg-6) -->
               <div class="col-lg-6 col-md-6 mb-4">
                  <img src="<?= base_url() ?>assets/main/images/bgal02.png" alt="Small Image 1" class="img-fluid">
               </div>
               <!-- Small Image 2 (col-lg-6) -->
               <div class="col-lg-6 col-md-6 mb-4">
                  <img src="<?= base_url() ?>assets/main/images/bgal03.png" alt="Small Image 2" class="img-fluid">
               </div>
               <!-- Small Image 3 (col-lg-6) -->
               <div class="col-lg-6 col-md-6 mb-4">
                  <img src="<?= base_url() ?>assets/main/images/bgal04.png" alt="Small Image 3" class="img-fluid">
               </div>
               <!-- Small Image 4 (col-lg-6) -->
               <div class="col-lg-6 col-md-6 mb-4">
                  <img src="<?= base_url() ?>assets/main/images/bgal02.png" alt="Small Image 4" class="img-fluid">
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
<?php include_once('includes/footer.php') ?>
<?php include_once('includes/foot.php') ?>
<script>
   value = 'Sofa'
</script>
</body>

</html>