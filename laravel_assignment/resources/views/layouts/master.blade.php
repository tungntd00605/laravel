<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('page-title')</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
          integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <script src="{{asset('js/app.js')}}"></script>
</head>
<body>
    <nav class="navbar navbar-light bg-light">
        <div class="col-md-3">
            <a class="navbar-brand" href="#"><i class="fab fa-affiliatetheme fa-4x"></i></a>
        </div>
        <div class="col-md-7">
            <form class="row">
                <div class="col-md-8">
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                </div>
                <div class="col-md-4">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </div>
            </form>
        </div>
        <div class="col-md-2 mt-3">
            <img src="https://www.overleaf.com/assets/logos/overleaf_og_logo.png" alt=""
                 class="img-thumbnail rounded-circle w-25 mr-2 float-left">
            <div class="mt-3">
                <strong>Admin</strong>
                <a href="#">(Logout)</a>
            </div>
        </div>
    </nav>
    <div class="container-fluid row mt-2">
        <nav class="col-md-2">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <li class="nav-item">
                    <a class="nav-link {{$currentPage == 'home-page' ? 'active' : ''}}" id="v-pills-profile-tab" href="/"
                       aria-controls="v-pills-profile" aria-selected="false">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link {{$currentPage == 'product-form' ? 'active' : ''}}" id="v-pills-profile-tab" href="/admin/product"
                   aria-controls="v-pills-profile" aria-selected="false">Product Manager</a>
                </li>
                <li class="nav-item">
                <a class="nav-link {{$currentPage == 'category-form' ? 'active' : ''}}" id="v-pills-messages-tab" href="/admin/category" role="tab"
                   aria-controls="v-pills-messages" aria-selected="false">Category Manager</a>
                </li>
            </div>
        </nav>
        <main class="col-md-10">
            @section('content')
            @show
        </main>
    </div>
    <footer class="container-fluid mt-3 mb-3">
        <p class="text-center">Copyright @2018 FPT Aptech</p>
    </footer>
</body>
</html>