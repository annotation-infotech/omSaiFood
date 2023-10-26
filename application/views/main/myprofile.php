<!DOCTYPE html>
<html lang="en">
<?php include_once('includes/head.php') ?>
<?php include_once('includes/header.php') ?>
<style>
</style>
<style>
</style>
<div class="p-5 profile-section">
   <div class="container summary tab-opt-pro">
      <div class="row">
         <!-- Left side for the shopping cart -->
         <div class="col-lg-3 orsumtop tab-pill-left">
            <div class="card" style="border:none;">
               <div class="tab">
                  <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">
                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19.67 25.12" width="20" height="20">
                        <defs>
                           <style>
                              .cls-1 {
                                 fill: gray;
                              }
                           </style>
                        </defs>
                        <g id="Layer_2" data-name="Layer 2">
                           <g id="Layer_1-2" data-name="Layer 1">
                              <path class="cls-1" d="M9.84,25.12a24.17,24.17,0,0,1-5.75-.74A9.35,9.35,0,0,1,1.5,23.3,3.82,3.82,0,0,1,.33,22.17,2.11,2.11,0,0,1,0,21a9.71,9.71,0,0,1,4.61-8.33c.31-.21.32-.2.61,0a7.73,7.73,0,0,0,9.39-.13c.09-.07.15-.09.25,0a9.75,9.75,0,0,1,4.69,7c.07.4.08.81.11,1.22a2.44,2.44,0,0,1-.87,2.1A6.34,6.34,0,0,1,16.68,24a15.7,15.7,0,0,1-4,.89C11.7,25,10.77,25.05,9.84,25.12Z" transform="translate(0)" />
                              <path class="cls-1" d="M9.85,0A6.5,6.5,0,1,1,3.34,6.46,6.5,6.5,0,0,1,9.85,0Z" transform="translate(0)" />
                           </g>
                        </g>
                     </svg>
                     <span>My Profile</span>
                  </button>
                  <button class="tablinks" onclick="openCity(event, 'Paris')">
                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21.73 21.52" width="20" height="20">
                        <defs>
                           <style>
                              .cls-1 {
                                 fill: gray;
                              }
                           </style>
                        </defs>
                        <g id="Layer_2" data-name="Layer 2">
                           <g id="Layer_1-2" data-name="Layer 1">
                              <path class="cls-1" d="M.15,4.69c.91-.41,1.8-.82,2.69-1.21Q6.65,1.77,10.47.1a1.14,1.14,0,0,1,.85,0c3.34,1.47,6.66,3,10,4.47l.34.18L19.15,5.85C16.56,7,14,8.19,11.38,9.33a1.06,1.06,0,0,1-.8,0C7.15,7.87,3.73,6.34.31,4.82A.76.76,0,0,1,.15,4.69Z" />
                              <path class="cls-1" d="M9.93,21.5c-.55-.24-1.06-.45-1.56-.68L.47,17.21C.18,17.08,0,17,0,16.59q0-4.73,0-9.45a2.43,2.43,0,0,1,0-.28,2,2,0,0,1,.37.08l9.21,4.23a.73.73,0,0,1,.34.5c0,3.19,0,6.38,0,9.56A1.22,1.22,0,0,1,9.93,21.5Z" />
                              <path class="cls-1" d="M21.72,6.81v.78q0,4.42,0,8.87a.7.7,0,0,1-.44.76c-3.06,1.38-6.11,2.78-9.17,4.17a4,4,0,0,1-.38.13c0-1.25,0-2.46,0-3.66,0-2,0-4,0-6a.61.61,0,0,1,.39-.67l9.27-4.22A3.12,3.12,0,0,1,21.72,6.81Z" />
                           </g>
                        </g>
                     </svg>
                     <span>My Orders</span>
                  </button>
                  <button class="tablinks" onclick="openCity(event, 'Tokyo')">
                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23.65 20.03" width="20" height="20">
                        <defs>
                           <style>
                              .cls-1 {
                                 fill: gray;
                              }
                           </style>
                        </defs>
                        <g id="Layer_2" data-name="Layer 2">
                           <g id="Layer_1-2" data-name="Layer 1">
                              <path class="cls-1" d="M23.65,7c0,.24-.09.47-.14.71a8.24,8.24,0,0,1-1.57,3.16,31.29,31.29,0,0,1-5.42,5.43C15,17.56,13.41,18.79,11.85,20h0l-1.59-1.29c-1.79-1.46-3.6-2.9-5.34-4.4A18.26,18.26,0,0,1,1,9.65,6.57,6.57,0,0,1,.05,7a1.21,1.21,0,0,0,0-.18V5.68a1.42,1.42,0,0,0,.05-.22A6.45,6.45,0,0,1,3,.94a6.31,6.31,0,0,1,7.87,1.14l.78.9.16.15,1-1.06A6.61,6.61,0,0,1,16.08.14L16.75,0h1.11a2.61,2.61,0,0,0,.27.06,6.2,6.2,0,0,1,5.31,4.81c.08.34.14.69.21,1Z" />
                           </g>
                        </g>
                     </svg>
                     <span>My Whishlist</span>
                  </button>
                  <button class="tablinks" onclick="openCity(event, 'mumbai')">
                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18.59 25.26" width="20" height="20">
                        <defs>
                           <style>
                              .cls-1 {
                                 fill: gray;
                              }
                           </style>
                        </defs>
                        <g id="Layer_2" data-name="Layer 2">
                           <g id="Layer_1-2" data-name="Layer 1">
                              <path class="cls-1" d="M9.28,25.26c-.22-.3-.43-.56-.62-.84-1.86-2.68-3.79-5.33-5.55-8.08A33.54,33.54,0,0,1,.69,11.6,7.75,7.75,0,0,1,2.8,2.51a9.65,9.65,0,0,1,12.73-.23,8.53,8.53,0,0,1,3,5.69,6.52,6.52,0,0,1-.44,3,38.19,38.19,0,0,1-4.31,8C12.41,21,10.93,23,9.48,25Zm0-20.39a4.29,4.29,0,1,0,4.29,4.25A4.28,4.28,0,0,0,9.29,4.87Z" />
                           </g>
                        </g>
                     </svg>
                     <span>My Address</span>
                  </button>
                  <button class="tablinks" onclick="openCity(event, 'pune')">
                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24.56 23.55" width="20" height="20">
                        <defs>
                           <style>
                              .cls-1 {
                                 fill: gray;
                              }
                           </style>
                        </defs>
                        <g id="Layer_2" data-name="Layer 2">
                           <g id="Layer_1-2" data-name="Layer 1">
                              <path class="cls-1" d="M23.12,10.6H15.47a2.75,2.75,0,0,0-3,3v1.9a2.7,2.7,0,0,0,2.75,2.72h7.92V22a1.42,1.42,0,0,1-1.55,1.55c-.65,0-1.3,0-1.95,0H1.79C.48,23.55,0,23.07,0,21.77V7.09C0,5.88.47,5.41,1.68,5.41H21.4c1.22,0,1.71.5,1.71,1.73S23.12,9.39,23.12,10.6Z" />
                              <path class="cls-1" d="M19.06,11.56h4A1.34,1.34,0,0,1,24.54,13c0,1,0,2,0,3a1.35,1.35,0,0,1-1.48,1.4h-8A1.37,1.37,0,0,1,13.55,16c-.05-1-.05-2,0-3a1.34,1.34,0,0,1,1.54-1.39Zm-1.18,2.92a1,1,0,0,0-1-1,1,1,0,0,0,0,2A1,1,0,0,0,17.88,14.48Z" />
                              <path class="cls-1" d="M20.31,4.52H9.39l0-.08.37-.11,8.08-2.26C19,1.73,19.6,2.05,20,3.26,20.07,3.65,20.18,4,20.31,4.52Z" />
                              <path class="cls-1" d="M4.63,4.38,11.54.94,13.07.18a1.39,1.39,0,0,1,2,.67c.15.29.29.59.46.94l-5.3,1.5c-1.2.34-2.38.7-3.59,1a18.36,18.36,0,0,1-1.95.3Z" />
                           </g>
                        </g>
                     </svg>
                     <span>Saved Payments</span>
                  </button>
                  <button class="tablinks" onclick="openCity(event, 'Tokyo')" id="lasttabpill">
                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22.91 22.43" width="20" height="20">
                        <defs>
                           <style>
                              .cls-1 {
                                 fill: gray;
                              }
                           </style>
                        </defs>
                        <g id="Layer_2" data-name="Layer 2">
                           <g id="Layer_1-2" data-name="Layer 1">
                              <path class="cls-1" d="M11.43,0a11.09,11.09,0,0,1,9.19,5.08.36.36,0,0,1,.06.28.4.4,0,0,1-.26.12c-.57,0-1.15,0-1.72,0a.72.72,0,0,1-.43-.24,8.84,8.84,0,0,0-5.59-3.11A8.8,8.8,0,0,0,4.57,4.86a8.76,8.76,0,0,0-1.85,9.85,8.69,8.69,0,0,0,6.77,5.56,9,9,0,0,0,8.74-3,.76.76,0,0,1,.61-.29c.5,0,1,0,1.5,0a.45.45,0,0,1,.33.13c0,.06,0,.23-.09.32a11,11,0,0,1-6.9,4.73,11.2,11.2,0,0,1-9-20A11.32,11.32,0,0,1,11.43,0Z" />
                              <path class="cls-1" d="M18.79,12.16h-8c-.34,0-.38-.05-.38-.38V10.66c0-.34,0-.38.39-.38h8c0-.56,0-1.1,0-1.64a2.56,2.56,0,0,1,.13-.53,2.47,2.47,0,0,1,.46.23c1.1.85,2.19,1.72,3.29,2.59.32.26.32.32,0,.58l-3.4,2.68a1.83,1.83,0,0,1-.35.14,1.49,1.49,0,0,1-.13-.39C18.78,13.36,18.79,12.78,18.79,12.16Z" />
                           </g>
                        </g>
                     </svg>
                     <span>Logout</span>
                  </button>
               </div>
            </div>
         </div>
         <!-- Right side for the order summary -->
         <div class="col-lg-9">
            <div id="London" class="tabcontent ">
               <div class="row mt-4  heading-top-rate p-3 my-pro-border">
                  <div class="col-lg-2" style="    text-align: center;">
                     <div class=" align-items-center profile-myinfo">
                        <img src="<?= base_url() ?>assets/main/images/whiteprofile.svg" alt="User Image" class="img-fluid" style="max-width: 65px;">
                     </div>
                  </div>
                  <div class="col-lg-7 rateing-text mypro-text-name">
                     <h4>Hi! Emily D’ souza</h4>
                     <p><strong>
                           Phone: +91 9876 543 210</strong>
                     </p>
                     <p><strong>
                           Email: </strong>Emily@gmail.com
                     </p>
                     <p><strong>
                           Address: </strong>189, haware fantasia, Vashi: 400007
                     </p>
                     <div class="col-lg-9 p-0 mt-2 d-flex">
                        <button class="btn myprobtn-pill">Edit</button>
                        <button class="btn myprobtn-pill chage-pass" data-toggle="modal" data-target="#changePassword">Change Password</button>
                        <!-- Modal -->
                        <div class="modal fade" id="changePassword" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="changePasswordLabel" aria-hidden="true">
                           <div class="modal-dialog modal-dialog-centered">
                              <div class="modal-content">
                                 <div class="modal-header">
                                    <h5 class="modal-title" id="changePasswordLabel">Change Passowrd</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                       <span aria-hidden="true">&times;</span>
                                    </button>
                                 </div>
                                 <div class="modal-body">

                                    <form id="change-password" method="post" class="p-4">
                                       <div>
                                          <div class="col-lg-12 mb-2">
                                             <input name="oldPassword" id="oldPassword" placeholder="Enter Old Password" type="password" class="mt-2 w-100 mb-0">
                                             <div class="error" id="oldPasswordError"></div>
                                          </div>

                                          <div class="col-lg-12 mb-2">
                                             <input name="newPassword" id="newPassword" placeholder="Enter New Password" type="password" class="mt-2 w-100 mb-0">
                                             <div class="error" id="newPasswordError"></div>
                                          </div>

                                          <div class="col-lg-12 mb-2">
                                             <input name="confirmNewPassword" id="confirmNewPassword" placeholder="Enter Confirm New Password" type="password" class="mt-2 w-100 mb-0">
                                             <div class="error" id="confirmNewPasswordError"></div>
                                          </div>
                                       </div>
                                    </form>

                                 </div>
                                 <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary" id="changePasswordbtn">Change Password</button>
                                 </div>
                              </div>
                           </div>
                        </div>

                     </div>
                  </div>
               </div>
            </div>
            <div id="Paris" class="tabcontent my-ord-tab">
               <div class="row heading-top-rate p-3 ">
                  <div class="col-lg-8 verfied-rating">
                     <p class="text-muted">ORDER NUMBER</p>
                     <p class="text-muted">SNW-61641210-2083622</p>
                     <h6>4 Item(s) Delivered</h6>
                     <p class="text-muted">Package delivered <b>On Mon, 11 Jan</b></p>
                     <div class="col-lg-9 p-0">
                        <img src="<?= base_url() ?>assets/main/images/bigsale.png" alt="Image 1" class="img-fluid" style="max-width: 100px;">
                        <img src="<?= base_url() ?>assets/main/images/bigsale.png" alt="Image 2" class="img-fluid" style="max-width: 100px;">
                        <img src="<?= base_url() ?>assets/main/images/bigsale.png" alt="Image 3" class="img-fluid" style="max-width: 100px;">
                     </div>
                  </div>
                  <div class="col-lg-4 ord-detail-btn" style="text-align: right;"><a href="uploadrating.php"></a>
                     <button class="btn revbtn">Order Details</button></a>
                  </div>
               </div>
               <div class="row heading-top-rate p-3 ">
                  <div class="col-lg-8 verfied-rating">
                     <p class="text-muted">ORDER NUMBER</p>
                     <p class="text-muted">SNW-61641210-2083622</p>
                     <h6>4 Item(s) Delivered</h6>
                     <p class="text-muted">Package delivered <b>On Mon, 11 Jan</b></p>
                     <div class="col-lg-9 p-0">
                        <img src="<?= base_url() ?>assets/main/images/bigsale.png" alt="Image 1" class="img-fluid" style="max-width: 100px;">
                        <img src="<?= base_url() ?>assets/main/images/bigsale.png" alt="Image 2" class="img-fluid" style="max-width: 100px;">
                        <img src="<?= base_url() ?>assets/main/images/bigsale.png" alt="Image 3" class="img-fluid" style="max-width: 100px;">
                     </div>
                  </div>
                  <div class="col-lg-4 ord-detail-btn" style="text-align: right;"><a href="uploadrating.php"></a>
                     <button class="btn revbtn">Order Details</button></a>
                  </div>
               </div>
            </div>
            <div id="Tokyo" class="tabcontent">
               <div class="row p-3">
                  <div class="col-lg-3">
                     <div class="card whishcard" style=" position: relative;">
                        <img src="<?= base_url() ?>assets/main/images/G4.png" class="card-img-top" alt="...">
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
                  <div class="col-lg-3">
                     <div class="card whishcard" style=" position: relative;">
                        <img src="<?= base_url() ?>assets/main/images/G4.png" class="card-img-top" alt="...">
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
                  <div class="col-lg-3">
                     <div class="card whishcard" style=" position: relative;">
                        <img src="<?= base_url() ?>assets/main/images/G4.png" class="card-img-top" alt="...">
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
                  <div class="col-lg-3">
                     <div class="card whishcard" style=" position: relative;">
                        <img src="<?= base_url() ?>assets/main/images/G4.png" class="card-img-top" alt="...">
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
            <div id="mumbai" class="tabcontent">
               <div class="row p-3">
                  <div class="col-lg-6">
                     <div class="address-card">
                        <h4>
                           Home
                        </h4>
                        <p>189, Haware Fantasia, Near Inorbit Mall,<br>Vashi, Navi Mumbai 400704</p>
                        <i class="dlt-btn" onclick="deleteAddress(this)"><img src="<?= base_url() ?>assets/main/images/delete.svg" alt=""></i>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="address-card">
                        <h4>
                           Home
                        </h4>
                        <p>189, Haware Fantasia, Near Inorbit Mall,<br>Vashi, Navi Mumbai 400704</p>
                        <i class="dlt-btn" onclick="deleteAddress(this)"><img src="<?= base_url() ?>assets/main/images/delete.svg" alt=""></i>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="address-card">
                        <h4>
                           Home
                        </h4>
                        <p>189, Haware Fantasia, Near Inorbit Mall,<br>Vashi, Navi Mumbai 400704</p>
                        <i class="dlt-btn" onclick="deleteAddress(this)"><img src="<?= base_url() ?>assets/main/images/delete.svg" alt=""></i>
                     </div>
                  </div>
                  <!-- Add more address cards as needed -->
               </div>
               <div class="col-lg-3 ord-detail-btn" style="float:right; padding:10px;"><a href="uploadrating.php"></a>
                  <button class="btn revbtn">Add New Address</button></a>
               </div>
            </div>
            <div id="pune" class="tabcontent">
               <div class="row p-3">
                  <div class="col-lg-6">
                     <div class="address-card">
                        <div class="d-flex align-items-center">
                           <img src="<?= base_url() ?>assets/main/images/gpay.svg" alt="" style="width: 30px; height: 30px;">
                           <p style="margin-bottom: 0; margin-left: 10px;">BHIM<br>emily@icici</p>
                           <i class="dlt-btn" onclick="deleteAddress(this)" style="margin-left: 10px;"><img src="<?= base_url() ?>assets/main/images/delete.svg" alt="" style="width: 20px; height: 20px;"></i>
                        </div>
                     </div>
                  </div>
                  <!-- Add more address cards as needed -->
               </div>
            </div>
            <div id="Tokyo" class="tabcontent">
               <h3>Tokyo</h3>
               <p>Tokyo is the capital of Japan.</p>
            </div>
         </div>
      </div>
   </div>
