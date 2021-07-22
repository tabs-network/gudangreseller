<div class="content-header bg-white-5">
    <a class="font-w600 text-dual" href="index.html">
        <span class="smini-visible">
            <i class="fa fa-circle-notch text-primary"></i>
        </span>
        <span class="smini-hide font-size-h5 tracking-wider">
            Gudang<span class="font-w400">Reseller</span>
        </span>
    </a>

    <div>
        <a class="d-lg-none btn btn-sm btn-dual ml-1" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
            <i class="fa fa-fw fa-times"></i>
        </a>
    </div>
</div>

<div class="js-sidebar-scroll">
    <div class="content-side">
        <ul class="nav-main">
            <li class="nav-main-item">
                <a class="nav-main-link {{ (request()->RouteIs('admin.dashboard.*'))  ? 'active' : '' }}" href="{{ route('admin.dashboard.index') }}">
                    <i class="nav-main-link-icon si si-speedometer"></i>
                    <span class="nav-main-link-name">Dashboard</span>
                </a>
            </li>
            <li class="nav-main-item">
                <a class="nav-main-link {{ (request()->RouteIs('admin.seller.*')) ? 'active' : '' }}" href="{{ route('admin.seller.index') }}">
                    <i class="nav-main-link-icon si si-user"></i>
                    <span class="nav-main-link-name">Seller</span>
                </a>
            </li>
            <li class="nav-main-item {{(request()->RouteIs(['admin.product.*', 'admin.productCat.*', 'admin.productType.*', 'admin.productGender.*']))  ? 'open' : ''}}">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                    <i class="nav-main-link-icon fa fa-box"></i>
                    <span class="nav-main-link-name">Product</span>
                </a>
                <ul class="nav-main-submenu">
                    <li class="nav-main-item">
                        <a class="nav-main-link {{(request()->RouteIs('admin.product.*'))  ? 'active' : ''}}" href="{{ route('admin.product.index') }}">
                            <span class="nav-main-link-name">Produk</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link {{(request()->RouteIs('admin.productCat.*'))  ? 'active' : ''}}" href="{{ route('admin.productCat.index') }}">
                            <span class="nav-main-link-name">Kategori Produk</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link {{(request()->RouteIs('admin.productType.*'))  ? 'active' : ''}}" href="{{ route('admin.productType.index') }}">
                            <span class="nav-main-link-name">Tipe Produk</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link {{(request()->RouteIs('admin.productGender.*'))  ? 'active' : ''}}" href="{{ route('admin.productGender.index') }}">
                            <span class="nav-main-link-name">Gender Produk</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-main-heading">User Interface</li>
            <li class="nav-main-item">
                <a class="nav-main-link {{ (request()->RouteIs('admin.order.*'))  ? 'active' : '' }}" href="{{ route('admin.order.index') }}">
                    <i class="nav-main-link-icon si si-speedometer"></i>
                    <span class="nav-main-link-name">Pemesanan</span>
                </a>
            </li>
            <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                    <i class="nav-main-link-icon si si-energy"></i>
                    <span class="nav-main-link-name">Konfigurasi Halaman</span>
                </a>
                <ul class="nav-main-submenu">
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="be_blocks_styles.html">
                            <span class="nav-main-link-name">Home</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="be_blocks_options.html">
                            <span class="nav-main-link-name">Kategori</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                    <i class="nav-main-link-icon si si-energy"></i>
                    <span class="nav-main-link-name">Blocks</span>
                </a>
                <ul class="nav-main-submenu">
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="be_blocks_styles.html">
                            <span class="nav-main-link-name">Styles</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="be_blocks_options.html">
                            <span class="nav-main-link-name">Options</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="be_blocks_forms.html">
                            <span class="nav-main-link-name">Forms</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="be_blocks_themed.html">
                            <span class="nav-main-link-name">Themed</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="be_blocks_api.html">
                            <span class="nav-main-link-name">API</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>