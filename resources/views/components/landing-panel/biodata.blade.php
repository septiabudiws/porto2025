<div class="col-xxl-3 col-xl-3">
  <div class="bostami-parsonal-info-area">
    <div class="bostami-parsonal-info-wrap">

      <!-- img -->
      <div class="bostami-parsonal-info-img">
        <img src="{{ asset('uploads') }}/foto-profil/{{ $bio->foto }}" alt="avatar">
      </div>

      <!-- name -->
      <h4 class="bostami-parsonal-info-name">
        <a href="#">{{ $bio->nama_panjang }}</a>
      </h4>
      <span class="bostami-parsonal-info-bio mb-15">{{ $bio->pekerjaan }}</span>

      <!-- socail link -->
      <ul class="bostami-parsonal-info-social-link mb-30">
        <li>
          <a href="{{ $bio->link_ig }}" target="_blank" class="instagram">
            <i class="fa-brands fa-instagram"></i>
          </a>
        </li>
        <li>
          <a href="{{ $bio->link_fb }}" target="_blank" class="linkedin">
            <i class="fa-brands fa-tiktok"></i>
          </a>
        </li>
        <li>
          <a href="{{ $bio->link_yt }}" target="_blank" class="instagram">
            <i class="fa-brands fa-youtube"></i>
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
            <p>{{ $bio->no_hp }}</p>
          </div>
        </div>


        <div class="bostami-parsonal-info-contact-item email">
          <div class="icon">
            <i class="fa-regular fa-envelope-open-text"></i>
          </div>
          <div class="text">
            <span>Email</span>
            <p>{{ $bio->email }}</p>
          </div>
        </div>

        <div class="bostami-parsonal-info-contact-item location">
          <div class="icon">
            <i class="fa-solid fa-location-dot"></i>
          </div>
          <div class="text">
            <span>Location</span>
            <p>{{ $bio->alamat }}</p>
          </div>
        </div>

        <div class="bostami-parsonal-info-contact-item calendar">
          <div class="icon">
            <i class="fa-light fa-calendar-days"></i>
          </div>
          <div class="text">
            <span>Birthday</span>
            <p>{{ $bio->tgl_lahir->translatedFormat('d F Y') }}</p>
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
