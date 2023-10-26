<!DOCTYPE html>
<html lang="en">
   <?php include_once('includes/head.php')?>
   <?php include_once('includes/header.php')?>
   <style>
      #mob-footer-onlineapp{
         display:none !important;
      }
   </style>
   <!-- -----------Banner Section start-------------------- -->
   <div class="section-banner-bed">
      <div class="container pt-5 pb-5">
         <div class="row">
            <div class="col-lg-6 bed-top">
               <h2>WE TAKECARE OF <br> YOUR COMFORT</h2>
               <p style="font-weight: 600;">Choose from the Finest Beds Online</p>
               <div class="educare-btn-style1 topbt">
                  <div class="educare-btn-effect "></div>
                  <a href="#bestselling" data-aos="fade-right">Know More </a> 
               </div>
            </div>
            <div class="col-lg-6 bed-img-top">
               <img src="<?= base_url()?>assets/main/images/homehead.png" alt="Image Description">
            </div>
         </div>
      </div>
   </div>
   <!-- -----------Banner Section end-------------------- -->
   <div class="section-bed-cards-svg pt-5 pb-5">
      <div class="container">
         <div class="type-sec-grsvg" style="padding-top:20px; padding-bottom:40px;">
            <h2 style="text-align:center; color:#1f6f69; text-decoration:underline;">Shop By Type</h2>
         </div>
         <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12">
               <!-- Each card takes up 3 columns on lg, 6 columns on md, and 12 columns on sm (mobile) -->
               <div class="card" style=""><a href="filter.php"><a href="filter.php">
                  <img class="card-img-top" src="<?= base_url()?>assets/main/images/bedsvg.svg" alt="Card image cap" style="height:30px;">
                  <div class="card-body text-center">
                     <h5 class="card-title">Beds</h5>
                  </div>
               </div></a></a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
               <div class="card" style=""><a href="sofa.php">
                  <img class="card-img-top" src="<?= base_url()?>assets/main/images/sofa.svg" alt="Card image cap" style="height:30px;">
                  <div class="card-body text-center">
                     <h5 class="card-title">Sofa</h5>
                  </div>
               </div></a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
               <div class="card" style=""><a href="kids.php">
                  <img class="card-img-top" src="<?= base_url()?>assets/main/images/wardrobe.svg" alt="Card image cap" style="height:30px;">
                  <div class="card-body text-center">
                     <h5 class="card-title">Wardrobe</h5>
                  </div>
               </div></a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
               <div class="card" style=""><a href="filter.php">
                  <img class="card-img-top" src="<?= base_url()?>assets/main/images/tv.svg" alt="Card image cap" style="height:30px;">
                  <div class="card-body text-center">
                     <h5 class="card-title">TV Units</h5>
                  </div>
               </div></a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
               <div class="card" style=""><a href="filter.php">
                  <img class="card-img-top" src="<?= base_url()?>assets/main/images/chair.svg" alt="Card image cap" style="height:30px;">
                  <div class="card-body text-center">
                     <h5 class="card-title">Chair</h5>
                  </div>
               </div></a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
               <div class="card" style=""><a href="mattressess.php">
                  <img class="card-img-top" src="<?= base_url()?>assets/main/images/matresses.svg" alt="Card image cap" style="height:30px;">
                  <div class="card-body text-center">
                     <h5 class="card-title">Matresses</h5>
                  </div>
               </div></a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
               <div class="card" style=""><a href="filter.php">
                  <img class="card-img-top" src="<?= base_url()?>assets/main/images/dressing.svg" alt="Card image cap" style="height:30px;">
                  <div class="card-body text-center">
                     <h5 class="card-title">Dressing Table</h5>
                  </div>
               </div></a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
               <div class="card" style=""><a href="filter.php">
                  <img class="card-img-top" src="<?= base_url()?>assets/main/images/table.svg" alt="Card image cap" style="height:30px;">
                  <div class="card-body text-center">
                     <h5 class="card-title">Dining Table</h5>
                  </div>
               </div></a>
            </div>
         </div>
         
         
      </div>
   </div>


   <!-- ------------------------------------row of beds section start--------- -->
   <style>
      /* CSS to display two cards side by side on mobile view */
      @media (max-width: 767px) {
      .section-rowof-beds .col-lg-2 {
      flex: 0 0 33%; /* 50% width for small screens */
      max-width: 50%; /* 50% max width for small screens */
      }
      .category{
      padding:0px;
      }
      }
   </style>
   <div class="section-rowof-beds">
    <div class="container">
    <div class="sec-rowof-beds" style="padding-top:20px; padding-bottom:40px;">
            <h2 style="text-align:center; color:#1f6f69; text-decoration:underline;">Shop By Type</h2>
         </div>
        <div class="row" style="display: flex; flex-wrap: wrap; justify-content: center;">
            <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                <div class="card" style="">
                    <img class="card-img-top frame" src="<?= base_url()?>assets/main/images/bedframe.png" alt="Card image cap">
                    <div class="card-body text-center">
                        <h5 class="card-title">Bed frames</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                <div class="card" style="">
                    <img class="card-img-top frame" src="<?= base_url()?>assets/main/images/bedframe.png" alt="Card image cap">
                    <div class="card-body text-center">
                        <h5 class="card-title">Divan beds</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                <div class="card" style="">
                    <img class="card-img-top frame" src="<?= base_url()?>assets/main/images/bedframe.png" alt="Card image cap">
                    <div class="card-body text-center">
                        <h5 class="card-title">Ottoman beds</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                <div class="card" style="">
                    <img class="card-img-top frame" src="<?= base_url()?>assets/main/images/bedframe.png" alt="Card image cap">
                    <div class="card-body text-center">
                        <h5 class="card-title">TV beds</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                <div class="card" style="">
                    <img class="card-img-top frame" src="<?= base_url()?>assets/main/images/bedframe.png" alt="Card image cap">
                    <div class="card-body text-center">
                        <h5 class="card-title">Adjustable beds</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                <div class="card" style="">
                    <img class="card-img-top frame" src="<?= base_url()?>assets/main/images/bedframe.png" alt="Card image cap">
                    <div class="card-body text-center">
                        <h5 class="card-title">Sofa beds</h5>
                    </div>
                </div>
            </div>
            <!-- Repeat this card block for each card you want to display -->
        </div>
    </div>
