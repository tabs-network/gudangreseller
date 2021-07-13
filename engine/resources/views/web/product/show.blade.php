@extends('web._template.main')

@section('mtTitle', $product->product_mt_title)
@section('mtDesc', $product->product_mt_desc)
@section('mtImg', url('engine/storage/app/product/500x500/'.$product->product_cover))
@section('title', $product->product_name)

@section('content')
<div class="section-light container my-3">
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

<div class="container pt-3 mb-5">
    <div class="bg-light shadow-sm p-4">
        <div class="row">
            <div class="col-md-4 mb-3">
                <div class="shadow-sm">
                    <img src="{{url('engine/storage/app/product/500x500/'.$product->product_cover)}}"
                        class="card-img-top" alt="...">
                    <div class="text-center p-3">
                        <button type="button" class="btn btn-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-facebook mb-1" viewBox="0 0 16 16">
                                <path
                                    d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z">
                                </path>
                            </svg>
                        </button>
                        <button type="button" class="btn btn-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-twitter mb-1" viewBox="0 0 16 16">
                                <path
                                    d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z">
                                </path>
                            </svg>
                        </button>
                        <button type="button" class="btn btn-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-telegram mb-1" viewBox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z">
                                </path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <h1 class="h3">{{$product->product_name}}</h1>
                <span class="badge bg-secondary">12 Kali Dilihat</span>
                <p class="h2 mt-4 md-4"><b>Rp.{{number_format($product->product_price)}}</b></p>
                <hr>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active cl-dark-2" id="deskripsi-tab" data-bs-toggle="tab"
                            data-bs-target="#deskripsi" type="button" role="tab" aria-controls="home"
                            aria-selected="true">Deskripsi</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link cl-dark-2" id="speasifikasi-tab" data-bs-toggle="tab"
                            data-bs-target="#speasifikasi" type="button" role="tab" aria-controls="profile"
                            aria-selected="false">Spesifikasi</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link cl-dark-2" id="stok-tab" data-bs-toggle="tab" data-bs-target="#stok"
                            type="button" role="tab" aria-controls="contact" aria-selected="false">Stok</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active p-3" id="deskripsi" role="tabpanel"
                        aria-labelledby="home-tab">
                        <h2 class="h5">Jual {{$product->product_name}}</h2>
                        <p><a class="txt-decoration-none" href="{{url()->current()}}">{{$product->product_name}}</a> -
                            {{$product->product_desc}}</p>
                    </div>
                    <div class="tab-pane fade p-3" id="speasifikasi" role="tabpanel" aria-labelledby="profile-tab">
                        <table class="table cl-dark-2">
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
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade p-3" id="stok" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Ukuran</th>
                                        <th scope="col">Stok</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($product->product_size as $v)
                                    <tr>
                                        <td>{{$v->product_size_option}}</td>
                                        <td>{{$v->product_size_stock}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="text-end">
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

<div class="section-light mb-5">
    <div class="container">
        <h3 class="h3 mb-4">{{$product->product_cat->product_cat_name}} Lainnya</h3>
        <div class="row">
            @foreach($product_related as $v)
            <div class="d-flex col-6 col-md-3 col-lg-3">
                <div class="bg-light mb-4 shadow-sm">
                    <a href="{{route('web.product.show', $v->product_slug)}}" class="txt-decoration-none">
                        <img src="{{url('engine/storage/app/product/300x300/'.$v->product_cover)}}"
                            alt="{{$v->product_name}}" width="100%">
                        <div class="p-3">
                            <h3 class="fs-6">{{$v->product_name}}</h3>
                            <p class="fs-6">SKU : {{$v->product_sku}}</p>
                            <p class="fs-4">Rp{{number_format($v->product_price, 0,",",".")}}</p>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection