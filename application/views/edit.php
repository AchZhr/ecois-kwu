<div class="app-content">

    <!--====== Section 1 ======-->
    <div class="u-s-p-y-30">

        <!--====== Section Content ======-->

    </div>
    <!--====== End - Section 1 ======-->


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

                                    <span class="dash__text u-s-m-b-16">Hello, <?= $param->nama ?></span>
                                    <ul class="dash__f-list">

                                        <li>

                                            <a class="dash-active" href="<?= base_url('User') ?>">Profil Saya</a>
                                        </li>


                                        <li>

                                            <a class="dash-active" href="<?= base_url('User') ?>/myorder">Daftar Pesanan</a>
                                        </li>


                                        <li>

                                            <a class="dash-active" href="<?= base_url('User/registrasiPenjual') ?>">toko</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <!-- <div class="dash__box dash__box--bg-white dash__box--shadow dash__box--w">
                            <div class="dash__pad-1">
                                <ul class="dash__w-list">
                                    <li>
                                        <div class="dash__w-wrap">

                                            <span class="dash__w-icon dash__w-icon-style-1"><i class="fas fa-cart-arrow-down"></i></span>

                                            <span class="dash__w-text">4</span>

                                            <span class="dash__w-name">Orders Placed</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="dash__w-wrap">

                                            <span class="dash__w-icon dash__w-icon-style-2"><i class="fas fa-times"></i></span>

                                            <span class="dash__w-text">0</span>

                                            <span class="dash__w-name">Cancel Orders</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="dash__w-wrap">

                                            <span class="dash__w-icon dash__w-icon-style-3"><i class="far fa-heart"></i></span>

                                            <span class="dash__w-text">0</span>

                                            <span class="dash__w-name">Wishlist</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div> -->
                            <!--====== End - Dashboard Features ======-->
                        </div>
                        <div class="col-lg-9 col-md-12">
                            <div class="dash__box dash__box--shadow dash__box--radius dash__box--bg-white">
                                <div class="dash__pad-2">
                                    <h1 class="dash__h1 u-s-m-b-14">Edit Profile</h1>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <form class="dash-edit-p" method="POST" action="<?= base_url('User/edit_data') ?>">
                                                <div class="gl-inline">
                                                    <div class="u-s-m-b-30">

                                                        <label class="gl-label" for="reg-fname">NPM *</label>

                                                        <input name="npm" class="input-text input-text--primary-style" type="text" id="reg-fname" readonly value=<?= $param->npm ?>>
                                                    </div>
                                                    <div class="u-s-m-b-30">

                                                        <label class="gl-label" for="reg-lname">NAMA *</label>

                                                        <input name="nama" class="input-text input-text--primary-style" type="text" id="reg-lname" placeholder="NAMA" value="<?= $param->nama ?>" required>
                                                    </div>
                                                </div>
                                                <div class="gl-inline">
                                                    <div class="u-s-m-b-30">

                                                        <!--====== Date of Birth Select-Box ======-->

                                                        <span class="gl-label">GENDER *</span>
                                                        <div class="gl-dob"><select name="jk" id="gender" class="select-box select-box--primary-style">
                                                                <?php if ($param->jk == 'L') {

                                                                ?>
                                                                    <option value="Laki - Laki" selected>Laki - Laki</option>
                                                                    <option value="Perempuan">Perempuan</option>


                                                                <?php } else {

                                                                ?>
                                                                    <option value="Laki - Laki">Laki - Laki</option>

                                                                    <option value="Perempuan" selected>Perempuan</option>

                                                                <?php

                                                                } ?>
                                                            </select></div>
                                                        <!--====== End - Date of Birth Select-Box ======-->
                                                    </div>
                                                    <div class="u-s-m-b-30">

                                                        <label class="gl-label" for="gender">JURUSAN *</label><select name="jurusan" class="select-box select-box--primary-style u-w-100" id="jur">
                                                            <?php if ($param->jurusan == 'informatika') {

                                                            ?>
                                                                <option value="informatika" selected>informatika</option>
                                                                <option value="sistem informasi">Sistem Informasi</option>
                                                                <option value="data science">Data Science</option>


                                                            <?php } else if ($param->jurusan == 'sistem informasi') {

                                                            ?>
                                                                <option value="informatika">Informatika</option>
                                                                <option value="sistem informasi" selected>Sistem Informasi</option>
                                                                <option value="data science">Data Science</option>

                                                            <?php

                                                            } else {

                                                            ?>
                                                                <option value="informatika">Informatika</option>
                                                                <option value="sistem informasi">Sistem Informasi</option>
                                                                <option value="data science" selected>Data Science</option>

                                                            <?php



                                                            } ?>

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="gl-inline">
                                                    <div class="u-s-m-b-30">

                                                        <label class="gl-label" for="reg-fname">EMAIL *</label>

                                                        <input name="email" class="input-text input-text--primary-style" type="text" id="reg-fname" placeholder="E-MAIL" value="<?= $param->email ?>" required>
                                                    </div>
                                                    <div class="u-s-m-b-30">

                                                        <label class="gl-label" for="reg-lname">No HP *</label>

                                                        <input name="hp" class="input-text input-text--primary-style" type="text" id="reg-lname" placeholder="No. HP" value="<?= $param->nohp ?>" required>
                                                    </div>
                                                    <div class="u-s-m-b-30">

                                                        <label class="gl-label" for="reg-lname">ALAMAT *</label>

                                                        <input name="alamat" class="input-text input-text--primary-style" type="text" id="reg-lname" placeholder="ALAMAT" value="<?= $param->alamat ?>" required>
                                                    </div>
                                                </div>

                                                <button class="btn btn--e-brand-b-2" type="submit">SIMPAN</button>
                                            </form>
                                        </div>
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
        $('form').submit(function(e) {
            if ($('#gender').val() == null || $('#gender').val() == 'Pilih') {
                alert("Pilih Gender")
                e.preventDefault()
            } else if ($('#jur').val() == null || $('#jur').val() == 'Pilih') {
                alert("Pilih Jurusan")
                e.preventDefault()

            }
        })
    })
</script>
</body>

</html>