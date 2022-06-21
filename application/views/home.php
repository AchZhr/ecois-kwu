<div class="app-content">

    <!--====== Primary Slider ======-->
    <div class="s-skeleton s-skeleton--h-600 s-skeleton--bg-grey">
        <div class="owl-carousel primary-style-1" id="hero-slider">
            <div class="hero-slide hero-slide--1">
                <div class="container">
                    <div class="row">
                        <?php
                        if ($this->session->userdata('logged_in')) {


                        ?>
                            <div class="col-12">
                                <div class="slider-content slider-content--animation">

                                    <span class="content-span-1 u-c-white">Selamat Datang </span>

                                    <span class="content-span-2 u-c-white"><?= $this->session->userdata('nama') ?></span>

                                    <span class="content-span-3 u-c-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, quibusdam velit</span>


                                    <a class="shop-now-link btn--e-brand" href="<?= base_url('Katalog') ?>">Belanja Sekarang!</a>
                                </div>
                            </div>
                        <?php } else {
                        ?>
                            <div class="col-12">
                                <div class="slider-content slider-content--animation">

                                    <span class="content-span-1 u-c-white">Selamat Datang</span>

                                    <span class="content-span-2 u-c-white">Silahkan Login</span>

                                    <span class="content-span-3 u-c-white">Login Untuk Mulai Belanja</span>


                                    <a class="shop-now-link btn--e-brand" href="<?= base_url('front/login') ?>">Login</a>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="hero-slide hero-slide--2">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="slider-content slider-content--animation">

                                <span class="content-span-1 u-c-white">Lorem ipsum dolor sit amet</span>

                                <span class="content-span-2 u-c-white">Lorem ipsum dolor sit amet</span>

                                <span class="content-span-3 u-c-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, quibusdam velit</span>


                                <a class="shop-now-link btn--e-brand" href="<?= base_url('Katalog') ?>">Belanja Sekarang!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-slide hero-slide--3">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="slider-content slider-content--animation">

                                <span class="content-span-1 u-c-secondary">Lorem ipsum dolor sit amet</span>

                                <span class="content-span-2 u-c-secondary">Lorem ipsum dolor sit amet</span>

                                <span class="content-span-3 u-c-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, quibusdam velit</span>



                                <a class="shop-now-link btn--e-brand" href="<?= base_url('Katalog') ?>">Belanja Sekarang!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====== End - Primary Slider ======-->


    <!--====== Section 1 ======-->
    <div class="u-s-p-y-60">

        <!--====== Section Intro ======-->
        <div class="section__intro u-s-m-b-46">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section__text-wrap">
                            <h1 class="section__heading u-c-secondary u-s-m-b-12">Kategori</h1>

                            <span class="section__span u-c-silver">BROWSE FAVOURITE DEALS</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Section Intro ======-->


        <!--====== Section Content ======-->
        <div class="section__content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-5 u-s-m-b-30">

                        <a class="collection" href="shop-side-version-2.html">
                            <div class="aspect aspect--bg-grey aspect--square">

                                <img class="aspect__img collection__img" src="<?php echo base_url(); ?>assets/client/images/collection/coll-1.jpg" alt="">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-7 col-md-7 u-s-m-b-30">

                        <a class="collection" href="shop-side-version-2.html">
                            <div class="aspect aspect--bg-grey aspect--1286-890">

                                <img class="aspect__img collection__img" src="<?php echo base_url(); ?>assets/client/images/collection/coll-2.jpg" alt="">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-7 col-md-7 u-s-m-b-30">

                        <a class="collection" href="shop-side-version-2.html">
                            <div class="aspect aspect--bg-grey aspect--1286-890">

                                <img class="aspect__img collection__img" src="<?php echo base_url(); ?>assets/client/images/collection/coll-3.jpg" alt="">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-5 col-md-5 u-s-m-b-30">

                        <a class="collection" href="shop-side-version-2.html">
                            <div class="aspect aspect--bg-grey aspect--square">

                                <img class="aspect__img collection__img" src="<?php echo base_url(); ?>assets/client/images/collection/coll-4.jpg" alt="">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!--====== Section Content ======-->
    </div>
    <!--====== End - Section 1 ======-->


    <!--====== Section 2 ======-->
    <div class="u-s-p-b-60">

        <!--====== Section Intro ======-->
        <div class="section__intro u-s-m-b-16">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section__text-wrap">
                            <h1 class="section__heading u-c-secondary u-s-m-b-12">Produk Terlaris</h1>

                            <span class="section__span u-c-silver">Pilih Kategori</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Section Intro ======-->


        <!--====== Section Content ======-->
        <div class="section__content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="filter-category-container">
                            <div class="filter__category-wrapper">

                                <button class="btn filter__btn filter__btn--style-1 js-checked" type="button" data-filter="*">Semua</button>
                            </div>
                            <div class="filter__category-wrapper">

                                <button class="btn filter__btn filter__btn--style-1" type="button" data-filter=".makanan">Makanan</button>
                            </div>
                            <div class="filter__category-wrapper">

                                <button class="btn filter__btn filter__btn--style-1" type="button" data-filter=".barang">Barang</button>
                            </div>
                            <div class="filter__category-wrapper">

                                <button class="btn filter__btn filter__btn--style-1" type="button" data-filter=".lain">Lain-Lain</button>
                            </div>

                        </div>
                        <div class="filter__grid-wrapper u-s-m-t-30">
                            <div class="row">

                                <?php
                                foreach ($param as $produk) {

                                ?>

                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 u-s-m-b-30 filter__item barang">
                                        <div class="product-o product-o--hover-on product-o--radius">
                                            <div class="product-o__wrap">

                                                <a class="aspect aspect--bg-grey aspect--square u-d-block" href="product-detail.html">

                                                    <img class="aspect__img" src="<?php echo base_url(); ?>assets/client/images/product/electronic/product2.jpg" alt=""></a>

                                            </div>

                                            <span class="product-o__category">

                                                <a href="shop-side-version-2.html"><?= $produk->kategori; ?></a></span>

                                            <span class="product-o__name">

                                                <a href="product-detail.html"><?= $produk->nama_produk; ?></a></span>
                                            <div class="product-o__rating gl-rating-style"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>

                                                <span class="product-o__review">(23)</span>
                                            </div>

                                            <span class="product-o__price"><?= $produk->harga_jual; ?></span>


                                            <span class="product-o__category" style="margin-top: 3px;font-size:10pt"><a href="<?= $produk->id_toko; ?>"><?= $produk->id_toko; ?></a></span>

                                        </div>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--====== End - Section Content ======-->
    </div>
    <!--====== End - Section 2 ======-->




    <!--====== Section 9 ======-->
    <div class="u-s-p-b-60">

        <!--====== Section Content ======-->
        <div class="section__content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 u-s-m-b-30">
                        <div class="service u-h-100">
                            <div class="service__icon"><i class="fas fa-truck"></i></div>
                            <div class="service__info-wrap">

                                <span class="service__info-text-1">Free Shipping</span>

                                <span class="service__info-text-2">Free shipping on all US order or order above
                                    $200</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 u-s-m-b-30">
                        <div class="service u-h-100">
                            <div class="service__icon"><i class="fas fa-redo"></i></div>
                            <div class="service__info-wrap">

                                <span class="service__info-text-1">Shop with Confidence</span>

                                <span class="service__info-text-2">Our Protection covers your purchase from
                                    click to delivery</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 u-s-m-b-30">
                        <div class="service u-h-100">
                            <div class="service__icon"><i class="fas fa-headphones-alt"></i></div>
                            <div class="service__info-wrap">

                                <span class="service__info-text-1">24/7 Help Center</span>

                                <span class="service__info-text-2">Round-the-clock assistance for a smooth
                                    shopping experience</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Section Content ======-->
    </div>
    <!--====== End - Section 9 ======-->




    <!--====== Section 11 ======-->
    <div class="u-s-p-b-90 u-s-m-b-30">

        <!--====== Section Intro ======-->
        <div class="section__intro u-s-m-b-46">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section__text-wrap">
                            <h1 class="section__heading u-c-secondary u-s-m-b-12">Partner</h1>

                            <!-- <span class="section__span u-c-silver">WHAT OUR CLIENTS SAY</span> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Section Intro ======-->

        <div class="section__content">
            <div class="container">

                <!--====== Brand Slider ======-->
                <div class="slider-fouc">
                    <div class="owl-carousel" id="brand-slider" data-item="5">
                        <div class="brand-slide">

                            <a href="shop-side-version-2.html">

                                <img src="<?php echo base_url(); ?>assets/client/images/brand/b1.png" alt=""></a>
                        </div>
                        <div class="brand-slide">

                            <a href="shop-side-version-2.html">

                                <img src="<?php echo base_url(); ?>assets/client/images/brand/b2.png" alt=""></a>
                        </div>
                        <div class="brand-slide">

                            <a href="shop-side-version-2.html">

                                <img src="<?php echo base_url(); ?>assets/client/images/brand/b3.png" alt=""></a>
                        </div>
                        <div class="brand-slide">

                            <a href="shop-side-version-2.html">

                                <img src="<?php echo base_url(); ?>assets/client/images/brand/b4.png" alt=""></a>
                        </div>
                        <div class="brand-slide">

                            <a href="shop-side-version-2.html">

                                <img src="<?php echo base_url(); ?>assets/client/images/brand/b5.png" alt=""></a>
                        </div>
                        <div class="brand-slide">

                            <a href="shop-side-version-2.html">

                                <img src="<?php echo base_url(); ?>assets/client/images/brand/b6.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <!--====== End - Brand Slider ======-->
            </div>
        </div>

        <!--====== End - Section Content ======-->
    </div>
    <!--====== End - Section 11 ======-->



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

<!--====== Modal Section ======-->


<?php
if (!$this->session->userdata('logged_in')) {


?>

    <!--====== Newsletter Subscribe Modal ======-->
    <div class="modal fade new-l" id="newsletter-modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content modal--shadow">

                <button class="btn new-l__dismiss fas fa-times" type="button" data-dismiss="modal"></button>
                <div class="modal-body">
                    <div class="row u-s-m-x-0">
                        <div class="col-lg-6 new-l__col-1 u-s-p-x-0">

                            <a class="new-l__img-wrap u-d-block" href="shop-side-version-2.html">

                                <img class="u-img-fluid u-d-block" src="<?php echo base_url(); ?>assets/client/images/newsletter/newsletter.jpg" alt=""></a>
                        </div>
                        <div class="col-lg-6 new-l__col-2">
                            <div class="new-l__section u-s-m-t-30">
                                <div class="u-s-m-b-8 new-l--center">
                                    <h3 class="new-l__h3">Login</h3>
                                </div>
                                <br>
                                <form class="new-l__form" method="POST" action="<?= base_url('front/login') ?>">
                                    <div class="u-s-m-b-15">

                                        <input class="news-l__input" type="text" placeholder="NPM" name="npm">
                                    </div>
                                    <div class="u-s-m-b-15">

                                        <input class="news-l__input" type="password" placeholder="Password" name="password">
                                    </div>
                                    <div class="u-s-m-b-15">

                                        <button class="btn btn--e-brand-b-2" type="submit">Login</button>
                                    </div>
                                </form>
                                <!-- <div class="u-s-m-b-15 new-l--center">
                                <p class="new-l__p2">By Signing up, you agree to receive Reshop
                                    offers,<br />promotions and other commercial messages. You may unsubscribe
                                    at any time.</p>
                            </div> -->
                                <div class="u-s-m-b-15 new-l--center">

                                    <a class="new-l__link" href="<?= base_url('Home/registrasi') ?>">Daftar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}


?>
<!--====== End - Newsletter Subscribe Modal ======-->
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
        var availableTags = [
            "ActionScript",
            "AppleScript",
            "Asp",
            "BASIC",
            "C",
            "C++",
            "Clojure",
            "COBOL",
            "ColdFusion",
            "Erlang",
            "Fortran",
            "Groovy",
            "Haskell",
            "Java",
            "JavaScript",
            "Lisp",
            "Perl",
            "PHP",
            "Python",
            "Ruby",
            "Scala",
            "Scheme"
        ];

        $("#main-search").autocomplete({
            source: availableTags
        });
    })
</script>

</body>

</html>