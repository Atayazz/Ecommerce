<!doctype html>
<html lang="tr">

<head>
  @include('user.css')
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
    }

    h1 {
      text-align: center;
    }

    .order-list {
      list-style: none;
      padding: 0;
    }

    .order-item {
      border: 1px solid #ccc;
      margin-bottom: 10px;
      padding: 10px;
    }

    .order-item-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 10px;
    }

    .order-item-header h2 {
      margin: 0;
    }

    .order-item-status {
      font-weight: bold;
    }

    .order-item-details {
      margin-bottom: 10px;
    }

    .order-item-total {
      text-align: right;
      font-weight: bold;
    }

    .order-item-buttons {
      display: flex;
      justify-content: flex-end;
    }

    .order-item-buttons button {
      margin-left: 10px;
    }
  </style>
</head>

<body>

  <div class="container-fluid">
    <div class="row">

      <button class="navbar-toggler d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      @include('user.sidebar')
      <h1>Siparişlerim</h1>
      <div class="col-md-8 ms-sm-auto col-lg-9 p-0">

        <ul class="order-list">
          @foreach($orders as $order)
          @if($order->status == "Order Confirmed")
          <li class="order-item">
            <div class="order-item-header">
              <h2>Order {{$order->id}}</h2>
              <h2>{{$order->title}}</h2>
              <span class="order-item-status">{{$order->status}}</span>
            </div>
            <div class="order-item-details">
              <p>{{$order->created_at}}</p>
              <p>{{$order->quantity}} Adet</p>
              <p>{{$order->price}} $</p>
            </div>
            <div class="order-item-total">
              <h2>Total </h2>
              {{$order->price}} $
            </div>
            <div class="order-item-buttons">
              <a href="{{url('cancelorder', $order->id)}}">Cancel Order</a>
            </div>
          </li>
          @elseif($order->status == "Delivered")
          <li class="order-item">
            <div class="order-item-header">
              <h2>Order {{$order->id}}</h2>
              <h2>{{$order->title}}</h2>
              <span class="order-item-status">{{$order->status}}</span>
            </div>
            <div class="order-item-details">
              <p>{{$order->created_at}}</p>
              <p>Quantity: {{$order->quantity}}</p>
              <p>{{$order->price}} $</p>
            </div>
            <div class="order-item-total">
              <h2>Total </h2>
              {{$order->price}} $
            </div>
          </li>
          @elseif($order->status == "Order Cancelled")
          <li class="order-item">
            <div class="order-item-header">
              <h2>Order {{$order->id}}</h2>
              <h2>{{$order->title}}</h2>
              <span class="order-item-status">{{$order->status}}</span>
            </div>
            <div class="order-item-details">
              <p>{{$order->created_at}}</p>
              <p>Quantity: {{$order->quantity}} </p>
              <p>{{$order->price}} $</p>
            </div>
            <div class="order-item-total">
              <h2>Total </h2>
              {{$order->price}} $
            </div>
          </li>
          @endif
          @endforeach
        </ul>
      </div>
    </div>
    @include('user.footer')

  </div>
  @include('user.js')

</body>

</html>