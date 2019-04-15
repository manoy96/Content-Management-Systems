</main>

   <div class="footer">
      <footer>
         <div class="info">
            <div class="contact">
               <h2>Contact Us</h2>
               <a href="https://goo.gl/maps/mk7e7VAjnpw">
               <p>CABOT CRUIZES</p>
               <p>2907 Santa Monica Blvd,</p>
               <p>Santa Monica, CA 90404</p>
               </a>

               <br>
               <h2>Phone:</h2>
               <p>1-800-555-1234</p>

               <br>

               <h2>Hours of Operation:</h2>
               <p>Monday - Friday 9am - 4pm</p>
            </div>

            <div class="newsletter">
               <h2>News Letter</h2>
               <p>Subscribe to our email list and stay up-to-date with our hottest offers and latest specials.</p>

               <div class="subscribe">
                  <input type="email" name="" id="subscribeEmail" placeholder="email" required>
                  <button type="submit">Subscribe</button>
               </div>
            </div>


            <div class="why">
               <h2>Why Cabot Cruises?</h2>
               <p>Cabot Cruises is a travel agency providing the best cruise deals on our online travel website.
                  We can help
                  you with all inclusive vacations including discounted cruises.</p>
               <br>
               <p>We do not sell travel to residents of Deleware, Iowa, Florida, Hawaii and Washington state
                  because those
                  states are just wierd. If you are a resident of one of these states, call your congressman and
                  tell them to
                  change the regulations. </p>
            </div>

         </div>
      </footer>
   </div>
   <div class="copyright">
      <div class="social">
         <i class="fab fa-facebook-square fa-3x face"></i>
         <i class="fab fa-instagram fa-3x insta"></i>
         <i class="fab fa-pinterest fa-3x pin"></i>
         <i class="fab fa-twitter-square fa-3x twit"></i>
         <i class="fab fa-youtube-square fa-3x you"></i>
      </div>
      <p>&copy; 2019 Cabot Cruises - Manuel Espinoza</p>
      <a href="http://cabotcruises.manuelespin.com/wp-admin/index.php">admin</a>
   </div>






   <!-- JQUERY -->
   <script src="<?php echo get_template_directory_uri(); ?>/slick/jquery-3.3.1.js"></script>

   <script>
      $(document).ready(function () {
         $('.mySlider').slick({
            autoplay: true,
            dots: true,
            arrows: false,
            cssEase: 'ease-out',
            speed: 2000,
            autoplaySpeed: 8000
         });
      });
   </script>
   <!-- my script -->
   <script src="http://cabotcruises.manuelespin.com/wp-content/themes/cabotcruises/js/scripts.js"></script>
   <!-- SLICK SLIDER -->
   <script  src="<?php echo get_template_directory_uri(); ?>/slick/slick.min.js"></script>


   <script src="http://cabotcruises.manuelespin.com/wp-content/themes/cabotcruises/js/company.js" type="application/ld+json">
   </script>

   <!-- <script async src="http://cabotcruises.manuelespin.com/wp-content/themes/cabotcruises/js/lazyload.min.js"></script> -->
   <!-- <script async src="http://cabotcruises.manuelespin.com/wp-content/themes/cabotcruises/js/lazyload2.min.js" ></script> -->
   <script src="http://cabotcruises.manuelespin.com/wp-content/themes/cabotcruises/js/lazyload.js"></script>
</body>

</html>