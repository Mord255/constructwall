<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://kit.fontawesome.com/69b06fa715.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>        
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/footer.css')}}">

        {{-- <meta http-equiv="X-UA-Compatible" content="ie=edge"> --}}
        <link rel="shortcut icon" href="{{ asset('landing/image/favicon.png') }}" type="image/x-icon">
        <!-- Bootstrap , fonts & icons  -->
        <link rel="stylesheet" href="{{ asset('landing/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('landing/fonts/icon-font/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('landing/fonts/typography-font/typo.css') }}">
        <link rel="stylesheet" href="{{ asset('landing/fonts/fontawesome-5/css/all.css') }}">
        <link href="https://fonts.googleapis.com/css2?family=Karla:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Gothic+A1:wght@400;500;700;900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800;900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800;900&display=swap" rel="stylesheet">
        <!-- Plugin'stylesheets  -->
        <link rel="stylesheet" href="{{ asset('landing/plugins/aos/aos.min.css') }}">
        <!-- Vendor stylesheets  -->
        <link rel="stylesheet" href="{{ asset('landing/css/main.css') }}">
        <!-- Custom stylesheet -->


        <title>@yield('titulo')</title>
    </head>
    <body>
        {{-- <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">Start Bootstrap</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto ">
                        <li class="nav-item">
                            <a class="nav-link list-group-item-action" href="#list-item-1">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link list-group-item-action" href="#list-item-2">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link list-group-item-action" href="#list-item-3">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link list-group-item-action" href="#list-item-4">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <br>
        <br>
        <br> --}}
        
        {{-- 
        <div id="list-example" class="list-group">
            <a class="list-group-item list-group-item-action" href="#list-item-1">Item 1</a>
            <a class="list-group-item list-group-item-action" href="#list-item-2">Item 2</a>
            <a class="list-group-item list-group-item-action" href="#list-item-3">Item 3</a>
            <a class="list-group-item list-group-item-action" href="#list-item-4">Item 4</a>
        </div> --}}
        @yield('contenido')
        @yield('footer')
        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>