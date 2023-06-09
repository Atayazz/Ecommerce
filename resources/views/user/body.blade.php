<div class="col-md-8 ms-sm-auto col-lg-9 p-0">
    <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">

        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-12">
                    <h1 class="text-white mb-lg-3 mb-4"><strong>SKATE <em>SHOP</em></strong></h1>
                    <p class="text-black">Get the most professional skateboards for you</p>
                    <br>
                    <a class="btn custom-btn custom-border-btn custom-btn-bg-white smoothscroll me-2 mb-2" href="#section_2">About Us</a>

                    <a class="btn custom-btn smoothscroll mb-2" href="#section_3">Products</a>
                </div>
            </div>
        </div>

        <div class="custom-block d-lg-flex flex-column justify-content-center align-items-center">
            <img src="images/vintage-chair-barbershop.jpg" class="custom-block-image img-fluid" alt="">

            <h4><strong class="text-white">Hurry Up!</strong></h4>

            <a href="{{url('products')}}" class="smoothscroll btn custom-btn custom-btn-italic mt-3">Go Shopping!</a>
        </div>
    </section>


    <section class="about-section section-padding" id="section_2">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12 mx-auto">
                    <h2 class="mb-4">About Us</h2>

                    <div class="border-bottom pb-3 mb-5">
                        <p>Skateboard website was founded by skateboard enthusiasts in 2005. Our goal is to promote and develop skateboard culture, offer products that meet the needs of skateboarders, and provide our customers with the highest quality service. Customer satisfaction is always our top priority, so we carefully select all of our products and offer them at the most reasonable prices <a href="https://templatemo.com/page/1" target="_blank"></a> </p>
                    </div>
                </div>

                <h6 class="mb-5">Brands</h6>

                <div class="col-lg-5 col-12 custom-block-bg-overlay-wrap me-lg-5 mb-5 mb-lg-0">
                    <img src="images/barber/santa.jpg" class="custom-block-bg-overlay-image img-fluid" alt="">

                    <div class="team-info d-flex align-items-center flex-wrap">
                        <p class="mb-0">Santa Cruz</p>

                        <ul class="social-icon ms-auto">
                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-facebook">
                                </a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-instagram">
                                </a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-whatsapp">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-5 col-12 custom-block-bg-overlay-wrap mt-4 mt-lg-0 mb-5 mb-lg-0">
                    <img src="images/barber/thra.jpeg" class="custom-block-bg-overlay-image img-fluid" alt="">

                    <div class="team-info d-flex align-items-center flex-wrap">
                        <p class="mb-0">Thrasher</p>

                        <ul class="social-icon ms-auto">
                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-facebook">
                                </a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-instagram">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="featured-section section-padding">
        <div class="section-overlay"></div>

        <div class="container">
            <div class="row">

                <div class="col-lg-10 col-12 mx-auto">
                    <h2 class="mb-3">Get 32% Discount</h2>

                    <p>on every shopping for skateboards</p>

                    <strong>Promo Code: Skate32</strong>
                </div>

            </div>
        </div>
    </section>

    <section class="services-section section-padding" id="section_3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12">
                    <h2 class="mb-5">PRODUCTS</h2>
                </div>
                @if(session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    {{session()->get('message')}}
                </div>
                @endif
                @foreach($data as $product)
                <div class="col-lg-6 col-12 mb-4">
                    <div class="services-thumb" style="background-color: #D6A354;">
                        <img src="/productimage/{{$product->image}}" style="max-height: 250px !important;" class="services-image img-fluid" alt="">
                        <div class="services-info d-flex align-items-end">
                            <h4 class="mb-0">{{$product->title}}</h4>
                            <strong class="services-thumb-price my-1">${{$product->price}}</strong>
                            <form action="{{url('addcart',$product->id)}}" method="post">
                                @csrf
                                <input class="btn btn-secondary" type="submit" value="Add to Cart">
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="main-button text-center">
                <a href="{{url('products')}}">All Products</a>
            </div>
        </div>
    </section>
    <!--
    <section class="booking-section section-padding" id="booking-section">
        <div class="container">
            <div class="row">

                <div class="col-lg-10 col-12 mx-auto">
                    <form action="#" method="post" class="custom-form booking-form" id="bb-booking-form" role="form">
                        <div class="text-center mb-5">
                            <h2 class="mb-1">Book a seat</h2>

                            <p>Please fill out the form and we get back to you</p>
                        </div>

                        <div class="booking-form-body">
                            <div class="row">

                                <div class="col-lg-6 col-12">
                                    <input type="text" name="bb-name" id="bb-name" class="form-control" placeholder="Full name" required>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <input type="tel" class="form-control" name="bb-phone" placeholder="Mobile 010-020-0340" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required="">
                                </div>

                                <div class="col-lg-6 col-12">
                                    <input class="form-control" type="time" name="bb-time" value="18:30" />
                                </div>

                                <div class="col-lg-6 col-12">
                                    <select class="form-select form-control" name="bb-branch" id="bb-branch" aria-label="Default select example">
                                        <option selected="">Select Branches</option>
                                        <option value="Grünberger">Grünberger</option>
                                        <option value="Behrenstraße">Behrenstraße</option>
                                        <option value="Weinbergsweg">Weinbergsweg</option>
                                    </select>

                                </div>
                                <div class="col-lg-6 col-12">
                                    <input type="date" name="bb-date" id="bb-date" class="form-control" placeholder="Date" required>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <input type="number" name="bb-number" id="bb-number" class="form-control" placeholder="Number of People" required>
                                </div>
                            </div>

                            <textarea name="bb-message" rows="3" class="form-control" id="bb-message" placeholder="Comment (Optionals)"></textarea>

                            <div class="col-lg-4 col-md-10 col-8 mx-auto">
                                <button type="submit" class="form-control">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </section>
    <section class="price-list-section section-padding" id="section_4">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-12">
                    <div class="price-list-thumb-wrap">
                        <div class="mb-4">
                            <h2 class="mb-2">Price List</h2>

                            <strong>Starting at $25</strong>
                        </div>
                        @foreach($data as $product)
                        <div class="price-list-thumb">
                            <h6 class="d-flex">
                                {{$product->title}}
                                <span class="price-list-thumb-divider"></span>

                                <strong>${{$product->price}}</strong>
                            </h6>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="col-lg-4 col-12 custom-block-bg-overlay-wrap mt-5 mb-5 mb-lg-0 mt-lg-0 pt-3 pt-lg-0">
                    <img src="images/vintage-chair-barbershop.jpg" class="custom-block-bg-overlay-image img-fluid" alt="">
                </div>

            </div>
        </div>
    </section>


    <section class="contact-section" id="section_5">
        <div class="section-padding section-bg">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 col-12 mx-auto">
                        <h2 class="text-center">Say hello</h2>
                    </div>
                </div>
            </div>
        </div>
-->

    <div class="section-padding">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-12">
                    <h5 class="mb-3"><strong>Contact</strong> Information</h5>

                    <p class="text-yellow d-flex mb-1">
                        <a href="tel: 120-240-3600" class="site-footer-link">
                            (+49)
                            120-240-3600
                        </a>
                    </p>

                    <p class="text-yellow d-flex">
                        <a href="mailto:info@yourgmail.com" class="site-footer-link">
                            skate@shop.com
                        </a>
                    </p>

                    <ul class="social-icon">
                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-facebook">
                            </a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-twitter">
                            </a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-instagram">
                            </a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-youtube">
                            </a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-whatsapp">
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-5 col-12 contact-block-wrap mt-5 mt-lg-0 pt-4 pt-lg-0 mx-auto">
                    <div class="contact-block">
                        <h6 class="mb-0">
                            <i class="custom-icon bi-shop me-3"></i>

                            <strong>Open Daily</strong>

                            <span class="ms-auto">10:00 AM - 8:00 PM</span>
                        </h6>
                    </div>
                </div>

                <div class="col-lg-12 col-12 mx-auto mt-5 pt-5">
                    <iframe class="google-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7702.122299518348!2d13.396786616231472!3d52.531268574169616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47a85180d9075183%3A0xbba8c62c3dc41a7d!2sBarbabella%20Barbershop!5e1!3m2!1sen!2sth!4v1673886261201!5m2!1sen!2sth" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

            </div>
        </div>
    </div>
    </section>
</div>