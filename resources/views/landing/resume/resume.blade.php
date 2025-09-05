<x-LandingLayout>
  <!-- page title -->
  <div class="section-wrapper pl-60 pr-60 pt-60">
    <div class="bostami-page-title-wrap mb-15">
      <h2 class="page-title">resume</h2>
    </div>
  </div>

  <div class="section-wrapper pl-60 pr-60 mb-60">
    <div class="row">
      <!-- education -->
      <div class="col-xl-6 col-lg-7">
        <div class="bostami-section-title-wrap mb-20">
          <h4 class="section-title"><i class="fa-light fa-school"></i>Education</h4>
        </div>
        <div class="bostami-card-wrap">
          @foreach ($edu as $get)
            @php
              $color = $colors[$loop->index % count($colors)];
            @endphp
            <div class="bostami-card-item {{ $color }} mb-20">
              <span class="card-subtitle">{{ $get->tenggat_waktu }}</span>
              <h6 class="card-title">{{ $get->nama_pendidikan }} <span>- University,</span></h6>
              <p class="card-text">{{ $get->jurusan }}</p>
            </div>
          @endforeach
        </div>
      </div>

      <!-- education -->
      <div class="col-xl-6 col-lg-5">
        <div class="bostami-section-title-wrap mb-20">
          <h4 class="section-title"><i class="fa-light fa-briefcase"></i>experience</h4>
        </div>
        @foreach ($expe as $get)
          @php
            $color = $colors[$loop->index % count($colors)];
          @endphp
          <div class="bostami-card-item {{ $color }}  mb-20">
            <span class="card-subtitle">{{ $get->tenggat_waktu }}</span>
            <h6 class="card-title">{{ $get->nama_pengalaman }}</h6>
            <p class="card-text">{{ $get->jabatan }}</p>
          </div>
        @endforeach
      </div>
    </div>
  </div>

  <div class="section-wrapper bg-light-white-2 pt-70 pb-60 pl-60 pr-60">
    <div class="row">
      <!-- skill -->
      <div class="col-xl-6 col-lg-7">
        <div class="bostami-section-title-wrap mb-20">
          <h4 class="section-title">Working Skills</h4>
        </div>
        <div class="skill-bar-wrap">
          @foreach ($skill as $get)
            @php
              $color = $barColors[$loop->index % count($barColors)];
            @endphp
            <div class="skill-bar-item mb-30">
              <div class="title-wrap">
                <h5 class="title">{{ $get->nama }}</h5>
                <span class="count">{{ $get->level }}%</span>
              </div>
              <div class="progress-bar-wrap">
                <div class="progress-line {{ $color }}" style="width: {{ $get->level }}%;">
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>

      <!-- gk -->
      <div class="col-xl-6 col-lg-5">
        <div class="bostami-section-title-wrap mb-20">
          <h4 class="section-title">Knowledges</h4>
        </div>
        <div class="knowledeges-item-wrap">
          @foreach ($knowledge as $get)
            <span class="gk-item">{{ $get->nama }}</span>
          @endforeach
        </div>
      </div>
    </div>

  </div>
</x-LandingLayout>
