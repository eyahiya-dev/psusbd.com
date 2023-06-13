<?php
  @require_once("assets/components/head.php");
?>
  <body class="custom-cursor">
    <?php
    @require_once("assets/components/cursorEffect.php");
    ?>
    <!-- <?php
    @require_once("assets/components/preloader.php");
    ?> -->
    <!-- /.preloader -->

    <div class="page-wrapper">
      <?php
        @require_once("assets/components/header.php");
      ?>    

      <div class="stricky-header stricked-menu main-menu main-menu-three">
        <div class="sticky-header__content"></div>
        <!-- /.sticky-header__content -->
      </div>
      <!-- /.stricky-header -->

      <!-- contact part start -->

      <!--Page Header Start-->
      <section class="page-header">
            <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
            </div>
            <div class="container">
                <div class="page-header__inner mt-5">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a style="font-size: 30px;" href="index.php">হোম</a></li>
                        <li><span>/</span></li>
                        <li style="font-size: 22px;" class="active">যোগাযোগ</li>
                    </ul>
                    <h2 style="font-size: 50px; margin-bottom: -80px " class=" mt-5 paginate_heading">যোগাযোগ করুন </h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Contact Three Start-->
        <section class="contact-three">
            <div class="contact-three-shape"
                style="background-image: url(assets/images/shapes/contact-three-shape.png);"></div>
            <div class="container">
                <div style="margin-bottom: -50px;" class="section-title text-center">
                    <span class="section-title__tagline">প্রয়োজনে যোগাযোগ করুন</span>
                    <h2 class="section-title__title"> যেকোনো পরামর্শ ও অভিযোগের জন্য যোগাযোগ করতে পারেন যেকোনো সময় ।</h2>
                </div>
            
                <!-- <div class="contact-page__form-box">
                    <form action="https://layerdrops.com/oxpinshtml/main-html/assets/inc/sendemail.php" class="contact-page__form contact-form-validated"
                        novalidate="novalidate">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="contact-form__input-box">
                                    <input type="text" placeholder="Your name" name="name">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="contact-form__input-box">
                                    <input type="email" placeholder="Email address" name="email">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="contact-form__input-box">
                                    <input type="text" placeholder="Phone" name="phone">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="contact-form__input-box">
                                    <input type="text" placeholder="Subject" name="subject">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="contact-form__input-box text-message-box">
                                    <textarea name="message" placeholder="Write a message"></textarea>
                                </div>
                                <div class="contact-form__btn-box">
                                    <button type="submit" class="thm-btn contact-form__btn">Send a message</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div> -->

            </div>
        </section>
        <!--Contact Three End-->

        <!--Contact One Start-->
        <section class="contact-one">
            <div class="container">
                <div class="contact-one__inne">
                    <ul class="list-unstyled contact-one__list">
                        <li class="contact-one__single">
                            <div class="contact-one__icon">
                                <span class="icon-phone-call"></span>
                            </div>
                            <div class="contact-one__content">
                                <p style="font-size: 20px;" class="contact-one__sub-title">হেল্পলাইন</p>
                                <h3 style="font-size: 32px;" class="contact-one__number"><a href="tel:980009630">০১৯২১৫১৮৭৭০</a></h3>
                            </div>
                        </li>
                        <li class="contact-one__single">
                            <div class="contact-one__icon">
                                <span class="icon-message"></span>
                            </div>
                            <div class="contact-one__content">
                                <p style="font-size: 20px;" class="contact-one__sub-title">ই-মেইল পাঠান</p>
                                <h3 style="font-size: 22px;" class="contact-one__number"><a
                                        href="mailto:hmsrahman1995@gmail.com">hmsrahman1995@gmail.com</a></h3>
                            </div>
                        </li>
                        <li class="contact-one__single">
                            <div class="contact-one__icon">
                                <span class="icon-location"></span>
                            </div>
                            <div class="contact-one__content">
                                <p style="font-size: 19px;" class="contact-one__sub-title">সুখেরচর, উলিপুর, কুড়িগ্রাম</p>
                                <h3 style="font-size: 26px;" class="contact-one__number">রংপুর, বাংলাদেশ</h3>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Contact One End-->

        <!--Google Map Start-->
        <section class="google-map google-map-two">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5493.656746220916!2d89.6118658227935!3d25.649587663012145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fd335a97cddffd%3A0x46c03473cc6ff0c2!2sUlipur!5e0!3m2!1sen!2sbd!4v1686645388903!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="google-map__one" allowfullscreen ></iframe>

        </section>
        <!--Google Map End-->

      <!-- contact part end -->

      <!--Site Footer Start-->
      <?php
      @require_once("./assets/components/footer.php");
      ?>
      <!--Site Footer End-->
    </div>
    <!-- /.page-wrapper -->

    <div class="mobile-nav__wrapper">
      <div class="mobile-nav__overlay mobile-nav__toggler"></div>
      <!-- /.mobile-nav__overlay -->
      <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler"
          ><i class="fa fa-times"></i
        ></span>

        <div class="logo-box">
          <a href="index.php" aria-label="logo image"><img src="img/logo.png" width="25%" alt="logo"/></a>
        </div>
        <!-- /.logo-box -->
        <div class="mobile-nav__container"></div>
        <!-- /.mobile-nav__container -->

        <ul class="mobile-nav__contact list-unstyled">
          <!-- <li>
            <i class="fa fa-envelope"></i>
            <a href="mailto:needhelp@packageName__.com">needhelp@oxpins.com</a>
          </li> -->
          <li>
            <i class="fa fa-phone-alt"></i>
            <a style="font-size: 25px;" href="tel:01921518770">০১৯২১৫১৮৭৭০</a>
          </li>
        </ul>
        <!-- /.mobile-nav__contact -->
        <div class="mobile-nav__top">
          <!-- <div class="mobile-nav__social">
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-facebook-square"></a>
            <a href="#" class="fab fa-pinterest-p"></a>
            <a href="#" class="fab fa-instagram"></a>
          </div> -->
          <!-- /.mobile-nav__social -->
        </div>
        <!-- /.mobile-nav__top -->
      </div>
      <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->

    <div class="search-popup">
      <div class="search-popup__overlay search-toggler"></div>
      <!-- /.search-popup__overlay -->
      <div class="search-popup__content">
        <form action="#">
          <label for="search" class="sr-only">search here</label
          ><!-- /.sr-only -->
          <input type="text" id="search" placeholder="যা খুজতেছেন ? এখানে লিখুন....." />
          <button type="submit" aria-label="search submit" class="thm-btn">
            <i class="icon-magnifying-glass"></i>
          </button>
        </form>
      </div>
      <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"
      ><i class="icon-up-arrow"></i
    ></a>
<?php
  @require_once("./assets/components/foooterLink.php");
?>