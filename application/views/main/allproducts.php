<!DOCTYPE html>
<html lang="en">
   <?php include_once('head.php')?>
   <?php include_once('header.php')?>
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
   
   <!-- --------------------------------Category section start---------------------------------- -->
   <div class="category" id="bestselling">
    <div class="container">
        <div class="bestsell">
            <h3>Best Selling <span class="vall">view all</span></h3>
        </div>
        <div class="row">
            <!-- Group 1 (Two cards per row on mobile) -->
            <div class="col-lg-3 col-md-6">
                <div class="card whishcard" style="width: 15rem; position: relative;">
                <img src="images/prod.png" class="card-img-top" alt="...">
                  <div class="card-body whishbody">
                     <h5 class="card-title whhead">
                        SNOWY GLOW MATTE LADY LOVE
                        <p class="weight">10g <span class="offer">20% off</span></p>
                        
                     </h5>
                     <div class="bttxt d-flex">
                        <p class="card-text"><span class="price">₹236</span><del>₹400</del></p>
                        <a href="productdetails.php" class="btn whbtn">Add To Bag</a>
                     </div>
                  </div>
                  <!-- SVG heart image -->
                  <svg id="heart-svg" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" style="position: absolute; top: 10px; right: 10px;">
                     <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"fill="#d7b5b7"/>
                  </svg>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card whishcard" style="width: 15rem; position: relative;">
                    <img src="images/prod.png" class="card-img-top" alt="...">
                  <div class="card-body whishbody">
                     <h5 class="card-title whhead">
                        SNOWY GLOW MATTE LADY LOVE
                        <p class="weight">10g <span class="offer">20% off</span></p>
                        
                     </h5>
                     <div class="bttxt d-flex">
                        <p class="card-text"><span class="price">₹236</span><del>₹400</del></p>
                        <a href="productdetails.php" class="btn whbtn">Add To Bag</a>
                     </div>
                  </div>
                  <!-- SVG heart image -->
                  <svg id="heart-svg" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" style="position: absolute; top: 10px; right: 10px;">
                     <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"fill="#d7b5b7"/>
                  </svg>
                </div>
            </div>

            <!-- Group 2 (Two cards per row on mobile) -->
            <div class="col-lg-3 col-md-6">
                <div class="card whishcard" style="width: 15rem; position: relative;">
                    <img src="images/prod.png" class="card-img-top" alt="...">
                  <div class="card-body whishbody">
                     <h5 class="card-title whhead">
                        SNOWY GLOW MATTE LADY LOVE
                        <p class="weight">10g <span class="offer">20% off</span></p>
                        
                     </h5>
                     <div class="bttxt d-flex">
                        <p class="card-text"><span class="price">₹236</span><del>₹400</del></p>
                        <a href="productdetails.php" class="btn whbtn">Add To Bag</a>
                     </div>
                  </div>
                  <!-- SVG heart image -->
                  <svg id="heart-svg" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" style="position: absolute; top: 10px; right: 10px;">
                     <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"fill="#d7b5b7"/>
                  </svg>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card whishcard" style="width: 15rem; position: relative;">
                    <img src="images/prod.png" class="card-img-top" alt="...">
                  <div class="card-body whishbody">
                     <h5 class="card-title whhead">
                        SNOWY GLOW MATTE LADY LOVE
                        <p class="weight">10g <span class="offer">20% off</span></p>
                        
                     </h5>
                     <div class="bttxt d-flex">
                        <p class="card-text"><span class="price">₹236</span><del>₹400</del></p>
                        <a href="productdetails.php" class="btn whbtn">Add To Bag</a>
                     </div>
                  </div>
                  <!-- SVG heart image -->
                  <svg id="heart-svg" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" style="position: absolute; top: 10px; right: 10px;">
                     <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"fill="#d7b5b7"/>
                  </svg>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="category pt-0">
    <div class="container">
        <div class="bestsell">
            <h3>Tranding<span class="vall">view all</span></h3>
        </div>
        <div class="row">
            <!-- Group 1 (Two cards per row on mobile) -->
            <div class="col-lg-3 col-md-6">
                <div class="card whishcard" style="width: 15rem; position: relative;">
                    <img src="images/prod.png" class="card-img-top" alt="...">
                  <div class="card-body whishbody">
                     <h5 class="card-title whhead">
                        SNOWY GLOW MATTE LADY LOVE
                        <p class="weight">10g <span class="offer">20% off</span></p>
                        
                     </h5>
                     <div class="bttxt d-flex">
                        <p class="card-text"><span class="price">₹236</span><del>₹400</del></p>
                        <a href="productdetails.php" class="btn whbtn">Add To Bag</a>
                     </div>
                  </div>
                  <!-- SVG heart image -->
                  <svg id="heart-svg" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" style="position: absolute; top: 10px; right: 10px;">
                     <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"fill="#d7b5b7"/>
                  </svg>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card whishcard" style="width: 15rem; position: relative;">
                    <img src="images/prod.png" class="card-img-top" alt="...">
                  <div class="card-body whishbody">
                     <h5 class="card-title whhead">
                        SNOWY GLOW MATTE LADY LOVE
                        <p class="weight">10g <span class="offer">20% off</span></p>
                        
                     </h5>
                     <div class="bttxt d-flex">
                        <p class="card-text"><span class="price">₹236</span><del>₹400</del></p>
                        <a href="productdetails.php" class="btn whbtn">Add To Bag</a>
                     </div>
                  </div>
                  <!-- SVG heart image -->
                  <svg id="heart-svg" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" style="position: absolute; top: 10px; right: 10px;">
                     <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"fill="#d7b5b7"/>
                  </svg>
                </div>
            </div>

            <!-- Group 2 (Two cards per row on mobile) -->
            <div class="col-lg-3 col-md-6">
                <div class="card whishcard" style="width: 15rem; position: relative;">
                    <img src="images/prod.png" class="card-img-top" alt="...">
                  <div class="card-body whishbody">
                     <h5 class="card-title whhead">
                        SNOWY GLOW MATTE LADY LOVE
                        <p class="weight">10g <span class="offer">20% off</span></p>
                        
                     </h5>
                     <div class="bttxt d-flex">
                        <p class="card-text"><span class="price">₹236</span><del>₹400</del></p>
                        <a href="productdetails.php" class="btn whbtn">Add To Bag</a>
                     </div>
                  </div>
                  <!-- SVG heart image -->
                  <svg id="heart-svg" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" style="position: absolute; top: 10px; right: 10px;">
                     <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"fill="#d7b5b7"/>
                  </svg>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card whishcard" style="width: 15rem; position: relative;">
                    <img src="images/prod.png" class="card-img-top" alt="...">
                  <div class="card-body whishbody">
                     <h5 class="card-title whhead">
                        SNOWY GLOW MATTE LADY LOVE
                        <p class="weight">10g <span class="offer">20% off</span></p>
                        
                     </h5>
                     <div class="bttxt d-flex">
                        <p class="card-text"><span class="price">₹236</span><del>₹400</del></p>
                        <a href="productdetails.php" class="btn whbtn">Add To Bag</a>
                     </div>
                  </div>
                  <!-- SVG heart image -->
                  <svg id="heart-svg" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" style="position: absolute; top: 10px; right: 10px;">
                     <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"fill="#d7b5b7"/>
                  </svg>
                </div>
            </div>
        </div>
    </div>
</div>
   <!--------------------Category section end------------------------->
   

  
   <?php include_once('footer.php')?>
   <?php include_once('foot.php')?>
   </body>
</html>