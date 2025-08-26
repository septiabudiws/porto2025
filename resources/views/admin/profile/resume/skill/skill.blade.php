<x-AdminLayout>
  <div class="row">
    <div class="col-12">
      <div class="card mt-4">
        <div class="card-header d-flex flex-column flex-sm-row justify-content-between align-items-sm-center gap-2">
          <h2 class="card-title mb-0">Skills</h2>
          <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#skilll"
            aria-controls="offcanvasExample">Tambah Skill</button>
        </div>
        <div class="card-body">
          <table class="table">
            <thead>
              <tr>
                <th>#</th>
                <th>Knowledges</th>
                <th>Level Skill</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>blablabla</td>
                <td>100%</td>
                <td>
                  <!-- Button Edit Kategori -->
                  <button type="button" class="btn btn-info btn-icon me-2" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasSkillEdit" aria-controls="offcanvasSkillEdit"><i
                      class="ti ti-pencil fs-18"></i></button>

                  <!-- Offcanvas Edit -->
                  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasSkillEdit"
                    aria-labelledby="offcanvasSkillEditLabel">
                    <div class="offcanvas-header">
                      <h4 class="offcanvas-title" id="offcanvasSkillEditLabel">Edit Skill</h4>
                      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                      <form action="" method="POST">
                        @csrf
                        <div class="mb-3">
                          <label for="skill" class="form-label">Skill</label>
                          <input type="text" id="skill" class="form-control" name="skill"
                            placeholder="Masukkan Nama Skill">
                        </div>
                        <div class="mb-3">
                          <label for="level" class="form-label">Level Skill</label>
                          <input type="number" id="level" class="form-control" name="level"
                            placeholder="Masukkan Level ex. 0 - 100">
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

  <div class="offcanvas offcanvas-end" tabindex="-1" id="skilll" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
      <h4 class="offcanvas-title" id="offcanvasExampleLabel">Tambah Skill</h4>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div> <!-- end offcanvas-header-->
    <div class="offcanvas-body">
      <form action="" method="POST">
        @csrf
        <div class="mb-3">
          <label for="skill" class="form-label">Skill</label>
          <input type="text" id="skill" class="form-control" name="skill" placeholder="Masukkan Nama Skill">
        </div>
        <div class="mb-3">
          <label for="level" class="form-label">Level Skill</label>
          <input type="number" id="level" class="form-control" name="level"
            placeholder="Masukkan Level ex. 0 - 100">
        </div>
        <div class="text-end">
          <button class="btn btn-primary" type="submit">Submit</button>
        </div>
      </form>
    </div> <!-- end offcanvas-body-->
  </div> <!-- end offcanvas-->
</x-AdminLayout>
