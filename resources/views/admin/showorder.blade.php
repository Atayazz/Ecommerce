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
          <!-- / Content -->


          <div class="container-fluid page-body-wrapper">
           
           <table>
                        <tr>
                            <td style="padding: 20px;">Customer Name</td>
                            <td style="padding: 20px;">Phone</td>
                            <td style="padding: 20px;">Address</td>
                            <td style="padding: 20px;">Product Title</td>
                            <td style="padding: 20px;">Price</td>
                            <td style="padding: 20px;">Quantity</td>
                            <td style="padding: 20px;">Status</td>
                        </tr>
                        @foreach($order as $data)
                        <tr align="center">
                            <td style="padding: 20px;">{{$data->name}}</td>
                            <td style="padding: 20px;">{{$data->phone}}</td>
                            <td style="padding: 20px;">{{$data->address}}</td>
                            <td style="padding: 20px;">{{$data->title}}</td>
                            <td style="padding: 20px;">{{$data->price}}</td>
                            <td style="padding: 20px;">{{$data->quantity}}</td>
                            <td style="padding: 20px;">{{$data->status}}</td>
                            <td style="padding: 20px;"><a class="btn btn-success" href="{{url('updatestatus',$data->id)}}">Confirm Order</a></td>
                            <td style="padding: 20px;"><a class="btn btn-danger" href="{{url('cancelstatus',$data->id)}}">Cancel Order</a></td>
                        </tr>
                        @endforeach
                    </table>

           </div>
        </div>
        

          <!-- Footer -->
          @include('admin.footer')
</body>

</html>