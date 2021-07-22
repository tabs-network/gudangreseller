{{-- <!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>Admin - @yield('title')</title>

    <link rel="shortcut icon" href="{{ url('assets/dashboard/media/favicons/favicon.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ url('assets/dashboard/media/favicons/favicon-192x192.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ url('assets/dashboard/media/favicons/apple-touch-icon-180x180.png') }}">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
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

</html> --}}



<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title>Admin - Dashboard</title>

        <link rel="shortcut icon" href="{{ url('assets/dashboard/media/favicons/favicon.png') }}">
        <link rel="icon" type="image/png" sizes="192x192" href="{{ url('assets/dashboard/media/favicons/favicon-192x192.png') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ url('assets/dashboard/media/favicons/apple-touch-icon-180x180.png') }}">
 
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
        <link rel="stylesheet" id="css-main" href="{{ url('assets/dashboard/css/oneui.min.css') }}">

    </head>
    <body>
        <div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow page-header-dark">
            <nav id="sidebar" aria-label="Main Navigation">
                @include('admin._template.sidebar')
            </nav>

            <header id="page-header">
                @include('admin._template.header')
            </header>

            <main id="main-container">

                @yield('content')
                {{-- <div class="bg-body-light">
                    <div class="content content-full">
                        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                            <h1 class="flex-sm-fill h3 my-2">
                                Blank (Block) <small class="d-block d-sm-inline-block mt-2 mt-sm-0 font-size-base font-w400 text-muted">That feeling of delight when you start your awesome new project!</small>
                            </h1>
                            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                                <ol class="breadcrumb breadcrumb-alt">
                                    <li class="breadcrumb-item">Generic</li>
                                    <li class="breadcrumb-item" aria-current="page">
                                        <a class="link-fx" href="">Blank (Block)</a>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>

                <div class="content">
                    <!-- Your Block -->
                    <div class="block block-rounded">
                        <div class="block-header">
                            <h3 class="block-title">
                                Block Title
                            </h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option">
                                    <i class="si si-settings"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <p>Your content..</p>
                        </div>
                    </div>
                    <!-- END Your Block -->
                </div> --}}

            </main>

            <!-- Footer -->
            <footer id="page-footer" class="bg-body-light">
                <div class="content py-3">
                    <div class="row font-size-sm">
                        <div class="col-sm-6 order-sm-2 py-1 text-center text-sm-right">
                            Crafted with <i class="fa fa-heart text-danger"></i> by <a class="font-w600" href="https://1.envato.market/ydb" target="_blank">pixelcave</a>
                        </div>
                        <div class="col-sm-6 order-sm-1 py-1 text-center text-sm-left">
                            <a class="font-w600" href="https://1.envato.market/AVD6j" target="_blank">OneUI 4.8</a> &copy; <span data-toggle="year-copy"></span>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- END Footer -->
        </div>
        <!-- END Page Container -->
        <script src="{{ url('assets/dashboard/js/oneui.core.min.js') }}"></script>
        <script src="{{ url('assets/dashboard/js/oneui.app.min.js') }}"></script>

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
