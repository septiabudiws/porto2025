<x-AdminLayout>
  <div class="row">
    <div class="col-12">
      <div class="card mt-4">
        <div class="card-header d-flex flex-column flex-sm-row justify-content-between align-items-sm-center gap-2">
          <h2 class="card-title mb-0">Knowledges</h2>
          <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#knowledgee"
            aria-controls="offcanvasExample">Tambah Knowledge</button>
        </div>
        <div class="card-body">
          <table class="table">
            <thead>
              <tr>
                <th>#</th>
                <th>Knowledges</th>
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
                    data-bs-target="#offcanvasKnowledgeEdit" aria-controls="offcanvasKnowledgeEdit"><i
                      class="ti ti-pencil fs-18"></i></button>

                  <!-- Offcanvas Edit -->
                  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasKnowledgeEdit"
                    aria-labelledby="offcanvasKnowledgeEditLabel">
                    <div class="offcanvas-header">
                      <h4 class="offcanvas-title" id="offcanvasKnowledgeEditLabel">Edit Knowledge</h4>
                      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                      <form action="" method="POST">
                        @csrf
                        <div class="mb-3">
                          <label for="knowledge" class="form-label">Knowledge</label>
                          <input type="text" id="knowledge" class="form-control" name="knowledge"
                            placeholder="Masukkan Knowledge">
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

  <div class="offcanvas offcanvas-end" tabindex="-1" id="knowledgee" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
      <h4 class="offcanvas-title" id="offcanvasExampleLabel">Tambah Knowledge</h4>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div> <!-- end offcanvas-header-->
    <div class="offcanvas-body">
      <form action="" method="POST">
        @csrf
        <div class="mb-3">
          <label for="knowledge" class="form-label">Knowledge</label>
          <input type="text" id="knowledge" class="form-control" name="knowledge" placeholder="Masukkan Knowledge">
        </div>
        <div class="text-end">
          <button class="btn btn-primary" type="submit">Submit</button>
        </div>
      </form>
    </div> <!-- end offcanvas-body-->
  </div> <!-- end offcanvas-->
</x-AdminLayout>
