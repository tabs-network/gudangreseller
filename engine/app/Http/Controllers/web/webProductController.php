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
        $product = Product::paginate(9);
        $product_cat = ProductCat::get();

        $agent = new Agent;
        if($agent->isMobile())
        {
            return view('mobile.product.index', ['product' => $product, 'product_cat' => $product_cat]);
        }
        else 
        {
            return view('web.product.index', ['product' => $product, 'product_cat' => $product_cat]);
        }
        
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
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

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
