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
            <h3 class="block-title">Products</h3>
        </div>
        <div class="block-content">
            <div class="table-responsive">
                <table class="table table-borderless table-striped table-vcenter font-size-sm">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 100px;">ID</th>
                            <th>Product Name</th>
                            <th class="text-center">Stock</th>
                            <th class="text-center">QTY</th>
                            <th class="text-right" style="width: 10%;">UNIT COST</th>
                            <th class="text-right" style="width: 10%;">PRICE</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center"><a href="be_pages_ecom_product_edit.php"><strong>PID.965</strong></a></td>
                            <td><a href="be_pages_ecom_product_edit.php">Dark Souls III</a></td>
                            <td class="text-center">50</td>
                            <td class="text-center"><strong>1</strong></td>
                            <td class="text-right">$59,00</td>
                            <td class="text-right">$59,00</td>
                        </tr>
                        <tr>
                            <td class="text-center"><a href="be_pages_ecom_product_edit.php"><strong>PID.755</strong></a></td>
                            <td><a href="be_pages_ecom_product_edit.php">Control</a></td>
                            <td class="text-center">68</td>
                            <td class="text-center"><strong>1</strong></td>
                            <td class="text-right">$59,00</td>
                            <td class="text-right">$59,00</td>
                        </tr>
                        <tr>
                            <td class="text-center"><a href="be_pages_ecom_product_edit.php"><strong>PID.235</strong></a></td>
                            <td><a href="be_pages_ecom_product_edit.php">Forza Motorsport 7</a></td>
                            <td class="text-center">23</td>
                            <td class="text-center"><strong>1</strong></td>
                            <td class="text-right">$59,00</td>
                            <td class="text-right">$59,00</td>
                        </tr>
                        <tr>
                            <td colspan="5" class="text-right"><strong>Total Price:</strong></td>
                            <td class="text-right">$177,00</td>
                        </tr>
                        <tr>
                            <td colspan="5" class="text-right"><strong>Total Paid:</strong></td>
                            <td class="text-right">$177,00</td>
                        </tr>
                        <tr class="table-success">
                            <td colspan="5" class="text-right text-uppercase"><strong>Total Due:</strong></td>
                            <td class="text-right"><strong>$0,00</strong></td>
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
