@extends('admin._template.main')
@section('title', 'Produk')

@section('content')
<!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill h3 my-2">
                PRODUK
            </h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-alt">
                    <li class="breadcrumb-item">
                        <a href="{{route('admin.dashboard.index')}}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Produk</li>
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
        <div class="col-6 col-lg-3">
            <a class="block block-link-shadow text-center" href="{{route('admin.product.create')}}">
                <div class="block-content block-content-full">
                    <div class="font-size-h2 text-primary">
                        <i class="fa fa-plus"></i>
                    </div>
                </div>
                <div class="block-content py-2 bg-body-light">
                    <p class="font-w600 font-size-sm text-primary mb-0">
                        Tambah Produk
                    </p>
                </div>
            </a>
        </div>
        <div class="col-6 col-lg-3">
            <div class="block block-link-shadow text-center" href="javascript:void(0)">
                <div class="block-content block-content-full">
                    <div class="font-size-h2 text-primary">{{$count}}</div>
                </div>
                <div class="block-content py-2 bg-body-light">
                    <p class="font-w600 font-size-sm text-primary mb-0">
                        Total Produk
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="block">
        <div class="block-content font-size-sm">
            <form action="{{route('admin.product.search')}}" method="GET" role="search">
                <div class="form-row justify-content-end">
                    <div class="col-12 col-md-3 mb-2">
                        <div class="input-group">
                            <input type="text" class="form-control" name="key" placeholder="Produk/SKU">
                            <div class="input-group-prepend">
                                <button type="submit" class="btn btn-primary shadow-none">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            
            <table class="table table-bordered table-striped table-vcenter">
                <thead>
                    <tr>
                        <th style="width:70px;"></th>
                        <th>PRODUK</th>
                        <th style="width:100px;">HARGA</th>
                        <th class="text-center" style="width: 100px;"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($product as $v)
                    <tr>
                        <td>
                            <img src="{{url('engine/storage/app/product/150x150/'.$v->product_cover)}}" class="rounded" alt="" width="70">
                        </td>
                        <td class="font-size-sm">
                            <p class="font-w600 mb-1">
                                <a href="{{route('admin.product.show', $v->product_id)}}">{{ $v->product_name}}</a>
                            </p>
                            <p class="text-muted mb-0">
                                SKU : {{$v->product_sku}}
                            </p>
                        </td>
                        <td class="font-size-sm">Rp.{{ number_format($v->product_price)}}</td>
                        <td class="text-center">
                            <div class="dropdown dropleft">
                                <button type="button" class="btn btn-primary" id="dropdown-default-primary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="si si-settings"></i>
                                </button>
                                <div class="dropdown-menu font-size-sm" aria-labelledby="dropdown-default-primary" style="">
                                    <a href="{{route('admin.product.show', $v->product_id)}}" class="dropdown-item" href="javascript:void(0)">
                                        <i class="si si-eye mr-2"></i>Detail
                                    </a>
                                    <a href="{{route('admin.product.edit', $v->product_id)}}" class="dropdown-item" href="javascript:void(0)">
                                        <i class="si si-pencil mr-2"></i>Edit
                                    </a>
                                    <a class="dropdown-item" href="javascript:void(0)">
                                        <i class="si si-trash mr-2"></i>Delete
                                    </a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-end">
                {{$product->links()}}
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
    $(document).ready(function() {
        $('.select2').select2();
    });
</script>
@endsection
