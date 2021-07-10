<div class="card">
    <div class="card-header pt-3 pb-3 h5">
        Kategori
    </div>
    <div class="list-group list-group-flush">
        @foreach($product_cat as $v)
            <a href="{{route('web.productCat.show', $v->product_cat_slug)}}" class="list-group-item list-group-item-action">{{$v->product_cat_name}}</a>
        @endforeach
    </div>
</div>
