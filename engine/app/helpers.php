<?php 
use App\Models\ProductCat;
function productCat_helpers(){
    $product_cat = ProductCat::get();
    return $product_cat;
}