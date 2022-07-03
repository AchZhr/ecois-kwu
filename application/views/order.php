 <!--====== App Content ======-->
 <div class="app-content">

     <!--====== Section 1 ======-->
     <div class="u-s-p-y-30">


     </div>
     <!--====== End - Section 1 ======-->





     <!--====== Section 3 ======-->
     <div class="u-s-p-b-60">

         <!--====== Section Content ======-->
         <div class="section__content">
             <div class="container">
                 <div class="checkout-f">
                     <div class="row">

                         <div class="col-lg-12">
                             <h1 class="checkout-f__h1">Rincian Pesanan</h1>

                             <!--====== Order Summary ======-->
                             <div class="o-summary">
                                 <div class="o-summary__section u-s-m-b-30">
                                     <div class="o-summary__item-wrap gl-scroll">
                                         <div class="o-card">
                                             <div class="o-card__flex">
                                                 <div class="o-card__img-wrap">

                                                     <img class="u-img-fluid" src="<?php echo base_url(); ?>/uploads/produk/<?= json_decode($param['produk']->image)->foto[0] ?>" alt="">
                                                 </div>
                                                 <div class="o-card__info-wrap">

                                                     <span class="o-card__name">

                                                         <a href="<?php echo base_url(); ?>Katalog/detail/<?= $param['produk']->id_produk; ?>"><?= $param['produk']->nama_produk; ?></a></span>

                                                     <span class="o-card__quantity">Quantity x <?= $param['jumlah']; ?></span>

                                                     <span class="o-card__price"><?= "Rp " . number_format($param['total'], 0, '', '.'); ?></span>
                                                 </div>
                                             </div>

                                         </div>

                                     </div>
                                 </div>

                                 <div class="o-summary__section u-s-m-b-30">
                                     <div class="o-summary__box">
                                         <table class="o-summary__table">
                                             <tbody>

                                                 <tr>
                                                     <td>TOTAL</td>
                                                     <td><?= "Rp " . number_format($param['total'], 0, '', '.'); ?></td>
                                                 </tr>
                                             </tbody>
                                         </table>
                                     </div>
                                 </div>
                                 <div class="o-summary__section u-s-m-b-30">
                                     <div class="o-summary__box">
                                         <form class="checkout-f__payment" method="post" action="<?= base_url('Order/insert') ?>">
                                             <h1 class="gl-h1">NOTE</h1>

                                             <span class="gl-text u-s-m-b-30">Tambahkan Catatan
                                                 Product</span>
                                             <div>
                                                 <input type="hidden" value="<?= $param['id_produk'] ?>" name="id_produk">
                                                 <input type="hidden" value="<?= $param['id_toko'] ?>" name="id_toko">
                                                 <input type="hidden" value="<?= $param['jumlah'] ?>" name="jumlah">
                                                 <input type="hidden" value="<?= $param['total'] ?>" name="total">

                                                 <label for="f-cart-note"></label><textarea name="keterangan" class="text-area text-area--primary-style" id="f-cart-note"></textarea>
                                             </div>
                                             <button class="btn btn--e-brand-b-2" type="submit">Pesan</button>
                                         </form>

                                     </div>
                                 </div>
                             </div>
                         </div>
                         <!--====== End - Order Summary ======-->
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!--====== End - Section Content ======-->
 </div>


 <!--====== Main Footer ======-->
 <footer>
     <div class="outer-footer">
         <div class="container">
             <div class="row">
                 <div class="col-lg-4 col-md-6">
                     <div class="outer-footer__content u-s-m-b-40">

                         <span class="outer-footer__content-title">Kontak Kami</span>
                         <div class="outer-footer__text-wrap"><i class="fas fa-home"></i>

                             <span>Jl.Raya Rungkut Madya, Gunung Anyar, Surabaya</span>
                         </div>
                         <div class="outer-footer__text-wrap"><i class="fas fa-phone-volume"></i>

                             <span>0878 1148 8302</span>
                         </div>
                         <div class="outer-footer__text-wrap"><i class="far fa-envelope"></i>

                             <span>ecois.upnjatim@gmail.com</span>
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
                 <!-- <div class="col-lg-4 col-md-6">
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
                 </div> -->
                 <!-- <div class="col-lg-4 col-md-12">
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

                             <span class="newsletter__text">Subscribe to the mailing list to receive updates on promotions, new arrivals, discount and coupons.</span>
                         </form>
                     </div>
                 </div> -->
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
                         <!-- <div class="lower-footer__payment">
                             <ul>
                                 <li><i class="fab fa-cc-stripe"></i></li>
                                 <li><i class="fab fa-cc-paypal"></i></li>
                                 <li><i class="fab fa-cc-mastercard"></i></li>
                                 <li><i class="fab fa-cc-visa"></i></li>
                                 <li><i class="fab fa-cc-discover"></i></li>
                                 <li><i class="fab fa-cc-amex"></i></li>
                             </ul>
                         </div> -->
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </footer>
 <!--====== Modal Section ======-->



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
         var npm = '<?= $this->session->userdata('npm') ?>'

         $('#frmReview').submit(function(e) {
             if (npm == null || npm == '') {
                 alert('Silahkan Login Terlebih Dahulu Untuk Memberikan Review')
                 e.preventDefault()
                 window.location.replace("<?= base_url('front/login') ?>");
             }
         })


     })
 </script>

 </body>

 </html>