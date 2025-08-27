<!-- Brand Logo -->
<a href="index.html" class="logo">
  <span class="logo-light">
    <span class="logo-lg"><img src="{{ asset('boron') }}/assets/images/logo.png" alt="logo"></span>
    <span class="logo-sm text-center"><img src="{{ asset('boron') }}/assets/images/logo-sm.png" alt="small logo"></span>
  </span>

  <span class="logo-dark">
    <span class="logo-lg"><img src="{{ asset('boron') }}/assets/images/logo-dark.png" alt="dark logo"></span>
    <span class="logo-sm text-center"><img src="{{ asset('boron') }}/assets/images/logo-sm.png" alt="small logo"></span>
  </span>
</a>

<!-- Sidebar Hover Menu Toggle Button -->
<button class="button-sm-hover">
  <i class="ti ti-circle align-middle"></i>
</button>

<!-- Full Sidebar Menu Close Button -->
<button class="button-close-fullsidebar">
  <i class="ti ti-x align-middle"></i>
</button>

<div data-simplebar>

  <!--- Sidenav Menu -->
  <ul class="side-nav">

    <li class="side-nav-item">
      <a href="index.html" class="side-nav-link">
        <span class="menu-icon"><i class="ti ti-dashboard"></i></span>
        <span class="menu-text"> Dashboard </span>
        <span class="badge bg-success rounded-pill">5</span>
      </a>
    </li>

    <li class="side-nav-title mt-2">Apps & Pages</li>

    <li class="side-nav-item">
      <a href="/biodata" class="side-nav-link">
        <span class="menu-icon"><i class="ti ti-id-badge"></i></span>
        <span class="menu-text"> Biodata </span>
      </a>
    </li>

    <li class="side-nav-item">
      <a data-bs-toggle="collapse" href="#sidebarMultiLevel" aria-expanded="false" aria-controls="sidebarMultiLevel"
        class="side-nav-link">
        <span class="menu-icon"><i class="ti ti-user"></i></span>
        <span class="menu-text"> Profile </span>
        <span class="menu-arrow"></span>
      </a>
      <div class="collapse" id="sidebarMultiLevel">
        <ul class="sub-menu">
          <!-- About langsung -->
          <li class="side-nav-item">
            <a href="/about" class="side-nav-link">
              <span class="menu-text">About</span>
            </a>
          </li>

          <!-- Resume dengan sub level -->
          <li class="side-nav-item">
            <a data-bs-toggle="collapse" href="#sidebarSecondLevel" aria-expanded="false"
              aria-controls="sidebarSecondLevel" class="side-nav-link">
              <span class="menu-text"> Resume </span>
              <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="sidebarSecondLevel">
              <ul class="sub-menu">
                <li class="side-nav-item">
                  <a href="/education" class="side-nav-link">
                    <span class="menu-text">Educations</span>
                  </a>
                </li>
                <li class="side-nav-item">
                  <a href="/experience" class="side-nav-link">
                    <span class="menu-text">Experiences</span>
                  </a>
                </li>
                <li class="side-nav-item">
                  <a href="/knowledge" class="side-nav-link">
                    <span class="menu-text">Knowledges</span>
                  </a>
                </li>
                <li class="side-nav-item">
                  <a href="/skill" class="side-nav-link">
                    <span class="menu-text">Skills</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
    </li>

    <li class="side-nav-item">
      <a data-bs-toggle="collapse" href="#sidebarKategori" aria-expanded="false" aria-controls="sidebarKategori"
        class="side-nav-link">
        <span class="menu-icon"><i class="ti ti-list"></i></span>
        <span class="menu-text"> Kategori </span>
        <span class="menu-arrow"></span>
      </a>
      <div class="collapse" id="sidebarKategori">
        <ul class="sub-menu">
          <li class="side-nav-item">
            <a href="/kategori-works" class="side-nav-link">
              <span class="menu-text">Porto</span>
            </a>
          </li>
          <li class="side-nav-item">
            <a href="/kategori-blog" class="side-nav-link">
              <span class="menu-text">Blog</span>
            </a>
          </li>
        </ul>
      </div>
    </li>

    <li class="side-nav-item">
      <a data-bs-toggle="collapse" href="#sidebarPages" aria-expanded="false" aria-controls="sidebarPages"
        class="side-nav-link">
        <span class="menu-icon"><i class="ti ti-files"></i></span>
        <span class="menu-text"> Pages </span>
        <span class="menu-arrow"></span>
      </a>
      <div class="collapse" id="sidebarPages">
        <ul class="sub-menu">
          <li class="side-nav-item">
            <a href="/works" class="side-nav-link">
              <span class="menu-text">Porto</span>
            </a>
          </li>
          <li class="side-nav-item">
            <a href="/blog" class="side-nav-link">
              <span class="menu-text">Blog</span>
            </a>
          </li>
        </ul>
      </div>
    </li>
  </ul>

  <div class="clearfix"></div>
</div>
