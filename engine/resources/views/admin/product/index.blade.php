@extends('admin._template.main')
@section('title', 'Produk')

@section('content')
<div class="content">
    <div class="row">
        <div class="col-6 col-lg-3">
            <a class="block block-rounded block-link-shadow text-center" href="{{route('admin.product.create')}}">
                <div class="block-content block-content-full">
                    <div class="font-size-h2 text-success">
                        <i class="fa fa-plus"></i>
                    </div>
                </div>
                <div class="block-content py-2 bg-body-light">
                    <p class="font-w600 font-size-sm text-success mb-0">
                        Tambah
                    </p>
                </div>
            </a>
        </div>
        <div class="col-6 col-lg-3">
            <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
                <div class="block-content block-content-full">
                    <div class="font-size-h2 text-primary">{{dbCount('product')}}</div>
                </div>
                <div class="block-content py-2 bg-body-light">
                    <p class="font-w600 font-size-sm text-primary mb-0">
                        Total Produk
                    </p>
                </div>
            </a>
        </div>
        <div class="col-6 col-lg-3">
            <a class="block block-rounded block-link-shadow text-center" href="be_pages_ecom_dashboard.html">
                <div class="block-content block-content-full">
                    <div class="font-size-h2 text-dark">260</div>
                </div>
                <div class="block-content py-2 bg-body-light">
                    <p class="font-w600 font-size-sm text-muted mb-0">
                        New
                    </p>
                </div>
            </a>
        </div>
        <div class="col-6 col-lg-3">
            <a class="block block-rounded block-link-shadow text-center" href="be_pages_ecom_dashboard.html">
                <div class="block-content block-content-full">
                    <div class="font-size-h2 text-dark">14503</div>
                </div>
                <div class="block-content py-2 bg-body-light">
                    <p class="font-w600 font-size-sm text-muted mb-0">
                        All Products
                    </p>
                </div>
            </a>
        </div>
    </div>

    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">PRODUK</h3>
            <div class="block-options">
                <div class="dropdown">
                    <button type="button" class="btn-block-option" id="dropdown-ecom-filters" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Filters <i class="fa fa-angle-down ml-1"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-ecom-filters">
                        <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                            New
                            <span class="badge badge-success badge-pill">260</span>
                        </a>
                        <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                            Out of Stock
                            <span class="badge badge-danger badge-pill">24</span>
                        </a>
                        <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                            All
                            <span class="badge badge-primary badge-pill">14503</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="block-content">
            <form action="{{route('admin.product.search')}}" method="GET" role="search">
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" class="form-control form-control-alt" name="key" placeholder="Cari Produk/SKU" value="{{ request()->key }}">
                        <div class="input-group-append">
                            <span class="input-group-text bg-body border-0">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </form>

            <div class="table-responsive">
                <table class="table table-bordered table-hover table-vcenter">
                    <thead>
                        <tr>
                            <th width="70">GAMBAR</th>
                            <th>PRODUK</th>
                            <th width="100">STATUS</th>
                            <th width="150">HARGA</th>
                            <th width="80">ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($product as $v)
                        <tr>
                            <td class="text-center">
                                <img src="{{url('engine/storage/app/product/150x150/'.$v->product_cover)}}" class="rounded" alt="" width="50">    
                            </td>
                            <td class="font-size-sm">
                                <p class="font-w600 mb-1">
                                    <a href="{{route('admin.product.show', $v->product_id)}}">{{ $v->product_name}}</a>
                                </p>
                                <p class="text-muted mb-0">
                                    SKU : {{$v->product_sku}}
                                </p>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <span class="badge badge-danger">Disabled</span>
                            </td>
                            <td class="font-size-sm">
                                Rp 50.000
                            </td>
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
            </div>

            <nav class="pagination pagination-sm justify-content-end">
                {{$product->links()}}
            </nav>
        </div>
    </div>
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
