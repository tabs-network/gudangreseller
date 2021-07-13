<div class="nav-footer-mobile bg-dark fixed-bottom">
    <div class="container-fluid">
            <div class="d-flex justify-content-evenly">
                <div class="p-2 bd-highlight text-center">
                    <a href="{{route('web.home.index')}}">
                        <ion-icon name="home-sharp" size="large"></ion-icon>
                        <div style="font-size:12px;margin-top:-8px">Home</div>
                    </a>
                </div>
                <div class="p-2 bd-highlight text-center">
                    <a href="{{route('web.product.index')}}">
                        <ion-icon name="cube-sharp" size="large"></ion-icon>
                        <div style="font-size:12px;margin-top:-8px">Produk</div>
                    </a>
                </div>
                <div class="p-2 bd-highlight text-center dropup">
                    <a href="#" id="kategori" data-bs-toggle="dropdown" aria-expanded="false">
                        <ion-icon name="apps-sharp" size="large"></ion-icon>
                        <div style="font-size:12px;margin-top:-8px">Kategori</div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark mb-3" aria-labelledby="kategori">
                        @foreach(productCat_helpers() as $v)
                            <li><a class="dropdown-item" href="{{route('web.productCat.show', $v->product_cat_slug)}}">{{$v->product_cat_name}}</a></li>
                        @endforeach
                    </ul>    
                </div>
                <div class="p-2 bd-highlight text-center">
                    <a href="#">
                        <ion-icon name="logo-whatsapp" size="large"></ion-icon>
                        <div style="font-size:12px;margin-top:-8px">WhatsApp</div>
                    </a>
                </div>
            </div>
    </div>

</div>