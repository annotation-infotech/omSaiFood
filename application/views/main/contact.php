<!DOCTYPE html>
<html lang="en">
<?php include_once('includes/head.php') ?>
<?php include_once('includes/header.php') ?>
<style>
   @media only screen and (max-width: 476px) {
      .container {
         padding-left: 8px !important;
         padding-right: 8px !important;
      }

      .contactcard {
         padding: 5px;
      }
   }
</style>
 
<section class="contact pt-5 pb-5">
   <div class="container">
      <div class="contactcard row">
         <div class="cardleft col-lg-6">
            <h2>Get in Touch</h2>
            <form id="contact-form" action="mail.php" method="post">
               <div class="">
                  <div class="col-lg-12">
                     <input name="name" placeholder="Your Name" type="text">
                  </div>
                  <div class="col-lg-12">
                     <input name="phone" placeholder="Phone Number" type="text">
                  </div>
                  <div class="col-lg-12">
                     <input name="email" placeholder="Email" type="email">
                  </div>
                  <div class="col-lg-12">
                     <textarea name="message" cols="30" rows="10" placeholder="Message"></textarea>
                     <button type="submit" class="button-contact">SUBMIT</button>
                  </div>
               </div>
            </form>
         </div>
         <div class="cardright col-lg-6">
            <div class="product-info borlef contact-page-text">
               <h1 class="contact-head">BEDS WORLD</h1>
               <h2 class="mb-0 pt-4">Let’s Connect</h2>
               <h4>Contact us directly or Please do share your
                  Contact info our executives will reply you soon
               </h4>
               <hr>
               <h2 class="mb-0">Info</h2>
               <div class="footer-educare-widget ">
                  <div class="footer-content-widget">
                     <div class="info-list contpageli">
                        <ul class="list-unstyled">
                           <li><i class="fa fa-envelope-o" style="font-size:22px; color:#0d6c68;"></i>bedsworld.official@gmail.com</li>
                           <li><i class="fa fa-phone" style="font-size:22px; color:#0d6c68;"></i><a href="tel:7447725992">+91 836-9700446</a></li>
                           <li>
                              <i class="fa fa-map-marker" style="font-size:22px; color:#0d6c68;"></i>
                              <a href="https://goo.gl/maps/NYWxQirzrTq1fryi9">
                                 <p>Address company - <br> navi mumbai
                                    - 400709
                                 </p>
                              </a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>


               <div class="content-wiget" style="float: left;">
                  <div class="socials text-center icoinsta">
                     <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                     <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
                     <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                     <a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a>
                  </div>
               </div>

            </div>
         </div>
      </div>
   </div>
</section>
 




 




<script>
   // JavaScript code for testimonial slider
   document.addEventListener("DOMContentLoaded", function() {
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
<?php include_once('includes/footer.php') ?>
<?php include_once('includes/foot.php') ?>
</body>

</html>