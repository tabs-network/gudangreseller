<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Meta Tag -->
    <link rel="canonical" href="{{url()->current()}}" />
    <meta name="description" content="Written by A.N. Author, Illustrated by V. Gogh, Price: $17.99, Length: 784 pages, Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis doloremque id nobis quaerat voluptatibus, laudantium cupiditate velit tempora, ipsa minima, .">
    <meta property="og:url" content="{{url()->current()}}" />
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="When Great Minds Don’t Think Alike" />
    <meta property="og:description" content="How much does culture influence creative thinking?" />
    <meta property="og:image" content="http://static01.nyt.com/images/2015/02/19/arts/international/19iht-btnumbers19A/19iht-btnumbers19A-facebookJumbo-v2.jpg" />

    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@nytimesbits" />
    <meta name="twitter:creator" content="@nickbilton" />
    <meta name="twitter:title" content="adasdasdasd" />

    <link rel="apple-touch-icon" href="/path/to/apple-touch-icon.png">
    <meta name="theme-color" content="#4285f4">
    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('assets/website/css/style.css')}}">

    <title>Gudang Reseller - Jual Produk Reseller Termurah</title>
</head>

<body>
    @include('web._template.navbar')
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{url('assets/website/img/slider-2.jpg')}}" class="d-block w-100" alt="..." height="500">
            </div>
            <div class="carousel-item">
                <img src="{{url('assets/website/img/slider-3.jpg')}}" class="d-block w-100" alt="..." height="500" s>
            </div>
            <div class="carousel-item">
                <img src="{{url('assets/website/img/slider-4.jpg')}}" class="d-block w-100" alt="..." height="500">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="section-1 pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-5 ps-5 pe-5">
                    <img src="{{url('assets/website/img/gr-logo-2.png')}}" alt="" width="100%">
                </div>
                <div class="col-12 col-md-7">
                    <h1 class="h3 line mb-4">Gudang Reseller</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione id beatae est in, earum, reprehenderit dolorum dicta unde minima repellat ipsam non neque? Fugiat nesciunt, maxime expedita illo, provident dolorum.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container pt-5">
        <div class="p-5 box-1 rounded shadow-sm">
                <span class="h3 line">KATEGORI PILIHAN</span>
                <div class="row mt-5">
                    <div class="col-6 col-md-2 mb-3">
                        <div class="box-1 shadow-sm">
                          <img src="{{url('assets/website/img/backpack.png')}}" alt="Jual tas Backpak Murah" width="100%" class="p-3">
                          <div class="text-center">
                            <h3 class="h6 pt-4 pb-4">Tas Backpack</h3>
                          </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-2">
                        <div class="box-1 shadow-sm">
                          <img src="{{url('assets/website/img/sling-bag.png')}}" alt="Jual Tas Selempang Murah" width="100%" class="p-3">
                          <div class="text-center">
                            <h3 class="h6 pt-4 pb-4">Tas Selempang</h3>
                          </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-2">
                        <div class="box-1 shadow-sm">
                          <img src="{{url('assets/website/img/jersey-esport.png')}}" alt="Jual Tas Selempang Murah" width="100%">
                          <div class="text-center">
                            <h3 class="h6 pt-4 pb-4">Jersey Esport</h3>
                          </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-2">
                        <div class="box-1 shadow-sm">
                          <img src="{{url('assets/website/img/jersey-bola.png')}}" alt="Jual Tas Selempang Murah" width="100%">
                          <div class="text-center">
                            <h3 class="h6 pt-4 pb-4">Jersey Bola</h3>
                          </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-2">
                        <div class="box-1 shadow-sm">
                          <img src="{{url('assets/website/img/kaos.png')}}" alt="Jual Tas Selempang Murah" width="100%" class="p-3">
                          <div class="text-center">
                            <h3 class="h6 pt-4 pb-4">Kaos</h3>
                          </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-2">
                        <div class="box-1 shadow-sm">
                          <img src="{{url('assets/website/img/shoes.png')}}" alt="Jual Tas Selempang Murah" width="100%" class="p-3">
                          <div class="text-center">
                            <h3 class="h6 pt-4 pb-4">Tas Selempang</h5>
                          </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <div style="height:1000px;"></div>

    @include('web._template.footer')

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
