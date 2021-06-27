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
            <a class="nav-main-link" href="{{route('admin.order.index')}}">
                <span class="nav-main-link-name">Semua Pesanan</span>
                <!-- <span class="nav-main-link-badge badge badge-pill badge-primary">5</span> -->
            </a>
        </li>
        <li class="nav-main-item">
            <a class="nav-main-link active" href="{{route('admin.order.indexNewOrder')}}">
                <span class="nav-main-link-name">Pesanan Baru</span>
                <!-- <span class="nav-main-link-badge badge badge-pill badge-primary">5</span> -->
            </a>
        </li>
        <li class="nav-main-item">
            <a class="nav-main-link" href="be_ui_navigation_horizontal.php">
                <span class="nav-main-link-name">Packing</span>
                <!-- <span class="nav-main-link-badge badge badge-pill badge-primary">5</span> -->
            </a>
        </li>
        <li class="nav-main-item">
            <a class="nav-main-link" href="be_ui_navigation_horizontal.php">
                <span class="nav-main-link-name">Kirim</span>
                <!-- <span class="nav-main-link-badge badge badge-pill badge-primary">5</span> -->
            </a>
        </li>
        <li class="nav-main-item">
            <a class="nav-main-link" href="be_ui_navigation_horizontal.php">
                <span class="nav-main-link-name">Retur</span>
                <!-- <span class="nav-main-link-badge badge badge-pill badge-primary">5</span> -->
            </a>
        </li>
    </ul>
</div>
<!-- END Navigation -->
