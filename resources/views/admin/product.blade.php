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
>
<head>
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

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
           
           <div class="container-fluid page-body-wrapper">
           
           <div class="container" align="center">

                <h1 style="color:blue; padding-top: 25px; font-size: 25px;">Products</h1>

                </div>
          <!-- Content wrapper -->
          <div class="container-fluid">
                <div class="container" align="center">
                    <h1 class="title">Ürün Bilgileri</h1>
                    @if(session()->has('message'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                        {{session()->get('message')}}
                    </div>
                    @endif
                    <table>
                        <tr>
                            <td style="padding: 60px;">Title</td>
                            <td style="padding: 60px;">Description</td>
                            <td style="padding: 60px;">Quantity</td>
                            <td style="padding: 60px;">Price</td>
                            <td style="padding: 60px;">Image</td>
                            <td style="padding: 60px;">Update</td>
                            <td style="padding: 60px;">Delete</td>
                        </tr>
                        @foreach($data as $product)
                        <tr align="center">
                            <td style="padding: 60px;">{{$product->title}}</td>
                            <td style="padding: 60px;">{{$product->description}}</td>
                            <td style="padding: 60px;">{{$product->quantity}}</td>
                            <td style="padding: 60px;">{{$product->price}}</td>
                            <td style="padding: 60px;"><img height="100" width="100" src="/productimage/{{$product->image}}"></td>
                            <td style="padding: 60px;"><a class="btn btn-success" href="{{url('updateview',$product->id)}}">Update</a></td>
                            <td style="padding: 60px;"><a class="btn btn-danger" onclick="return confirm('Are you sure delete this product?')" href="{{url('deleteproduct',$product->id)}}">Delete</a></td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
            <!-- / Content -->

            <!-- Footer -->
@include('admin.footer')
  </body>
</html>