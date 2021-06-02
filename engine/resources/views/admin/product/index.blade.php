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
        <div class="block-header">
            <h3 class="block-title">
                PRODUK
            </h3>
            <div class="block-options">
              <div class="input-group">
                  <input type="text" class="form-control" id="example-group3-input1" name="example-group3-input1" placeholder="Cari">
                  <div class="input-group-prepend">
                      <span type="button" class="btn btn-primary">
                          <i class="fa fa-search mr-1"></i>
                      </span>
                  </div>
              </div>
            </div>
        </div>
        <div class="block-content font-size-sm">
          <a href="{{route('admin.product.create')}}" class="btn btn-primary mr-1 mb-3">
              <i class="fa fa-fw fa-plus"></i>
          </a>
          <table class="table table-bordered table-striped table-vcenter">
              <thead>
                  <tr>
                      <th>PRODUK</th>
                      <th class="text-center" style="width: 100px;">Actions</th>
                  </tr>
              </thead>
              <tbody>

                  <tr>
                      <td class="font-w600 font-size-sm">
                          <a href="be_pages_generic_profile.php">as</a>
                      </td>
                      <td class="text-center">
                          <div class="btn-group">
                              <a href="#" class="btn btn-sm btn-primary js-tooltip-enabled" data-toggle="tooltip" title="" data-original-title="Edit">
                                  <i class="fa fa-fw fa-pencil-alt"></i>
                              </a>
                              <button type="button" class="btn btn-sm btn-primary js-tooltip-enabled" data-toggle="tooltip" title="" data-original-title="Delete">
                                  <i class="fa fa-fw fa-times"></i>
                              </button>
                          </div>
                      </td>
                  </tr>
              </tbody>
          </table>
        </div>
    </div>
    <!-- END Your Block -->
</div>
<!-- END Page Content -->
@endsection
