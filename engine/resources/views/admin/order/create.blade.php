@extends('admin._template.main')
@section('title', 'Produk')

@section('content')
<!-- Hero -->

<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill h3 my-2">
                PEMESANAN PRODUK
            </h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-alt">
                    <li class="breadcrumb-item">
                        <a href="{{route('admin.dashboard.index')}}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Pemesanan Produk</li>
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
        <div class="col-lg-7">
            <div class="block">
                <div class="block-content">
                    <form>
                        <div class="form-row justify-content-end">
                            <div class="col-12 col-md-4 mb-3">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="search" placeholder="Nama Produk / SKU">
                                    <div class="input-group-prepend">
                                        <span type="button" class="btn btn-primary">
                                            <i class="fa fa-search"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                @foreach($product as $v)
                <div class="col-6 col-lg-4">
                    <a href="{{route('admin.order.showAddCart',$v->product_id)}}">
                        <div class="block">
                            <img src="{{url('engine/storage/app/product/300x300/'.$v->product_cover)}}" alt="" width="100%">
                            <div class="block-content">
                                <h1 class="h5">{{$v->product_name}}</h1>
                                <h4>Rp.{{number_format($v->product_price)}}</h4>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
        <div class="col-lg-5">
            <div class="block">
                <div class="block-header">
                    <h3 class="block-title">Keranjang</h3>
                </div>
                <div class="block-content">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-vcenter">
                            <thead>
                                <tr>
                                    <th class="text-center" style="width: 20px;"></th>
                                    <th class="text-center" style="width: 100px;">
                                        <i class="far fa-user"></i>
                                    </th>
                                    <th>Nama</th>
                                    <th style="width: 15%;">Jumlah</th>
                                    <th style="width: 15%;">Harga</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach(\Cart::content() as $v)
                                <tr>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-primary js-tooltip-enabled" data-toggle="tooltip" title="" data-original-title="Delete">
                                                <i class="fa fa-fw fa-times"></i>
                                            </button>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <img class="img-avatar img-avatar48" src="{{url('engine/storage/app/product/150x150/'.$v->options->image)}}" alt="">
                                    </td>
                                    <td class="font-w600 font-size-sm">
                                        <a href="#">{{$v->name}} | Ukuran: {{$v->options->size}}</a>
                                    </td>
                                    <td class="font-w600 font-size-sm">
                                        {{$v->qty}}
                                    </td>
                                    <td class="font-w600 font-size-sm">
                                        Rp.{{number_format($v->price)}}
                                    </td>
                                </tr>
                                @endforeach
                                <tr>
                                    <td class="font-w600 font-size-sm" colspan="4">
                                        Total
                                    </td>
                                    <td class="font-w600 font-size-sm">
                                        Rp.{{\Cart::total()}}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="form-group text-right">
                        <a href="{{route('admin.cart.destroy')}}" class="btn btn-secondary">Batal</a>
                        <a href="{{route('admin.cart.checkout')}}" class="btn btn-primary">Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Your Block -->
</div>
<!-- END Page Content -->
@endsection

@section('js')
<script src="{{url('assets/dashboard/js/plugin/bootstrap-notify/bootstrap-notify.min.js')}}"></script>

<script>
    @if(session('status'))
    $.notify({
        title: '<strong>SUKSES</strong><br>',
        message: '{{ session('
        status ') }}'
    }, {
        type: 'success'
    });
    @endif
</script>
@endsection
