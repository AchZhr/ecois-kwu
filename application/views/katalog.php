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
                                     <span class="js-shop-filter-target" data-side="#side-filter">Filters</span>

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
                                    if (count($param) == 0) {

                                    ?>
                                     <div class="container">
                                         <div class="row">
                                             <div class="col-lg-12 col-md-12 u-s-m-b-30">
                                                 <div class="empty">
                                                     <div class="empty__wrap">

                                                         <span class="empty__big-text">Maaf</span>

                                                         <span class="empty__text-1">Produk Tidak Ditemukan</span>



                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 <?php
                                    } else {



                                    ?>
                                     <?php

                                        foreach ($param as $produk) {
                                        ?>
                                         <div class="col-lg-3 col-md-4 col-sm-6">
                                             <div class="product-m">
                                                 <div class="product-m__thumb">

                                                     <a class="aspect aspect--bg-grey aspect--square u-d-block" href="<?php echo base_url(); ?>Katalog/detail/<?= $produk->id_produk; ?>">

                                                         <img class="aspect__img" src="<?php echo base_url(); ?>/uploads/produk/<?= json_decode($produk->image)->foto[0] ?>" alt=""></a>

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
                                                         <?php
                                                            if ($produk->deskripsi != '') {

                                                            ?>
                                                             <div class="product-m__preview-description">

                                                                 <span><?= $produk->deskripsi; ?></span>
                                                             </div>
                                                         <?php
                                                            }
                                                            ?>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     <?php
                                        }
                                        ?>
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


 <!--====== Side Filters ======-->
 <div class="shop-a" id="side-filter">
     <div class="shop-a__wrap">
         <div class="shop-a__inner gl-scroll">
             <div class="shop-w-master">
                 <h1 class="shop-w-master__heading u-s-m-b-30"><i class="fas fa-filter u-s-m-r-8"></i>

                     <span>FILTER</span>
                 </h1>
                 <div class="shop-w-master__sidebar">
                     <div class="u-s-m-b-30">
                         <div class="shop-w">
                             <div class="shop-w__intro-wrap">
                                 <h1 class="shop-w__h">Kategori</h1>

                             </div>
                             <div class="shop-w__wrap collapse show" id="s-category">
                                 <ul class="shop-w__category-list gl-scroll">
                                     <li class="has-list">

                                     <li class="has-list">

                                         <a href="<?= base_url('Katalog/index/') ?>FNA">Fashion & Aksesoris</a>


                                     </li>
                                     <li class="has-list">

                                         <a href="<?= base_url('Katalog/index/') ?>Sepatu">Sepatu</a>


                                     </li>
                                     <li class="has-list">

                                         <a href="<?= base_url('Katalog/index/') ?>Pakaian">Pakaian</a>


                                     </li>
                                     <li class="has-list">

                                         <a href="<?= base_url('Katalog/index/') ?>FNB">Food & Beverage</a>


                                     </li>
                                     <li class="has-list">

                                         <a href="<?= base_url('Katalog/index/') ?>PK">Produk Kecantikan</a>


                                     </li>
                                     <li class="has-list">

                                         <a href="<?= base_url('Katalog/index/') ?>HNK">Hobi & Koleksi</a>


                                     </li>
                                     <li class="has-list">

                                         <a href="<?= base_url('Katalog/index/') ?>HNA">Handphone & Aksesoris</a>


                                     </li>
                                     <li class="has-list">

                                         <a href="<?= base_url('Katalog/index/') ?>AK">Alat Kesehatan</a>


                                     </li>
                                     <li class="has-list">

                                         <a href="<?= base_url('Katalog/index/') ?>KNA">Komputer & Aksesoris</a>


                                     </li>
                                     <li class="has-list">

                                         <a href="<?= base_url('Katalog/index/') ?>ONO">Olahraga & Outdoor</a>


                                     </li>
                                     <li class="has-list">

                                         <a href="<?= base_url('Katalog/index/') ?>Otomotif">Otomotif</a>


                                     </li>
                                     <li class="has-list">

                                         <a href="<?= base_url('Katalog/index/') ?>BNAT">Buku & ALat Tulis</a>


                                     </li>
                                     <li class="has-list">

                                         <a href="<?= base_url('Katalog/index/') ?>JNL">Jasa & Layanan</a>


                                     </li>
                                 </ul>
                             </div>
                         </div>
                     </div>

                 </div>
             </div>
         </div>
     </div>
 </div>
 <!--====== End - Side Filters ======-->
 <!--====== End - App Content ======-->


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
                         <!-- <div class="outer-footer__social">
                            <ul>
                                <li>

                                    <a class="s-tw--color-hover" href="#"><i class="fa-brands fa-tiktok"></i></a>
                                </li>
                                <li>

                                    <a class="s-insta--color-hover" href="#"><i class="fab fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div> -->
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

                            <span class="newsletter__text">Subscribe to the mailing list to receive updates on
                                promotions, new arrivals, discount and coupons.</span>
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