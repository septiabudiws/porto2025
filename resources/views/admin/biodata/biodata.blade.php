<x-AdminLayout>
  <div class="row justify-content-center">
    <div class="col-lg-8">
      <div class="card mt-4 shadow-lg border-0 rounded-3">
        <!-- Header -->
        <div class="card-header d-flex justify-content-between align-items-center bg-primary text-white rounded-top">
          <h4 class="mb-0">Biodata</h4>
          <a href="#" class="btn btn-light btn-sm text-primary fw-bold">
            <i class="bi bi-pencil-square me-1"></i> Edit Profile
          </a>
        </div>

        <!-- Body -->
        <div class="card-body">
          <div class="row align-items-center">
            <!-- Foto Profil -->
            <div class="col-md-4 text-center mb-4 mb-md-0">
              <img src="{{ asset('bastomi') }}/assets/img/parsonal-info/parson-img-1.png"
                   alt="Profile Picture"
                   class="rounded-circle img-fluid shadow"
                   style="width: 180px; height: 180px; object-fit: cover;">
              <h5 class="mt-3 fw-bold">Mohammad Septiabudi Wicaksono</h5>
              <p class="text-muted mb-0">Web Developer</p>
            </div>

            <!-- Info Biodata -->
            <div class="col-md-8">
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  <strong>Nomor HP:</strong> +62 812 3456 7890
                </li>
                <li class="list-group-item">
                  <strong>Email:</strong> user@email.com
                </li>
                <li class="list-group-item">
                  <strong>Alamat:</strong> Jl. Contoh No. 123, Sumenep
                </li>
                <li class="list-group-item">
                  </i><strong>Tanggal Lahir:</strong> 01 Januari 2000
                </li>
                <li class="list-group-item">
                  <strong>Facebook:</strong> <a href="#" target="_blank">fb.com/username</a>
                </li>
                <li class="list-group-item">
                  <strong>Instagram:</strong> <a href="#" target="_blank">@username</a>
                </li>
                <li class="list-group-item">
                  <strong>X (Twitter):</strong> <a href="#" target="_blank">@username</a>
                </li>
                <li class="list-group-item">
                  <strong>YouTube:</strong> <a href="#" target="_blank">youtube.com/@username</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-AdminLayout>
