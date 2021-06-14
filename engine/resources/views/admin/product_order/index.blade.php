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
                    <li class="breadcrumb-item active" aria-current="page">Produk</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
    <!-- Your Block -->

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
