<x-AdminLayout>
  <div class="row">
    <div class="col-12">
      <div class="card mt-4">
        <div class="card-header d-flex flex-column flex-sm-row justify-content-between align-items-sm-center gap-2">
          <h2 class="card-title mb-0">Educations</h2>
          <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#edukasi"
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
              <tr>
                <td>1</td>
                <td>blablabla</td>
                <td>blablabla</td>
                <td>3</td>
                <td>
                  <!-- Button Edit Kategori -->
                  <button type="button" class="btn btn-info btn-icon me-2" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasEdukasiEdit" aria-controls="offcanvasEdukasiEdit"><i
                      class="ti ti-pencil fs-18"></i></button>

                  <!-- Offcanvas Edit -->
                  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasEdukasiEdit"
                    aria-labelledby="offcanvasEdukasiEditLabel">
                    <div class="offcanvas-header">
                      <h4 class="offcanvas-title" id="offcanvasEdukasiEditLabel">Edit Tempat Edukasi</h4>
                      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                      <form action="" method="POST">
                        @csrf
                        <div class="mb-3">
                          <label for="sekolah" class="form-label">Nama Sekolah</label>
                          <input type="text" id="sekolah" class="form-control" name="sekolah"
                            placeholder="Masukkan nama Sekolah">
                        </div>
                        <div class="mb-3">
                          <label for="jurusan" class="form-label">Jurusan</label>
                          <input type="text" id="jurusan" class="form-control" name="jurusan"
                            placeholder="Masukkan nama Jurusan">
                        </div>
                        <div class="mb-3">
                          <label for="tenggat" class="form-label">Tenggat Waktu</label>
                          <input type="text" id="tenggat" class="form-control" name="tenggat"
                            placeholder="Masukkan Tenggat Waktu ex. 2021 - 2024">
                        </div>
                        <div class="text-end">
                          <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                      </form>
                    </div>
                  </div>

                  <button type="button" class="btn btn-danger btn-icon"><i class="ti ti-trash fs-18"></i> </button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <div class="offcanvas offcanvas-end" tabindex="-1" id="edukasi" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
      <h4 class="offcanvas-title" id="offcanvasExampleLabel">Tambah Tempat Edukasi</h4>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div> <!-- end offcanvas-header-->
    <div class="offcanvas-body">
      <form action="" method="POST">
        @csrf
        <div class="mb-3">
          <label for="sekolah" class="form-label">Nama Sekolah</label>
          <input type="text" id="sekolah" class="form-control" name="sekolah" placeholder="Masukkan nama Sekolah">
        </div>
        <div class="mb-3">
          <label for="jurusan" class="form-label">Jurusan</label>
          <input type="text" id="jurusan" class="form-control" name="jurusan" placeholder="Masukkan nama Jurusan">
        </div>
        <div class="mb-3">
          <label for="tenggat" class="form-label">Tenggat Waktu</label>
          <input type="text" id="tenggat" class="form-control" name="tenggat"
            placeholder="Masukkan Tenggat Waktu ex. 2021 - 2024">
        </div>
        <div class="text-end">
          <button class="btn btn-primary" type="submit">Submit</button>
        </div>
      </form>
    </div> <!-- end offcanvas-body-->
  </div> <!-- end offcanvas-->
</x-AdminLayout>
