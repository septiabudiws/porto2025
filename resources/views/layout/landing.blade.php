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
        <x-landing-panel.biodata></x-landing-panel.biodata>
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
