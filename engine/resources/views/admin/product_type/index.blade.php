@extends('admin._template.main')
@section('title', 'Tipe Produk')

@section('content')
<!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill h3 my-2">
                TIPE PRODUK
            </h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-alt">
                    <li class="breadcrumb-item">
                        <a href="{{route('admin.dashboard.index')}}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{route('admin.product.index')}}">Product</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Tipe Produk</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
    <div class="row">
        <div class="col-6 col-lg-3">
            <a class="block block-link-shadow text-center" href="{{route('admin.productType.create')}}">
                <div class="block-content block-content-full">
                    <div class="font-size-h2 text-primary">
                        <i class="fa fa-plus"></i>
                    </div>
                </div>
                <div class="block-content py-2 bg-body-light">
                    <p class="font-w600 font-size-sm text-primary mb-0">
                        Tambah
                    </p>
                </div>
            </a>
        </div>
    </div>
    <!-- Your Block -->
    <div class="block">
        <div class="block-content font-size-sm">
            <form action="{{route('admin.product.search')}}" method="GET" role="search">
                <div class="form-row justify-content-end">
                    <div class="col-12 col-md-3 mb-2">
                        <div class="input-group">
                            <input type="text" class="form-control" name="key" placeholder="Cari">
                            <div class="input-group-prepend">
                                <button type="submit" class="btn btn-primary">
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
                        <th>TIPE PRODUK</th>
                        <th class="text-center" style="width: 100px;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($product_type as $v)
                    <tr>
                        <td class="font-w600 font-size-sm">
                            <a href="be_pages_generic_profile.php">{{ $v->product_type_name }}</a>
                        </td>
                        <td class="text-center">
                            <div class="dropdown dropleft">
                                <button type="button" class="btn btn-sm btn-primary" id="dropdown-default-primary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="si si-settings"></i>
                                </button>
                                <div class="dropdown-menu font-size-sm" aria-labelledby="dropdown-default-primary" style="">
                                    <a href="{{ route('admin.productType.edit', $v->product_type_id) }}" class="dropdown-item" href="javascript:void(0)">
                                        <i class="si si-pencil mr-2"></i>Edit
                                    </a>
                                    <form action="{{route('admin.productType.destroy', $v->product_type_id)}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="dropdown-item" href="javascript:void(0)">
                                            <i class="si si-trash mr-2"></i>Delete
                                        </button>
                                    </form>
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

@section('js')

@endsection