</div>

   <!-- ------------------------------------row of beds section end--------- -->

   <!-- ----------------------------------slider cards section new start------------------------------------ -->
   <style>
      /* CSS to display two cards side by side on mobile view */
      @media (max-width: 767px) {
      .col-lg-3 {
      flex: 0 0 50%; /* 50% width for small screens */
      max-width: 50%; /* 50% max width for small screens */
      }
      .category{
      padding:0px;
      }
      }
   </style>
   <section class=" pb-5 slidersec-home" data-aos="fade-up">
      <div class="container">
         <div class="row" >
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
                              <div class="card whishcard" style="width: 15rem; position: relative;"><a href="productdetails.php">
                                 <img src="<?= base_url()?>assets/main/images/G4.png" class="card-img-top" alt="...">
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
                                    <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"fill="#d7b5b7"/>
                                 </svg></a>
                              </div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="card whishcard" style="width: 15rem; position: relative;"><a href="productdetails.php">
                                 <img src="<?= base_url()?>assets/main/images/G4.png" class="card-img-top" alt="...">
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
                                    <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"fill="#d7b5b7"/>
                                 </svg></a>
                              </div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="card whishcard" style="width: 15rem; position: relative;"><a href="productdetails.php">
                                 <img src="<?= base_url()?>assets/main/images/G4.png" class="card-img-top" alt="...">
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
                                    <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"fill="#d7b5b7"/>
                                 </svg></a>
                              </div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="card whishcard" style="width: 15rem; position: relative;"><a href="productdetails.php">
                                 <img src="<?= base_url()?>assets/main/images/G4.png" class="card-img-top" alt="...">
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
                                    <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"fill="#d7b5b7"/>
                                 </svg></a>
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
   <div class="section-twocard-offer pt-5 pb-5">
      <div class="container">
         <div class="row">
            <div class="col-lg-6">
               <div class="card c-one">
                  <div class="card-body">
                     <h5 class="card-title">Big Sale upto <br> 30% off</h5>
                     <a href="#" class="btn offer-bed-btn-one">Shop Now</a>
                     <img src="<?= base_url()?>assets/main/images/bigsale.png" alt="Image 1">
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
                     <img src="<?= base_url()?>assets/main/images/bigsale.png" alt="Image 1">
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
               <div class="about-sev-img "> <img src="<?= base_url()?>assets/main/images/whywe.png" alt="image" style="    width: 90%;"> </div>
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
                  <h3>With over 15+ years of experience</h3>
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
               <img src="<?= base_url()?>assets/main/images/gallbig.png" alt="Large Image" style="height:414px;" class="img-fluid">
            </div>
            <!-- Small Images (col-lg-6) -->
            <div class="col-lg-8 col-md-6">
               <div class="row">
                  <!-- Small Image 1 (col-lg-6) -->
                  <div class="col-lg-6 col-md-6 mb-4">
                     <img src="<?= base_url()?>assets/main/images/bgal02.png" alt="Small Image 1" class="img-fluid">
                  </div>
                  <!-- Small Image 2 (col-lg-6) -->
                  <div class="col-lg-6 col-md-6 mb-4">
                     <img src="<?= base_url()?>assets/main/images/bgal03.png" alt="Small Image 2" class="img-fluid">
                  </div>
                  <!-- Small Image 3 (col-lg-6) -->
                  <div class="col-lg-6 col-md-6 mb-4">
                     <img src="<?= base_url()?>assets/main/images/bgal04.png" alt="Small Image 3" class="img-fluid">
                  </div>
                  <!-- Small Image 4 (col-lg-6) -->
                  <div class="col-lg-6 col-md-6 mb-4">
                     <img src="<?= base_url()?>assets/main/images/bgal02.png" alt="Small Image 4" class="img-fluid">
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
   <?php
