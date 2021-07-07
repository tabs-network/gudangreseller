@extends('admin._template.main')
@section('title', 'Kategori Produk')

@section('content')
<!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill h3 my-2">
                EDIT TIPE PRODUK
            </h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-alt">
                  <li class="breadcrumb-item">
                      <a href="{{route('admin.dashboard.index')}}">Dashboard</a>
                  </li>
                  <li class="breadcrumb-item">
                      <a href="{{route('admin.product.index')}}">Product</a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">Edit Tipe Produk</li>
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
                  <form action="{{route('admin.productType.update', $product_type->product_type_id)}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  @method('put')
                      <div class="form-group">
                          <label for="example-text-input">Kategori</label>
                          <input type="text" class="form-control" name="product_type_name" placeholder="Input Nama Kategori" value="{{$product_type->product_type_name}}">
                      </div>
                      <div class="form-group text-right">
                          <a href="{{route('admin.productType.index')}}" class="btn btn-secondary">
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

@endsection
