<header class="sticky-top shadow-sm">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-shadow {{ (request()->routeIs('web.home.*') ? 'active' : '') }}" aria-current="page" href="{{route('web.home.index')}}">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-shadow {{ (request()->routeIs(['web.product.*','web.productCat.*']) ? 'active' : '') }}" href="{{route('web.product.index')}}">PRODUK</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-shadow" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            KATEGORI
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
                            @foreach(productCat_helpers() as $v)
                                <li><a class="dropdown-item" href="{{route('web.productCat.show', $v->product_cat_slug)}}">{{$v->product_cat_name}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                </ul>
                <div class="d-flex">
                    <ion-icon name="logo-whatsapp" size="large" style="color:white;" class="ms-1"></ion-icon>
                    <ion-icon name="logo-facebook" size="large" style="color:white;" class="ms-1"></ion-icon>
                    <ion-icon name="logo-twitter" size="large" style="color:white;" class="ms-1"></ion-icon>
                    <ion-icon name="logo-instagram" size="large" style="color:white;" class="ms-1"></ion-icon>
                </div>
            </div>
        </div>
    </nav>
    <div class="bg-dark">
        <div class="container pt-3 pb-3">
            <div class="d-flex justify-content-between">
                <div class="col-2 d-none d-sm-none d-md-none d-lg-block text-center">
                    <img src="{{url('assets/website/img/logo-navbar.svg')}}" alt="" class="img-fluid" height="50" width="130">
                </div>
                <div class="col">
                    <form action="{{ route('web.product.search') }}" method="GET" role="search" class="d-flex">
                        <input class="form-control" name="key" type="search" placeholder="Cari Produk" aria-label="Search"  value="{{(request()->RouteIs('web.product.search'))  ? request()->key : ''}}">
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>

