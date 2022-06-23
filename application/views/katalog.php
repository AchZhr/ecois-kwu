 <!--====== App Content ======-->
 <div class="app-content">

     <!--====== Section 1 ======-->
     <div class="u-s-p-y-30">
         <div class="container">
             <div class="row">
                 <div class="col-lg-12">
                     <div class="shop-p">
                         <div class="shop-p__toolbar u-s-m-b-30">
                             <!-- <div class="shop-p__meta-wrap u-s-m-b-30">

                                 <span class="shop-p__meta-text-1">FOUND 18 RESULTS</span>

                             </div> -->
                             <div class="shop-p__tool-style">
                                 <div class="tool-style__group u-s-m-b-8">

                                     <span class="js-shop-grid-target is-active">Grid</span>

                                     <span class="js-shop-list-target">List</span>
                                 </div>
                                 <!-- <form>
                                     <div class="tool-style__form-wrap">
                                         <div class="u-s-m-b-8"><select class="select-box select-box--transparent-b-2">
                                                 <option>Show: 8</option>
                                                 <option selected>Show: 12</option>
                                                 <option>Show: 16</option>
                                                 <option>Show: 28</option>
                                             </select></div>
                                         <div class="u-s-m-b-8"><select class="select-box select-box--transparent-b-2">
                                                 <option selected>Sort BY: Produk Terbaru</option>
                                                 <option>Sort BY: Terlaris </option>
                                                 <option>Sort BY: Ulasan Terbaik</option>
                                                 <option>Sort BY: Harga Terendah</option>
                                                 <option>Sort BY: Harga Tertinggi</option>
                                             </select></div>
                                     </div>
                                 </form> -->
                             </div>
                         </div>
                         <div class="shop-p__collection">
                             <div class="row is-grid-active">
                                 <?php
                                    foreach ($param as $produk) {
                                    ?>
                                     <div class="col-lg-3 col-md-4 col-sm-6">
                                         <div class="product-m">
                                             <div class="product-m__thumb">

                                                 <a class="aspect aspect--bg-grey aspect--square u-d-block" href="<?php echo base_url(); ?>Katalog/detail/<?= $produk->id_produk; ?>">

                                                     <img class="aspect__img" src="<?php echo base_url(); ?>assets/client/<?= json_decode($produk->image)->foto[0] ?>" alt=""></a>

                                             </div>
                                             <div class="product-m__content">
                                                 <div class="product-m__category">

                                                     <a href="shop-side-version-2.html"><?= $produk->kategori; ?></a>
                                                 </div>
                                                 <div class="product-m__name">

                                                     <a href="<?php echo base_url(); ?>Katalog/detail/<?= $produk->id_produk; ?>"><?= $produk->nama_produk; ?></a>
                                                 </div>
                                                 <div class="product-m__rating gl-rating-style">
                                                     <i class="fas fa-star"></i>
                                                     <i class="fas fa-star"></i>
                                                     <i class="fas fa-star-half-alt"></i>
                                                     <i class="far fa-star"></i>
                                                     <i class="far fa-star"></i>

                                                     <span class="product-m__review">(23)</span>
                                                 </div>
                                                 <?php
                                                    if ($produk->diskon != 0) {

                                                    ?>
                                                     <div class="product-m__price"><?= "Rp " . number_format($produk->harga_jual, 0, '', '.'); ?>

                                                         <span class="product-m__discount"><?= "Rp " . number_format($produk->harga, 0, '', '.'); ?></span>
                                                     </div>
                                                 <?php
                                                    } else {
                                                    ?>
                                                     <div class="product-m__price"><?= "Rp " . number_format($produk->harga_jual, 0, '', '.'); ?></div>

                                                 <?php
                                                    }
                                                    ?>
                                                 <span class="product-o__category" style="margin-top: 3px;font-size:10pt"><a href="#"><?= $produk->nama_toko; ?></a></span>

                                                 <div class="product-m__hover">
                                                     <div class="product-m__preview-description">

                                                         <span><?= $produk->deskripsi; ?></span>
                                                     </div>

                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 <?php
                                    }
                                    ?>
                             </div>
                         </div>
                         <div class="u-s-p-y-60">

                             <!--====== Pagination ======-->
                             <ul class="shop-p__pagination">
                                 <?php
                                    echo $this->pagination->create_links();
                                    ?>
                                 <!-- <li class="is-active">

                                     <a href="shop-grid-full.html">1</a>
                                 </li>
                                 <li>

                                     <a href="shop-grid-full.html">2</a>
                                 </li>
                                 <li>

                                     <a href="shop-grid-full.html">3</a>
                                 </li>
                                 <li>

                                     <a href="shop-grid-full.html">4</a>
                                 </li>
                                 <li>

                                     <a class="fas fa-angle-right" href="shop-grid-full.html"></a>
                                 </li> -->
                             </ul>
                             <!--====== End - Pagination ======-->
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!--====== End - Section 1 ======-->
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

                                     <a class="s-tw--color-hover" href="#"><i class="fa fa-tiktok"></i></a>
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

 <!--====== Side Filters ======-->

 <!--====== End - Side Filters ======-->


 <!--====== Modal Section ======-->


 <!--====== Quick Look Modal ======-->

 <!--====== End - Quick Look Modal ======-->


 <!--====== Add to Cart Modal ======-->

 <!--====== End - Add to Cart Modal ======-->
 <!--====== End - Modal Section ======-->
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

 <!--====== Noscript ======-->
 <script>
     $(document).ready(function() {

     })
 </script>
 </body>

 </html>