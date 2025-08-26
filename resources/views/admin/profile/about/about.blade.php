<x-AdminLayout>
  <div class="row">
    <div class="col-5">
      <div class="card mt-4">
        <div class="card-header d-flex flex-column flex-sm-row justify-content-between align-items-sm-center gap-2">
          <h2 class="card-title mb-0">About</h2>
          <a class="btn btn-primary" href="/deskripsi-edit">Edit Deskripsi</a>
        </div>
        <div class="card-body">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto corporis harum non aspernatur recusandae eum ipsam ratione quidem iusto provident, adipisci laudantium excepturi repellat veniam numquam atque blanditiis voluptatem asperiores quis quia totam quam distinctio. Error ducimus nobis deleniti deserunt!</p>
        </div>
      </div>
    </div>
    <div class="col-7">
      <div class="card mt-4">
        <div class="card-header d-flex flex-column flex-sm-row justify-content-between align-items-sm-center gap-2">
          <h2 class="card-title mb-0">Ability</h2>
          <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#ability"
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
              <tr>
                <td>1</td>
                <td>blablabla</td>
                <td>
                  <!-- Button Edit Kategori -->
                  <button type="button" class="btn btn-info btn-icon me-2" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasAbilityEdit" aria-controls="offcanvasAbilityEdit"><i
                      class="ti ti-pencil fs-18"></i></button>

                  <!-- Offcanvas Edit -->
                  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasAbilityEdit"
                    aria-labelledby="offcanvasAbilityEditLabel">
                    <div class="offcanvas-header">
                      <h4 class="offcanvas-title" id="offcanvasAbilityEditLabel">Edit Ability</h4>
                      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                      <form action="" method="POST">
                        @csrf
                        <div class="mb-3">
                          <label for="ability_edit" class="form-label">Nama Ability</label>
                          <input type="text" id="ability_edit" class="form-control" name="ability"
                            placeholder="Masukkan nama ability">
                        </div>
                        <div class="text-end">
                          <button class="btn btn-primary" type="submit">Update</button>
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

  <div class="offcanvas offcanvas-end" tabindex="-1" id="ability" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
      <h4 class="offcanvas-title" id="offcanvasExampleLabel">Tambah Ability</h4>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div> <!-- end offcanvas-header-->
    <div class="offcanvas-body">
      <form action="" method="POST">
        @csrf
        <div class="mb-3">
          <label for="ability" class="form-label">Nama Ability</label>
          <input type="text" id="ability" class="form-control" name="ability"
            placeholder="Masukkan nama ability">
        </div>
        <div class="text-end">
          <button class="btn btn-primary" type="submit">Submit</button>
        </div>
      </form>
    </div> <!-- end offcanvas-body-->
  </div> <!-- end offcanvas-->
</x-AdminLayout>
