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
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Kode Transaksi : {{$order->order_transaction_code}}</h3>
        </div>
        <div class="block-content">
            <div class="table-responsive">
                <table class="table table-borderless table-striped table-vcenter font-size-sm">
                    <thead>
                        <tr>
                            <th>Product Name</th>
                            <th class="text-center">Stock</th>
                            <th class="text-center">QTY</th>
                            <th class="text-right" style="width: 10%;">UNIT COST</th>
                            <th class="text-right" style="width: 10%;">PRICE</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($order_item as $v)
                        <tr>
                            <td><a href="#">{{$v->product->product_name}}</a></td>
                            <td class="text-center">50</td>
                            <td class="text-center"><strong>1</strong></td>
                            <td class="text-right">$59,00</td>
                            <td class="text-right">Rp.{{number_format($v->order_item_price)}}</td>
                        </tr>
                        @endforeach
                        <tr>
                            <td colspan="4" class="text-right"><strong>Ongkos Kirim:</strong></td>
                            <td class="text-right">Rp.{{number_format($order->order_shipping_charges)}}</td>
                        </tr>
                        <tr class="table-success">
                            <td colspan="4" class="text-right text-uppercase"><strong>Total Due:</strong></td>
                            <td class="text-right"><strong>Rp.{{number_format($order->order_total_cost + $order->order_shipping_charges)}}</strong></td>
                        </tr>
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

@endsection
