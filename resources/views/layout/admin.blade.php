<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>{{ $title ?? ($slotTitle ?? 'Portofolio') }}</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
  <meta content="Coderthemes" name="author" />

  <x-admin-panel.style></x-admin-panel.style>
</head>

<body>
  <!-- Begin page -->
  <div class="wrapper">


    <!-- Sidenav Menu Start -->
    <div class="sidenav-menu">
      <x-admin-panel.sidebar></x-admin-panel.sidebar>
    </div>
    <!-- Sidenav Menu End -->


    <!-- Topbar Start -->
    <header class="app-topbar">
      <div class="page-container topbar-menu">
        <x-admin-panel.header></x-admin-panel.header>
      </div>
    </header>
    <!-- Topbar End -->

    <!-- Search Modal -->
    <x-admin-panel.searching></x-admin-panel.searching>

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->
    <div class="page-content">
      <div class="page-container">
        {{ $slot }}
      </div> <!-- container -->

      <!-- Footer Start -->
      <footer class="footer">
        <x-admin-panel.footer></x-admin-panel.footer>
      </footer>
      <!-- end Footer -->

    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->

  </div>
  <!-- END wrapper -->

  <!-- Theme Settings -->
  <x-admin-panel.theme></x-admin-panel.theme>

  <x-admin-panel.script></x-admin-panel.script>

  <x-admin-panel.sweetalert></x-admin-panel.sweetalert>

</body>

</html>
