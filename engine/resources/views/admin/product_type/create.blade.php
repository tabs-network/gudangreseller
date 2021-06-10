@extends('admin._template.main')
@section('title', 'Tipe Produk')

@section('content')
<!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill h3 my-2">
                TAMBAH TIPE PRODUK
            </h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-alt">
                  <li class="breadcrumb-item">
                      <a href="{{route('admin.dashboard.index')}}">Dashboard</a>
                  </li>
                  <li class="breadcrumb-item">
                      <a href="{{route('admin.product.index')}}">Product</a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">Tambah Tipe Produk</li>
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
                  <form action="{{route('admin.productType.store')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                      <div class="form-group">
                          <label for="example-text-input">Tipe Produk</label>
                          <input type="text" class="form-control" name="product_type_name" placeholder="Input Tipe Produk" value="{{ old('product_type_name') }}">
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
<script src="{{url('assets/dashboard/js/plugin/bootstrap-notify/bootstrap-notify.min.js')}}"></script>
<script>
    @if($errors->any())
    @foreach($errors->all() as $error)
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
