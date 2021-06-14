@extends('admin._template.main')
@section('title', 'Produk')

@section('content')
<!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill h3 my-2">
                TAMBAH PRODUK
            </h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-alt">
                    <li class="breadcrumb-item">
                        <a href="{{route('admin.dashboard.index')}}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{route('admin.product.index')}}">Product</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Tambah Produk</li>
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
            <form action="{{route('admin.product.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="block">
                    <div class="block-header">
                        <h3 class="block-title">Upload Produk</h3>
                    </div>
                    <div class="block-content">
                        <div class="form-group">
                            <label>Cover Produk</label>
                            <div class="custom-file">
                                <!-- Populating custom file input label with the selected filename (data-toggle="custom-file-input" is initialized in Helpers.coreBootstrapCustomFileInput()) -->
                                <input type="file" class="custom-file-input js-custom-file-input-enabled" data-toggle="custom-file-input" id="example-file-input-custom" name="product_cover">
                                <label class="custom-file-label" for="example-file-input-custom">Choose file</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block">
                    <div class="block-header">
                        <h3 class="block-title">Informasi Produk</h3>
                    </div>
                    <div class="block-content">
                        <div class="form-group">
                            <label for="example-text-input">Nama Produk</label>
                            <input type="text" class="form-control" name="product_name" value="{{old('product_name')}}" placeholder="Contoh: Sepatu Pria (Jenis/Kategori Produk) + Tokostore (Merek) + Kanvas Hitam (Keterangan)">
                        </div>
                        <div class="form-group">
                            <label for="example-select">Kategori</label>
                            <select class="form-control select2" name="product_gender_id">
                                @foreach($product_cat as $v)
                                <option value="{{ $v->product_cat_id }}">{{ $v->product_cat_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="example-select">Gender</label>
                            <select class="form-control select2" name="product_cat_id">
                                @foreach($product_gender as $v)
                                <option value="{{ $v->product_gender_id }}">{{ $v->product_gender_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="block">
                    <div class="block-header">
                        <h3 class="block-title">Detail Produk</h3>
                    </div>
                    <div class="block-content">
                        <div class="form-group">
                            <label for="example-textarea-input">Deskripsi Produk</label>
                            <textarea class="form-control" name="product_desc" rows="8"
                                placeholder="Sepatu Sneakers Pria Tokostore Kanvas Hitam Seri C28B

- Model simple
- Nyaman Digunakan
- Tersedia warna hitam
- Sole PVC (injection shoes) yang nyaman dan awet untuk digunakan sehari - hari

Bahan:
Upper: Semi Leather (kulit tidak pecah-pecah)
Sole: Premium Rubber Sole

Ukuran
39 : 25,5 cm
40 : 26 cm
41 : 26.5 cm
42 : 27 cm
43 : 27.5 - 28 cm

Edisi terbatas dari Tokostore dengan model baru dan trendy untukmu. Didesain untuk bisa dipakai dalam berbagai acara. Sangat nyaman saat dipakai sehingga dapat menunjang penampilan dan kepercayaan dirimu. Beli sekarang sebelum kehabisan!">{{old('product_desc')}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="example-text-input">URL Video Product</label>
                            <input type="text" class="form-control" name="product_video" value="{{old('product_video')}}" placeholder="Input Video Youtube URL">
                        </div>
                    </div>
                </div>
                <div class="block">
                    <div class="block-header">
                        <h3 class="block-title">Harga Produk</h3>
                    </div>
                    <div class="block-content">
                        <div class="form-group">
                            <label for="example-text-input">Minimum Pemesanan</label>
                            <input type="text" class="form-control" name="product_min_order" value="{{old('product_min_order')}}" placeholder="Input Minimum Pesanan">
                        </div>
                        <div class="form-group">
                            <label>Harga Pasar</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        Rp
                                    </span>
                                </div>
                                <input type="text" class="form-control" name="product_price" value="{{old('product_price')}}" placeholder="Input Harga Pasar">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Harga Diskon</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Rp</span>
                                </div>
                                <input type="text" class="form-control" name="product_disc_price" value="{{old('product_disc_price')}}" placeholder="Input Harga Diskon">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block">
                    <div class="block-header">
                        <h3 class="block-title">Pengelolaan Produk</h3>
                    </div>
                    <div class="block-content">
                        <div class="form-group">
                            <label for="example-text-input">SKU</label>
                            <input type="text" class="form-control" name="product_sku" value="{{old('product_sku')}}" placeholder="Input SKU">
                        </div>
                        <div class="form-group">
                            <label for="example-select">Tipe Produk</label>
                            <select class="form-control select2" name="product_type_id">\
                                @foreach($product_type as $v)
                                <option value="{{ $v->product_type_id }}">{{ $v->product_type_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="block">
                    <div class="block-header">
                        <h3 class="block-title">Pengaturan SEO</h3>
                    </div>
                    <div class="block-content">
                        <div class="form-group">
                            <label for="example-text-input">Meta Title</label>
                            <input type="text" class="form-control" name="product_mt_title" value="{{old('product_mt_title')}}" placeholder="Input Meta Title">
                        </div>
                        <div class="form-group">
                            <label for="example-textarea-input">Meta Deksripsi</label>
                            <textarea class="form-control" name="product_mt_desc" rows="4" placeholder="Input Meta Deskripsi">{{old('product_mt_desc')}}</textarea>
                        </div>
                    </div>
                </div>
                <div class="block">
                    <div class="block-content text-right">
                        <div class="form-group">
                            <a href="{{route('admin.product.index')}}" type="submit" class="btn btn-secondary">Kembali</a>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
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
