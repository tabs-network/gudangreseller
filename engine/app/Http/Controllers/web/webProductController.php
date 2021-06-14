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
        $agent = new Agent;
        if($agent->isMobile()){
            return 'tampilan mobile';
        }
        elseif($agent->isTablet()){
            return view('web.product.index');
        }
        else
        {
            $product = Product::get();
            $product_cat = ProductCat::get();
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

    public function show($id)
    {
        return view('web.product.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
