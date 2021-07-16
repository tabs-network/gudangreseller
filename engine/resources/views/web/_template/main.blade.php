<!doctype html>
<html lang="id">

<head>
    <link rel="icon" type="image/svg+xml" href="{{url('favicon.svg')}}">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Meta Tag -->
    <link rel="canonical" href="{{url()->current()}}" />
    <meta name="description" content="@yield('mtDesc')">
    <meta property="og:url" content="{{url()->current()}}" />
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="@yield('mtTitle')" />
    <meta property="og:description" content="@yield('mtDesc')" />
    <meta property="og:image" content="@yield('mtImg')" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@nytimesbits" />
    <meta name="twitter:creator" content="@nickbilton" />
    <meta name="twitter:title" content="@yield('mtTitle')" />

    <link rel="apple-touch-icon" href="{{url('favicon.svg')}}">
    <meta name="theme-color" content="#4285f4">

    <!-- Bootstrap CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{url('assets/website/css/style.min.css')}}">

    <style>
        
    </style>

    <title>Gudang Reseller - @yield('title')</title>
</head>

<body>
    @include('web._template.navbar')

    @yield('content')

    @include('web._template.footer')
    
    {{-- <div class="loader">
        <img src="{{url('assets/website/img/logo-section-1.svg')}}" alt="Loading..." class="img-fluid" width="500" height="500"/>
    </div> --}}
    
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    {{-- <script>
        window.addEventListener("load", function () {
            const loader = document.querySelector(".loader");
            loader.className += " hidden"; // class "loader hidden"
        });
    </script> --}}
    @yield('js')
</body>

</html>
