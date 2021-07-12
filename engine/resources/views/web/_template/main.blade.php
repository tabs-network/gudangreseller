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
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('assets/website/css/style.min.css')}}">

    <style>
        .loader {
            position: fixed;
            z-index: 99;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #222222;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .loader > img {
            width: 500px;
        }

        .loader.hidden {
            animation: fadeOut 1s;
            animation-fill-mode: forwards;
        }

        @keyframes fadeOut {
            100% {
                opacity: 0;
                visibility: hidden;
            }
        }

        .thumb {
            height: 100px;
            border: 1px solid black;
            margin: 10px;
        }
    </style>

    <title>Gudang Reseller - @yield('title')</title>
</head>

<body>
    @include('web._template.navbar')

    @yield('content')

    @include('web._template.footer')
    
    <div class="loader">
        <img src="{{url('assets/website/img/logo-section-1.svg')}}" alt="Loading..." width="500px"/>
    </div>
    
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script>
        window.addEventListener("load", function () {
            const loader = document.querySelector(".loader");
            loader.className += " hidden"; // class "loader hidden"
        });
    </script>
    @yield('js')
</body>

</html>
