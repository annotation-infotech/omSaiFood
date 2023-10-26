<style>
   /* Custom styles for the navigation bar */
   .full-screen-dropdown {
      position: fixed;
      top: 85%;
      left: 0;
      width: 100%;
      height: auto;
      z-index: 1000;
      background-color: #e1e3e1;
      /* Set the background color to white */
      overflow-y: ;
      /* Enable vertical scrolling if the content exceeds the viewport height */
   }

   .full-screen-dropdown h6 {
      color: #0c6c68;
   }

   .dropdown-item {
      font-size: 14px;
   }

   #navbarSupportedContent {
      justify-content: space-around;
   }
</style>
 
<body class="header_sticky" style="overflow: hidden;">
   <div class="educare-header-section">
      <div class="before-nav p-3">
         <p style=" text-align: right;">Call: 987 654 3210 | 9876543210 | E-mail: info@bedsworld.com</p>
      </div>
      <div class="header educare-info-header clearfix">
         <div class="texteducare-info clearfix">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <img class="bedlogo" src="<?= base_url() ?>assets/main/images/logo.png" alt="logo" style="margin-left: 80px;">
               <div class="">
                  <button type="button" class="btn filter-btn-mob nav-fil-btn" data-toggle="modal" data-target="#uniqueModal">
                     <ul class="navbar-nav svgin-mob">

                        <img src="<?= base_url() ?>assets/main/images/filter.svg" alt="" style="height: 25px; margin-left:5em;"></a>

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

               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
               </button>

               <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent"> -->
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                     <li class="nav-item">
                        <a class="nav-link" href="index.php">Best Seller</a>
                     </li>
                     <li class="nav-item dropdown position-static">
                        <a class="nav-link dropdown-toggle" href="<?= base_url() ?>beds" id="navbarDropdown" role="button" data-bs-toggle="" aria-expanded="false">
                           Beds
                        </a>
                        <ul class="dropdown-menu full-screen-dropdown">
                           <div class="container pt-3">
                              <div class="row">
                                 <div class="col-md-3">
                                    <h6>Shop By Bed Sizes</h6>
                                    <li><a class="dropdown-item" href="filter.php">Super King Beds</a></li>
                                    <li><a class="dropdown-item" href="#">King Size Beds</a></li>
                                    <li><a class="dropdown-item" href="#">Double Beds</a></li>
                                    <li><a class="dropdown-item" href="#">Small Double Beds</a></li>
                                    <li><a class="dropdown-item" href="#">Single Beds</a></li>
                                    <li><a class="dropdown-item" href="#">Small Single Beds</a></li>
                                 </div>
                                 <div class="col-md-3">
                                    <h6>Shop By Bed Types</h6>
                                    <li><a class="dropdown-item" href="#">TV Beds</a></li>
                                    <li><a class="dropdown-item" href="#">Ottoman Beds </a></li>
                                    <li><a class="dropdown-item" href="#">Divan Beds</a></li>
                                    <li><a class="dropdown-item" href="#">Bed Frames </a></li>
                                    <li><a class="dropdown-item" href="#">Divan Bed Bases</a></li>
                                    <li><a class="dropdown-item" href="#">Adjustable Beds</a></li>
                                    <li><a class="dropdown-item" href="#">Eco Friendly Beds</a></li>
                                    <li><a class="dropdown-item" href="#">Sofa Beds</a></li>
                                    <li><a class="dropdown-item" href="#">Guest Beds</a></li>
                                    <li><a class="dropdown-item" href="#">Electric Beds</a></li>
                                 </div>
                                 <div class="col-md-3">
                                    <h6>Shop By Bed Materials</h6>
                                    <li><a class="dropdown-item" href="#">Wooden Beds</a></li>
                                    <li><a class="dropdown-item" href="#">Fabric & Upholstered Beds</a></li>
                                    <li><a class="dropdown-item" href="#">Metal Beds</a></li>
                                    <li><a class="dropdown-item" href="#">Faux Leather Beds</a></li>
                                    <li><a class="dropdown-item" href="#">Velvet Beds</a></li>
                                 </div>
                                 <div class="col-md-3">
                                    <li><a class="dropdown-item" href="#"><img src="<?= base_url() ?>assets/main/images/offerimgnav.png" alt=""></a></li>
                                 </div>
                              </div>
                           </div>
                        </ul>
                     </li>
                     <li class="nav-item dropdown position-static">
                        <a class="nav-link dropdown-toggle" href="<?= base_url() ?>sofa" id="navbarDropdown" role="button" data-bs-toggle="" aria-expanded="false">
                           Sofas
                        </a>
                        <ul class="dropdown-menu full-screen-dropdown">
                           <div class="container pt-3">
                              <div class="row">
                                 <div class="col-md-3">
                                    <h6>Shop By Bed Sizes</h6>
                                    <li><a class="dropdown-item" href="sofa.php">Super King sofa</a></li>
                                    <li><a class="dropdown-item" href="#">King Size sofa</a></li>
                                    <li><a class="dropdown-item" href="#">Double sofa</a></li>
                                    <li><a class="dropdown-item" href="#">Recliner Sofa</a></li>
                                    <li><a class="dropdown-item" href="#">Sofa bed</a></li>
                                    <li><a class="dropdown-item" href="#">Sectional sofa</a></li>
                                 </div>
                                 <div class="col-md-3">
                                    <h6>Shop By Bed Types</h6>
                                 </div>
                                 <div class="col-md-3">
                                    <h6>Shop By Bed Materials</h6>
                                    <li><a class="dropdown-item" href="#">Wooden Beds</a></li>
                                    <li><a class="dropdown-item" href="#">Fabric & Upholstered Beds</a></li>
                                    <li><a class="dropdown-item" href="#">Metal Beds</a></li>
                                    <li><a class="dropdown-item" href="#">Faux Leather Beds</a></li>
                                    <li><a class="dropdown-item" href="#">Velvet Beds</a></li>
                                 </div>
                                 <div class="col-md-3">
                                    <li><a class="dropdown-item" href="#"><img src="<?= base_url() ?>assets/main/images/offerimgnav.png" alt=""></a></li>
                                 </div>
                              </div>
                           </div>
                        </ul>
                     </li>
                     <li class="nav-item dropdown position-static">
                        <a class="nav-link dropdown-toggle" href="<?= base_url() ?>mattressess" id="navbarDropdown" role="button" data-bs-toggle="" aria-expanded="false">
                           Matresses
                        </a>
                        <ul class="dropdown-menu full-screen-dropdown">
                           <div class="container pt-3">
                              <div class="row">
                                 <div class="col-md-3">
                                    <h6>Shop By Bed Sizes</h6>
                                    <li><a class="dropdown-item" href="mattressess.php">Super King Mattresses</a></li>
                                    <li><a class="dropdown-item" href="#">King Size Mattresses</a></li>
                                    <li><a class="dropdown-item" href="#">Double Mattresses</a></li>
                                    <li><a class="dropdown-item" href="#">Small Double Mattresses</a></li>
                                    <li><a class="dropdown-item" href="#">Single Mattresses</a></li>
                                    <li><a class="dropdown-item" href="#">Small Single Mattresses</a></li>
                                 </div>
                                 <div class="col-md-3">
                                    <h6>Shop By Bed Types</h6>
                                    <li><a class="dropdown-item" href="#">Memory Foam Mattresses</a></li>
                                    <li><a class="dropdown-item" href="#">Pocket Sprung Mattresses </a></li>
                                    <li><a class="dropdown-item" href="#">Open Coil Mattresses</a></li>
                                    <li><a class="dropdown-item" href="#">Rolled Up Mattresses </a></li>
                                    <li><a class="dropdown-item" href="#">Eco-Friendly Mattresses</a></li>
                                    <li><a class="dropdown-item" href="#">Latex Mattresses</a></li>
                                    <li><a class="dropdown-item" href="#">Orthopaedic Mattresses</a></li>
                                    <li><a class="dropdown-item" href="#">Hybrid Mattresses</a></li>
                                    <li><a class="dropdown-item" href="#">Zip & Link</a></li>
                                 </div>
                                 <div class="col-md-3">
                                    <h6>Shop By Bed Materials</h6>
                                    <li><a class="dropdown-item" href="#">Extra Firm Mattresses</a></li>
                                    <li><a class="dropdown-item" href="#">Firm Mattresses</a></li>
                                    <li><a class="dropdown-item" href="#">Medium Mattresses</a></li>
                                    <li><a class="dropdown-item" href="#">Soft Mattresses</a></li>
                                 </div>
                                 <div class="col-md-3">
                                    <li><a class="dropdown-item" href="#"><img src="<?= base_url() ?>assets/main/images/offerimgnav.png" alt=""></a></li>
                                 </div>
                              </div>
                           </div>
                        </ul>
                     </li>
                     <li class="nav-item dropdown position-static">
                        <a class="nav-link dropdown-toggle" href="<?= base_url() ?>kids" id="navbarDropdown" role="button" data-bs-toggle="" aria-expanded="false">
                           Kids
                        </a>
                        <ul class="dropdown-menu full-screen-dropdown">
                           <div class="container pt-3">
                              <div class="row">
                                 <div class="col-md-3">
                                    <h6>Shop By Bed Sizes</h6>
                                    <li><a class="dropdown-item" href="kids.php">Kids Bunk Beds</a></li>
                                    <li><a class="dropdown-item" href="#">Kids Trundle Beds</a></li>
                                    <li><a class="dropdown-item" href="#">Kids High Sleeper Beds</a></li>
                                    <li><a class="dropdown-item" href="#">Kids Mid Sleeper Beds</a></li>
                                 </div>
                                 <div class="col-md-3">
                                    <li><a class="dropdown-item" href="#"><img src="<?= base_url() ?>assets/main/images/offerimgnav.png" alt=""></a></li>
                                 </div>
                                 <div class="col-md-3">
                                    <li><a class="dropdown-item" href="#"><img src="<?= base_url() ?>assets/main/images/offerimgnav.png" alt=""></a></li>
                                 </div>
                                 <div class="col-md-3">
                                    <li><a class="dropdown-item" href="#"><img src="<?= base_url() ?>assets/main/images/offerimgnav.png" alt=""></a></li>
                                 </div>
                              </div>
                           </div>
                        </ul>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() ?>contact">Contact Us</a>
                     </li>
                  </ul>
                  <div class="d-flex">
                     <!-- Right-aligned content -->
                     <ul class="navbar-nav svgin-mob">
                        <li class="nav-item active"><a href="<?= base_url()?>cart">
                        <span  class="badge cartcount"></span>
                              <img src="<?= base_url() ?>assets/main/images/cartnav.svg" alt="" style="height: 30px; margin-right: 30px;"></a>
                        </li>
                        <li class="nav-item"><a href="<?= base_url() ?>login">
                              <img src="<?= base_url() ?>assets/main/images/wishher.svg" alt="#" style="height: 30px; margin-right: 30px;"></a>
                        </li>
                        <?php if ($user_data['logged_in'] == 0) { ?>
                           <li class="nav-item dropdown"><a href="<?= base_url() ?>login">
                                 <img src="<?php echo base_url() ?>assets/main/images/profile.svg" alt="" style="height: 30px;  margin-right: 30px;"></a>
                           </li>
                        <?php } else { ?>
                           <li class="nav-item dropdown"><a href="<?= base_url() ?>profile">
                                 <img src="<?php echo base_url() ?>assets/main/images/profile.svg" alt="" style="height: 30px;  margin-right: 30px;"></a>
                           </li>
                        <?php } ?>
                     </ul>
                  </div>
               </div>
            </nav>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
            <script>
               // Enable hover for dropdowns
               $(document).ready(function() {
                  $('.nav-item.dropdown').hover(function() {
                     $(this).addClass('show');
                     $(this).find('.dropdown-menu').addClass('show');
                  }, function() {
                     $(this).removeClass('show');
                     $(this).find('.dropdown-menu').removeClass('show');
                  });
               });
            </script>