@extends('web._template.main')

@section('mtTitle', 'ASdasdsaaddad')
@section('mtDesc', 'Written by A.N. Author, Illustrated by V. Gogh, Price: $17.99, Length: 784 pages, Lorem ipsum dolor
sit amet, consectetur adipisicing elit. Debitis doloremque id nobis quaerat voluptatibus, laudantium cupiditate velit
tempora, ipsa minima, .')
@section('title', 'Jual Produk Reseller Termurah')

@section('content')
<div class="section-light mt-3 mb-3">
    <div class="container">
        <div class="p-3 bg-light-1 rounded-3 shadow-sm">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ route('web.home.index') }}"
                            class="txt-decoration-none"><span>Home</span></a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="{{route('web.product.index')}}"
                            class="txt-decoration-none"><span>Produk</span></a></li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<div class="section-light mt-3 mb-3">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-3 mb-3">
                @include('web.product._template.category')
            </div>
            <div class="col-12 col-lg-9">
                <h1 class="h5 line">Produk {{ $productCatGet->product_cat_name }}</h1>
                <h2 class="h6">{{ $productCatGet->product_cat_desc }}</h2>
                <div class="d-flex justify-content-end">
                    {{ $product->onEachSide(1)->links() }}
                </div>
                <div class="row">
                    @foreach($product as $v)
                    <div class="d-flex col-6 col-md-6 col-lg-4 mb-3">
                        <div class="bg-light-1 shadow-sm">
                            <a href="{{route('web.product.show', $v->product_slug)}}" class="txt-decoration-none">
                                <img src="{{ url('engine/storage/app/product/300x300/'.$v->product_cover) }}"
                                    loading="lazy" title="asdadad" width="100%" height="auto"
                                    alt="{{ $v->product_name }}">
                                <div class="p-3">
                                    <h3 class="h6"><span>{{$v->product_name}}</span></h3>
                                    <div class="fw-light h5">Rp.{{ number_format($v->product_price) }}</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="d-flex justify-content-end">
                {{ $product->onEachSide(1)->links() }}
            </div>
        </div>
    </div>
</div>
@endsection