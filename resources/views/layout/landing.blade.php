<!Doctype html>
<html class="no-js" lang="zxx">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Bostami - Home Page One</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('bastomi') }}/assets/img/favicon.png">
  <!-- Place favicon.ico in the root directory -->

  <x-landing-panel.style></x-landing-panel.style>
</head>

<body>

  <div class="page-wrapper home-1" data-background="{{ asset('bastomi') }}/assets/img/bg/page-bg-1.jpg">

    <!-- PRELOADER -->
    <div id="preloader">
      <div class="loader_line"></div>
    </div>
    <!-- /PRELOADER -->

    <!-- header-start -->
    <div class="bostami-header-area mb-30 z-index-5">
      <div class="container">
        <div class="bostami-header-wrap">
          <div class="row align-items-center">

            <!-- logo -->
            <div class="col-6">
              <div class="bostami-header-logo">
                <a class="site-logo" href="https://bostami-bootstrap.ibthemespro.com/index.html">
                  <img src="{{ asset('bastomi') }}/assets/img/logo/logo-2.png" alt="">
                </a>
              </div>
            </div>

            <!-- menu btn -->
            <div class="col-6">
              <div class="bostami-header-menu-btn text-right">
                <div class="dark-btn dark-btn-stored dark-btn-icon">
                  <i class="fa-light fa-moon"></i>
                  <i class="fa-light fa-sun"></i>
                </div>
                <div class="menu-btn toggle_menu">
                  <span></span>
                  <span></span>
                  <span></span>
                </div>
              </div>
            </div>

          </div>
        </div>

        <!-- mobile menu -->
        <div class="mobile-menu-wrap">
          <div class="mobile-menu mobile_menu">
          </div>
        </div>

      </div>
    </div>
    <!-- header-end -->

    <div class="container z-index-3">
      <div class="row">

        <!-- parsonal-info-start -->
        <div class="col-xxl-3 col-xl-3">
          <div class="bostami-parsonal-info-area">
            <div class="bostami-parsonal-info-wrap">

              <!-- img -->
              <div class="bostami-parsonal-info-img">
                <img src="{{ asset('bastomi') }}/assets/img/parsonal-info/parson-img-1.png" alt="avatar">
              </div>

              <!-- name -->
              <h4 class="bostami-parsonal-info-name">
                <a href="#">Bostami Hassan</a>
              </h4>
              <span class="bostami-parsonal-info-bio mb-15">Ui/Ux Designer</span>

              <!-- socail link -->
              <ul class="bostami-parsonal-info-social-link mb-30">
                <li>
                  <a href="#" class="facebook">
                    <i class="fa-brands fa-facebook-f"></i>
                  </a>
                </li>
                <li>
                  <a href="#" class="twitter">
                    <i class="fa-brands fa-twitter"></i>
                  </a>
                </li>
                <li>
                  <a href="#" class="instagram">
                    <i class="fa-brands fa-instagram"></i>
                  </a>
                </li>
                <li>
                  <a href="#" class="linkedin">
                    <i class="fa-brands fa-linkedin-in"></i>
                  </a>
                </li>
              </ul>

              <!-- contact -->
              <div class="bostami-parsonal-info-contact mb-30">
                <div class="bostami-parsonal-info-contact-item phone">
                  <div class="icon">
                    <i class="fa-solid fa-mobile-screen-button"></i>
                  </div>
                  <div class="text">
                    <span>Phone</span>
                    <p>+123 456 7890</p>
                  </div>
                </div>


                <div class="bostami-parsonal-info-contact-item email">
                  <div class="icon">
                    <i class="fa-regular fa-envelope-open-text"></i>
                  </div>
                  <div class="text">
                    <span>Email</span>
                    <p>example@mail.com</p>
                  </div>
                </div>

                <div class="bostami-parsonal-info-contact-item location">
                  <div class="icon">
                    <i class="fa-solid fa-location-dot"></i>
                  </div>
                  <div class="text">
                    <span>Location</span>
                    <p>Hong kong china</p>
                  </div>
                </div>

                <div class="bostami-parsonal-info-contact-item calendar">
                  <div class="icon">
                    <i class="fa-light fa-calendar-days"></i>
                  </div>
                  <div class="text">
                    <span>Birthday</span>
                    <p>May 27, 1990</p>
                  </div>
                </div>
              </div>

              <!-- cv button -->
              <div class="bostami-parsonal-info-btn">
                <a class="btn-1" href="#">
                  <span class="icon">
                    <i class="fa-regular fa-download"></i>
                  </span>
                  download cv
                </a>
              </div>

            </div>
          </div>
        </div>
        <!-- personal-info-end -->

        <!-- about-page-start -->
        <div class="col-xxl-8 col-xl-9">
          <div class="bostami-page-content-wrap">
            {{ $slot }}
            <!-- footer copyright -->
            <x-landing-panel.footer></x-landing-panel.footer>

          </div>
        </div>
        <!-- about-page-end -->

        <x-landing-panel.sidebar></x-landing-panel.sidebar>
      </div>
    </div>
</div>
{{-- <x-landing-panel.portofolio-modal></x-landing-panel.portofolio-modal> --}}

  <x-landing-panel.script></x-landing-panel.script>
</body>

</html>
