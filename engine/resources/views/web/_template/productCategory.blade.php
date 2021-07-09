<div class="card">
    <div class="card-header bg-dark-1 cl-light-2 fw-light pt-3 pb-3 h5">
        Kategori
    </div>
    <div class="list-group list-group-flush">
        @foreach($product_cat as $v)
            <a href="#" class="list-group-item list-group-item-action bg-light-1 cl-dark-2">{{$v->product_cat_name}}</a>
        @endforeach
    </div>
</div>
