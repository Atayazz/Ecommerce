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
            <div class="col-lg-6 col-12 mb-4">
                <div class="services-thumb" style="background-color: #D6A354;">
                    <img src="/productimage/{{$product->image}}" style="max-height: 250px !important;" class="services-image img-fluid" alt="">
                    <div class="services-info d-flex align-items-end">
                        <h4 class="mb-0">{{$product->title}}</h4>
                        <strong class="services-thumb-price my-1">${{$product->price}}</strong>
                        <button type="submit" class="btn btn-primary mx-2 ">Add to Cart</button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
</div>
@include('user.footer')
                
            </div>
@include('user.js')

</body>

</html>