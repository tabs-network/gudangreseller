@extends('web._template.main')

@section('mtTitle', $product->product_mt_title)
@section('mtDesc', $product->product_mt_desc)
@section('mtImg', url('engine/storage/app/product/500x500/'.$product->product_cover))
@section('title', $product->product_name)

@section('content')
<div class="section-light container my-4">
    <div class="bg-light shadow-sm p-3">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="{{route('web.home.index')}}"
                        class="txt-decoration-none"><span>Home</span></a></li>
                <li class="breadcrumb-item" aria-current="page"><a href="{{route('web.product.index')}}"
                        class="txt-decoration-none"><span>Produk</span></a></li>
                <li class="breadcrumb-item" aria-current="page"><a href="{{route('web.productCat.show', $product->product_cat->product_cat_slug)}}"
                        class="txt-decoration-none"><span>{{$product->product_cat->product_cat_name}}</span></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page"><a href="{{url()->current()}}"
                        class="txt-decoration-none"><span>{{$product->product_name}}</span></a></li>
            </ol>
        </nav>
    </div>
</div>

<div class="container mb-5">
    <div class="bg-light shadow-sm px-4 pt-4">
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="shadow-sm">
                    <img src="{{url('engine/storage/app/product/500x500/'.$product->product_cover)}}" class="card-img-top" alt="{{ $product->product_name }}">
                </div>
            </div>
            <div class="col-md-8">
                <h1 class="fs-2 fw-light mb-4">{{$product->product_name}}</h1>
                <table class="table cl-dark-2 mb-4">
                    <tbody>
                        <tr>
                            <th width="100">Kategori</th>
                            <td>: {{$product->product_cat->product_cat_name}}</td>
                        </tr>
                        <tr>
                            <th>Genre</th>
                            <td>: {{$product->product_gender->product_gender_name}}</td>
                        </tr>
                        <tr>
                            <th>Kode SKU</th>
                            <td>: {{$product->product_sku}}</td>
                        </tr>
                        <tr>
                            <th>Ukuran</th>
                            <td>:
                                @foreach($product->product_size as $v)
                                {{ $v->product_size_option }},
                                @endforeach
                            </td>
                        </tr>
                    </tbody>
                </table>
                <p class="fs-4 fw-light m-0">Deskripsi</p>
                <h2 class="fs-5 text-muted fw-light mb-3">Jual {{$product->product_name}}</h2>
                        <p>
                            {{$product->product_desc}}
                        </p>
                <div class="text-end mb-4">
                    <button type="button" class="btn btn-lg btn-success shadow-none ps-5 pe-5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                            class="bi bi-whatsapp mb-1" viewBox="0 0 16 16">
                            <path
                                d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z">
                            </path>
                        </svg>
                        HUBUNGI KAMI
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section-light mb-4">
    <div class="container">
        <h3 class="fs-3 fw-light m-0 p-0">{{$product->product_cat->product_cat_name}} Lainnya</h3>
        <div class="row">
            @foreach($product_related as $v)
            <div class="d-flex col-6 col-md-3 col-lg-3 g-4">
                <div class="bg-light shadow-sm">
                    <a href="{{route('web.product.show', $v->product_slug)}}" class="txt-decoration-none">
                        <img src="{{url('engine/storage/app/product/300x300/'.$v->product_cover)}}"
                            alt="{{$v->product_name}}" class="img-fluid" width="500" height="500">
                        <div class="p-3">
                            <h3 class="fs-6">{{$v->product_name}}</h3>
                            <p class="fs-6">SKU : {{$v->product_sku}}</p>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection