@extends('mobile._template.main')

@section('mtTitle', 'ASdasdsaaddad')
@section('mtDesc', 'Written by A.N. Author, Illustrated by V. Gogh, Price: $17.99, Length: 784 pages, Lorem ipsum dolor
sit amet, consectetur adipisicing elit. Debitis doloremque id nobis quaerat voluptatibus, laudantium cupiditate velit
tempora,
ipsa minima, .')
@section('title', 'Reseller dan Dropshiper Termurah')

@section('content')
<div class="section-light bg-light shadow-sm">
    <div class="container">
        <div class="py-3">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item" style="font-size:12px">
                        <a href="{{ route('web.home.index') }}">
                            <span>Home</span>
                        </a>
                    </li>
                    <li class="breadcrumb-item" style="font-size:12px" aria-current="page">
                        <a href="{{route('web.product.index')}}">
                            <span>Produk</span>
                        </a>
                    </li>
                    <li class="breadcrumb-item active" style="font-size:12px" aria-current="page">
                        <a href="{{ route('web.productCat.show', $productCatGet->product_cat_slug) }}">
                            <span>{{ $productCatGet->product_cat_name }}</span>
                        </a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<div class="section-light py-2">
    <div class="container">
            <div class="row g-2">
                @foreach($product as $v)
                <div class="d-flex col-6">
                    <div class="bg-light shadow-sm">
                        <a href="{{route('web.product.show', $v->product_slug)}}" class="text-decoration-none">
                            <img src="{{ url('engine/storage/app/product/150x150/'.$v->product_cover) }}"
                                loading="lazy" title="asdadad" width="100%" height="auto"
                                alt="{{ $v->product_name }}">
                            <div class="p-2">
                                <h3 style="font-size:12px"><span>{{$v->product_name}}</span></h3>
                                <p style="font-size:12px">SKU : {{$v->product_sku}}</p>
                                <p class="fs-6">Rp.{{ number_format($v->product_price) }}</p>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="d-flex justify-content-end mt-2">
                {{ $product->onEachSide(1)->links() }}
            </div>
    </div>
</div>
@endsection