if (isset($user_info['UserRegistrationDate'])) {
    $userRegistrationDate = $user_info['UserRegistrationDate'];

    // Check if $userRegistrationDate is a valid date
    if (strtotime($userRegistrationDate) !== false) {
        $registrationDate = date('Y-m-d', strtotime($userRegistrationDate)); // Extract and format the date

        $todayDate = date('Y-m-d'); // Get today's date in the same format as UserRegistrationDate

        if ($registrationDate === $todayDate) {
            // Add JavaScript to trigger the modal automatically
            echo '<script>';
            echo '$(document).ready(function() {';
            echo '$("#welcomeModal").modal("show");';
            echo '});';
            echo '</script>';
        }
    }
}
?>

<!-- Modal -->
<!-- Modal -->
<div class="modal fade" id="welcomeModal" tabindex="-1" role="dialog" aria-labelledby="welcomeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content" style="background: #f3fbfc; border-radius: 16px;">
      <div class="vmsection pt-3">
           
            <img src="<?php echo base_url() ?>assets/main/images/logo.png" alt="" style="height: 100px; background: #1f6f69;padding: 13px;" data-aos="fade-up">
            <h2 style="text-align:center; color:#a25359; padding-top:30px;" data-aos="fade-up">Welcome To Beds World</h2>
            <h5  style="text-align:center;" data-aos="fade-up">we're a commitment to beautiful and healthy skin.
            </h5>
            <div class="galbtn  m-auto explorebtn pb-3">
                  <button class="exp"  onclick="closeModal()">Continue Shopping</button>
               </div>
         </div>
    </div>
  </div>
</div>

   <!-- -------------img gallery sec end------- -->
   <?php include_once('includes/footer.php')?>
   <?php include_once('includes/foot.php')?>
   <script>
function closeModal() {
  $('#welcomeModal').modal('hide');
}
</script>

   </body>
</html>