@extends('admin._template.main')
@section('title', 'Kategori Produk')

@section('content')
<!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill h3 my-2">
                TAMBAH KATEGORI PRODUK
            </h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-alt">
                    <li class="breadcrumb-item">
                        <a href="{{route('admin.dashboard.index')}}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{route('admin.product.index')}}">Product</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Tambah Kategori Produk</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
    <!-- Your Block -->
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="block">
                <div class="block-content font-size-sm">
                    <form action="{{route('admin.productCat.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="example-text-input">Kategori</label>
                            <input type="text" class="form-control" name="product_cat_name" placeholder="Input Nama Kategori">
                        </div>
                        <div class="form-group">
                            <label for="example-text-input">Deskripsi</label>
                            <textarea class="form-control" rows="5" id="summernote" name="product_cat_desc" placeholder="Input Deksripsi"></textarea>
                        </div>
                        <h2 class="content-heading border-bottom mb-4 pb-2">META CONFIG</h2>
                        <div class="form-group">
                            <label for="example-text-input">Meta Title</label>
                            <input type="text" class="form-control" name="product_cat_mt_title" placeholder="Input Meta Title">
                        </div>
                        <div class="form-group">
                            <label for="example-text-input">Meta Deskripsi</label>
                            <textarea class="form-control" rows="5" id="summernote" name="product_cat_mt_desc" placeholder="Input Meta Deskripisi"></textarea>
                        </div>
                        <div class="form-group text-right">
                            <a href="{{route('admin.productCat.index')}}" class="btn btn-secondary">
                                Kembali
                            </a>
                            <button type="submit" class="btn btn-primary">
                                Submit
                            </button>
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
<script src="{{url('assets/dashboard/js/plugin/bootstrap-notify/bootstrap-notify.min.js')}}"></script>

<script>
    @if($errors -> any())
    @foreach($errors -> all() as $error)
    $.notify({
        title: '<strong>ERROR :</strong>',
        message: '{{ $error }}',
    }, {
        type: 'danger'
    });
    @endforeach
    @endif
</script>
@endsection