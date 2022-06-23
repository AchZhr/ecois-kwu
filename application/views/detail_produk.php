 <div class="app-content">

     <!--====== Section 1 ======-->
     <div class="u-s-p-t-40">
         <div class="container">
             <div class="row">
                 <div class="col-lg-5">




                     <!--====== Product Detail Zoom ======-->
                     <div class="pd u-s-m-b-30">
                         <div class="slider-fouc pd-wrap">
                             <div id="pd-o-initiate">

                                 <?php
                                    $images = json_decode($param['data']->image)->foto;
                                    foreach ($images as $foto) {
                                    ?>
                                     <div class="pd-o-img-wrap" data-src="<?php echo base_url(); ?>assets/client/<?php echo $foto ?>">

                                         <img class="u-img-fluid" src="<?php echo base_url(); ?>assets/client/<?php echo $foto ?>" data-zoom-image="images/product/product-d-1.jpg" alt="">
                                     </div>

                                 <?php
                                    }
                                    ?>

                             </div>

                             <span class="pd-text">Click for larger zoom</span>
                         </div>
                         <div class="u-s-m-t-15">
                             <div class="slider-fouc">
                                 <div id="pd-o-thumbnail">
                                     <?php
                                        foreach ($images as $foto) {
                                        ?>
                                         <div>

                                             <img class="u-img-fluid" src="<?php echo base_url(); ?>assets/client/<?php echo $foto ?>" alt="">
                                         </div>
                                     <?php
                                        }
                                        ?>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <!--====== End - Product Detail Zoom ======-->
                 </div>
                 <div class="col-lg-7">

                     <!--====== Product Right Side Details ======-->
                     <div class="pd-detail">
                         <div>
                             <span class="pd-detail__name" style="font-size: 20pt ;"><?= $param['data']->nama_produk ?></span>

                         </div>
                         <?php
                            if ($param['data']->diskon != 0) {

                            ?>
                             <div>
                                 <div class="pd-detail__inline">

                                     <span class="pd-detail__price"><?= "Rp " . number_format($param['data']->harga_jual, 0, '', '.'); ?></span>

                                     <span class="pd-detail__discount">(<?= $param['data']->diskon ?>% OFF)</span><del class="pd-detail__del"><?= "Rp " . number_format($param['data']->harga, 0, '', '.'); ?></del>
                                 </div>
                             </div>

                         <?php
                            } else {
                            ?>
                             <div>
                                 <div class="pd-detail__inline">

                                     <span class="pd-detail__price"><?= "Rp " . number_format($param['data']->harga_jual, 0, '', '.'); ?></span>

                                 </div>
                             </div>
                         <?php
                            }
                            ?>
                         <div class="u-s-m-b-15">
                             <div class="pd-detail__rating gl-rating-style">
                                 <?php
                                    $rating = (int) $param['rating'];
                                    for ($x = 0; $x < $rating; $x += 1) {
                                    ?>
                                     <i class="fas fa-star"></i>


                                 <?php } ?>
                                 <span class="pd-detail__review u-s-m-l-4">

                                     <a data-click-scroll="#view-review"><?= $param['jumlahReview'] ?> Reviews</a>
                                 </span>
                             </div>
                         </div>
                         <div class="u-s-m-b-15">
                             <div class="pd-detail__inline">

                                 <span class="pd-detail__stock"><?= $param['data']->stok ?> Stok Tersedia</span>
                                 <span>

                                     <a class="s-insta--color-hover" href="#"><i class="fab fa-instagram"></i></a>
                                 </span>
                                 <span>

                                     <a class="s-wa--color-hover" href="#"><i class="fab fa-whatsapp"></i></a>
                                 </span>


                             </div>
                         </div>



                         <div class="u-s-m-b-15">
                             <form method="post" action="<" class="pd-detail__form">



                                 <div class="pd-detail-inline-2">
                                     <div class="u-s-m-b-15">

                                         <!--====== Input Counter ======-->
                                         <div class="input-counter">

                                             <span class="input-counter__minus fas fa-minus"></span>

                                             <input class="input-counter__text input-counter--text-primary-style" type="text" value="1" data-min="1" data-max="1000">

                                             <span class="input-counter__plus fas fa-plus"></span>
                                         </div>
                                         <!--====== End - Input Counter ======-->
                                     </div>
                                     <div class="u-s-m-b-15">

                                         <button class="btn btn--e-brand-b-2" type="submit">Add to Cart</button>
                                     </div>
                                 </div>
                             </form>
                         </div>

                     </div>
                     <!--====== End - Product Right Side Details ======-->
                 </div>
             </div>
         </div>
     </div>

     <!--====== Product Detail Tab ======-->
     <div class="u-s-p-y-30">
         <div class="container">
             <div class="row">
                 <div class="col-lg-12">
                     <div class="pd-tab">
                         <div class="u-s-m-b-30">
                             <ul class="nav pd-tab__list">
                                 <?php
                                    if ($param['data']->deskripsi == '' || $param['data']->deskripsi == null) {

                                    ?>

                                     <li class="nav-item">

                                         <a class="nav-link active" id="view-review" data-toggle="tab" href="#pd-rev">REVIEWS

                                             <span>(<?= $param['jumlahReview'] ?>)</span></a>
                                     </li>

                                 <?php
                                    } else {


                                    ?>
                                     <li class="nav-item">

                                         <a class="nav-link active" data-toggle="tab" href="#pd-desc">DESCRIPTION</a>
                                     </li>

                                     <li class="nav-item">

                                         <a class="nav-link" id="view-review" data-toggle="tab" href="#pd-rev">REVIEWS

                                             <span>(<?= $param['jumlahReview'] ?>)</span></a>
                                     </li>
                                 <?php
                                    }
                                    ?>
                             </ul>
                         </div>
                         <div class="tab-content">

                             <?php
                                if ($param['data']->deskripsi != '' && $param['data']->deskripsi != null) {

                                ?>
                                 <!--====== Tab 1 ======-->
                                 <div class="tab-pane fade show active" id="pd-desc">
                                     <div class="pd-tab__desc">
                                         <div class="u-s-m-b-15">
                                             <p><?= $param['data']->deskripsi ?></p>
                                         </div>

                                     </div>
                                 </div>
                                 <!--====== End - Tab 1 ======-->

                             <?php
                                }


                                ?>


                             <!--====== Tab 3 ======-->
                             <div class="tab-pane   <?php
                                                    if ($param['data']->deskripsi == '' || $param['data']->deskripsi == null) {
                                                        echo 'active';
                                                    }

                                                    ?>" id="pd-rev">
                                 <div class="pd-tab__rev">
                                     <div class="u-s-m-b-30">
                                         <div class="pd-tab__rev-score">
                                             <div class="u-s-m-b-8">
                                                 <h2><?= $param['jumlahReview'] ?> Ulasan - <?= $param['rating'] ?> (Rata-rata)</h2>
                                             </div>
                                             <div class="gl-rating-style-2 u-s-m-b-8">
                                                 <?php
                                                    for ($x = 0; $x < $rating; $x += 1) {
                                                    ?>
                                                     <i class="fas fa-star"></i>


                                                 <?php } ?>
                                             </div>
                                             <div class="u-s-m-b-8">
                                                 <h4>Berikan Review Anda</h4>
                                             </div>

                                             <!-- <span class="gl-text">Tell us what you think about this item</span> -->
                                         </div>
                                     </div>
                                     <div class="u-s-m-b-30">
                                         <form class="pd-tab__rev-f1">
                                             <div class="rev-f1__group">
                                                 <div class="u-s-m-b-15">
                                                     <h2><?= $param['jumlahReview'] ?> Ulasan untuk <?= $param['data']->nama_produk ?></h2>
                                                 </div>
                                                 <!-- <div class="u-s-m-b-15">

                                                     <label for="sort-review"></label><select class="select-box select-box--primary-style" id="sort-review">
                                                         <option selected>Sort by: Best Rating</option>
                                                         <option>Sort by: Worst Rating</option>
                                                     </select>
                                                 </div> -->
                                             </div>
                                             <div class="rev-f1__review">

                                                 <?php
                                                    foreach ($param['review'] as $review) {
                                                    ?>
                                                     <div class="review-o u-s-m-b-15">
                                                         <div class="review-o__info u-s-m-b-8">

                                                             <span class="review-o__name"><?= $review->nama ?></span>

                                                             <span class="review-o__date"><?= $review->tgl ?></span>
                                                         </div>
                                                         <div class="review-o__rating gl-rating-style u-s-m-b-8">
                                                             <?php
                                                                $r = (int) $review->rating;
                                                                for ($x = 0; $x < $r; $x += 1) {
                                                                ?>
                                                                 <i class="fas fa-star"></i>


                                                             <?php } ?>

                                                             <span>(<?= $review->rating ?>)</span>
                                                         </div>
                                                         <p class="review-o__text"><?= $review->komentar ?></p>
                                                     </div>
                                                 <?php } ?>

                                             </div>
                                         </form>
                                     </div>
                                     <div class="u-s-m-b-30">
                                         <form id="frmReview" class="pd-tab__rev-f2" method="post" action="<?= base_url('Produk/addReview'); ?>">
                                             <h2 class="u-s-m-b-15">Tambahkan Review</h2>

                                             <div class="u-s-m-b-30">
                                                 <div class="rev-f2__table-wrap gl-scroll">
                                                     <table class="rev-f2__table">
                                                         <thead>
                                                             <tr>
                                                                 <th>
                                                                     <div class="gl-rating-style-2"><i class="fas fa-star"></i>

                                                                         <span>(1)</span>
                                                                     </div>
                                                                 </th>

                                                                 <th>
                                                                     <div class="gl-rating-style-2"><i class="fas fa-star"></i><i class="fas fa-star"></i>

                                                                         <span>(2)</span>
                                                                     </div>
                                                                 </th>

                                                                 <th>
                                                                     <div class="gl-rating-style-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>

                                                                         <span>(3)</span>
                                                                     </div>
                                                                 </th>

                                                                 <th>
                                                                     <div class="gl-rating-style-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>

                                                                         <span>(4)</span>
                                                                     </div>
                                                                 </th>

                                                                 <th>
                                                                     <div class="gl-rating-style-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>

                                                                         <span>(5)</span>
                                                                     </div>
                                                                 </th>
                                                             </tr>
                                                         </thead>
                                                         <tbody>
                                                             <tr>
                                                                 <td>

                                                                     <!--====== Radio Box ======-->
                                                                     <div class="radio-box">

                                                                         <input type="radio" id="star-1" value="1" name="rating">
                                                                         <div class="radio-box__state radio-box__state--primary">

                                                                             <label class="radio-box__label" for="star-1"></label>
                                                                         </div>
                                                                     </div>
                                                                     <!--====== End - Radio Box ======-->
                                                                 </td>

                                                                 <td>

                                                                     <!--====== Radio Box ======-->
                                                                     <div class="radio-box">

                                                                         <input type="radio" id="star-2" value="2" name="rating">
                                                                         <div class="radio-box__state radio-box__state--primary">

                                                                             <label class="radio-box__label" for="star-2"></label>
                                                                         </div>
                                                                     </div>
                                                                     <!--====== End - Radio Box ======-->
                                                                 </td>

                                                                 <td>

                                                                     <!--====== Radio Box ======-->
                                                                     <div class="radio-box">

                                                                         <input type="radio" id="star-3" value="3" name="rating">
                                                                         <div class="radio-box__state radio-box__state--primary">

                                                                             <label class="radio-box__label" for="star-3"></label>
                                                                         </div>
                                                                     </div>
                                                                     <!--====== End - Radio Box ======-->
                                                                 </td>

                                                                 <td>

                                                                     <!--====== Radio Box ======-->
                                                                     <div class="radio-box">

                                                                         <input type="radio" id="star-4" value="4" name="rating">
                                                                         <div class="radio-box__state radio-box__state--primary">

                                                                             <label class="radio-box__label" for="star-4"></label>
                                                                         </div>
                                                                     </div>
                                                                     <!--====== End - Radio Box ======-->
                                                                 </td>

                                                                 <td>

                                                                     <!--====== Radio Box ======-->
                                                                     <div class="radio-box">

                                                                         <input type="radio" id="star-5" value="5" name="rating">
                                                                         <div class="radio-box__state radio-box__state--primary">

                                                                             <label class="radio-box__label" for="star-5"></label>
                                                                         </div>
                                                                     </div>
                                                                     <!--====== End - Radio Box ======-->
                                                                 </td>
                                                             </tr>
                                                         </tbody>
                                                     </table>
                                                 </div>
                                             </div>
                                             <div class="rev-f2__group">
                                                 <div class="u-s-m-b-15">

                                                     <label class="gl-label" for="reviewer-text">Komentar</label><textarea class="text-area text-area--primary-style" name="komentar" id="reviewer-text"></textarea>
                                                 </div>

                                             </div>
                                             <div>

                                                 <button class="btn btn--e-brand-shadow" type="submit">SUBMIT</button>
                                             </div>
                                             <input type="hidden" name="id_produk" value="<?= $param['data']->id_produk ?>">
                                         </form>
                                     </div>
                                 </div>
                             </div>
                             <!--====== End - Tab 3 ======-->
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>

 </div>


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

                             <span class="newsletter__text">Subscribe to the mailing list to receive updates on promotions, new arrivals, discount and coupons.</span>
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
                         <div class="lower-footer__payment">
                             <ul>
                                 <li><i class="fab fa-cc-stripe"></i></li>
                                 <li><i class="fab fa-cc-paypal"></i></li>
                                 <li><i class="fab fa-cc-mastercard"></i></li>
                                 <li><i class="fab fa-cc-visa"></i></li>
                                 <li><i class="fab fa-cc-discover"></i></li>
                                 <li><i class="fab fa-cc-amex"></i></li>
                             </ul>
                         </div>
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

