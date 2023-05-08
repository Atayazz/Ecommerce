<!doctype html>
<html lang="tr">

<head>
  @include('user.css')
</head>

<body>

  <div class="container-fluid">
    <div class="row">
      <button class="navbar-toggler d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="col-md-8 ms-sm-auto col-lg-9 p-0">
        @include('user.sidebar')


        <div class="container px-3 my-5 clearfix">
          <!-- Shopping cart table -->
          <div class="card">
            <div class="card-header">
              <h2>Shopping Cart</h2>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered m-0">
                  <thead>
                    <tr>
                      <!-- Set columns width -->
                      <th class="text-center py-3 px-4" style="min-width: 400px;">Product Name &amp; Details</th>
                      <th class="text-right py-3 px-4" style="width: 100px;">Price</th>
                      <th class="text-center py-3 px-4" style="width: 120px;">Quantity</th>
                    </tr>
                  </thead>
                  <form action="{{url('confirmorder')}}" method="get">
                    @csrf
                    <tbody>
                      @foreach($cart as $item)
                      <tr>
                        <td class="p-4">
                          <div class="media align-items-center">
                            <img src="/public/productimage/{{$item->image}}" class="d-block ui-w-40 ui-bordered mr-4" alt="">
                            <div class="media-body">
                              <a href="#" class="d-block text-dark">{{$item->title}}<input type="text" name="productname[]" value="{{$item->title}}" hidden></a>
                            </div>
                          </div>
                        </td>
                        <td class="text-right font-weight-semibold align-middle p-4">{{$item->price}}<input type="text" name="price[]" value="{{$item->price}}" hidden></td>
                        <td class="align-middle p-4">{{$item->quantity}}<input type="text" name="quantity[]" value="{{$item->quantity}}" hidden></td>
                      </tr>
                      @endforeach
                    </tbody>
                    <tr>
                      <td class="p-4">
                        Total
                      </td>
                      <td class="text-right font-weight-semibold align-middle p-4">{{$total}}</td>
                    </tr>

                </table>
              </div>

              <div class="float-right">
                <button style="color:blue !important;" type="submit" class="btn btn-primary mt-2">Checkout</button>
              </div>
              </form>
            </div>
          </div>
        </div>

        @include('user.footer')

      </div>
      @include('user.js')
</body>

</html>