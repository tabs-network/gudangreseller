<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>Admin - @yield('title')</title>

    <link rel="shortcut icon" href="{{ url('assets/dashboard/media/favicons/favicon.png')}} ">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ url('assets/dashboard/media/favicons/favicon-192x192.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ url('assets/dashboard/media/favicons/apple-touch-icon-180x180.png')}}">

    @yield('css')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" id="css-main" href="{{ url('assets/dashboard/css/style.css') }}">
    <link rel="stylesheet" id="css-main" href="{{ url('assets/dashboard/css/oneui.min.css') }}">
</head>

<body>
    <div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed">
        <nav id="sidebar" aria-label="Main Navigation">
            @include('admin._template.sidebar')
        </nav>

        <header id="page-header">
            @include('admin._template.header')
        </header>

        <main id="main-container">
            @yield('content')
        </main>

    </div>

    <script src="{{ url('assets/dashboard/js/oneui.core.min.js') }}"></script>
    <script src="{{ url('assets/dashboard/js/oneui.app.min.js') }}"></script>
    <script src="{{url('assets/dashboard/js/plugin/bootstrap-notify/bootstrap-notify.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        @if(session('status'))
        $.notify({
            title: '<strong>SUKSES</strong><br>',
            message: '{{ session('
            status ') }}'
        }, {
            type: 'success'
        });
        @endif

    </script>
    <script>
        @if(session('error'))
        $.notify({
            title: '<strong>ERROR</strong><br>',
            message: '{{ session('
            error ') }}'
        }, {
            type: 'danger'
        });
        @endif

    </script>

    <script>
        @if($errors -> any())
        @foreach($errors -> all() as $error)
        $.notify({
            title: '<strong>ERROR :</strong>',
            message: '{{ $error }}',
        }, {
            type: 'danger'
        });
        @endforeach
        @endif

    </script>
    @yield('js')
</body>

</html>
