@extends('admin._template.main')
@section('title', 'Produk')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-6 col-lg-3">
                <a class="block block-rounded block-link-shadow text-center" href="be_pages_ecom_product_edit.html">
                    <div class="block-content block-content-full">
                        <div class="font-size-h2 text-success">
                            <i class="fa fa-plus"></i>
                        </div>
                    </div>
                    <div class="block-content py-2 bg-body-light">
                        <p class="font-w600 font-size-sm text-success mb-0">
                            Add New
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-lg-3">
                <a class="block block-rounded block-link-shadow text-center" href="be_pages_ecom_dashboard.html">
                    <div class="block-content block-content-full">
                        <div class="font-size-h2 text-dark">260</div>
                    </div>
                    <div class="block-content py-2 bg-body-light">
                        <p class="font-w600 font-size-sm text-muted mb-0">
                            Total Seller
                        </p>
                    </div>
                </a>
            </div>
        </div>

        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">SELLER</h3>
                <div class="block-options">
                    <div class="dropdown">
                        <button type="button" class="btn-block-option" id="dropdown-ecom-filters" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Filters <i class="fa fa-angle-down ml-1"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-ecom-filters">
                            <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                New
                                <span class="badge badge-success badge-pill">260</span>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                Out of Stock
                                <span class="badge badge-danger badge-pill">24</span>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                All
                                <span class="badge badge-primary badge-pill">14503</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-content">
                <!-- Search Form -->
                <form action="be_pages_ecom_products.html" method="POST" onsubmit="return false;">
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" class="form-control form-control-alt" id="one-ecom-products-search" name="one-ecom-products-search" placeholder="Cari">
                            <div class="input-group-append">
                                <span class="input-group-text bg-body border-0">
                                    <i class="fa fa-search"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- END Search Form -->

                <!-- All Products Table -->
                <div class="table-responsive">
                    <table class="table table-borderless table-striped table-vcenter">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 100px;">Seller</th>
                                <th class="d-none d-md-table-cell">Product</th>
                                <th class="d-none d-sm-table-cell text-center">Added</th>
                                <th>Status</th>
                                <th class="d-none d-sm-table-cell text-right">Value</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center font-size-sm">
                                    <a class="font-w600" href="be_pages_ecom_product_edit.html">
                                        <strong>Heru</strong>
                                    </a>
                                </td>
                                <td class="d-none d-md-table-cell font-size-sm">
                                    <a href="be_pages_ecom_product_edit.html">Product #35</a>
                                </td>
                                <td class="d-none d-sm-table-cell text-center font-size-sm">17/03/2019</td>
                                <td>
                                    <span class="badge badge-danger">Out of Stock</span>
                                </td>
                                <td class="text-right d-none d-sm-table-cell font-size-sm">
                                    <strong>$30,00</strong>
                                </td>
                                <td class="text-center font-size-sm">
                                    <a class="btn btn-sm btn-alt-secondary js-tooltip-enabled" href="be_pages_ecom_product_edit.html" data-toggle="tooltip" title="" data-original-title="View">
                                        <i class="fa fa-fw fa-eye"></i>
                                    </a>
                                    <a class="btn btn-sm btn-alt-danger js-tooltip-enabled" href="javascript:void(0)" data-toggle="tooltip" title="" data-original-title="Delete">
                                        <i class="fa fa-fw fa-times text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- END All Products Table -->

                <!-- Pagination -->
                <nav aria-label="Photos Search Navigation">
                    <ul class="pagination pagination-sm justify-content-end mt-2">
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0)" tabindex="-1" aria-label="Previous">
                                Prev
                            </a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="javascript:void(0)">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0)">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0)">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0)">4</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0)" aria-label="Next">
                                Next
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- END Pagination -->
            </div>
        </div>
    </div>
@endsection