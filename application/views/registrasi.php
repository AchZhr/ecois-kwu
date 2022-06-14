 <div class="app-content">

     <!--====== Section 1 ======-->
     <div class="u-s-p-y-30">


     </div>
     <!--====== End - Section 1 ======-->


     <!--====== Section 2 ======-->
     <div class="u-s-p-b-30">

         <!--====== Section Intro ======-->
         <div class="section__intro u-s-m-b-30">
             <div class="container">
                 <div class="row">
                     <div class="col-lg-12">
                         <div class="section__text-wrap">
                             <h1 class="section__heading u-c-secondary">Rigistrasi</h1>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <!--====== End - Section Intro ======-->


         <!--====== Section Content ======-->
         <div class="section__content">
             <div class="container">
                 <div class="row row--center">
                     <div class="col-lg-6 col-md-8 u-s-m-b-30">
                         <div class="l-f-o">
                             <div class="l-f-o__pad-box">
                                 <form class="l-f-o__form" method="POST" action="<?= base_url('Home/regist') ?>">

                                     <div class="u-s-m-b-30">

                                         <label class="gl-label" for="reg-fname">NPM</label>

                                         <input name="npm" class="input-text input-text--primary-style" type="text" id="reg-fname" placeholder="First Name" required>
                                     </div>
                                     <div class="u-s-m-b-30">

                                         <label class="gl-label" for="reg-lname">NAMA</label>

                                         <input name="nama" class="input-text input-text--primary-style" type="text" id="reg-lname" placeholder="Last Name" required>
                                     </div>
                                     <div class="gl-inline">

                                         <div class="u-s-m-b-30">

                                             <label class="gl-label" for="gender">GENDER</label><select name="jk" required class="select-box select-box--primary-style u-w-100" id="gender">
                                                 <option selected disabled>Pilih</option>
                                                 <option value="L">Laki-Laki</option>
                                                 <option value="P">Perempuan</option>
                                             </select>
                                         </div>
                                         <div class="u-s-m-b-30">

                                             <!--====== Date of Birth Select-Box ======-->

                                             <span class="gl-label">Jurusan</span>
                                             <div class="gl-dob">
                                                 <select name="jurusan" required class="select-box select-box--primary-style">
                                                     <option selected disabled>Pilih</option>
                                                     <option value="Sistem Informasi">Sistem Informasi</option>
                                                     <option value="Informatika">Informatika</option>
                                                     <option value="Data Sience">Data Sience</option>
                                                 </select>

                                             </div>
                                             <!--====== End - Date of Birth Select-Box ======-->
                                         </div>
                                     </div>
                                     <div class="gl-inline">

                                         <div class="u-s-m-b-30">

                                             <label class="gl-label" for="reg-email">E-MAIL *</label>

                                             <input name="email" required class="input-text input-text--primary-style" type="email" id="reg-email" placeholder="Enter E-mail">
                                         </div>
                                         <div class="u-s-m-b-30">

                                             <label class="gl-label" for="reg-email">No HP *</label>

                                             <input name="hp" required class="input-text input-text--primary-style" type="text" id="reg-email" placeholder="Enter E-mail">
                                         </div>
                                     </div>
                                     <div class="u-s-m-b-30">

                                         <label class="gl-label" for="reg-password">Alamat *</label>

                                         <textarea name="alamat" required class="text-area text-area--primary-style" style="width: 100% ;" id="reg-alamat"></textarea>
                                     </div>
                                     <div class="u-s-m-b-30">

                                         <label class="gl-label" for="reg-password">PASSWORD *</label>

                                         <input name="pass" required class="input-text input-text--primary-style" type="password" id="reg-password" placeholder="Enter Password">
                                     </div>
                                     <div class="u-s-m-b-15">

                                         <button class="shop-now-link btn--e-brand" style="width:100% ;font-size:large" type="submit">Submit</button>
                                     </div>
                                     <center>
                                         <a class="gl-link" href="<?= base_url('Home') ?>">Kembali</a>

                                     </center>
                                 </form>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <!--====== End - Section Content ======-->
     </div>
     <!--====== End - Section 2 ======-->
 </div>
 <!--====== End - App Content ======-->


 <!--====== Main Footer ======-->
 <footer>
     <div class="outer-footer">
         <div class="container">
             <div class="row">
                 <div class="col-lg-4 col-md-6">
                     <div class="outer-footer__content u-s-m-b-40">

                         <span class="outer-footer__content-title">Contact Us</span>
                         <div class="outer-footer__text-wrap"><i class="fas fa-home"></i>

                             <span>4247 Ashford Drive Virginia VA-20006 USA</span>
                         </div>
                         <div class="outer-footer__text-wrap"><i class="fas fa-phone-volume"></i>

                             <span>(+0) 900 901 904</span>
                         </div>
                         <div class="outer-footer__text-wrap"><i class="far fa-envelope"></i>

                             <span>contact@domain.com</span>
                         </div>
                         <div class="outer-footer__social">
                             <ul>
                                 <li>

                                     <a class="s-fb--color-hover" href="#"><i class="fab fa-facebook-f"></i></a>
                                 </li>
                                 <li>

                                     <a class="s-tw--color-hover" href="#"><i class="fab fa-twitter"></i></a>
                                 </li>
                                 <li>

                                     <a class="s-youtube--color-hover" href="#"><i class="fab fa-youtube"></i></a>
                                 </li>
                                 <li>

                                     <a class="s-insta--color-hover" href="#"><i class="fab fa-instagram"></i></a>
                                 </li>
                                 <li>

                                     <a class="s-gplus--color-hover" href="#"><i class="fab fa-google-plus-g"></i></a>
                                 </li>
                             </ul>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-4 col-md-6">
                     <div class="row">
                         <div class="col-lg-6 col-md-6">
                             <div class="outer-footer__content u-s-m-b-40">

                                 <span class="outer-footer__content-title">Information</span>
                                 <div class="outer-footer__list-wrap">
                                     <ul>
                                         <li>

                                             <a href="cart.html">Cart</a>
                                         </li>
                                         <li>

                                             <a href="dashboard.html">Account</a>
                                         </li>
                                         <li>

                                             <a href="shop-side-version-2.html">Manufacturer</a>
                                         </li>
                                         <li>

                                             <a href="dash-payment-option.html">Finance</a>
                                         </li>
                                         <li>

                                             <a href="shop-side-version-2.html">Shop</a>
                                         </li>
                                     </ul>
                                 </div>
                             </div>
                         </div>
                         <div class="col-lg-6 col-md-6">
                             <div class="outer-footer__content u-s-m-b-40">
                                 <div class="outer-footer__list-wrap">

                                     <span class="outer-footer__content-title">Our Company</span>
                                     <ul>
                                         <li>

                                             <a href="about.html">About us</a>
                                         </li>
                                         <li>

                                             <a href="contact.html">Contact Us</a>
                                         </li>
                                         <li>

                                             <a href="index.html">Sitemap</a>
                                         </li>
                                         <li>

                                             <a href="dash-my-order.html">Delivery</a>
                                         </li>
                                         <li>

                                             <a href="shop-side-version-2.html">Store</a>
                                         </li>
                                     </ul>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-4 col-md-12">
                     <div class="outer-footer__content">

                         <span class="outer-footer__content-title">Join our Newsletter</span>
                         <form class="newsletter">
                             <div class="u-s-m-b-15">
                                 <div class="radio-box newsletter__radio">

                                     <input type="radio" id="male" name="gender">
                                     <div class="radio-box__state radio-box__state--primary">

                                         <label class="radio-box__label" for="male">Male</label>
                                     </div>
                                 </div>
                                 <div class="radio-box newsletter__radio">

                                     <input type="radio" id="female" name="gender">
                                     <div class="radio-box__state radio-box__state--primary">

                                         <label class="radio-box__label" for="female">Female</label>
                                     </div>
                                 </div>
                             </div>
                             <div class="newsletter__group">

                                 <label for="newsletter"></label>

                                 <input class="input-text input-text--only-white" type="text" id="newsletter" placeholder="Enter your Email">

                                 <button class="btn btn--e-brand newsletter__btn" type="submit">SUBSCRIBE</button>
                             </div>

                             <span class="newsletter__text">Subscribe to the mailing list to receive updates on
                                 promotions, new arrivals, discount and coupons.</span>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div class="lower-footer">
         <div class="container">
             <div class="row">
                 <div class="col-lg-12">
                     <div class="lower-footer__content">
                         <div class="lower-footer__copyright">

                             <span>Copyright © 2018</span>

                             <a href="index.html">Reshop</a>

                             <span>All Right Reserved</span>
                         </div>

                     </div>
                 </div>
             </div>
         </div>
     </div>
 </footer>
 </div>
 <!--====== End - Main App ======-->


 <!--====== Google Analytics: change UA-XXXXX-Y to be your site's ID ======-->

 <script src="https://www.google-analytics.com/analytics.js" async defer></script>

 <!--====== Vendor Js ======-->
 <script src="<?php echo base_url(); ?>assets/client/js/vendor.js"></script>

 <!--====== jQuery Shopnav plugin ======-->
 <script src="<?php echo base_url(); ?>assets/client/js/jquery.shopnav.js"></script>

 <!--====== App ======-->
 <script src="<?php echo base_url(); ?>assets/client/js/app.js"></script>

 <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
 <script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

 <script>
     $(document).ready(function() {

     })
 </script>
 </body>

 </html>