@extends('admin._template.main')
@section('title', 'Kategori Produk')

@section('content')
<!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill h3 my-2">
                EDIT KATEGORI PRODUK
            </h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-alt">
                    <li class="breadcrumb-item">
                        <a href="{{route('admin.dashboard.index')}}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{route('admin.product.index')}}">Product</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Kategori Produk</li>
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
                          <label for="example-text-input">Nama Kategori</label>
                          <input type="text" class="form-control" name="product_cat_name" placeholder="Input Nama Kategori" value="{{ $product_cat->product_cat_name }}">
                      </div>
                      <div class="form-group">
                              <label>Produk Gambar</label>
                              <div class="custom-file">
                                  <!-- Populating custom file input label with the selected filename (data-toggle="custom-file-input" is initialized in Helpers.coreBootstrapCustomFileInput()) -->
                                  <input type="file" class="custom-file-input js-custom-file-input-enabled" data-toggle="custom-file-input" id="example-file-input-custom" name="product_cat_img">
                                  <label class="custom-file-label" for="example-file-input-custom" style="overflow-x: hidden;"></label>
                              </div>
                          </div>
                      <div class="form-group">
                          <label for="example-text-input">Deskripsi</label>
                          <textarea class="form-control" id="summernote" name="product_cat_desc" placeholder="Input Deksripsi">{{ $product_cat->product_cat_desc }}</textarea>
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
