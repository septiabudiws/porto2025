<x-AdminLayout>
  <div class="row">
    <div class="col-12">
      <div class="card mt-4">
        <div class="card-header d-flex flex-column flex-sm-row justify-content-between align-items-sm-center gap-2">
          <h2 class="card-title mb-0">Tambah Blog</h2>
        </div>
        <div class="card-body">
          <form action="" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Upload + Preview Side by Side -->
            <div class="mb-3">
              <label for="gambar" class="form-label">Upload Gambar</label>
              <div class="d-flex align-items-center gap-4">
                <input type="file" class="form-control w-50" id="gambar" name="gambar" accept="image/*"
                  onchange="previewImage(event)">
                <img id="preview" src="{{ asset('images/no-image.png') }}"
                  alt="Preview"
                  class="rounded shadow-sm border"
                  style="max-height: 150px; max-width: 200px; object-fit: cover;">
              </div>
            </div>

            <div class="mb-3">
              <label for="judul" class="form-label">Judul</label>
              <input type="text" class="form-control" id="judul" name="judul" required>
            </div>

            <div class="mb-3">
              <label for="example-select" class="form-label">Pilih Kategori</label>
              <select class="form-select" id="example-select" name="kategori">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </div>

            <div class="mb-3">
              <label for="konten" class="form-label">Konten</label>
              <textarea class="form-control" id="konten" name="konten" rows="4"></textarea>
            </div>

            <button type="submit" class="btn btn-primary float-end">Simpan</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script>
    function previewImage(event) {
      const reader = new FileReader();
      reader.onload = function() {
        const output = document.getElementById('preview');
        output.src = reader.result;
      };
      reader.readAsDataURL(event.target.files[0]);
    }
  </script>

  {{-- CKEditor --}}
  <script src="https://cdn.ckeditor.com/ckeditor5/39.0.2/classic/ckeditor.js"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      ClassicEditor
        .create(document.querySelector('#konten'))
        .catch(error => {
          console.error(error);
        });
    });
  </script>
</x-AdminLayout>
