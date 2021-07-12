@extends('mobile._template.main')

@section('mtTitle', 'ASdasdsaaddad')
@section('mtDesc', 'Written by A.N. Author, Illustrated by V. Gogh, Price: $17.99, Length: 784 pages, Lorem ipsum dolor
sit amet, consectetur adipisicing elit. Debitis doloremque id nobis quaerat voluptatibus, laudantium cupiditate velit
tempora,
ipsa minima, .')
@section('title', 'Reseller dan Dropshiper Termurah')

@section('content')
<img src="{{url('assets/website/img/slider-1.svg')}}" class="d-block w-100" alt="Dropshipe dan Reseller Sepatu Sneakers murah" height="100%" width="100">

<div class="section-dark text-light pt-3 pb-3 mb-3">
    <div class="container">
            <div class="text-center mb-3">
                <img src="{{url('assets/website/img/logo-section-1.svg')}}" class="img-fluid" alt="" width="50" height="50">
            </div>
            <h1 class="fs-6">Gudang Reseller</h1>
            <h2 class="fw-light mb-3" style="font-size:12px">Wadah Reseller dan Drpshiper untuk menjual tas
                selempang, sepatu sneaker, jersey dan kaos</h2>
            <p class="fw-light" style="font-size:12px">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Ratione id beatae est in, earum, reprehenderit dolorum dicta unde minima repellat ipsam non neque?
                Fugiat nesciunt, maxime expedita illo, provident dolorum.
            </p>
        </div>
    </div>
</div>

<div class="section-light mb-3">
    <div class="container">
        <div class="p-3 rounded-3 shadow-sm">
            <span class="fs-6">KATEGORI PILIHAN</span>
            <div class="d-flex row mt-3">
                <div class="col-4">
                    <div class="shadow-sm text-center">
                        <img src="{{url('assets/website/img/logo-section-tas-backpack.svg')}}"
                            alt="Jual tas Backpak Murah" width="50" height="50" class="img-fluid p-1">
                        <h3 class="pt-2 pb-2" style="font-size:10px">Tas Backpack</h3>
                    </div>
                </div>
                <div class="col-4">
                    <div class="shadow-sm text-center">
                        <img src="{{url('assets/website/img/logo-section-tas-selempang.svg')}}"
                            alt="Jual Tas Selempang Murah" width="50" height="50" class="img-fluid p-1">
                        <h3 class="pt-2 pb-2" style="font-size:10px">Tas Selempang</h3>
                    </div>
                </div>
                <div class="col-4">
                    <div class="shadow-sm text-center">
                        <img src="{{url('assets/website/img/logo-section-jersey-esport.svg')}}"
                            alt="Jual Tas Selempang Murah" width="50" height="50" class="img-fluid">
                        <h3 class="pt-2 pb-2" style="font-size:10px">Jersey Esport</h3>
                    </div>
                </div>
                <div class="col-4">
                    <div class="shadow-sm text-center">
                        <img src="{{url('assets/website/img/logo-section-jersey-bola.svg')}}"
                            alt="Jual Tas Selempang Murah" width="50" height="50" class="img-fluid p-1">
                        <h3 class="pt-2 pb-2" style="font-size:10px">Jersey Bola</h3>
                    </div>
                </div>
                <div class="col-4">
                    <div class="shadow-sm text-center">
                        <img src="{{url('assets/website/img/logo-section-kaos.svg')}}" alt="Jual Tas Selempang Murah"
                            width="50" height="50" class="img-fluid p-1">
                        <h3 class="pt-2 pb-2" style="font-size:10px">Kaos</h3>
                    </div>
                </div>
                <div class="col-4">
                    <div class="shadow-sm text-center">
                        <img src="{{url('assets/website/img/logo-section-sneakers.svg')}}"
                            alt="Jual Tas Selempang Murah" width="50" height="50" class="img-fluid p-1">
                        <h3 class="pt-2 pb-2" style="font-size:10px">Sepatu Sneakers</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section-light mb-3">
    <div class="container">
        <div class="p-2 rounded-3 shadow-sm">
            <span class="fs-6">PRODUK</span>
            <div class="row mt-3">
                @foreach($product as $v)
                <div class="col-6 d-flex mb-3">
                    <div class="shadow-sm">
                        <a href="#">
                            <img src="{{url('engine/storage/app/product/150x150/'.$v->product_cover)}}"
                                alt="Jual tas Backpack Murah" class="img-fluid" width="150" height="150"
                                class="img-fluid p-4">
                            <div class="p-2">
                                <h3 class="pb-4" style="font-size:12px">{{$v->product_name}}</h3>
                                <p class="fs-6">Rp.{{number_format($v->product_price)}}</p>
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
