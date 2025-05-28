<footer class="footer-area section-gap mt-5">
      <div class="container">
         <div class="row">
            <div class="col-lg-3  col-md-12">
               <div class="single-footer-widget">
                  <h6>Company</h6>
                  <ul class="footer-nav">
                     <li><a href="">About Us</a></li>
                     <li><a href="">Tearm and Conditions</a></li>
                     <li><a href="">Privacy policy
                        </a></li>
                     <li><a href="">FAQ</a></li>
                     <li><a href="">Contact Us</a></li>

                  </ul>
               </div>
            </div>
            <div class="col-lg-3  col-md-12">
               <div class="single-footer-widget">
                  <h6>Quick Link</h6>
                  <ul class="footer-nav">
                     <li><a href="">Our Blogs</a></li>
                     <li><a href="">Search Job</a></li>
                     <li><a href="">Services</a></li>
                     <li><a href="">How It Works</a></li>
                    
                     <li><a href="">Packages</a></li>
                  </ul>
               </div>
            </div>
            <div class="col-lg-3  col-md-12">
               <div class="single-footer-widget">
                  <h6>WHO WE ARE
                  </h6>
                  <ul class="footer-nav">
                     <li><a href="#">Customer Support : <br>
                           +919911138139 , +919266166866</a></li>
                     <li><a href="#">Email :

                           info@meradriver.com</a></li>
                     <!-- <li><a href="#">Power Tools</a></li>
                     <li><a href="#">Marketing Service</a></li> -->
                  </ul>
               </div>
            </div>

            <div class="col-lg-3  col-md-12">
               <div class="single-footer-widget mail-chimp">
                  <h6 class="mb-20">Newsletter</h6>
                     
                     <form class="newsletter-form d-flex">
                        <input type="email" class="newsletter-input" placeholder="mera Driver">
                        <button type="submit" class="newsletter-btn">Send</button>
                    </form>
                    <div class="footer-social mt-4">
                     <a href="#"><i class="fa fa-facebook"></i></a>
                     <a href="#"><i class="fa fa-twitter"></i></a>
                     <a href="#"><i class="fa fa-dribbble"></i></a>
                     <a href="#"><i class="fa fa-behance"></i></a>
                    </div>
                 </div>
               </div>
            </div>
         </div>
         <div class="row footer-bottom d-flex justify-content-between text-center">
            <p class="col-lg-12 col-sm-12 footer-text m-0 text-white">
               <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
               Copyright &copy;
               <script>document.write(new Date().getFullYear());</script> All rights reserved | 
               <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://hucpl.com/"
                  target="_blank">HUCPL</a>
               <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
           
         </div>
      </div>
   </footer>

   <!-- End footer Area -->
   <script src="{{asset('meradriver/js/vendor/jquery-2.2.4.min.js')}}"></script>
   <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"></script>
   <script src="{{asset('meradriver/js/vendor/bootstrap.min.js')}}"></script>
   <script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
   <script src="js/easing.min.js"></script>
   <script src="js/hoverIntent.js"></script>
   <script src="js/superfish.min.js"></script>
   <script src="js/jquery.ajaxchimp.min.js"></script>
   <script src="js/jquery.magnific-popup.min.js"></script>
   <script src="js/owl.carousel.min.js"></script>
   <script src="js/jquery.sticky.js"></script>
   <script src="js/jquery.nice-select.min.js"></script>
   <script src="js/parallax.min.js"></script>
   <script src="js/mail-script.js"></script>
   <script src="js/main.js"></script>
   <script>
      var swiper = new Swiper('.swiper-container', {
         slidesPerView: 1,
         spaceBetween: 30,
         loop: true,
         navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
         },
         pagination: {
            el: '.swiper-pagination',
            clickable: true,
         },
      });
   </script>
   <script>
      var swiper = new Swiper('.swiper-text', {
         slidesPerView: 4,
         spaceBetween: 30,
         loop: true,
         navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
         },
         pagination: {
            el: '.swiper-pagination',
            clickable: true,
         },
         breakpoints: {
            0: {
               slidesPerView: 1,
               spaceBetween: 10,
            },
            426: {
               slidesPerView: 2,
               spaceBetween: 20,
            },
            768: {
               slidesPerView: 3,
               spaceBetween: 30,
            },
            1024: {
               slidesPerView: 4,
               spaceBetween: 30,
            },
         }
      });
   </script>
   <script>
      var swiper = new Swiper('.swiper-upcoming', {
         slidesPerView: 2,
         // spaceBetween: 10,
         loop: true,
         autoplay: {
         delay: 2000, // time in ms between slide transitions (e.g., 2000ms = 2s)
         disableOnInteraction: false, // keep autoplay running after user interaction
    },
         navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
         },
         pagination: {
            el: '.swiper-pagination',
            clickable: true,
         },
         breakpoints: {
            0: {
               slidesPerView: 1,
               spaceBetween: 10,
            },
            426: {
               slidesPerView: 1,
               spaceBetween: 20,
            },
            768: {
               slidesPerView: 2,
               spaceBetween: 30,
            },
            1024: {
               slidesPerView: 2,
               spaceBetween: 30,  
            },
         }
      });
   </script>


</body>

</html>