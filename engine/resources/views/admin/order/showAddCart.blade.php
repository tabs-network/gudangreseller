@extends('admin._template.main')
@section('title', 'Produk')

@section('content')
<!-- Hero -->

<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill h3 my-2">
                DETAIL PEMESANAN PRODUK
            </h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-alt">
                    <li class="breadcrumb-item">
                        <a href="{{route('admin.dashboard.index')}}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{route('admin.order.index')}}">Pemesanan Produk</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Detail Pemesanan Produk</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
    <!-- Your Block -->
    <div class="row">
        <div class="col-lg-3">
            <div class="block">
                <img src="{{url('engine/storage/app/product/300x300/'.$product->product_cover)}}" alt="" width="100%">
            </div>
        </div>
        <div class="col-lg-9">
            <div class="block">
                <div class="block-header">
                    <h3 class="block-title">Detail Produk</h3>
                </div>
                <div class="block-content">
                    <table class="table table-borderless table-vcenter">
                        <tbody>
                            <tr>
                                <th class="font-w600 font-size-sm" width="150">
                                    Nama Produk
                                </th>
                                <td class="font-w600 font-size-sm">
                                    : {{$product->product_name}}
                                </td>
                            </tr>
                            <tr>
                                <th class="font-w600 font-size-sm">
                                    Kategori
                                </th>
                                <td class="font-w600 font-size-sm">
                                    : {{$product->product_cat->product_cat_name}}
                                </td>
                            </tr>
                            <tr>
                                <th class="font-w600 font-size-sm">
                                    Gender
                                </th>
                                <td class="font-w600 font-size-sm">
                                    : {{$product->product_gender->product_gender_name}}
                                </td>
                            </tr>
                            <tr>
                                <th class="font-w600 font-size-sm">
                                    SKU
                                </th>
                                <td class="font-w600 font-size-sm">
                                    : {{$product->product_sku}}
                                </td>
                            </tr>
                            <tr>
                                <th class="font-w600 font-size-sm">
                                    Tipe Produk
                                </th>
                                <td class="font-w600 font-size-sm">
                                    : {{$product->product_type->product_type_name}}
                                </td>
                            </tr>
                            <tr>
                                <th class="font-w600 font-size-sm">
                                    Deskripsi Produk
                                </th>
                                <td class="font-w600 font-size-sm">
                                    : {{$product->product_desc}}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table table-sm table-bordered table-vcenter">
                        <thead>
                            <tr>
                                <th>Ukuran</th>
                                <th class="text-center" style="width: 15%;">Stok</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($product_size as $v)
                            <tr>
                                <td class="font-w600 font-size-sm">
                                    {{ $v->product_size_option }}
                                </td>
                                <td class="font-w600 font-size-sm text-center">
                                    {{ $v->product_size_stock }}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="text-right">
                        <h2>Rp.{{number_format($product->product_price)}}</h2>
                    </div>
                    <form action="{{route('admin.cart.store', $product->product_id)}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label>Ukuran</label>
                                    <select class="form-control select2" name="product_size_option">
                                        @foreach($product_size as $v)
                                        <option value="{{$v->product_size_option}}">{{$v->product_size_option}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col">
                                    <label>Jumlah Pesanan</label>
                                    <input type="text" class="form-control" placeholder="Jumlah Pesanan" name="product_order_qty" value="1">
                                </div>
                            </div>
                        </div>
                        <div class="form-group text-right">
                            <a href="{{route('admin.order.create')}}" class="btn btn-secondary">Batal</a>
                            <button type="submit" class="btn btn-primary">Tambah Ke Keranjang</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- END Your Block -->
</div>
<!-- END Page Content -->
@endsection

@section('js')
<script>
    $(document).ready(function() {
        $('.select2').select2();
    });
</script>
@endsection
