
<nav id="sidebarMenu" class="col-md-4 col-lg-3 d-md-block sidebar collapse p-0">

<div class="position-sticky sidebar-sticky d-flex flex-column justify-content-center align-items-center">
    <a class="navbar-brand" href="{{url('')}}">
        <img src="images/aaas.jpeg" class="logo-image img-fluid" align="">
    </a>

    <ul class="nav flex-column">
        <li class="nav-item">
            @if (Route::has('login'))
            @auth
        <li>
            <x-app-layout>

            </x-app-layout>
        </li>
        <li class="nav-item">
            <a class="" href="{{url('showcart')}} ">Cart[{{$count}}]</a>
        </li>
        <li class="nav-item">
            <a class="" href="{{url('order')}} ">Orders</a>
        </li>
        @else
        <li><a class="nav-link" href="{{ route('login') }}">Log in</a></li>

        @if (Route::has('register'))
        <li><a class="nav-link" href="{{ route('register') }}">Register</a></li>
        @endif
        @endauth
        @endif
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('')}}">Home</a>
        </li>

        <li class="nav-item">
            <a class="nav-link click-scroll" href="#section_2">Our Story</a>
        </li>

        <li class="nav-item">
            <a class="nav-link click-scroll" href="#section_3">Services</a>
        </li>

    </ul>
</div>
</nav>