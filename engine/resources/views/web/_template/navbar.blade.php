<div class="sticky-top shadow-sm">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-shadow" aria-current="page" href="{{route('web.home.index')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-shadow" href="{{route('web.product.index')}}">Produk</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-shadow" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Kategori
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="d-flex">
                    <ion-icon name="logo-whatsapp" size="small" style="color:white;"></ion-icon>
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
                <div class="col-2">
                    <img src="{{url('assets/website/img/gr-logo-1.png')}}" alt="" height="43">
                </div>
                <div class="col-10">
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Cari Produk" aria-label="Search">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