</div>
<script>
   function openCity(evt, cityName) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
         tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
         tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      document.getElementById(cityName).style.display = "block";
      evt.currentTarget.className += " active";
   }

   // Get the element with id="defaultOpen" and click on it
   document.getElementById("defaultOpen").click();
</script>
<?php include_once('includes/footer.php') ?>
<?php include_once('includes/foot.php') ?>
<script>
   // Function to delete the address card
   function deleteAddress(element) {
      if (confirm("Are you sure you want to delete this address?")) {
         // Remove the parent address card element
         element.parentElement.parentElement.remove();
      }
   }
</script>
<!-- Include Bootstrap and Font Awesome libraries (you can replace with your own) -->

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script>
   $(document).ready(function() {
      $("#change-password").validate({
         rules: {
            oldPassword: "required",
            newPassword: {
               required: true,
               minlength: 5
            },
            confirmNewPassword: {
               equalTo: "#newPassword"
            }
         },
         messages: {
            oldPassword: "Please enter your old password",
            newPassword: {
               required: "Please enter your new password",
               minlength: "New password must be at least 5 characters long"
            },
            confirmNewPassword: {
               equalTo: "Passwords do not match"
            }
         },
         errorPlacement: function(error, element) {
            error.appendTo("#" + element.attr("id") + "Error");
         },
         submitHandler: function(form) {
            // Serialize the form data
            var formData = $(form).serialize();

            // Send an AJAX request to handle password change
            $.ajax({
               type: "POST",
               url: baseUrl + "Ajax/changePassword",
               data: formData,
               success: function(response) {
                  if (response.success == true) {

                     Swal.fire({
                        position: 'top-end',
                        title: response.message,
                        showConfirmButton: false,
                        timer: 1500
                     })

                     setTimeout(function() {
                        location.reload();
                     }, 1500);
                  } else {

                     $('#oldPasswordError').text(response.errors)
                  }
               },
               error: function(xhr, status, error) {
                  // Handle errors here (e.g., show an error message)
                  console.log('Error:', error);
               }
            });
         }
      });
      $('#changePasswordbtn').click(function() {
         $("#change-password").submit();
      });
   });
</script>
</body>

</html>