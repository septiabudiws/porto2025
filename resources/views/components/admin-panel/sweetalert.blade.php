<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
  //alert success
  @if (session('success'))
    Swal.fire({
      title: "Good job!",
      text: @json(session('success')),
      icon: "success"
    });
  @endif

  //alert error (validasi)
  @if ($errors->any())
    Swal.fire({
      title: "Oops...",
      html: `{!! implode('<br>', $errors->all()) !!}`, // tampilkan semua error
      icon: "error"
    });
  @endif

  //alert error (validasi) khusus foto
  @if ($errors->has('profile'))
    Swal.fire({
      title: "Oops...",
      text: @json($errors->first('profile')),
      icon: "error"
    });
  @endif

  function confirmDelete(url) {
    Swal.fire({
      title: "Yakin ingin menghapus?",
      text: "Data akan hilang permanen!",
      icon: "warning",
      showDenyButton: true,
      showCancelButton: true,
      confirmButtonText: "Hapus",
      denyButtonText: `Jangan hapus`,
      cancelButtonText: 'Batal'
    }).then((result) => {
      if (result.isConfirmed) {
        fetch(url, {
            method: 'DELETE',
            headers: {
              'X-CSRF-TOKEN': '{{ csrf_token() }}',
              'Accept': 'application/json'
            }
          })
          .then(res => res.json())
          .then(data => {
            Swal.fire("Terhapus!", data.message || "Data berhasil dihapus.", "success")
              .then(() => location.reload());
          })
          .catch(() => {
            Swal.fire("Error", "Gagal menghapus data.", "error");
          });
      } else if (result.isDenied) {
        Swal.fire("Dibatalkan", "Data tidak jadi dihapus.", "info");
      }
    });
  }
</script>