<<<<<<< HEAD
 </html>
=======
                                <span class="product-o__price">$125.00

                                    <span class="product-o__discount">$160.00</span></span>
                            </div>
                        </div>
                        <div class="u-s-m-b-30">
                            <div class="product-o product-o--hover-on">
                                <div class="product-o__wrap">

                                    <a class="aspect aspect--bg-grey aspect--square u-d-block" href="product-detail.html">

                                        <img class="aspect__img" src="images/product/electronic/product30.jpg" alt=""></a>
                                    <div class="product-o__action-wrap">
                                        <ul class="product-o__action-list">
                                            <li>

                                                <a data-modal="modal" data-modal-id="#quick-look" data-tooltip="tooltip" data-placement="top" title="Quick View"><i class="fas fa-search-plus"></i></a>
                                            </li>
                                            <li>

                                                <a data-modal="modal" data-modal-id="#add-to-cart" data-tooltip="tooltip" data-placement="top" title="Add to Cart"><i class="fas fa-plus-circle"></i></a>
                                            </li>
                                            <li>

                                                <a href="signin.html" data-tooltip="tooltip" data-placement="top" title="Add to Wishlist"><i class="fas fa-heart"></i></a>
                                            </li>
                                            <li>

                                                <a href="signin.html" data-tooltip="tooltip" data-placement="top" title="Email me When the price drops"><i class="fas fa-envelope"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <span class="product-o__category">

                                    <a href="shop-side-version-2.html">Electronics</a></span>

                                <span class="product-o__name">

                                    <a href="product-detail.html">Razor Gear Ultra Slim 16GB Ram</a></span>
                                <div class="product-o__rating gl-rating-style"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>

                                    <span class="product-o__review">(20)</span>
                                </div>

                                <span class="product-o__price">$125.00

                                    <span class="product-o__discount">$160.00</span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Section Content ======-->
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

