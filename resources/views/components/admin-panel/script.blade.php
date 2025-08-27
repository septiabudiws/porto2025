  <!-- Vendor js -->
  <script src="{{ asset('boron') }}/assets/js/vendor.min.js"></script>

  <!-- App js -->
  <script src="{{ asset('boron') }}/assets/js/app.js"></script>

  <!-- Apex Chart js -->
  <script src="{{ asset('boron') }}/assets/vendor/apexcharts/apexcharts.min.js"></script>

  <!-- Projects Analytics Dashboard App js -->
  <script src="{{ asset('boron') }}/assets/js/pages/dashboard-sales.js"></script>

  <!-- Dropzone File Upload js -->
  <script src="{{ asset('boron') }}/assets/vendor/dropzone/dropzone-min.js"></script>

  <!-- File Upload Demo js -->
  <script src="{{ asset('boron') }}/assets/js/pages/form-fileupload.js"></script>

  <script src="https://cdn.datatables.net/2.3.3/js/dataTables.js"></script>

  <script>
    $(document).ready(function() {
      $('#myTable').DataTable();
    });
  </script>

  <script>
  function previewImage(event) {
    const reader = new FileReader();
    reader.onload = function () {
      const output = document.getElementById('preview');
      output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
  }
</script>

