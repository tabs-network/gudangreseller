<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ProductCat;
use Illuminate\Http\Request;

class productCatController extends Controller
{
    public function index()
    {
        return view('admin.product_cat.index');
    }

    public function create()
    {
          return view('admin.product_cat.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show(ProductCat $productCat)
    {
        //
    }

    public function edit(ProductCat $productCat)
    {
        return view('admin.product_cat.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductCat  $productCat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductCat $productCat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductCat  $productCat
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductCat $productCat)
    {
        //
    }
}
