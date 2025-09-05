<x-LandingLayout>
  <!-- page title -->
  <div class="section-wrapper pl-60 pr-60 pt-60">
    <div class="bostami-page-title-wrap mb-35">
      <h2 class="page-title">about</h2>
      <p>{!! $about->deskripsi !!}</p>
    </div>
  </div>

  <!-- what-do -->
  <div class="section-wrapper pl-60 pr-60">

    <div class="bostami-section-title-wrap mb-30">
      <h3 class="section-title">What I do!</h3>
    </div>

    <div class="bostami-what-do-wrap mb-30">
      <div class="row">
        @foreach ($ability as $get)
        @php
            $color = $colors[$loop->index % count($colors)];
        @endphp
          <!-- single item -->
          <div class="col-xxl-6 col-xl-6 col-lg-6">
            <div class="bostami-what-do-item {{ $color }}">
              <div class="icon">
                <h4>{{ $loop->iteration }}</h4>
              </div>
              <div class="text">
                <h4 class="title">{{ $get->nama }}</h4>
                <p>{{ $get->deskripsi }}</p>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>

  </div>

  <!-- client -->
  <div class="section-wrapper bg-light-white-2 pt-45 pb-60 pl-60 pr-60">

    <div class="bostami-section-title-wrap text-center mb-50">
      <h3 class="section-title">clinet</h3>
    </div>

    <div class="bostami-client-slider">
      <div class="swiper-container client_slide_active">
        <div class="swiper-wrapper">

          <!-- single item -->
          <div class="swiper-slide">
            <img class="bostami-client-slider-logo" src="{{ asset('bastomi') }}/assets/img/client/client-logo-1.png"
              alt="">
          </div>

          <!-- single item -->
          <div class="swiper-slide">
            <img class="bostami-client-slider-logo" src="{{ asset('bastomi') }}/assets/img/client/client-logo-2.png"
              alt="">
          </div>

          <!-- single item -->
          <div class="swiper-slide">
            <img class="bostami-client-slider-logo" src="{{ asset('bastomi') }}/assets/img/client/client-logo-3.png"
              alt="">
          </div>

          <!-- single item -->
          <div class="swiper-slide">
            <img class="bostami-client-slider-logo" src="{{ asset('bastomi') }}/assets/img/client/client-logo-4.png"
              alt="">
          </div>

        </div>
      </div>
    </div>

  </div>
</x-LandingLayout>
