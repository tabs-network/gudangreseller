@extends('web._template.main')

@section('mtTitle', 'ASdasdsaaddad')
@section('mtDesc', 'Written by A.N. Author, Illustrated by V. Gogh, Price: $17.99, Length: 784 pages, Lorem ipsum dolor
sit amet, consectetur adipisicing elit. Debitis doloremque id nobis quaerat voluptatibus, laudantium cupiditate velit
tempora, ipsa minima, .')
@section('title', 'Jual Produk Reseller Termurah')

@section('content')
<main>

<section class="section-light container mt-4">
    <div class="bg-light rounded-3 shadow-sm p-3">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="{{ route('web.home.index') }}"><span>Home</span></a></li>
                <li class="breadcrumb-item" aria-current="page"><a href="{{route('web.product.index')}}"><span>Produk</span></a></li>
                <li class="breadcrumb-item active"><a href="{{ route('web.productCat.show', $productCatGet->product_cat_slug) }}"><span>{{$productCatGet->product_cat_name}}</span></a></li>
            </ol>
        </nav>
    </div>
</section>

<section class="section-light container mt-4">
    <div class="row">
        <div class="col-12 col-lg-3 mb-3 mb-4">
            @include('web._template.category')
        </div>
        <div class="col-12 col-lg-9">
            <h1 class="fs-3 fw-light">Produk {{ $productCatGet->product_cat_name }}</h1>
            <h2 class="fs-5 text-muted fw-light">{{ $productCatGet->product_cat_name }} yang dijual di website Gudang Reseller</h2>
            <div class="d-flex justify-content-end mb-1">
                {{ $product->onEachSide(1)->links() }}
            </div>
            <div class="row g-3">
                @foreach($product as $v)
                <div class="d-flex col-6 col-lg-4">
                    <div class="bg-light shadow-sm">
                        <a href="{{route('web.product.show', $v->product_slug)}}" class="txt-decoration-none">
                            <img src="{{ url('engine/storage/app/product/300x300/'.$v->product_cover) }}"
                                loading="lazy" title="asdadad" width="100%" height="auto"
                                alt="{{ $v->product_name }}">
                            <div class="p-3">
                                <h3 class="fs-6"><span>{{$v->product_name}}</span></h3>
                                <p class="fs-6">SKU : {{$v->product_sku}}</p>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="d-flex justify-content-end mt-4">
            {{ $product->onEachSide(1)->links() }}
        </div>
    </div>
</section>

</main>
@endsection