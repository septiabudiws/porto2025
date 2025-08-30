<x-AdminLayout>
  <div class="row">
    <div class="col-12">
      <div class="card mt-4">
        <div class="card-header">
          <h2 class="card-title">Biodata</h2>
        </div>
        <div class="card-body">
          <div class="row">
            @foreach ($bio as $get)
              <!-- FOTO PROFIL -->
              <div class="col-md-4 text-center mb-4 mb-md-0">
                <!-- Foto bisa diklik untuk ubah -->
                <div class="position-relative d-inline-block">
                  <img id="profile-preview" src="{{ asset('uploads/foto-profil/'.$get->foto) }}"
                    alt="Profile Picture" class="rounded-circle img-fluid shadow"
                    style="width: 180px; height: 180px; object-fit: cover; cursor: pointer;"
                    onclick="document.getElementById('profile-input').click()">
                  <!-- Icon kamera -->
                  <span class="position-absolute bottom-0 end-0 bg-primary text-white rounded-circle p-2 shadow"
                    style="cursor: pointer;" onclick="document.getElementById('profile-input').click()">
                    <i class="ti ti-camera"></i>
                  </span>
                </div>
                <!-- Form Foto -->
                <form id="profile-form" action="{{ route('biodata.updateFoto', $get->id) }}" method="POST" enctype="multipart/form-data" class="mt-2">
                  @csrf
                  @method('PUT')
                  <input type="file" id="profile-input" name="profile" accept="image/*" class="d-none"
                    onchange="previewProfile(event)">
                  <button type="submit" class="btn btn-sm btn-primary mt-2">Simpan Foto</button>
                </form>
                <h5 class="mt-3 fw-bold">{{ $get->nama_panjang }}</h5>
                <p class="text-muted mb-0">{{ $get->pekerjaan }}</p>
              </div>
              <!-- BIODATA -->
              <div class="col-md-8">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item"><strong>No HP:</strong> {{ $get->no_hp }}</li>
                  <li class="list-group-item"><strong>Email:</strong> {{ $get->email }}</li>
                  <li class="list-group-item"><strong>Alamat:</strong> {{ $get->alamat }}</li>
                  <li class="list-group-item"><strong>Tanggal Lahir:</strong>
                    {{ $get->tgl_lahir->translatedFormat('d F Y') }}</li>
                  <li class="list-group-item">
                    <strong>Sosial Media:</strong>
                    <a href="{{ $get->link_fb }}" target="_blank" class="ms-2">Tiktok</a> |
                    <a href="{{ $get->link_ig }}" target="_blank" class="ms-2">Instagram</a> |
                    <a href="{{ $get->link_yt }}" target="_blank" class="ms-2">YouTube</a>
                  </li>
                </ul>
                <button class="btn btn-primary mt-3" type="button" data-bs-toggle="offcanvas"
                  data-bs-target="#Biodata{{ $get->id }}" aria-controls="Biodata">Edit Profile</button>
                <!-- Offcanvas Edit -->
                <div class="offcanvas offcanvas-end" tabindex="-1" id="Biodata{{ $get->id }}"
                  aria-labelledby="BiodataLabel">
                  <div class="offcanvas-header">
                    <h4 class="offcanvas-title" id="BiodataLabel">Edit Bodata</h4>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                      aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body">
                    <form action="{{ route('biodata.update', $get->id) }}" method="POST">
                      @csrf

                      <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" id="nama" class="form-control @error('nama') is-invalid @enderror"
                          name="nama" placeholder="Masukkan Nama" value="{{ old('nama', $get->nama_panjang) }}">
                        @error('nama')
                          <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>

                      <div class="mb-3">
                        <label for="profesi" class="form-label">Profesi</label>
                        <input type="text" id="profesi" class="form-control @error('profesi') is-invalid @enderror"
                          name="profesi" placeholder="Masukkan Profesi" value="{{ old('profesi', $get->pekerjaan) }}">
                        @error('profesi')
                          <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>

                      <div class="mb-3">
                        <label for="hp" class="form-label">No. HP</label>
                        <input type="text" id="hp" class="form-control @error('hp') is-invalid @enderror"
                          name="hp" placeholder="Masukkan no. hp" value="{{ old('hp', $get->no_hp) }}">
                        @error('hp')
                          <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>

                      <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email"
                          class="form-control @error('email') is-invalid @enderror" name="email"
                          placeholder="Masukkan Email" value="{{ old('email', $get->email) }}">
                        @error('email')
                          <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>

                      <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" id="alamat"
                          class="form-control @error('alamat') is-invalid @enderror" name="alamat"
                          placeholder="Masukkan alamat" value="{{ old('alamat', $get->alamat) }}">
                        @error('alamat')
                          <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>

                      <div class="mb-3">
                        <label for="lahir" class="form-label">Tanggal Lahir</label>
                        <input type="date" id="lahir"
                          class="form-control @error('lahir') is-invalid @enderror" name="lahir"
                          value="{{ old('lahir', $get->tgl_lahir->format('Y-m-d')) }}">
                        @error('lahir')
                          <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>

                      <div class="mb-3">
                        <label for="fb" class="form-label">Link Facebook</label>
                        <input type="text" id="fb" class="form-control @error('fb') is-invalid @enderror"
                          name="fb" placeholder="Masukkan Link Facebook"
                          value="{{ old('fb', $get->link_fb) }}">
                        @error('fb')
                          <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>

                      <div class="mb-3">
                        <label for="ig" class="form-label">Link IG</label>
                        <input type="text" id="ig" class="form-control @error('ig') is-invalid @enderror"
                          name="ig" placeholder="Masukkan Link IG" value="{{ old('ig', $get->link_ig) }}">
                        @error('ig')
                          <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>

                      <div class="mb-3">
                        <label for="yt" class="form-label">Link YT</label>
                        <input type="text" id="yt" class="form-control @error('yt') is-invalid @enderror"
                          name="yt" placeholder="Masukkan Link YT" value="{{ old('yt', $get->link_yt) }}">
                        @error('yt')
                          <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>

                      <div class="text-end">
                        <button class="btn btn-primary" type="submit">Update</button>
                      </div>
                    </form>

                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    function previewProfile(event) {
      const reader = new FileReader();
      reader.onload = function() {
        document.getElementById('profile-preview').src = reader.result;
      }
      reader.readAsDataURL(event.target.files[0]);
    }
  </script>
</x-AdminLayout>
