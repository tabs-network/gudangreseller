@extends('admin._template.main')
@section('title', 'Dashboard')

@section('content')
<img src="{{url('assets/dashboard/media/bg-1.jpg')}}" alt="" width="100%">

<div class="content">
    <div class="row">
        <div class="col-6 col-md-4">
            <div class="block block-link-shadow text-center" href="javascript:void(0)">
                <div class="block-content block-content-full">
                    <div class="font-size-h2 text-primary">200</div>
                </div>
                <div class="block-content py-2 bg-body-light">
                    <p class="font-w600 font-size-sm text-primary mb-0">
                        Total Produk
                    </p>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-4">
            <div class="block block-link-shadow text-center" href="javascript:void(0)">
                <div class="block-content block-content-full">
                    <div class="font-size-h2 text-primary">200</div>
                </div>
                <div class="block-content py-2 bg-body-light">
                    <p class="font-w600 font-size-sm text-primary mb-0">
                        Total Penjualan
                    </p>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-4">
            <div class="block block-link-shadow text-center" href="javascript:void(0)">
                <div class="block-content block-content-full">
                    <div class="font-size-h2 text-primary">200</div>
                </div>
                <div class="block-content py-2 bg-body-light">
                    <p class="font-w600 font-size-sm text-primary mb-0">
                        Omset
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection