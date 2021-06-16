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
    <div class="row">
        <div class="col-6 col-lg-3">
            <a class="block block-link-shadow text-center" href="{{route('admin.order.create')}}">
                <div class="block-content block-content-full">
                    <div class="font-size-h2 text-primary">
                        <i class="fa fa-plus"></i>
                    </div>
                </div>
                <div class="block-content py-2 bg-body-light">
                    <p class="font-w600 font-size-sm text-primary mb-0">
                        Tambah Pesanan
                    </p>
                </div>
            </a>
        </div>
        <div class="col-6 col-lg-3">
            <div class="block block-link-shadow text-center" href="javascript:void(0)">
                <div class="block-content block-content-full">
                    <div class="font-size-h2 text-primary">asd</div>
                </div>
                <div class="block-content py-2 bg-body-light">
                    <p class="font-w600 font-size-sm text-primary mb-0">
                        Total Pesanan
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-white p-3 push">
        <!-- Toggle Navigation -->
        <div class="d-lg-none">
            <!-- Class Toggle, functionality initialized in Helpers.coreToggleClass() -->
            <button type="button" class="btn btn-block btn-light d-flex justify-content-between align-items-center" data-toggle="class-toggle" data-target="#horizontal-navigation-hover-normal" data-class="d-none">
                Menu - Hover Normal
                <i class="fa fa-bars"></i>
            </button>
        </div>
        <!-- END Toggle Navigation -->

        <!-- Navigation -->
        <div id="horizontal-navigation-hover-normal" class="d-none d-lg-block mt-2 mt-lg-0">
            <ul class="nav-main nav-main-horizontal nav-main-hover">
                <li class="nav-main-item">
                    <a class="nav-main-link active" href="be_ui_navigation_horizontal.php">
                        <span class="nav-main-link-name">Semua Pesanan</span>
                        <span class="nav-main-link-badge badge badge-pill badge-primary">5</span>
                    </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link active" href="be_ui_navigation_horizontal.php">
                        <span class="nav-main-link-name">Pesanan Baru</span>
                        <span class="nav-main-link-badge badge badge-pill badge-primary">5</span>
                    </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link active" href="be_ui_navigation_horizontal.php">
                        <span class="nav-main-link-name">Siap Dikirim</span>
                        <span class="nav-main-link-badge badge badge-pill badge-primary">5</span>
                    </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link active" href="be_ui_navigation_horizontal.php">
                        <span class="nav-main-link-name">Dalam Pengiriman</span>
                        <span class="nav-main-link-badge badge badge-pill badge-primary">5</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- END Navigation -->
    </div>
    <div class="block">
        <div class="block-content">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-vcenter">
                    <thead>
                        <tr>
                            <th>KODE TRANSAKSI</th>
                            <th style="width: 15%;">Status</th>
                            <th style="width: 15%;">Reseller</th>
                            <th style="width: 15%;">Penerima</th>
                            <th style="width: 15%;">Harga</th>
                            <th class="text-center" style="width: 100px;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($order as $v)
                        <tr>
                            <td class="font-w600 font-size-sm">
                                {{$v->order_transaction_code}}
                            </td>
                            <td>
                                <span class="badge badge-info">{{$v->order_status}}</span>
                            </td>
                            <td class="font-w600 font-size-sm">
                                {{$v->order_name_reseller}}
                            </td>
                            <td class="font-w600 font-size-sm">
                                {{$v->order_name_receiver}}
                            </td>
                            <td class="font-w600 font-size-sm">
                                Rp.{{number_format($v->order_total_cost + $v->order_shipping_charges)}}
                            </td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-primary js-tooltip-enabled" data-toggle="tooltip" title="" data-original-title="Edit">
                                        <i class="fa fa-fw fa-pencil-alt"></i>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-primary js-tooltip-enabled" data-toggle="tooltip" title="" data-original-title="Delete">
                                        <i class="fa fa-fw fa-times"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
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
