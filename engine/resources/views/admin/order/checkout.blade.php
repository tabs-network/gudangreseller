@extends('admin._template.main')
@section('title', 'Produk')

@section('content')
<!-- Hero -->

<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill h3 my-2">
                PEMESANAN PRODUK
            </h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-alt">
                    <li class="breadcrumb-item">
                        <a href="{{route('admin.dashboard.index')}}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Pemesanan Produk</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
    <!-- Your Block -->
    <form action="{{route('admin.order.store')}}" method="post">
    @csrf
        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title">Products</h3>
            </div>
            <div class="block-content">
                <div class="table-responsive">
                    <table class="table table-borderless table-striped table-vcenter font-size-sm">
                        <thead>
                            <tr>
                                <th>Product Name</th>
                                <th class="text-center" style="width: 100px;">Ukuran</th>
                                <th class="text-center" style="width: 100px;">Jumlah</th>
                                <th class="text-right" style="width: 150px;">Harga Satuan</th>
                                <th class="text-right" style="width: 150px;">Harga Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach(\Cart::content() as $v)
                            <tr>
                                <td>{{$v->name}}</td>
                                <td class="text-center">{{$v->options->size}}</td>
                                <td class="text-center"><strong>{{$v->qty}}</strong></td>
                                <td class="text-right">Rp.{{number_format($v->price)}}</td>
                                <td class="text-right">Rp.{{number_format($v->price * $v->qty)}}</td>
                            </tr>
                            @endforeach
                            <tr class="table">
                                <td colspan="4" class="text-right text-uppercase"><strong>Ongkos Kirim:</strong></td>
                                <td class="text-right">
                                    <input type="text" class="form-control" name="order_shipping_charges" placeholder="Ongkos Kirim" value="0" id="ongkos_kirim" onchange="total()" style="text-align:right;">
                                </td>
                            </tr>
                            <tr class="table-success">
                                <td colspan="4" class="text-right text-uppercase"><strong>Total:</strong></td>
                                <td class="text-right">
                                    <input align="right" type="text" class="form-control" value="{{rupiah(\Cart::total())}}" id="total_all" style="text-align:right;" disabled>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- END Your Block -->
        <div class="block">
            <div class="block-header">
                <h3 class="block-title">Informasi Seller</h3>
            </div>
            <div class="block-content">
                <div class="form-group">
                    <label for="example-text-input">Seller</label>
                    <input type="text" class="form-control" name="order_name_seller" placeholder="Input Nama Seller" value="{{old('order_name_seller')}}">
                </div>
            </div>
        </div>
        <div class="block">
            <div class="block-header">
                <h3 class="block-title">PENERIMA</h3>
            </div>
            <div class="block-content">
                <div class="form-group">
                    <label for="example-text-input">Nama Penerima</label>
                    <input type="text" class="form-control" name="order_name_receiver" placeholder="Input Penerima" value="{{old('order_name_receiver')}}">
                </div>
                <div class="form-group">
                    <label for="example-textarea-input">Alamat</label>
                    <textarea class="form-control" name="alamat" rows="4" placeholder="Input Alamat Penerima">{{old('alamat')}}</textarea>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="example-text-input">Provinsi</label>
                            <input type="text" class="form-control" name="provinsi" placeholder="Input Provinsi" value="{{old('provinsi')}}">
                        </div>
                        <div class="form-group">
                            <label for="example-text-input">Kecamatan</label>
                            <input type="text" class="form-control" name="kecamatan" placeholder="Input Kecamatan" value="{{old('kecamatan')}}">
                        </div>
                        <div class="form-group">
                            <label for="example-text-input">No.HP</label>
                            <input type="text" class="form-control" name="order_phone_receiver" placeholder="Input Nomor HP" value="{{old('order_phone_receiver')}}">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="example-text-input">Kota</label>
                            <input type="text" class="form-control" name="kota" placeholder="Input Kota" value="{{old('kota')}}">
                        </div>
                        <div class="form-group">
                            <label for="example-text-input">Kode Pos</label>
                            <input type="text" class="form-control" name="kodepos" placeholder="Input Kode Pos" value="{{old('kodepos')}}">
                        </div>
                    </div>
                </div>
                <div class="form-group text-right">
                    <a href="{{route('admin.order.create')}}" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <div class="form-group">
                    <!-- Hidden Input -->
                    <textarea class="form-control" name="data_produk" rows="4" placeholder="Input Alamat Penerima" style="display:none;">
@foreach(\Cart::content() as $v)
✅{{$v->name}},{{$v->options->size}}
@endforeach
                    </textarea>
                </div>
            </div>
        </div>
    </form>
</div>
<!-- END Page Content -->
@endsection

@section('js')
<script type="text/javascript">
function total() {
    // function numberWithCommas(x) {
    //     return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    // }

    var ongkos_kirim = parseInt(document.getElementById('ongkos_kirim').value);
    var vtotal = {{\Cart::total()}};

    var jumlah_harga = ongkos_kirim + vtotal;

    document.getElementById('total_all').value = new Intl.NumberFormat().format(jumlah_harga);
    }
</script>
@endsection
