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

      <!--Main Slider Start-->
      <?php
        @require_once("assets/components/slider.php");
      ?>
      <!--Main Slider End-->

      <!--Make Donation Start-->
      <!-- <?php
      @require_once("assets/components/makeDonation.php");
      ?> -->
      <!--Make Donation End-->

      <!--About Three Start-->
      <?php
      @require_once("assets/components/about.php");
      ?>
      <!--About Three End-->

      <!--Feature Three Start-->
      <!-- <?php
      @require_once("assets/components/feature.php");
      ?> -->
      <!--Feature Three End-->

      <!--Testimonial Three Start-->
      <?php
      @require_once("assets/components/testimonial.php");
      ?>
      <!--Testimonial Three End-->

      <!--Brand One Start-->
      <?php
      @require_once("assets/components/brand.php");
      ?>
      <!--Brand One End-->

      <!--Events Two Start-->
      <!-- here events code -->
      <!--Events Two End-->

      <!--News One Start-->
      <!-- here news one code -->
      <!--News One End-->

      <!--Gallery Three Start-->
      <!-- here gallery code -->
      <!--Gallery Three End-->

      <!--Become Volunteer Start-->
      <!-- becode a volunteer code -->
      <!--Become Volunteer End-->

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