<!--====== Modal Section ======-->


<!--====== Quick Look Modal ======-->
<div class="modal fade" id="quick-look">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content modal--shadow">

            <button class="btn dismiss-button fas fa-times" type="button" data-dismiss="modal"></button>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-5">

                        <!--====== Product Breadcrumb ======-->
                        <div class="pd-breadcrumb u-s-m-b-30">
                            <ul class="pd-breadcrumb__list">
                                <li class="has-separator">

                                    <a href="index.hml">Home</a>
                                </li>
                                <li class="has-separator">

                                    <a href="shop-side-version-2.html">Electronics</a>
                                </li>
                                <li class="has-separator">

                                    <a href="shop-side-version-2.html">DSLR Cameras</a>
                                </li>
                                <li class="is-marked">

                                    <a href="shop-side-version-2.html">Nikon Cameras</a>
                                </li>
                            </ul>
                        </div>
                        <!--====== End - Product Breadcrumb ======-->


                        <!--====== Product Detail ======-->
                        <div class="pd u-s-m-b-30">
                            <div class="pd-wrap">
                                <div id="js-product-detail-modal">
                                    <div>

                                        <img class="u-img-fluid" src="<?php echo base_url(); ?>assets/client/images/product/product-d-1.jpg" alt="">
                                    </div>
                                    <div>

                                        <img class="u-img-fluid" src="<?php echo base_url(); ?>assets/client/images/product/product-d-2.jpg" alt="">
                                    </div>
                                    <div>

                                        <img class="u-img-fluid" src="<?php echo base_url(); ?>assets/client/images/product/product-d-3.jpg" alt="">
                                    </div>
                                    <div>

                                        <img class="u-img-fluid" src="<?php echo base_url(); ?>assets/client/images/product/product-d-4.jpg" alt="">
                                    </div>
                                    <div>

                                        <img class="u-img-fluid" src="<?php echo base_url(); ?>assets/client/images/product/product-d-5.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="u-s-m-t-15">
                                <div id="js-product-detail-modal-thumbnail">
                                    <div>

                                        <img class="u-img-fluid" src="<?php echo base_url(); ?>assets/client/images/product/product-d-1.jpg" alt="">
                                    </div>
                                    <div>

                                        <img class="u-img-fluid" src="<?php echo base_url(); ?>assets/client/images/product/product-d-2.jpg" alt="">
                                    </div>
                                    <div>

                                        <img class="u-img-fluid" src="<?php echo base_url(); ?>assets/client/images/product/product-d-3.jpg" alt="">
                                    </div>
                                    <div>

                                        <img class="u-img-fluid" src="<?php echo base_url(); ?>assets/client/images/product/product-d-4.jpg" alt="">
                                    </div>
                                    <div>

                                        <img class="u-img-fluid" src="<?php echo base_url(); ?>assets/client/images/product/product-d-5.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--====== End - Product Detail ======-->
                    </div>
                    <div class="col-lg-7">

                        <!--====== Product Right Side Details ======-->
                        <div class="pd-detail">
                            <div>

                                <span class="pd-detail__name">Nikon Camera 4k Lens Zoom Pro</span>
                            </div>
                            <div>
                                <div class="pd-detail__inline">

                                    <span class="pd-detail__price">$6.99</span>

                                    <span class="pd-detail__discount">(76% OFF)</span><del class="pd-detail__del">$28.97</del>
                                </div>
                            </div>
                            <div class="u-s-m-b-15">
                                <div class="pd-detail__rating gl-rating-style"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>

                                    <span class="pd-detail__review u-s-m-l-4">

                                        <a href="product-detail.html">23 Reviews</a></span>
                                </div>
                            </div>
                            <div class="u-s-m-b-15">
                                <div class="pd-detail__inline">

                                    <span class="pd-detail__stock">200 in stock</span>

                                    <span class="pd-detail__left">Only 2 left</span>
                                </div>
                            </div>
                            <div class="u-s-m-b-15">

                                <span class="pd-detail__preview-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span>
                            </div>
                            <div class="u-s-m-b-15">
                                <div class="pd-detail__inline">

                                    <span class="pd-detail__click-wrap"><i class="far fa-heart u-s-m-r-6"></i>

                                        <a href="signin.html">Add to Wishlist</a>

                                        <span class="pd-detail__click-count">(222)</span></span>
                                </div>
                            </div>
                            <div class="u-s-m-b-15">
                                <div class="pd-detail__inline">

                                    <span class="pd-detail__click-wrap"><i class="far fa-envelope u-s-m-r-6"></i>

                                        <a href="signin.html">Email me When the price drops</a>

                                        <span class="pd-detail__click-count">(20)</span></span>
                                </div>
                            </div>
                            <div class="u-s-m-b-15">
                                <ul class="pd-social-list">
                                    <li>

                                        <a class="s-fb--color-hover" href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>

                                        <a class="s-tw--color-hover" href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>

                                        <a class="s-insta--color-hover" href="#"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li>

                                        <a class="s-wa--color-hover" href="#"><i class="fab fa-whatsapp"></i></a>
                                    </li>
                                    <li>

                                        <a class="s-gplus--color-hover" href="#"><i class="fab fa-google-plus-g"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="u-s-m-b-15">
                                <form class="pd-detail__form">
                                    <div class="pd-detail-inline-2">
                                        <div class="u-s-m-b-15">

                                            <!--====== Input Counter ======-->
                                            <div class="input-counter">

                                                <span class="input-counter__minus fas fa-minus"></span>

                                                <input class="input-counter__text input-counter--text-primary-style" type="text" value="1" data-min="1" data-max="1000">

                                                <span class="input-counter__plus fas fa-plus"></span>
                                            </div>
                                            <!--====== End - Input Counter ======-->
                                        </div>
                                        <div class="u-s-m-b-15">

                                            <button class="btn btn--e-brand-b-2" type="submit">Add to Cart</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="u-s-m-b-15">

                                <span class="pd-detail__label u-s-m-b-8">Product Policy:</span>
                                <ul class="pd-detail__policy-list">
                                    <li><i class="fas fa-check-circle u-s-m-r-8"></i>

                                        <span>Buyer Protection.</span>
                                    </li>
                                    <li><i class="fas fa-check-circle u-s-m-r-8"></i>

                                        <span>Full Refund if you don't receive your order.</span>
                                    </li>
                                    <li><i class="fas fa-check-circle u-s-m-r-8"></i>

                                        <span>Returns accepted if product not as described.</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--====== End - Product Right Side Details ======-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--====== End - Quick Look Modal ======-->


