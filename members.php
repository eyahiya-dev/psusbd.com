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
                        <li style="font-size: 22px;" class="active">সদস্যবৃন্দ</li>
                    </ul>
                    <h2 style="font-size: 50px; margin-bottom: -80px " class=" mt-5 paginate_heading">সকল সদস্যদের তালিকা</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!-- members part start -->

         <!--Team One Start-->
         <section class="team-carousel-page">
            <div style="margin-top: -50px;" class="section-title text-center">
                <span class="section-title__tagline">আমাদের সংগঠনের</span>
                <h2 class="section-title__title">উপদেষ্টামন্ডলীদের তালিকা</h2>
            </div>        
            <div class="container">
                <div class="team-carousel thm-owl__carousel owl-theme owl-carousel carousel-dot-style" data-owl-options='{
                    "items": 3,
                    "margin": 30,
                    "smartSpeed": 700,
                    "loop":true,
                    "autoplay": 8000,
                    "nav":false,
                    "dots":true,
                    "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                    "responsive":{
                        "0":{
                            "items":1
                        },
                        "768":{
                            "items":2
                        },
                        "992":{
                            "items": 3
                        }
                    }
                }'>
                    <!--Team One Single Start-->
                    <div class="item">
                        <div class="team-one__single">
                            <div class="team-one__img">
                                <img src="assets/images/members/fajar ali charman.jpg" alt="ফজর আলী মন্ডল">
                                <div class="team-one__social">
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="team-one__content">
                                <h3 style="font-size: 30px; margin-top: -15px" class="team-one__name"><a href="#">ফজর আলী মন্ডল</a></h3>
                                <p style="font-size: 22px; margin-bottom: -15px" class="team-one__sub-title pt-3">উপদেষ্টা</p>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->     
                    <div class="item">
                        <div class="team-one__single">
                            <div class="team-one__img">
                                <img src="assets/images/members/kader pramanik.jpg" alt="কাদের প্রামাণিক">
                                <div class="team-one__social">
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="team-one__content">
                                <h3 style="font-size: 30px; margin-top: -15px" class="team-one__name"><a href="#">কাদের প্রামাণিক</a></h3>
                                <p style="font-size: 22px; margin-bottom: -15px" class="team-one__sub-title pt-3">উপদেষ্টা</p>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->                   
                    <!--Team One Single End-->     
                    <div class="item">
                        <div class="team-one__single">
                            <div class="team-one__img">
                                <img src="assets/images/members/Sobur Pramanik.png" alt="আব্দুস সবুর প্রামাণিক">
                                <div class="team-one__social">
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="team-one__content">
                                <h3 style="font-size: 30px; margin-top: -15px" class="team-one__name"><a href="#">আব্দুস সবুর প্রামাণিক</a></h3>
                                <p style="font-size: 22px; margin-bottom: -15px" class="team-one__sub-title pt-3">উপদেষ্টা</p>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->                   
                    <!--Team One Single End-->     
                    <div class="item">
                        <div class="team-one__single">
                            <div class="team-one__img">
                                <img src="assets/images/members/samad master.jpg" alt="আব্দুস সমাদ মাষ্টার">
                                <div class="team-one__social">
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="team-one__content">
                                <h3 style="font-size: 30px; margin-top: -15px" class="team-one__name"><a href="#">আব্দুস সমাদ মাষ্টার</a></h3>
                                <p style="font-size: 22px; margin-bottom: -15px" class="team-one__sub-title pt-3">উপদেষ্টা</p>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->                   
                    <!--Team One Single End-->     
                    <div class="item">
                        <div class="team-one__single">
                            <div class="team-one__img">
                                <img src="assets/images/members/abdur rouf master.jpg" alt="আব্দুর রউফ মাষ্টার">
                                <div class="team-one__social">
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="team-one__content">
                                <h3 style="font-size: 30px; margin-top: -15px" class="team-one__name"><a href="#">আব্দুর রউফ মাষ্টার</a></h3>
                                <p style="font-size: 22px; margin-bottom: -15px" class="team-one__sub-title pt-3">উপদেষ্টা</p>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->                   
                    <!--Team One Single End-->     
                    <div class="item">
                        <div class="team-one__single">
                            <div class="team-one__img">
                                <img src="assets/images/members/abdul khalek mollah.png" alt="আব্দুল খালেক মোল্লাহ">
                                <div class="team-one__social">
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="team-one__content">
                                <h3 style="font-size: 30px; margin-top: -15px" class="team-one__name"><a href="#">আব্দুল খালেক মোল্লাহ</a></h3>
                                <p style="font-size: 22px; margin-bottom: -15px" class="team-one__sub-title pt-3">উপদেষ্টা</p>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->                    
                </div>                
            </div>
        </section>
        <!--Team One End-->

        <!-- members part end -->
         <!--Team One Start-->
         <section class="team-carousel-page">
            <div style="margin-top: -150px;" class="section-title text-center">
                <!-- <span class="section-title__tagline">আমাদের সংগঠনের</span> -->
                <h2 class="section-title__title">পরিচালনা কমিটির তালিকা</h2>
            </div>        
            <div class="container">
                <div class="team-carousel thm-owl__carousel owl-theme owl-carousel carousel-dot-style" data-owl-options='{
                    "items": 3,
                    "margin": 30,
                    "smartSpeed": 700,
                    "loop":true,
                    "autoplay": 8000,
                    "nav":false,
                    "dots":true,
                    "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                    "responsive":{
                        "0":{
                            "items":1
                        },
                        "768":{
                            "items":2
                        },
                        "992":{
                            "items": 3
                        }
                    }
                }'>
                    <!--Team One Single Start-->
                    <div class="item">
                        <div class="team-one__single">
                            <div class="team-one__img">
                                <img src="assets/images/members/habibur rahamn.png" alt="হাবিবুর রহমান মাষ্টার">
                                <div class="team-one__social">
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="team-one__content">
                                <h3 style="font-size: 30px; margin-top: -15px" class="team-one__name"><a href="#">হাবিবুর রহমান মাষ্টার</a></h3>
                                <p style="font-size: 22px; margin-bottom: -15px" class="team-one__sub-title pt-3">সভাপতি</p>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->     
                    <div class="item">
                        <div class="team-one__single">
                            <div class="team-one__img">
                                <img src="assets/images/members/rezaul karim .png" alt="রেজাউল করিম মাষ্টার">
                                <div class="team-one__social">
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="team-one__content">
                                <h3 style="font-size: 30px; margin-top: -15px" class="team-one__name"><a href="#">রেজাউল করিম মাষ্টার</a></h3>
                                <p style="font-size: 22px; margin-bottom: -15px" class="team-one__sub-title pt-3">সেক্রেটারি</p>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->                   
                    <!--Team One Single End-->     
                    <div class="item">
                        <div class="team-one__single">
                            <div class="team-one__img">
                                <img src="assets/images/members/saidur rahman.png" alt="সাইদুুর রহমান">
                                <div class="team-one__social">
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="team-one__content">
                                <h3 style="font-size: 30px; margin-top: -15px" class="team-one__name"><a href="#">এইচ এম সাইদুর রহমান</a></h3>
                                <p style="font-size: 22px; margin-bottom: -15px" class="team-one__sub-title pt-3">ক্যাশিয়ার</p>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->                   
                    <!--Team One Single End-->     
                    <div class="item">
                        <div class="team-one__single">
                            <div class="team-one__img">
                                <img src="assets/images/members/jahirul master.png" alt="জহিরুল ইসলাম মাষ্টার">
                                <div class="team-one__social">
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="team-one__content">
                                <h3 style="font-size: 30px; margin-top: -15px" class="team-one__name"><a href="#">জহিরুল ইসলাম মাষ্টার</a></h3>
                                <p style="font-size: 22px; margin-bottom: -15px" class="team-one__sub-title pt-3">সিনিয়র সহ-সভাপতি</p>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->                   
                    <!--Team One Single End-->     
                    <div class="item">
                        <div class="team-one__single">
                            <div class="team-one__img">
                                <img src="assets/images/members/aynal mama.jpg" alt="মোঃ আজিজুল ইসলাম আজিজ">
                                <div class="team-one__social">
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="team-one__content">
                                <h3 style="font-size: 30px; margin-top: -15px" class="team-one__name"><a href="#">মোঃ আজিজুল ইসলাম আজিজ</a></h3>
                                <p style="font-size: 22px; margin-bottom: -15px" class="team-one__sub-title pt-3">সিনিয়র সহ-সভাপতি</p>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->                   
                    <!--Team One Single End-->     
                    <div class="item">
                        <div class="team-one__single">
                            <div class="team-one__img">
                                <img src="assets/images/members/rafiqul islam rashid.jpg" alt="রফিকুল ইসলাম রশিদ">
                                <div class="team-one__social">
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="team-one__content">
                                <h3 style="font-size: 30px; margin-top: -15px" class="team-one__name"><a href="#">রফিকুল ইসলাম রশিদ</a></h3>
                                <p style="font-size: 22px; margin-bottom: -15px" class="team-one__sub-title pt-3">সিনিয়র সহ-সভাপতি</p>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->                   
                    <!--Team One Single End-->     
                    <div class="item">
                        <div class="team-one__single">
                            <div class="team-one__img">
                                <img src="assets/images/members/abdur rohim badsha.jpg" alt="আব্দুর রহিম বাদশা">
                                <div class="team-one__social">
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="team-one__content">
                                <h3 style="font-size: 30px; margin-top: -15px" class="team-one__name"><a href="#">আব্দুর রহিম বাদশা</a></h3>
                                <p style="font-size: 22px; margin-bottom: -15px" class="team-one__sub-title pt-3">সহ-সভাপতি</p>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->                    
                    <!--Team One Single End-->     
                    <div class="item">
                        <div class="team-one__single">
                            <div class="team-one__img">
                                <img src="assets/images/members/nazrul islam.jpg" alt="মোঃ নজরুল ইসলাম">
                                <div class="team-one__social">
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="team-one__content">
                                <h3 style="font-size: 30px; margin-top: -15px" class="team-one__name"><a href="#">মোঃ নজরুল ইসলাম</a></h3>
                                <p style="font-size: 22px; margin-bottom: -15px" class="team-one__sub-title pt-3">সহ-সভাপতি</p>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->                    
                </div>                
            </div>
        </section>
        <!--Team One End-->

        <!-- members part end -->



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