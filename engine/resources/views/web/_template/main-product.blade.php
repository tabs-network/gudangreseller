<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('assets/website/css/style.css')}}">

    <title>Home</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        @include('web._template.navbar')
    </nav>

    <div class="container pt-3">
        <div class="card">
            <div class="card-body">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 p-0">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Library</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="container pt-3">
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        KATEGORI
                    </div>
                    <div class="card-body m-0 p-0">
                        <div class="list-group list-group-flush">
                            <a href="#" class="list-group-item list-group-item-action" aria-current="true">
                                The current link item
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">Sepatu Sneakers Pria</a>
                            <a href="#" class="list-group-item list-group-item-action">A third link item</a>
                            <a href="#" class="list-group-item list-group-item-action">A fourth link item</a>
                            <a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true">A disabled link item</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <a href="{{route('web.product.show', 1)}}" class="link-product">
                            <div class="card mb-3">
                                <img src="{{('assets/website/product/1.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h3 class="card-title">Sepatu sneakers bandung murah</h3>
                                    <p>Rp.120.000</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <a href="#" class="link-product">
                            <div class="card mb-3">
                                <img src="{{('assets/website/product/1.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h3 class="card-title">Sepatu sneakers bandung murah</h3>
                                    <p>Rp.120.000</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <a href="#" class="link-product">
                            <div class="card mb-3">
                                <img src="{{('assets/website/product/1.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h3 class="card-title">Sepatu sneakers bandung murah</h3>
                                    <p>Rp.120.000</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <a href="#" class="link-product">
                            <div class="card mb-3">
                                <img src="{{('assets/website/product/1.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h3 class="card-title">Sepatu sneakers bandung murah</h3>
                                    <p>Rp.120.000</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <a href="#" class="link-product">
                            <div class="card mb-3">
                                <img src="{{('assets/website/product/1.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h3 class="card-title">Sepatu sneakers bandung murah</h3>
                                    <p>Rp.120.000</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <a href="#" class="link-product">
                            <div class="card mb-3">
                                <img src="{{('assets/website/product/1.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h3 class="card-title">Sepatu sneakers bandung murah</h3>
                                    <p>Rp.120.000</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <a href="#" class="link-product">
                            <div class="card mb-3">
                                <img src="{{('assets/website/product/1.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h3 class="card-title">Sepatu sneakers bandung murah</h3>
                                    <p>Rp.120.000</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <a href="#" class="link-product">
                            <div class="card mb-3">
                                <img src="{{('assets/website/product/1.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h3 class="card-title">Sepatu sneakers bandung murah</h3>
                                    <p>Rp.120.000</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>

</html>
