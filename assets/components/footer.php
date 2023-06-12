<footer class="site-footer">
        <div
          class="site-footer-bg"
          style="
            background-image: url(assets/images/backgrounds/site-footer-bg.jpg);
          "
        ></div>
        <div class="site-footer__top">
          <div class="container">
            <div class="row">
              <div
                class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp"
                data-wow-delay="100ms"
              >
                <div class="footer-widget__column footer-widget__about">
                  <div class="footer-widget__about-logo">
                    <a href="index.php"><img width="40%" src="img/logo.png"alt="footer logo"/></a>
                  </div>
                  <div class="footer-widget__about-text-box">
                    <p style="font-size: 22px;" class="footer-widget__about-text">
                      সুখেরচর প্রামাণিক সমাজ উন্নয়ন সংগঠন। <br>
                      সুখেরচর, উলিপুর, কুড়িগ্রাম
                    </p>
                  </div>
                  <div class="footer-widget__btn">
                    <a style="font-size: 20px;" href="/notice.php">
                      <span class="fa fa-heart"></span>নোটিশ দেখুন</a
                    >
                  </div>
                </div>
              </div>
              <div
                class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp"
                data-wow-delay="200ms"
              >
                <div
                  class="footer-widget__column footer-widget__links clearfix"
                >
                  <h3 style="font-size: 30px;" class="footer-widget__title">গুরুত্বপূর্ন পেজ</h3>
                  <ul class="footer-widget__links-list list-unstyled clearfix">
                    <li><a style="font-size: 20px;" href="#">আমাদের সম্পর্কে</a></li>
                    <li><a style="font-size: 20px;" href="/notice.php">নোটিশ</a></li>
                    <li><a style="font-size: 20px;" href="#">সদস্য</a></li>
                    <li><a style="font-size: 20px;" href="#">যোগাযোগ</a></li>
                    <li><a style="font-size: 20px;" href="#">সহায়তা ও অনুদান</a></li>
                  </ul>
                </div>
              </div>
              
              <div
                class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp"
                data-wow-delay="400ms"
              >
                <div class="footer-widget__column footer-widget__contact">
                  <h3 style="font-size: 30px;" class="footer-widget__title">যোগাযোগ</h3>
                  <p style="font-size: 20px;" class="footer-widget__contact-text">
                    সুখেরচর, উলিপুর, কুড়িগ্রাম                    
                  </p>
                  <ul class="list-unstyled footer-widget__contact-list">
                    <!-- <li>
                      <div class="icon">
                        <i class="fa fa-envelope"></i>
                      </div>
                      <div class="text">
                        <p>
                          <a href="mailto:needhelp@company.com "
                            >needhelp@company.com</a
                          >
                        </p>
                      </div>
                    </li> -->
                    <li>
                      <div class="icon">
                        <i class="fas fa-phone-alt"></i>
                      </div>
                      <div class="text">
                        <p style="font-size: 40px;"><a href="tel:01921518770">০১৯২১৫১৮৭৭০</a></p>
                      </div>
                    </li>
                  </ul>
                    <!-- <div class="site-footer__social">
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div> -->
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="site-footer__bottom">
          <div class="container">
            <div class="row">
              <div class="col-xl-12">
                <div class="site-footer__bottom-inner">
                    <?php
                     $current_date = date("Y");
                    ?>
                  <p class="site-footer__bottom-text">
                    © All Copyright <?=$current_date ?> by <a style="font-size: 20px;" href="#">সুখেরচর প্রামাণিক সমাজ উন্নয়ন সংগঠন</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>