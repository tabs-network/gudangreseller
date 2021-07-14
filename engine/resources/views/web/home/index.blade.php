@extends('web._template.main')

@section('mtTitle', 'ASdasdsaaddad')
@section('mtDesc', 'Written by A.N. Author, Illustrated by V. Gogh, Price: $17.99, Length: 784 pages, Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis doloremque id nobis quaerat voluptatibus, laudantium cupiditate velit tempora,
ipsa minima, .')
@section('title', 'Reseller dan Dropshiper Termurah')

@section('content')
<main>
<img src="{{url('assets/website/img/slider-1.svg')}}" class="d-block w-100" alt="Reseller dan Dropship" height="auto">
<section class="bg-dark text-light pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-5 text-center">
                <img src="{{url('assets/website/img/logo-section-1.svg')}}" class="img-fluid" alt="" width="200" height="200">
            </div>
            <div class="col-12 col-md-7">
                <h1 class="fs-3 fw-light">GUDANG RESELLER</h1>
                <h2 class="fs-5">Wadah Reseller dan Drpshiper untuk menjual tas selempang, sepatu sneaker, jersey dan kaos</h2>
                <p class="fs-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione id beatae est in, earum, reprehenderit dolorum dicta unde minima repellat ipsam non neque? Fugiat nesciunt, maxime expedita illo, provident dolorum.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="section-light container mt-4">
    <div class="bg-light rounded-3 shadow-sm p-4">
        <h4 class="fs-3 fw-light">KATEGORI PILIHAN</h4>
        <h5 class="fs-5 fw-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, quas!</h5>
        <div class="d-flex row g-3">
            <div class="col-6 col-md-2">
                <a href="{{route('web.productCat.show', 'tas-backpack-pria')}}">
                    <div class="bg-light shadow-sm text-center pb-3">
                        <img src="{{url('assets/website/img/logo-section-tas-backpack.svg')}}" alt="Jual tas Backpak Murah" width="150" height="150" class="img-fluid p-3">
                        <h4 class="fs-6">Tas Backpack</h4>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-2">
                <a href="{{route('web.productCat.show', 'tas-selempang-pria')}}">
                    <div class="shadow-sm text-center pb-3">
                        <img src="{{url('assets/website/img/logo-section-tas-selempang.svg')}}" alt="Jual tas Backpak Murah" width="150" height="150" class="img-fluid p-3">
                        <h4 class="fs-6">Tas Selempang</h4>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-2">
                <a href="{{route('web.productCat.show', 'jersey-esport')}}">
                    <div class="shadow-sm text-center pb-3">
                        <img src="{{url('assets/website/img/logo-section-jersey-esport.svg')}}" alt="Jual tas Backpak Murah" width="150" height="150" class="img-fluid p-3">
                        <h4 class="fs-6">Jersey Esport</h4>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-2">
                <a href="{{route('web.productCat.show', 'jersey-bola')}}">
                    <div class="shadow-sm text-center pb-3">
                        <img src="{{url('assets/website/img/logo-section-jersey-bola.svg')}}" alt="Jual tas Backpak Murah" width="150" height="150" class="img-fluid p-3">
                        <h4 class="fs-6">Jersey Bola</h4>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-2">
                <a href="{{route('web.productCat.show', 'kaos')}}">
                    <div class="shadow-sm text-center pb-3">
                        <img src="{{url('assets/website/img/logo-section-kaos.svg')}}" alt="Jual tas Backpak Murah" width="150" height="150" class="img-fluid p-3">
                        <h4 class="fs-6">Kaos</h4>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-2">
                <a href="{{route('web.productCat.show', 'sneakers-pria')}}">
                    <div class="shadow-sm text-center pb-3">
                        <img src="{{url('assets/website/img/logo-section-sneakers.svg')}}" alt="Jual tas Backpak Murah" width="150" height="150" class="img-fluid p-3">
                        <h4 class="fs-6">Sepatu Sneakers</h4>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="section-light container my-5">
    <div class="bg-light rounded-3 shadow-sm p-4">
        <h4 class="fs-3 fw-light">PRODUK</h4>
        <h5 class="fs-5 mb-4 fw-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, quas!</h5>
        <div class="row">
            @foreach($product as $v)
            <div class="col-6 col-md-3 g-3 d-flex">
                <div class="bg-light shadow-sm">
                    <a href="{{route('web.product.show',$v->product_slug)}}">
                        <img src="{{url('engine/storage/app/product/300x300/'.$v->product_cover)}}" alt="Jual {{$v->product_name}}" class="img-fluid" width="500" height="500" class="img-fluid ">
                        <div class="p-3">
                            <h3 class="fs-6 fw-normal pb-4">{{$v['product_name']}}</h3>
                            <p class="fs-4">Rp.{{number_format($v->product_price)}}</p>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

</main>
@endsection
