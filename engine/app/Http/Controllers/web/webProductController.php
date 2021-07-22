<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Jenssegers\Agent\Agent;
use App\Models\Product;
use App\Models\ProductCat;
class webProductController extends Controller
{
    public function index()
    {
        $product_cat = ProductCat::get();

        $agent = new Agent;
        if($agent->isMobile())
        {
            $product = Product::simplePaginate(6);
            return view('mobile.product.index', ['product' => $product, 'product_cat' => $product_cat]);
        }
        else 
        {
            $product = Product::paginate(9);
            return view('web.product.index', ['product' => $product, 'product_cat' => $product_cat]);
        }
        
    }

    public function show(Request $request, $slug)
    {
        $product = Product::where('product_slug', $slug)->first();
        $product_related = Product::where('product_cat_id', $product->product_cat_id)->take(8)->get();
        $product->product_count = $product->product_count + 1;
        $product->save();

        $agent = new Agent;
        if($agent->isMobile())
        {
            return view('mobile.product.show', ['product' => $product, 'product_related' => $product_related]);
        }
        else
        {
            return view('web.product.show', ['product' => $product, 'product_related' => $product_related]);
        }
        
        
    }

    public function search(Request $request)
    {
        $product_cat = ProductCat::get();
        $product = Product::where('product_name', 'like', '%'.$request->key.'%')->orWhere('product_sku', 'like', '%'.$request->key.'%')->paginate(9);
        return view('web.product.index', compact('product_cat', 'product'));
    }
}
