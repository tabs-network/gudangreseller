<!doctype html>
<html lang="id">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Meta Tag -->
    <link rel="canonical" href="{{route('web.product.index')}}" />

    <meta name="description" content="Written by A.N. Author, Illustrated by V. Gogh, Price: $17.99, Length: 784 pages, Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis doloremque id nobis quaerat voluptatibus, laudantium cupiditate velit tempora, ipsa minima, .">

    <meta property="og:url" content="http://www.nytimes.com/2015/02/19/arts/international/when-great-minds-dont-think-alike.html" />
    <meta property="og:type" content="article" />
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('assets/website/css/style.css')}}">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&display=swap" rel="stylesheet">

    <title>Produk Gudang Reseller</title>
</head>

<body>
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
        @include('web._template.navbar')
    </nav>

    <div class="container mt-3">
        <div class="card">
            <div class="card-body">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="#" class="no-decor"><span>Home</span></a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="{{route('web.product.index')}}" class="no-decor"><span>Produk</span></a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="container mt-3">
        <div class="row">
            <div class="col-12 col-lg-3 mb-3">
                <div class="card">
                    <div class="card-header">
                        Kategori
                    </div>
                    <div class="list-group list-group-flush">
                        @foreach($product_cat as $v)
                        <a href="#" class="list-group-item list-group-item-action"><span>{{$v->product_cat_name}}</span></a>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-9">
                <h1 class="h5">Kategori Produk</h1>
                <h2 class="h6">Produk yang dijual di website kami</h2>
                <div class="row">
                    @foreach($product as $v)
                    <div class=" d-flex col-6 col-md-6 col-lg-3 mb-3">
                        <div class="card">
                            <a href="#" class="no-decor">
                                <img src="{{ url('engine/storage/app/product/300x300/'.$v->product_cover) }}" loading="lazy" title="asdadad" width="100%" height="auto" alt="{{ $v->product_name }}">
                                <div class="card-body pb-0">
                                    <h3 class="card-title h6">{{$v->product_name}}</h3>
                                    <p class="fw-bold">Rp.{{ number_format($v->product_price) }}</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, esse dolorem consequuntur quisquam nam distinctio, sequi architecto doloribus cumque rem tempore, nobis tempora quibusdam inventore quis unde incidunt aliquid minus.lorem Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus nesciunt sequi amet ex, pariatur corrupti aliquam doloribus eligendi minima itaque. Velit praesentium repellendus dolores laborum veniam minima sunt possimus officia! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo totam quaerat enim, minima excepturi repellat, eius, suscipit recusandae est deleniti labore, reiciendis tempora. Totam inventore suscipit, alias, praesentium a itaque. </p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, esse dolorem consequuntur quisquam nam distinctio, sequi architecto doloribus cumque rem tempore, nobis tempora quibusdam inventore quis unde incidunt aliquid minus.lorem Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus nesciunt sequi amet ex, pariatur corrupti aliquam doloribus eligendi minima itaque. Velit praesentium repellendus dolores laborum veniam minima sunt possimus officia! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo totam quaerat enim, minima excepturi repellat, eius, suscipit recusandae est deleniti labore, reiciendis tempora. Totam inventore suscipit, alias, praesentium a itaque. </p>
        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut expedita excepturi deleniti, asperiores ipsum animi? Placeat unde consectetur iste ratione hic nesciunt eligendi molestias reprehenderit quis nisi! Mollitia, repudiandae, libero.</span>
    </div>
    <div class="container">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, esse dolorem consequuntur quisquam nam distinctio, sequi architecto doloribus cumque rem tempore, nobis tempora quibusdam inventore quis unde incidunt aliquid minus.lorem Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus nesciunt sequi amet ex, pariatur corrupti aliquam doloribus eligendi minima itaque. Velit praesentium repellendus dolores laborum veniam minima sunt possimus officia! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo totam quaerat enim, minima excepturi repellat, eius, suscipit recusandae est deleniti labore, reiciendis tempora. Totam inventore suscipit, alias, praesentium a itaque. </p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, esse dolorem consequuntur quisquam nam distinctio, sequi architecto doloribus cumque rem tempore, nobis tempora quibusdam inventore quis unde incidunt aliquid minus.lorem Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus nesciunt sequi amet ex, pariatur corrupti aliquam doloribus eligendi minima itaque. Velit praesentium repellendus dolores laborum veniam minima sunt possimus officia! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo totam quaerat enim, minima excepturi repellat, eius, suscipit recusandae est deleniti labore, reiciendis tempora. Totam inventore suscipit, alias, praesentium a itaque. </p>
        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut expedita excepturi deleniti, asperiores ipsum animi? Placeat unde consectetur iste ratione hic nesciunt eligendi molestias reprehenderit quis nisi! Mollitia, repudiandae, libero.</span>
    </div>
    <div class="container">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, esse dolorem consequuntur quisquam nam distinctio, sequi architecto doloribus cumque rem tempore, nobis tempora quibusdam inventore quis unde incidunt aliquid minus.lorem Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus nesciunt sequi amet ex, pariatur corrupti aliquam doloribus eligendi minima itaque. Velit praesentium repellendus dolores laborum veniam minima sunt possimus officia! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo totam quaerat enim, minima excepturi repellat, eius, suscipit recusandae est deleniti labore, reiciendis tempora. Totam inventore suscipit, alias, praesentium a itaque. </p>
    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>

</html>
