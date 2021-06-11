@extends('admin._template.main')
@section('title', 'Produk')

@section('content')
<!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill h3 my-2">
                DETAIL PRODUK
            </h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-alt">
                    <li class="breadcrumb-item">
                        <a href="{{route('admin.dashboard.index')}}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{route('admin.product.index')}}">Product</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Detail Produk</li>
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
        <div class="col-md-3">
            <div class="block">
                <div class="block-content">
                    <img src="{{url('engine/storage/app/product/1080x1080/'.$product->product_cover)}}" alt="" width="100%">
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="block">
                <div class="block-header">
                    <h3 class="block-title">Detail</h3>
                </div>
                <div class="block-content">

                </div>
            </div>
            <div class="block">
                <div class="block-header">
                    <h3 class="block-title">Stok</h3>
                </div>
                <div class="block-content">
                    <table class="table table-sm table-vcenter">
                        <thead>
                            <tr>
                                <th>Ukuran</th>
                                <th class="d-none d-sm-table-cell" style="width: 30%;">Stok</th>
                                <th class="text-center" style="width: 100px;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <form action="{{route('admin.product.addSize', $product->product_id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <td>
                                    <input type="text" class="form-control form-control-sm" name="product_size_option" placeholder="Input Ukuran">
                                </td>
                                <td>
                                    <input type="text" class="form-control form-control-sm" name="product_size_stock" placeholder="Input Stok">
                                </td>
                                <td class="text-center">
                                    <button type="submit" class="btn btn-sm btn-primary">Input</button>
                                </td>
                                </form>
                            </tr>
                            @foreach($product_size as $v)
                            <tr>
                                <td class="font-w600 font-size-sm">
                                    <a href="#">{{$v->product_size_option}}</a>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <span class="badge badge-warning">{{$v->product_size_stock}}</span>
                                </td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-light js-tooltip-enabled" data-toggle="tooltip" title="" data-original-title="Edit Client">
                                            <i class="fa fa-fw fa-pencil-alt"></i>
                                        </button>
                                        <button type="button" class="btn btn-sm btn-light js-tooltip-enabled" data-toggle="tooltip" title="" data-original-title="Remove Client">
                                            <i class="fa fa-fw fa-times"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- END Your Block -->
</div>
<!-- END Page Content -->
@endsection

@section('css')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection

@section('js')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="{{url('assets/dashboard/js/plugin/bootstrap-notify/bootstrap-notify.min.js')}}"></script>
<script>
    $(document).ready(function() {
        $('.select2').select2();
    });
</script>

<script>
    @if (session('status'))
    $.notify({
        title: '<strong>SUKSES</strong><br>',
        message: '{{ session('status') }}'
    }, {
        type: 'success'
    });
    @endif
</script>
@endsection
