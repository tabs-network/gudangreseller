<!-- Side Header -->
<div class="content-header bg-white-5">
    <!-- Logo -->
    <a class="font-w600 text-dual" href="">
        <i class="fa fa-circle-notch text-primary"></i>
        <span class="smini-hide">
            <span class="font-w700 font-size-h5">ne</span>
        </span>
    </a>
    <!-- END Logo -->

    <!-- Options -->
    <div>
        <!-- Close Sidebar, Visible only on mobile screens -->
        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
        <a class="d-lg-none text-dual ml-3" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
            <i class="fa fa-times"></i>
        </a>
        <!-- END Close Sidebar -->
    </div>
    <!-- END Options -->
</div>
<!-- END Side Header -->

<!-- Side Navigation -->
<div class="content-side content-side-full">
    <ul class="nav-main">
        <li class="nav-main-item">
            <a class="nav-main-link {{(request()->RouteIs('admin.dashboard.*'))  ? 'active' : ''}}" href="{{ route('admin.dashboard.index') }}">
                <i class="nav-main-link-icon si si-speedometer"></i>
                <span class="nav-main-link-name">Dashboard</span>
            </a>
        </li>
        <li class="nav-main-item {{(request()->RouteIs('admin.product*'))  ? 'open' : ''}}">
            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                <i class="nav-main-link-icon si si-puzzle"></i>
                <span class="nav-main-link-name">Produk</span>
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
            </ul>
        </li>
        <li class="nav-main-heading">Heading</li>
        <li class="nav-main-item">
            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                <i class="nav-main-link-icon si si-puzzle"></i>
                <span class="nav-main-link-name">Dropdown</span>
            </a>
            <ul class="nav-main-submenu">
                <li class="nav-main-item">
                    <a class="nav-main-link" href="javascript:void(0)">
                        <span class="nav-main-link-name">Link #1</span>
                    </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link" href="javascript:void(0)">
                        <span class="nav-main-link-name">Link #2</span>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</div>
<!-- END Side Navigation -->
