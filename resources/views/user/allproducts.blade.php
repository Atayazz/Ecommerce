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
            <div class="col-md-8 ms-sm-auto col-lg-9 p-0">
                <section class="services-section section-padding" id="section_3">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-12">
                                <h2 class="mb-5">PRODUCTS</h2>
                            </div>
                            @foreach($data as $product)
                            <div class="product-card">
                                <div class="badge">Hot</div>
                                <div class="product-tumb">
                                    <img src="/productimage/{{$product->image}}" alt="">
                                </div>
                                <form action="{{url('addcart',$product->id)}}" method="post">
                                    @csrf
                                    <div class="product-details">
                                        <h4><a href="">{{$product->title}}</a></h4>
                                        <p>{{$product->description}}</p>
                                        <div class="product-bottom-details">
                                            <div class="product-price">${{$product->price}}</div>
                                            <div class="product-links">
                                                <button class="btn btn-primary"> Add to Cart</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </section>
            </div>
        </div>
        @include('user.js')

</body>

</html>

<style>
    @import url('https://fonts.googleapis.com/css?family=Roboto:400,500,700');

    * {
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }


    body {
        font-family: 'Roboto', sans-serif;
    }

    a {
        text-decoration: none;
    }

    .product-card {
        width: 380px;
        position: relative;
        box-shadow: 0 2px 7px #dfdfdf;
        margin: 50px auto;
        background: #fafafa;
    }

    .badge {
        position: absolute;
        left: 0;
        top: 20px;
        text-transform: uppercase;
        font-size: 13px;
        font-weight: 700;
        background: red;
        color: #fff;
        padding: 3px 10px;
    }

    .product-tumb {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 300px;
        padding: 50px;
        background: #f0f0f0;
    }

    .product-tumb img {
        max-width: 100%;
        max-height: 100%;
    }

    .product-details {
        padding: 30px;
    }

    .product-catagory {
        display: block;
        font-size: 12px;
        font-weight: 700;
        text-transform: uppercase;
        color: #ccc;
        margin-bottom: 18px;
    }

    .product-details h4 a {
        font-weight: 500;
        display: block;
        margin-bottom: 18px;
        text-transform: uppercase;
        color: #363636;
        text-decoration: none;
        transition: 0.3s;
    }

    .product-details h4 a:hover {
        color: #fbb72c;
    }

    .product-details p {
        font-size: 15px;
        line-height: 22px;
        margin-bottom: 18px;
        color: #999;
    }

    .product-bottom-details {
        overflow: hidden;
        border-top: 1px solid #eee;
        padding-top: 20px;
    }

    .product-bottom-details div {
        float: left;
        width: 50%;
    }

    .product-price {
        font-size: 18px;
        color: #fbb72c;
        font-weight: 600;
    }

    .product-price small {
        font-size: 80%;
        font-weight: 400;
        text-decoration: line-through;
        display: inline-block;
        margin-right: 5px;
    }

    .product-links {
        text-align: right;
    }

    .product-links a {
        display: inline-block;
        margin-left: 5px;
        color: #e1e1e1;
        transition: 0.3s;
        font-size: 17px;
    }

    .product-links a:hover {
        color: #fbb72c;
    }
</style>