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
</script>
