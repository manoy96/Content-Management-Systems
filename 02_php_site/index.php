<?php 
$title="Home";
include "_top.php";
?>

      <div class="mySlider">
         <picture>
            <source srcset="images/slider01h.jpg" media="(min-width: 29.25rem)">
            <img srcset="images/slider01s.jpg" alt="slider">
         </picture>

         <picture>
            <source srcset="images/slider02h.jpg" media="(min-width: 29.25rem)">
            <img srcset="images/slider02s.jpg" alt="slider">
         </picture>

         <picture>
            <source srcset="images/slider03h.jpg" media="(min-width: 29.25rem)">
            <img srcset="images/slider03s.jpg" alt="slider">
         </picture>

         <picture>
            <source srcset="images/slider04h.jpg" media="(min-width: 29.25rem)">
            <img srcset="images/slider04s.jpg" alt="slider">
         </picture>

         <picture>
            <source srcset="images/slider05h.jpg" media="(min-width: 29.25rem)">
            <img srcset="images/slider05s.jpg" alt="slider">
         </picture>
      </div><!-- end slider -------------------- -->

      <!-- <div class="slider"></div> -->

      <h2 id="blog">Recent Blog Articles</h2>
      <div class="articles">

         <div class="art1">
            <a href="#">
               <div class="titleOverlay">
                  <h2>The Pinapple</h2>
               </div>
               <div class="publishDate">
                  <p>April, 1 2018</p>
               </div>
            </a>
         </div>

         <div class="art2">
            <a href="#">
               <div class="titleOverlay">
                  <h2>How to Relax</h2>
               </div>
               <div class="publishDate">
                  <p>April, 2 2018</p>
               </div>
            </a>
         </div>

         <div class="art3">
            <a href="#">
               <div class="titleOverlay">
                  <h2>Best Beach Resorts</h2>
               </div>
               <div class="publishDate">
                  <p>April, 3 2018</p>
               </div>
            </a>
         </div>

         <div class="art4">
            <a href="#">
               <div class="titleOverlay">
                  <h2>Pool Hacks</h2>
               </div>
               <div class="publishDate">
                  <p>April, 4 2018</p>
               </div>
            </a>
         </div>

      </div>
      
<?php
   include "_bot.php"
?>