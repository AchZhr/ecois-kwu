 <div class="app-content">

     <!--====== Section 1 ======-->
     <div class="u-s-p-y-30">

         <!--====== Section Content ======-->

     </div>
     <!--====== End - Section 1 ======-->


     <!--====== Section 2 ======-->
     <!--====== Section 2 ======-->
     <div class="u-s-p-b-60">

         <!--====== Section Content ======-->
         <div class="section__content">
             <div class="dash">
                 <div class="container">
                     <div class="row">
                         <div class="col-lg-3 col-md-12">

                             <!--====== Dashboard Features ======-->
                             <div class="dash__box dash__box--bg-white dash__box--shadow u-s-m-b-30">
                                 <div class="dash__pad-1">

                                     <span class="dash__text u-s-m-b-16">Hello, <?= $param['mhs']->nama ?></span>
                                     <ul class="dash__f-list">

                                         <li>

                                             <a class="dash-active" href="<?= base_url('user') ?>">Profil Saya</a>
                                         </li>

                                         <li>

                                             <a class="dash-active" href="<?= base_url('User') ?>/myorder">Daftar Pesanan</a>
                                         </li>

                                         <li>

                                             <a class="dash-active" href="<?= base_url('user/registrasiPenjual') ?>">Toko</a>
                                         </li>

                                     </ul>
                                 </div>
                             </div>

                             <!--====== End - Dashboard Features ======-->
                         </div>
                         <div class="col-lg-9 col-md-12">
                             <h1 class="dash__h1 u-s-m-b-30">Detail Pesanan</h1>
                             <div class="dash__box dash__box--shadow dash__box--radius dash__box--bg-white u-s-m-b-30">
                                 <div class="dash__pad-2">
                                     <div class="dash-l-r">
                                         <div>
                                             <div class="manage-o__text-2 u-c-secondary">Order #<?= $param['order']->orderid; ?></div>
                                             <div class="manage-o__text u-c-silver">Tanggal Pesan <?= $param['order']->tgl_order; ?></div>
                                         </div>
                                         <div>
                                             <div class="manage-o__text-2 u-c-silver">Total:

                                                 <span class="manage-o__text-2 u-c-secondary"><?= "Rp " . number_format($param['order']->total, 0, '', '.'); ?></span>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="dash__box dash__box--shadow dash__box--radius dash__box--bg-white u-s-m-b-30">
                                 <div class="dash__pad-2">
                                     <div class="manage-o">
                                         <div class="manage-o__header u-s-m-b-30">
                                             <div class="manage-o__icon"><i class="fas fa-box u-s-m-r-5"></i>

                                                 <span class="manage-o__text">Produk</span>
                                             </div>
                                         </div>

                                         <div class="manage-o__description">
                                             <div class="description__container">

                                                 <div class="description-title"><?= $param['order']->nama_produk; ?></div>


                                             </div>

                                             <div class="description__info-wrap">
                                                 <div>

                                                     <span class="manage-o__text-2 u-c-silver">Quantity:

                                                         <span class="manage-o__text-2 u-c-secondary"><?= $param['order']->jumlah; ?></span></span>
                                                 </div>
                                                 <div>

                                                     <span class="manage-o__text-2 u-c-silver">Harga:

                                                         <span class="manage-o__text-2 u-c-secondary"><?= "Rp " . number_format($param['order']->harga_jual, 0, '', '.'); ?></span></span>
                                                 </div>
                                             </div>

                                         </div>

                                     </div>
                                 </div>
                             </div>
                             <div class="row">

                                 <div class="col-lg-12">
                                     <div class="dash__box dash__box--bg-white dash__box--shadow u-h-100">
                                         <div class="dash__pad-3">
                                             <h2 class="dash__h2 u-s-m-b-8">Keterangan </h2>

                                             <div class="dash-l-r u-s-m-b-8">
                                                 <div class="manage-o__text-2 u-c-secondary"><?= $param['order']->keterangan; ?></div>
                                             </div>


                                         </div>

                                     </div>
                                 </div>
                             </div>
                             <div class="row">

                                 <div class="col-lg-12">
                                     <div class="dash__box dash__box--bg-white dash__box--shadow u-h-100">
                                         <div class="dash__pad-3">
                                             <h2 class="dash__h2 u-s-m-b-8">Rincian </h2>

                                             <div class="dash-l-r u-s-m-b-8">
                                                 <div class="manage-o__text-2 u-c-secondary">Total</div>
                                                 <div class="manage-o__text-2 u-c-secondary"><?= "Rp " . number_format($param['order']->total, 0, '', '.'); ?></div>
                                             </div>

                                             <span class="dash__text-2">Hubungi Penjual Melalui Whatsapp Untuk Melakukan Pembayaran</span>
                                             <a href="https://wa.me/<?= $param['order']->wa ?>" class="dash__custom-link btn--e-transparent-brand-b-2" style="float: right;">Bayar Pesanan</a>
                                         </div>
                                         <br>
                                         <br>
                                     </div>
                                 </div>
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
 <br><br>

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

                             <span>Copyright © 2022</span>

                             <a href="index.html">ECOIS UPN JATIM</a>

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


 <!--====== Unsubscribe or Subscribe Newsletter ======-->
 <div class="modal fade" id="dash-newsletter">
     <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content modal--shadow">
             <div class="modal-body">
                 <form class="d-modal__form">
                     <div class="u-s-m-b-15">
                         <h1 class="gl-modal-h1">Newsletter Subscription</h1>

                         <span class="gl-modal-text">I have read and understood</span>

                         <a class="d_modal__link" href="dash-my-profile.html">Ludus Privacy Policy</a>
                     </div>
                     <div class="gl-modal-btn-group">

                         <button class="btn btn--e-brand-b-2" type="submit">SUBSCRIBE</button>

                         <button class="btn btn--e-grey-b-2" type="button" data-dismiss="modal">CANCEL</button>
                     </div>
                 </form>
             </div>
         </div>
     </div>
 </div>

 <!--====== Unsubscribe or Subscribe Newsletter ======-->
 <!--====== End - Modal Section ======-->
 </div>
 <!--====== End - Main App ======-->



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
         //  $('form').submit(function(e) {
         //      if ($('#kategori').val() == null || $('#kategori').val() == 'Pilih') {
         //          alert("Pilih Kategori")
         //          e.preventDefault()

         //      }
         //  })
     })
 </script>


 </body>

 </html>