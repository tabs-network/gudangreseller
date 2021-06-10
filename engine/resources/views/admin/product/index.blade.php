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
                        <a href="javascript:void(0)">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="javascript:void(0)">Account</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Current</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
    <!-- Your Block -->
    <div class="block">
        <div class="block-header">
            <h3 class="block-title">
                PRODUK
            </h3>
            <div class="block-options">
                <div class="input-group">
                    <input type="text" class="form-control" id="example-group3-input1" name="example-group3-input1" placeholder="Cari">
                    <div class="input-group-prepend">
                        <span type="button" class="btn btn-primary">
                            <i class="fa fa-search mr-1"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="block-content font-size-sm">
            <a href="{{route('admin.product.create')}}" class="btn btn-primary mr-1 mb-3">
                <i class="fa fa-fw fa-plus"></i>
            </a>
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
                                <a href="{{route('admin.product.show', $v->product_slug)}}">{{ $v->product_name}}</a>
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
                                    <a href="{{route('admin.product.show', $v->product_slug)}}" class="dropdown-item" href="javascript:void(0)">
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
        </div>
    </div>
    <!-- END Your Block -->
</div>
<!-- END Page Content -->
@endsection
