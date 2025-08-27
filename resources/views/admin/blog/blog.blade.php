<x-AdminLayout>
  <div class="row">
    <div class="col-12">
      <div class="card mt-4">
        <div class="card-header d-flex flex-column flex-sm-row justify-content-between align-items-sm-center gap-2">
          <h2 class="card-title mb-0">Blog</h2>
          <a href="/blog-create" class="btn btn-primary">Tambah Blog</a>
        </div>
        <div class="card-body">
          <table id="myTable" class="table">
            <thead>
              <tr>
                <th>#</th>
                <th>Status</th>
                <th>Kategori</th>
                <th>Judul Blog</th>
                <th>Tanggal</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>blablabla</td>
                <td>3</td>
                <td>Lorem, ipsum.</td>
                <td>Lorem ipsum dolor sit.</td>
                <td>
                  <!-- Button Edit Kategori -->
                  <button class="btn btn-info btn-icon me-2"><i class="ti ti-pencil fs-18"></i></button>
                  <button type="button" class="btn btn-danger btn-icon"><i class="ti ti-trash fs-18"></i> </button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</x-AdminLayout>
