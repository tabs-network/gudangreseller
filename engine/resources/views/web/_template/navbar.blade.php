<div class="container">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('web.home.index')}}"><span>HOME</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('web.product.index')}}"><span>PRODUK</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <span>KATEGORI</span>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#"><span>Action</span></a></li>
                    <li><a class="dropdown-item" href="#"><span>Another action</span></a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#"><span>Something else here</span></a></li>
                </ul>
            </li>
            <li class="nav-item">
                <button type="button" class="btn btn-primary"><span>LOGIN</span></button>
                <button type="button" class="btn btn-primary"><span>DAFTAR</span></button>
            </li>
        </ul>
    </div>
</div>
