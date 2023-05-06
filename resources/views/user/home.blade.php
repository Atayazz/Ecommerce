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
@include('user.body')
@include('user.footer')
                
            </div>
@include('user.js')

</body>

</html>