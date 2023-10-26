<div class="col-lg-2 desk-filter-hidden">
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
               <?php foreach ($categories as $category) : ?>
                  <label><input type="checkbox" data-filter="type" value="<?= $category['SubCategoryName'] ?>"> <?= $category['SubCategoryName'] ?></label><br>
               <?php endforeach; ?>
               <!-- Add more color checkboxes as needed -->
            </div>

            <div class="filter-section" style="background-color: white; padding: 20px;">
               <h4>By Size</h4>
               <?php
               $uniqueSizes = array_unique(array_column($productprice, 'ProductSize'));
               foreach ($uniqueSizes as $size) : ?>
                  <label><input type="checkbox" data-filter="size" value="<?= $size ?>"> <?= $size ?></label><br>
               <?php endforeach; ?>
               <!-- Add more size checkboxes as needed -->
            </div>
            <div class="filter-section" style="background-color: white; padding: 20px;">
               <h4>Color</h4>
               <?php
               $uniqueColors = array_unique(array_column($productprice, 'ProductColor'));
               foreach ($uniqueColors as $color) : ?>
                  <label class="d-flex" style="gap:5px;">
                     <input type="checkbox" data-filter="color" value="<?= $color ?>">
                     <span class="color-box" style="background-color: <?= $color ?>;"></span>


                  </label><br>
               <?php endforeach; ?>

            </div>



            <style>
               .color-box {
                  width: 25px;
                  height: 14px;
                  border: 1px solid #000;
               }
            </style>




            <div class="filter-section" style="background-color: white; padding: 20px;">
               <h4>Material</h4>
               <?php
               $uniqueTypes = array_unique(array_column($productprice, 'ProductType'));
               foreach ($uniqueTypes as $type) :
               ?>
                  <label>
                     <input type="checkbox" data-filter="material" value="<?= $type ?>">
                     <?= $type ?>
                  </label><br>
               <?php endforeach; ?>
               <!-- Add more type checkboxes as needed -->
            </div>

         </div>