<!--====== Add to Cart Modal ======-->
<div class="modal fade" id="add-to-cart">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content modal-radius modal-shadow">

            <button class="btn dismiss-button fas fa-times" type="button" data-dismiss="modal"></button>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="success u-s-m-b-30">
                            <div class="success__text-wrap"><i class="fas fa-check"></i>

                                <span>Item is added successfully!</span>
                            </div>
                            <div class="success__img-wrap">

                                <img class="u-img-fluid" src="<?php echo base_url(); ?>assets/client/images/product/electronic/product1.jpg" alt="">
                            </div>
                            <div class="success__info-wrap">

                                <span class="success__name">Beats Bomb Wireless Headphone</span>

                                <span class="success__quantity">Quantity: 1</span>

                                <span class="success__price">$170.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="s-option">

                            <span class="s-option__text">1 item (s) in your cart</span>
                            <div class="s-option__link-box">

                                <a class="s-option__link btn--e-white-brand-shadow" data-dismiss="modal">CONTINUE SHOPPING</a>

                                <a class="s-option__link btn--e-white-brand-shadow" href="cart.html">VIEW CART</a>

                                <a class="s-option__link btn--e-brand-shadow" href="checkout.html">PROCEED TO CHECKOUT</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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
<script>
    $(document).ready(function() {

    })
</script>

</body>

</html>
>>>>>>> f3646c0bea79138bd3645b16311bd070761dc231
