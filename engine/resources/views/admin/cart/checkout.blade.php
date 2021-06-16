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
                                <th class="text-center" style="width: 100px;">ID</th>
                                <th>Product Name</th>
                                <th class="text-center">Ukuran</th>
                                <th class="text-center">QTY</th>
                                <th class="text-right" style="width: 10%;">UNIT COST</th>
                                <th class="text-right" style="width: 10%;">PRICE</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach(\Cart::content() as $v)
                            <tr>
                                <td class="text-center"><a href="be_pages_ecom_product_edit.php"><strong>PID.965</strong></a></td>
                                <td><a href="#">{{$v->name}}</a></td>
                                <td class="text-center">{{$v->options->size}}</td>
                                <td class="text-center"><strong>{{$v->qty}}</strong></td>
                                <td class="text-right">$59,00</td>
                                <td class="text-right">Rp.{{number_format($v->price)}}</td>
                            </tr>
                            @endforeach
                            <tr class="table">
                                <td colspan="5" class="text-right text-uppercase"><strong>Ongkos Kirim:</strong></td>
                                <td class="text-right">
                                    <input type="text" class="form-control" name="order_shipping_charges" placeholder="Ongkos Kirim">
                                </td>
                            </tr>
                            <tr class="table-success">
                                <td colspan="5" class="text-right text-uppercase"><strong>Total Due:</strong></td>
                                <td class="text-right"><strong>Rp.{{\Cart::total()}}</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- END Your Block -->
        <div class="block">
            <div class="block-header">
                <h3 class="block-title">Informasi Reseller</h3>
            </div>
            <div class="block-content">
                <div class="form-group">
                    <label for="example-text-input">Reseller</label>
                    <input type="text" class="form-control" name="order_name_reseller" placeholder="Input Nama Reseller">
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
                    <input type="text" class="form-control" name="order_name_receiver" placeholder="Input Penerima">
                </div>
                <div class="form-group">
                    <label for="example-textarea-input">Alamat</label>
                    <textarea class="form-control" name="alamat" rows="4" placeholder="Input Alamat Penerima"></textarea>
                </div>
                <div class="form-group">
                    <label for="example-textarea-input">Cek Data</label>
                    <textarea class="form-control" name="data" rows="4" placeholder="Input Alamat Penerima" style="display:none;">
@foreach(\Cart::content() as $v)
{{$v->name}}
@endforeach
                    </textarea>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="example-text-input">Provinsi</label>
                            <input type="text" class="form-control" name="provinsi" placeholder="Input Provinsi">
                        </div>
                        <div class="form-group">
                            <label for="example-text-input">Kecamatan</label>
                            <input type="text" class="form-control" name="kecamatan" placeholder="Input Kecamatan">
                        </div>
                        <div class="form-group">
                            <label for="example-text-input">No.HP</label>
                            <input type="text" class="form-control" name="order_phone_receiver" placeholder="Input Nomor HP">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="example-text-input">Kota</label>
                            <input type="text" class="form-control" name="kota" placeholder="Input Kota">
                        </div>
                        <div class="form-group">
                            <label for="example-text-input">Kode Pos</label>
                            <input type="text" class="form-control" name="kodepos" placeholder="Input Kode Pos">
                        </div>
                    </div>
                </div>
                <div class="form-group text-right">
                    <a href="#" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </form>
</div>
<!-- END Page Content -->
@endsection

@section('js')
<script src="{{url('assets/dashboard/js/plugin/bootstrap-notify/bootstrap-notify.min.js')}}"></script>

<script>
    @if(session('status'))
    $.notify({
        title: '<strong>SUKSES</strong><br>',
        message: '{{ session('
        status ') }}'
    }, {
        type: 'success'
    });
    @endif
</script>
@endsection
