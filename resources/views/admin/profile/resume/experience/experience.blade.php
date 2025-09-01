<x-AdminLayout>
  <div class="row">
    <div class="col-12">
      <div class="card mt-4">
        <div class="card-header d-flex flex-column flex-sm-row justify-content-between align-items-sm-center gap-2">
          <h2 class="card-title mb-0">Experiences</h2>
          <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#experiencee"
            aria-controls="offcanvasExample">Tambah Experience</button>
        </div>
        <div class="card-body">
          <table class="table">
            <thead>
              <tr>
                <th>#</th>
                <th>Tenggat Waktu</th>
                <th>Experience</th>
                <th>Jabatan</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($experience as $get)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $get->tenggat_waktu }}</td>
                  <td>{{ $get->nama_pengalaman }}</td>
                  <td>{{ $get->jabatan }}</td>
                  <td>
                    <!-- Button Edit Kategori -->
                    <button type="button" class="btn btn-info btn-icon me-2" data-bs-toggle="offcanvas"
                      data-bs-target="#offcanvasExperienceEdit{{ $get->id }}" aria-controls="offcanvasExperienceEdit"><i
                        class="ti ti-pencil fs-18"></i></button>

                    <!-- Offcanvas Edit -->
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExperienceEdit{{ $get->id }}"
                      aria-labelledby="offcanvasExperienceEditLabel">
                      <div class="offcanvas-header">
                        <h4 class="offcanvas-title" id="offcanvasExperienceEditLabel">Edit Experience</h4>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                          aria-label="Close"></button>
                      </div>
                      <div class="offcanvas-body">
                        <form action="{{ route('experience.update', $get->id) }}" method="POST">
                          @csrf
                          @method('PUT')
                          <div class="mb-3">
                            <label for="experience" class="form-label">Experience</label>
                            <input type="text" id="experience"
                              class="form-control @error('jabatan') is-invalid @enderror" name="experience"
                              placeholder="Masukkan Experience" value="{{ $get->nama_pengalaman }}">
                            @error('experience')
                              <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                          </div>
                          <div class="mb-3">
                            <label for="jabatan" class="form-label">Jabatan</label>
                            <input type="text" id="jabatan"
                              class="form-control @error('jabatan') is-invalid @enderror" name="jabatan"
                              placeholder="Masukkan Jabatan" value="{{ $get->jabatan }}">
                            @error('jabatan')
                              <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                          </div>
                          <div class="mb-3">
                            <label for="tenggat" class="form-label">Tenggat Waktu</label>
                            <input type="text" id="tenggat"
                              class="form-control @error('experience') is-invalid @enderror" name="tenggat"
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

                    <button onclick="confirmDelete('{{ route('experience.destroy', $get->id) }}')" class="btn btn-danger btn-icon"><i class="ti ti-trash fs-18"></i> </button>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <div class="offcanvas offcanvas-end" tabindex="-1" id="experiencee" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
      <h4 class="offcanvas-title" id="offcanvasExampleLabel">Tambah Experience</h4>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div> <!-- end offcanvas-header-->
    <div class="offcanvas-body">
      <form action="{{ route('experience.store') }}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="experience" class="form-label">Experience</label>
          <input type="text" id="experience" class="form-control @error('experience') is-invalid @enderror"
            name="experience" placeholder="Masukkan Experience">
          @error('experience')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="jabatan" class="form-label">Jabatan</label>
          <input type="text" id="jabatan" class="form-control @error('jabatan') is-invalid @enderror"
            name="jabatan" placeholder="Masukkan Jabatan">
          @error('jabatan')
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
