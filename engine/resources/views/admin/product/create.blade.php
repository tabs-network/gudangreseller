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
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="">
                <div class="block">
                    <div class="block-header">
                        <h3 class="block-title">Upload Produk</h3>
                    </div>
                    <div class="block-content">
                        <div class="form-group">
                            <label>Cover Produk</label>
                            <div class="custom-file">
                                <!-- Populating custom file input label with the selected filename (data-toggle="custom-file-input" is initialized in Helpers.coreBootstrapCustomFileInput()) -->
                                <input type="file" class="custom-file-input js-custom-file-input-enabled" data-toggle="custom-file-input" id="example-file-input-custom" name="example-file-input-custom">
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
                            <input type="text" class="form-control" id="example-text-input" name="example-text-input" placeholder="Contoh: Sepatu Pria (Jenis/Kategori Produk) + Tokostore (Merek) + Kanvas Hitam (Keterangan)">
                        </div>
                        <div class="form-group">
                            <label for="example-select">Kategori</label>
                            <select class="form-control" id="example-select" name="example-select">
                                <option value="0">Pilih Kategori</option>
                                <option value="1">Option #1</option>
                                <option value="2">Option #2</option>
                                <option value="3">Option #3</option>
                                <option value="4">Option #4</option>
                                <option value="5">Option #5</option>
                                <option value="6">Option #6</option>
                                <option value="7">Option #7</option>
                                <option value="8">Option #8</option>
                                <option value="9">Option #9</option>
                                <option value="10">Option #10</option>
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
                            <textarea class="form-control" id="example-textarea-input" name="example-textarea-input" rows="8"
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

Edisi terbatas dari Tokostore dengan model baru dan trendy untukmu. Didesain untuk bisa dipakai dalam berbagai acara. Sangat nyaman saat dipakai sehingga dapat menunjang penampilan dan kepercayaan dirimu. Beli sekarang sebelum kehabisan!"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="example-text-input">URL Video Product</label>
                            <input type="text" class="form-control" id="example-text-input" name="example-text-input" placeholder="Text Input">
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
                            <input type="text" class="form-control" id="example-text-input" name="example-text-input" placeholder="Text Input">
                        </div>
                        <div class="form-group">
                            <label>Harga Pasar</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        Rp
                                    </span>
                                </div>
                                <input type="text" class="form-control" id="example-group1-input3" name="example-group1-input3">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Harga Diskon</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        Rp
                                    </span>
                                </div>
                                <input type="text" class="form-control" id="example-group1-input3" name="example-group1-input3">
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
                            <label for="example-text-input">Stok</label>
                            <input type="text" class="form-control" id="example-text-input" name="example-text-input" placeholder="Text Input">
                        </div>
                        <div class="form-group">
                            <label for="example-text-input">SKU</label>
                            <input type="text" class="form-control" id="example-text-input" name="example-text-input" placeholder="Text Input">
                        </div>
                        <div class="form-group">
                            <label for="example-select">Tipe Produk</label>
                            <select class="form-control" id="example-select" name="example-select">
                                <option value="0">Please select</option>
                                <option value="1">Option #1</option>
                                <option value="2">Option #2</option>
                                <option value="3">Option #3</option>
                                <option value="4">Option #4</option>
                                <option value="5">Option #5</option>
                                <option value="6">Option #6</option>
                                <option value="7">Option #7</option>
                                <option value="8">Option #8</option>
                                <option value="9">Option #9</option>
                                <option value="10">Option #10</option>
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
                            <input type="text" class="form-control" id="example-text-input" name="example-text-input" placeholder="Text Input">
                        </div>
                        <div class="form-group">
                            <label for="example-textarea-input">Meta Deksripsi</label>
                            <textarea class="form-control" id="example-textarea-input" name="example-textarea-input" rows="4" placeholder="Textarea content.."></textarea>
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
