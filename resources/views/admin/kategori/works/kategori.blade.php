<x-AdminLayout>
  <div class="row">
    <div class="col-12">
      <div class="card mt-4">
        <div class="card-header d-flex flex-column flex-sm-row justify-content-between align-items-sm-center gap-2">
          <h4 class="card-title mb-0">Kategori Works</h4>
          <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas"
            data-bs-target="#offvancasKategoriTambah" aria-controls="offcanvasExample">Tambah Kategori</button>
        </div>
        <div class="card-body">
          <table id="myTable" class="table">
            <thead>
              <tr>
                <th>#</th>
                <th>Kategori</th>
                <th>Total</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($kategori as $get)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $get->nama }}</td>
                  <td>{{ $get->projeks_count }}</td>
                  <td>
                    <!-- Button Edit Kategori -->
                    <button type="button" class="btn btn-info btn-icon me-2" data-bs-toggle="offcanvas"
                      data-bs-target="#offcanvasKategoriEdit{{ $get->id }}"
                      aria-controls="offcanvasKategoriEdit"><i class="ti ti-pencil fs-18"></i></button>

                    <!-- Offcanvas Edit -->
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasKategoriEdit{{ $get->id }}"
                      aria-labelledby="offcanvasKategoriEditLabel">
                      <div class="offcanvas-header">
                        <h4 class="offcanvas-title" id="offcanvasKategoriEditLabel">Edit Kategori</h4>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                          aria-label="Close"></button>
                      </div>
                      <div class="offcanvas-body">
                        <form action="{{ route('kategori.works.update', $get->id) }}" method="POST">
                          @csrf
                          @method('PUT')
                          <div class="mb-3">
                            <label for="kategori_edit" class="form-label">Nama Kategori</label>
                            <input type="text" id="kategori_edit"
                              class="form-control @error('kategori') is-invalid @enderror" name="kategori" value="{{ $get->nama }}"
                              placeholder="Masukkan nama kategori">
                            @error('kategori')
                              <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                          </div>
                          <div class="text-end">
                            <button class="btn btn-primary" type="submit">Update</button>
                          </div>
                        </form>
                      </div>
                    </div>

                    <button onclick="confirmDelete('{{ route('kategori.works.destroy', $get->id) }}')" class="btn btn-danger btn-icon"><i class="ti ti-trash fs-18"></i> </button>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <div class="offcanvas offcanvas-end" tabindex="-1" id="offvancasKategoriTambah"
    aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
      <h4 class="offcanvas-title" id="offcanvasExampleLabel">Tambah Kategori</h4>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div> <!-- end offcanvas-header-->
    <div class="offcanvas-body">
      <form action="{{ route('kategori.works.store') }}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="kategori" class="form-label">Nama Kategori</label>
          <input type="text" id="kategori" class="form-control @error('kategori') is-invalid @enderror"
            name="kategori" placeholder="Masukkan nama kategori">
          @error('kategori')
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
