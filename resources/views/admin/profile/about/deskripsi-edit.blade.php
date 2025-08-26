<x-AdminLayout>
  <div class="row">
    <div class="col-12">
      <div class="card mt-4">
        <div class="card-header d-flex flex-column flex-sm-row justify-content-between align-items-sm-center gap-2">
          <h2 class="card-title mb-0">About</h2>
            <a class="btn btn-info" href="/about">Kembali</a>
        </div>
        <div class="card-body">
          <form action="" method="POST">
            @csrf

            <div class="mb-3">
              <label for="about" class="form-label fw-bold">Deskripsi Tentang Saya</label>
              <textarea name="about" id="about" class="form-control" rows="6">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto corporis harum non aspernatur recusandae eum ipsam ratione quidem iusto provident, adipisci laudantium excepturi repellat veniam numquam atque blanditiis voluptatem asperiores quis quia totam quam distinctio. Error ducimus nobis deleniti deserunt!
              </textarea>
            </div>

            <div class="text-end">
              <button type="submit" class="btn btn-success">Simpan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  {{-- CKEditor --}}
  <script src="https://cdn.ckeditor.com/ckeditor5/39.0.2/classic/ckeditor.js"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      ClassicEditor
        .create(document.querySelector('#about'))
        .catch(error => {
          console.error(error);
        });
    });
  </script>
</x-AdminLayout>

