<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
          integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <script src="{{asset('js/app.js')}}"></script>
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-light bg-light">
        <div class="col-md-3">
            <a class="navbar-brand" href="#"><i class="fas fa-home fa-3x"></i></a>
            <div class="font-weight-bold">Sweet Home</div>
        </div>
    </nav>

    <section class="row container-fluid">
        <div class="container-fluid col-9">
            <nav class="navbar navbar-light bg-light">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="#"><u>Home</u></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><u>Best Home</u></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><u>Life style</u></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><u>About us</u></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><u>Contact us</u></a>
                    </li>
                </ul>
            </nav>
            <div class="container-fluid">
                @foreach($list_obj as $obj)
                    <div class="col-3 m-2">
                        <div class="" ></div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="container-fluid col-3">
            <div class="input-group mt-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-search"></i></span>
                </div>
                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
            </div>
        </div>
    </section>

    <footer>
        <p class="text-center">FPT Aptech @ Copyright 2018 </p>
    </footer>
</body>
</html>