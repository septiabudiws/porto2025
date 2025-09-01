<x-AdminLayout>
  <div class="row">
    <div class="col-12">
      <div class="card mt-4">
        <div class="card-header d-flex flex-column flex-sm-row justify-content-between align-items-sm-center gap-2">
          <h2 class="card-title mb-0">Educations</h2>
          <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#edukasiTambah"
            aria-controls="offcanvasExample">Tambah Tempat Edukasi</button>
        </div>
        <div class="card-body">
          <table class="table">
            <thead>
              <tr>
                <th>#</th>
                <th>Tenggat Waktu</th>
                <th>Nama Sekolah</th>
                <th>Jurusan</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($edukasi as $get)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $get->nama_pendidikan }}</td>
                  <td>{{ $get->jurusan }}</td>
                  <td>{{ $get->tenggat_waktu }}</td>
                  <td>
                    <!-- Button Edit Kategori -->
                    <button type="button" class="btn btn-info btn-icon me-2" data-bs-toggle="offcanvas"
                      data-bs-target="#offcanvasEdukasiEdit{{ $get->id }}" aria-controls="offcanvasEdukasiEdit"><i
                        class="ti ti-pencil fs-18"></i></button>

                    <!-- Offcanvas Edit -->
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasEdukasiEdit{{ $get->id }}"
                      aria-labelledby="offcanvasEdukasiEditLabel">
                      <div class="offcanvas-header">
                        <h4 class="offcanvas-title" id="offcanvasEdukasiEditLabel">Edit Tempat Edukasi</h4>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                          aria-label="Close"></button>
                      </div>
                      <div class="offcanvas-body">
                        <form action="{{ route('education.update', $get->id) }}" method="POST">
                          @csrf
                          @method('PUT')
                          <div class="mb-3">
                            <label for="sekolah" class="form-label">Nama Sekolah</label>
                            <input type="text" id="sekolah" class="form-control" name="sekolah"
                              placeholder="Masukkan nama Sekolah" value="{{ $get->nama_pendidikan }}">
                            @error('sekolah')
                              <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                          </div>
                          <div class="mb-3">
                            <label for="jurusan" class="form-label">Jurusan</label>
                            <input type="text" id="jurusan" class="form-control" name="jurusan"
                              placeholder="Masukkan nama Jurusan" value="{{ $get->jurusan }}">
                            @error('jurusan')
                              <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                          </div>
                          <div class="mb-3">
                            <label for="tenggat" class="form-label">Tenggat Waktu</label>
                            <input type="text" id="tenggat" class="form-control" name="tenggat"
                              placeholder="Masukkan Tenggat Waktu ex. 2021 - 2024" value="{{ $get->tenggat_waktu }}">
                            @error('tenggat')
                              <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                          </div>
                          <div class="text-end">
                            <button class="btn btn-primary" type="submit">Submit</button>
                          </div>
                        </form>
                      </div>
                    </div>

                    <button onclick="confirmDelete('{{ route('education.destroy', $get->id) }}')" class="btn btn-danger btn-icon"><i class="ti ti-trash fs-18"></i> </button>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <div class="offcanvas offcanvas-end" tabindex="-1" id="edukasiTambah" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
      <h4 class="offcanvas-title" id="offcanvasExampleLabel">Tambah Tempat Edukasi</h4>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div> <!-- end offcanvas-header-->
    <div class="offcanvas-body">
      <form action="{{ route('education.store') }}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="sekolah" class="form-label">Nama Sekolah</label>
          <input type="text" id="sekolah" class="form-control @error('sekolah') is-invalid @enderror"
            name="sekolah" placeholder="Masukkan nama Sekolah">
          @error('sekolah')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="jurusan" class="form-label">Jurusan</label>
          <input type="text" id="jurusan" class="form-control @error('jurusan') is-invalid @enderror"
            name="jurusan" placeholder="Masukkan nama Jurusan">
          @error('jurusan')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="tenggat" class="form-label">Tenggat Waktu</label>
          <input type="text" id="tenggat" class="form-control @error('tenggat') is-invalid @enderror"
            name="tenggat" placeholder="Masukkan Tenggat Waktu ex. 2021 - 2024">
          @error('tenggat')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="text-end">
          <button class="btn btn-primary" type="submit">Submit</button>
        </div>
      </form>
    </div> <!-- end offcanvas-body-->
  </div> <!-- end offcanvas-->
</x-AdminLayout>
