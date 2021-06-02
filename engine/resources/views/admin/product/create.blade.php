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
        <div class="block-content font-size-sm">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="example-text-input">Nama Produk</label>
                        <input type="text" class="form-control" name="product_name" placeholder="Input Nama Produk">
                    </div>
                    <div class="form-group">
                        <label for="example-text-input">Kategori</label>
                        <select class="form-control" id="example-select" name="product_cat_id">
                                @foreach($product_cat as $v)
                                <option value="{{ $v->product_cat_id }}">{{ $v->product_cat_name }}</option>
                                @endforeach
                            </select>
                    </div>
                    <div class="form-group">
                        <label for="example-text-input">Deskripsi</label>
                        <textarea class="form-control" id="example-textarea-input" name="example-textarea-input" rows="4" placeholder="Textarea content.."></textarea>
                    </div>
                    <div class="form-group">
                        <label for="example-text-input">Cover Produk</label>
                        <input type="text" class="form-control" name="product_cat_name" placeholder="Input Nama Kategori">
                    </div>
                    <div class="form-group">
                        <label for="example-text-input">Url Video</label>
                        <input type="text" class="form-control" name="product_cat_name" placeholder="Input Nama Kategori">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="example-text-input">Minimal Pembelian</label>
                        <input type="text" class="form-control" name="product_cat_name" placeholder="Input Nama Kategori">
                    </div>
                    <div class="form-group">
                        <label for="example-text-input">Harga</label>
                        <input type="text" class="form-control" name="product_cat_name" placeholder="Input Nama Kategori">
                    </div>
                    <div class="form-group">
                        <label for="example-text-input">Diskon</label>
                        <input type="text" class="form-control" name="product_cat_name" placeholder="Input Nama Kategori">
                    </div>
                    <div class="form-group">
                        <label for="example-text-input">Stok</label>
                        <input type="text" class="form-control" name="product_cat_name" placeholder="Input Nama Kategori">
                    </div>
                    <div class="form-group">
                        <label for="example-text-input">SKU</label>
                        <input type="text" class="form-control" name="product_cat_name" placeholder="Input Nama Kategori">
                    </div>
                    <div class="form-group">
                        <label for="example-text-input">Tipe Produk</label>
                        <input type="text" class="form-control" name="product_cat_name" placeholder="Input Nama Kategori">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Your Block -->
</div>
<!-- END Page Content -->
@endsection
