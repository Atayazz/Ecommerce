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
                @if(session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    {{session()->get('message')}}
                </div>
                @endif
                <table align="center">
                    <tr>
                        <td>Title</td>
                        <td>Quantity</td>
                        <td>Price</td>
                        <td>Action</td>
                    </tr>
                    <form action="{{url('order')}}" method:"POST">
                        @foreach($cart as $data)
                        <tr>
                            <td> <input type="text" name="title[]" value="{{$data->title}}" hidden />{{$data->title}}</td>
                            <td><input type="text" name="quantity[]" value="{{$data->quantity}}" hidden />{{$data->quantity}}</td>
                            <td><input type="text" name="price[]" value="{{$data->price}}" hidden />{{$data->price}}</td>
                            <td><a class="btn btn-danger" href="{{url('delete',$data->id)}}">Delete</a></td>
                        </tr>
                        @endforeach
                </table>

                <button class="btn btn-success">Confirm Order</button>
                </form>
            </div>
            @include('user.footer')

        </div>
        @include('user.js')
</body>
</html>