@extends('web._template.main')

@section('mtTitle', confHome('mt_title'))
@section('mtDesc', confHome('mt_desc'))
@section('title', confHome('title'))

@section('content')
<main>
<img src="{{url('assets/website/img/slider-1.svg')}}" class="img-fluid" alt="Reseller dan Dropship " height="500" width="2000">
<section class="bg-dark text-light pt-5 pb-5">
    <div class="container">
        <div class="h-card">
            <a class="p-name u-url"
             href="https://blog.lizardwrangler.com/"
            >Mitchell Baker</a>
            (<a class="p-org h-card"
              href="https://mozilla.org/"
             >Mozilla Foundation</a>)
          </div>
        <div class="row">
            <div class="col-12 col-md-5 text-center">
                <img src="{{url('assets/website/img/logo-section-1.svg')}}" class="img-fluid" alt="Wadah Reseller dan Drpshiper untuk menjual tas selempang, sepatu sneaker, jersey dan kaos" width="200" height="200">
            </div>
            <div class="col-12 col-md-7">
                <h1 class="fs-2 fw-light">Gudang Reseller</h1>
                <h2 class="fs-5">Dropship dan Reseller Online Bandung</h2>
                <p class="fs-6">
                    Gudang Reeller adalah Dropship dan Reseller yang menjual product fashion seperti tas selempang, sepatu sneakers, Jersey bola, Jersey Esport dan kebutuhan fashion lainnya
                </p>
            </div>
        </div>
    </div>
</section>

<section class="section-light container mt-4">
    <div class="bg-light rounded-3 shadow-sm p-4">
        <h4 class="fs-2 fw-light">Kategori Pilihan</h4>
        <h5 class="fs-5 text-muted fw-light mb-5">Kategori Pilihan Gudang Reseller</h5>
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
        <h4 class="fs-2 fw-light">Produk</h4>
        <h5 class="fs-5 text-muted fw-light mb-3">Produk Gudang Reseller</h5>
        <div class="row">
            @foreach($product as $v)
            <div class="col-6 col-md-3 g-3 d-flex">
                <div class="bg-light shadow-sm">
                    <a href="{{route('web.product.show',$v->product_slug)}}">
                        <img src="{{url('engine/storage/app/product/300x300/'.$v->product_cover)}}" alt="Jual {{$v->product_name}}" class="img-fluid" width="500" height="500" class="img-fluid ">
                        <div class="p-3">
                            <h3 class="fs-6">{{$v['product_name']}}</h3>
                            <p class="fs-6">SKU : {{$v->product_sku}}</p>
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
