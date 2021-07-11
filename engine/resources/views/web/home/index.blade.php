@extends('web._template.main')

@section('mtTitle', 'ASdasdsaaddad')
@section('mtDesc', 'Written by A.N. Author, Illustrated by V. Gogh, Price: $17.99, Length: 784 pages, Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis doloremque id nobis quaerat voluptatibus, laudantium cupiditate velit tempora,
ipsa minima, .')
@section('title', 'Reseller dan Dropshiper Termurah')

@section('content')
<!-- <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{url('assets/website/img/slider-1.svg')}}" class="d-block w-100" alt="..." height="100%">
        </div>
        <div class="carousel-item">
            <img src="{{url('assets/website/img/slider-1.svg')}}" class="d-block w-100" alt="..." height="100%">
        </div>
        <div class="carousel-item">
            <img src="{{url('assets/website/img/slider-1.svg')}}" class="d-block w-100" alt="..." height="100%">
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
<div class="section-dark text-light pt-5 pb-5 mb-3">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-5 text-center">
                <img src="{{url('assets/website/img/logo-section-1.svg')}}" class="img-fluid" alt="" width="200" height="200">
            </div>
            <div class="col-12 col-md-7">
                <h1 class="h3">Gudang Reseller</h1>
                <h2 class="h6 mb-3">Wadah Reseller dan Drpshiper untuk menjual tas selempang, sepatu sneaker, jersey dan kaos</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione id beatae est in, earum, reprehenderit dolorum dicta unde minima repellat ipsam non neque? Fugiat nesciunt, maxime expedita illo, provident dolorum.
                </p>
            </div>
        </div>
    </div>
</div>

<div class="section-light mb-3">
    <div class="container">
        <div class="p-3 rounded-3 shadow-sm">
            <span class="h3">KATEGORI PILIHAN</span>
            <div class="d-flex row mt-3 ">
                <div class="col-6 col-md-2">
                    <div class="shadow-sm text-center">
                        <img src="{{url('assets/website/img/logo-section-tas-backpack.svg')}}" alt="Jual tas Backpak Murah" width="250" height="250" class="img-fluid p-3">
                        <h3 class="h6 pt-4 pb-4">Tas Backpack</h3>
                    </div>
                </div>
                <div class="col-6 col-md-2">
                    <div class="shadow-sm">
                        <img src="{{url('assets/website/img/logo-section-tas-selempang.svg')}}" alt="Jual Tas Selempang Murah" width="250" height="250" class="img-fluid p-3">
                        <div class="text-center">
                            <h3 class="h6 pt-4 pb-4">Tas Selempang</h3>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-2">
                    <div class="shadow-sm">
                        <img src="{{url('assets/website/img/logo-section-jersey-esport.svg')}}" alt="Jual Tas Selempang Murah" width="250" height="250" class="img-fluid p-3">
                        <div class="text-center">
                            <h3 class="h6 pt-4 pb-4">Jersey Esport</h3>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-2">
                    <div class="shadow-sm">
                        <img src="{{url('assets/website/img/logo-section-jersey-bola.svg')}}" alt="Jual Tas Selempang Murah" width="250" height="250" class="img-fluid p-3">
                        <div class="text-center">
                            <h3 class="h6 pt-4 pb-4">Jersey Bola</h3>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-2">
                    <div class="shadow-sm">
                        <img src="{{url('assets/website/img/logo-section-kaos.svg')}}" alt="Jual Tas Selempang Murah" width="250" height="250" class="img-fluid p-3">
                        <div class="text-center">
                            <h3 class="h6 pt-4 pb-4">Kaos</h3>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-2">
                    <div class="shadow-sm">
                        <img src="{{url('assets/website/img/logo-section-sneakers.svg')}}" alt="Jual Tas Selempang Murah" width="250" height="250" class="img-fluid p-3">
                        <div class="text-center">
                            <h3 class="h6 pt-4 pb-4">Sepatu Sneakers</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->

<div class="section-light mb-3">
    <div class="container">
        <div class="p-3 rounded-3 shadow-sm">
            <span class="h3">PRODUK</span>
            <div class="row">
                @foreach($product as $v)
                <div class="col-6 col-md-3 mb-3 d-flex">
                    <div class="bg-2 shadow-sm">
                        <a href="#">
                            <img src="{{url('engine/storage/app/product/300x300/'.$v->product_cover)}}" alt="Jual tas Backpack Murah" class="img-fluid" width="300" height="300" class="img-fluid p-4">
                            <div class="p-3">
                                <h3 class="h6 pb-4">{{$v->product_name}}</h3>
                                <p class="h4">Rp.{{number_format($v->product_price)}}</p>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
