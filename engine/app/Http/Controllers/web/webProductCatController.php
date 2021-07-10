<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\ProductCat;
class webProductCatController extends Controller
{
    public function show($slug)
    {
        $productCat = ProductCat::get();
        $productCatGet = ProductCat::where('product_cat_slug', $slug)->first();
        $product = Product::where('product_cat_id', $productCatGet->product_cat_id)->paginate(9);
        return view('web.productCat.show', ['product' => $product, 'product_cat' => $productCat, 'productCatGet' => $productCatGet]);
    }
}
