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
@include('user.sidebar')
<table align="center">
    <tr>
        <td>Title</td>
        <td>Quantity</td>
        <td>Price</td>
        <td>Action</td>
    </tr>
    @foreach($cart as $data)
<tr>
    <td>{{$data->title}}</td>
    <td>{{$data->quantity}}</td>
    <td>{{$data->price}}</td>
    <td><a class="btn btn-danger" href="{{url('delete',$data->id)}}">Delete</a></td>
</tr>
@endforeach
</table>

<button class= "btn btn-success">Confirm Order</button>

@include('user.footer')
                
            </div>
@include('user.js')

</body>

</html>