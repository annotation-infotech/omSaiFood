<!DOCTYPE html>
<html lang="en">
   <?php include_once('head.php')?>
   <?php include_once('header.php')?>
   <!-- -----------------------------------------Banner Section start-------------------------------------------- -->
   <!-- --------------------------------------product Details section start--------------------------------- -->
   <section class="contact pt-5 pb-5">
    <div class="container">
        <div class="contactcard row">
            <div class="cardleft col-lg-12">
                <div class="row heading-top-rate p-3">
                    <div class="col-lg-4 verfied-rating">
                        <h2 class="mb-0 text-dark">Rate this Product</h2>
                        <div class="star-rating">
                            <span class="star-filled"></span>
                            <span class="star-filled"></span>
                            <span class="star-filled"></span>
                            <span class="star-filled"></span>
                            <span class="star-filled"></span>
                            <span class="rating">4.5/5</span>
                        </div>
                    </div>
                    <div class="col-lg-8 rehead"><a href="index.php">
                        <!-- Replace the p and button with a close button -->
                        <button class="btn close-btn " style="background: transparent; color: black;">&#10006;</button></a>
                    </div>
                </div>

                <form id="contact-form" action="mail.php" method="post">
                    <div class="row">
                        <div class="col-lg-12">
                            <h5 class="text-dark" style="margin-bottom: 0;">Review this product</h5>
                            <textarea name="message" cols="30" rows="10" placeholder="Message"></textarea>
                        </div>
                        <div class="col-lg-12">
                            <h5 class="text-dark" style="margin-bottom: 0;">Title (Optional)</h5>
                            <input name="email" placeholder="Email" type="email">
                        </div>
                    </div>
                    <div><input type="file" id="fileInput" style="display: none;" accept="image/*">
                    <svg id="uploadIcon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 91.05" height="60px" fill="#64a19f"><defs><style></style></defs><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><g class="cls-1"><path class="cls-2" d="M100,28.79V83.9c-2.36,5.7-4.54,7.15-10.78,7.15h-66c-6.76,0-10.1-3.31-10.1-10.06q0-19.77,0-39.53c0-.78.06-1.56.1-2.52h12.9V25.87H39.1V12.77h2.66c7.85,0,15.7.13,23.54-.07,2.9-.07,5.08.5,6.82,2.94a27.56,27.56,0,0,0,4.2,4.57,5.25,5.25,0,0,0,3,1.3c3.25.16,6.51.06,9.77.06C95.63,21.57,97.59,22.87,100,28.79ZM78.36,56.21c-.23-12.34-10.07-22.1-22.09-21.9A22,22,0,0,0,34.69,56.93c.24,11.73,10.39,21.3,22.42,21.13C68.63,77.9,78.58,67.68,78.36,56.21Z"/><path class="cls-2" d="M0,12.79H13.12V0h8.59V12.89h13v8.68H21.89V34.42H13.17V21.23H0Z"/><path class="cls-2" d="M56.62,42.45a13.94,13.94,0,1,1-14,13.61A13.89,13.89,0,0,1,56.62,42.45Z"/></g></g></g></svg>
                    </div>
                    <div class="col-lg-3 pt-5"><a href="index.php">
                        <button type="button" class="button-contact" >SUBMIT</button></a>
                     </div>
                </form>
            </div>
        </div>
    </div>
</section>

   <!-- --------------------------------------product Details section end--------------------------------- -->
   <script>
      // JavaScript code for testimonial slider
      document.addEventListener("DOMContentLoaded", function () {
      const testimonialCards = document.querySelectorAll(".testimonial-card");
      
      testimonialCards.forEach((card) => {
        card.addEventListener("click", () => {
           // Remove the "zoomed" class from all testimonials
           testimonialCards.forEach((card) => {
              card.classList.remove("zoomed");
           });
      
           // Add the "zoomed" class to the clicked testimonial
           card.classList.add("zoomed");
        });
      });
      });
      
   </script>

<script>
// Get references to the SVG and file input elements by their IDs
var uploadIcon = document.getElementById("uploadIcon");
var fileInput = document.getElementById("fileInput");

// Add a click event listener to the SVG
uploadIcon.addEventListener("click", function() {
    // Simulate a click event on the file input when the SVG is clicked
    fileInput.click();
});

// Add an event listener to the file input to handle the selected file
fileInput.addEventListener("change", function() {
    // Access the selected file using fileInput.files[0]
    var selectedFile = fileInput.files[0];
    
    // You can now perform actions with the selected file, such as uploading it to a server or displaying it on the page
    // For example, to display the selected image on the page:
    var imgElement = document.createElement("img");
    imgElement.src = URL.createObjectURL(selectedFile);
    document.body.appendChild(imgElement);
});
</script>
   
   <?php include_once('footer.php')?>
   <?php include_once('foot.php')?>
   </body>
</html>