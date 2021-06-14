@extends('admin._template.main')
@section('title', 'Kategori Produk')

@section('content')
<!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill h3 my-2">
                GENDER PRODUK
            </h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-alt">
                    <li class="breadcrumb-item">
                        <a href="{{route('admin.dashboard.index')}}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{route('admin.product.index')}}">Product</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Gender Produk</li>
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
            <a class="block block-link-shadow text-center" href="{{route('admin.productGender.create')}}">
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
                    <div class="font-size-h2 text-primary">5</div>
                </div>
                <div class="block-content py-2 bg-body-light">
                    <p class="font-w600 font-size-sm text-primary mb-0">
                        Total Produk
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Your Block -->
    <div class="block">
        <div class="block-header">
            <h3 class="block-title">
                GENDER PRODUK
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
            <a href="{{route('admin.productGender.create')}}" class="btn btn-primary mr-1 mb-3">
                <i class="fa fa-fw fa-plus"></i>
            </a>
            <table class="table table-bordered table-striped table-vcenter">
                <thead>
                    <tr>
                        <th>KATEGORI</th>
                        <th class="text-center" style="width: 100px;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($product_gender as $v)
                    <tr>
                        <td class="font-w600 font-size-sm">
                            <a href="be_pages_generic_profile.php">{{$v->product_gender_name}}</a>
                        </td>
                        <td class="text-center">
                            <div class="dropdown dropleft">
                                <button type="button" class="btn btn-sm btn-primary" id="dropdown-default-primary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="si si-settings"></i>
                                </button>
                                <div class="dropdown-menu font-size-sm" aria-labelledby="dropdown-default-primary" style="">
                                    <a href="{{route('admin.productGender.edit', $v->product_gender_id)}}" class="dropdown-item">
                                        <i class="si si-pencil mr-2"></i>Edit
                                    </a>
                                    <form action="{{route('admin.productGender.destroy', $v->product_gender_id)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                        <button type="submit" class="dropdown-item">
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
<script src="{{url('assets/dashboard/js/plugin/bootstrap-notify/bootstrap-notify.min.js')}}"></script>
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
