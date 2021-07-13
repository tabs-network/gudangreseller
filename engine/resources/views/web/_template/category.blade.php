<aside>
    <div class="bg-light shadow-sm p-3 mb-3">
        <h4 class="fs-5 fw-normal m-0">Kategori</h4>
    </div>
    <div class="list-group shadow-sm">
        @foreach($product_cat as $v)
            <a href="{{route('web.productCat.show', $v->product_cat_slug)}}" class="list-group-item list-group-item-action">{{$v->product_cat_name}}</a>
        @endforeach
    </div>
</aside>
