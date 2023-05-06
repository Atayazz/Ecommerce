<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->

<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="admin/assets/"
  data-template="vertical-menu-template-free"
><head>
    @include('admin.head')
</head>

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
           
           <div class="container-fluid page-body-wrapper">
           
           <div class="container" align="center">

                <h1 style="color:blue; padding-top: 25px; font-size: 25px;">Add Products</h1>

                </div>
          <!-- Content wrapper -->
          <div class="container-fluid">
                <div class="container" align="center">
                    <h1 class="title">Ürün Ekle</h1>
                    @if(session()->has('message'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                        {{session()->get('message')}}
                    </div>
                    @endif
                    <form action="{{url('addproduct')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div style="padding:1%">
                            <label>Ürün Başlığı</label>
                            <input class="form-control" type="text" name="title" placeholder="Ürün başlığı girin:" required="">
                        </div>
                        <div style="padding:1%">
                            <label>Fiyat</label>
                            <input class="form-control" type="number" name="price" placeholder="Ürün fiyatı girin:" required="">
                        </div>
                        <div style="padding:1%">
                            <label>Açıklama</label>
                            <input class="form-control" type="text" name="desc" placeholder="Ürün açıklaması girin:" required="">
                        </div>
                        <div style="padding:1%">
                            <label>Adet</label>
                            <input class="form-control" type="number" name="quantity" placeholder="Ürün adedi girin:" required="">
                        </div>
                        <div style="padding:1%">
                            <label>Ürün Fotoğrafı</label>
                            <input class="form-control" type="file" id="img" name="file" required="">
                            <img height="80" width="80" id="preview" class="center">
                        </div>
                        <div style="padding:1%">
                            <input class="btn btn-success" type="submit" name="submit">
                        </div>
                    </form>
                </div>
            </div>
            <!-- / Content -->

            <!-- Footer -->
@include('admin.footer')
<script>
                img.onchange = evt => {
                    const [file] = img.files
                    if (file) {
                        preview.src = URL.createObjectURL(file)
                    }
                }
            </script>
  </body>
</html>