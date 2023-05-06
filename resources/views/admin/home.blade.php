<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="admin/assets/" data-template="vertical-menu-template-free">
@include('admin.head')

<body>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">

      <!-- / Menu -->
      @include('admin.sidebar')
      <!-- Layout container -->
      <div class="layout-page">
        <!-- Navbar -->
        @include('admin.navbar')
        <!-- / Navbar -->

        <!-- Content wrapper -->
        <div class="content-wrapper">
          <!-- Content -->
          @include('admin.body')
          <!-- / Content -->

          <!-- Footer -->
          @include('admin.footer')
</body>

</html>