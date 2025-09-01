<x-AdminLayout>
  <div class="row">
    <div class="col-5">
      @foreach ($about as $get)
        <div class="card mt-4">
          <div class="card-header d-flex flex-column flex-sm-row justify-content-between align-items-sm-center gap-2">
            <h2 class="card-title mb-0">About</h2>
            <a class="btn btn-primary" href="{{ route('about.edit', $get->id) }}">Edit Deskripsi</a>
          </div>
          <div class="card-body">
            <p>{!! $get->deskripsi !!}</p>
          </div>
        </div>
      @endforeach
    </div>
    <div class="col-7">
      <div class="card mt-4">
        <div class="card-header d-flex flex-column flex-sm-row justify-content-between align-items-sm-center gap-2">
          <h2 class="card-title mb-0">Ability</h2>
          <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#abilityOffCanvas"
            aria-controls="offcanvasExample">Tambah Ability</button>
        </div>
        <div class="card-body">
          <table class="table">
            <thead>
              <tr>
                <th>#</th>
                <th>Ability</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($ability as $get)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $get->nama }}</td>
                  <td>
                    <!-- Button Edit Kategori -->
                    <button type="button" class="btn btn-info btn-icon me-2" data-bs-toggle="offcanvas"
                      data-bs-target="#offcanvasAbilityEdit{{ $get->id }}" aria-controls="offcanvasAbilityEdit"><i
                        class="ti ti-pencil fs-18"></i></button>

                    <!-- Offcanvas Edit -->
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasAbilityEdit{{ $get->id }}"
                      aria-labelledby="offcanvasAbilityEditLabel">
                      <div class="offcanvas-header">
                        <h4 class="offcanvas-title" id="offcanvasAbilityEditLabel">Edit Ability</h4>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                          aria-label="Close"></button>
                      </div>
                      <div class="offcanvas-body">
                        <form action="{{ route('ability.update', $get->id) }}" method="POST">
                          @csrf
                          @method('PUT')
                          <div class="mb-3">
                            <label for="ability" class="form-label">Nama Ability</label>
                            <input type="text" id="ability"
                              class="form-control @error('ability') is-invalid @enderror" name="ability"
                              placeholder="Masukkan nama ability" value="{{ $get->nama }}">
                            @error('ability')
                              <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                          </div>
                          <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskirpsi Ability</label>
                            <textarea name="deskripsi" id="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror">{{ $get->deskripsi }}</textarea>
                            @error('deskripsi')
                              <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                          </div>
                          <div class="text-end">
                            <button class="btn btn-primary" type="submit">Update</button>
                          </div>
                        </form>
                      </div>
                    </div>

                    <button onclick="confirmDelete('{{ route('ability.destroy', $get->id) }}')" class="btn btn-danger btn-icon"><i class="ti ti-trash fs-18"></i> </button>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <div class="offcanvas offcanvas-end" tabindex="-1" id="abilityOffCanvas" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
      <h4 class="offcanvas-title" id="offcanvasExampleLabel">Tambah Ability</h4>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div> <!-- end offcanvas-header-->
    <div class="offcanvas-body">
      <form action="{{ route('ability.store') }}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="ability" class="form-label">Nama Ability</label>
          <input type="text" id="ability" class="form-control @error('ability') is-invalid @enderror"
            name="ability" placeholder="Masukkan nama ability">
          @error('ability')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="deskripsi" class="form-label">Deskirpsi Ability</label>
          <textarea name="deskripsi" id="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror"></textarea>
          @error('deskripsi')
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
