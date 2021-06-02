<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\ProductType;
class productTypeController extends Controller
{
    public function index()
    {
        $product_type = ProductType::get();
        return view('admin.product_type.index', ['product_type' => $product_type]);
    }

    public function create()
    {
        return view('admin.product_type.create');
    }

    public function store(Request $request)
    {
        $product_type = new ProductType;
        $product_type->product_type_name = $request->product_type_name;
        $product_type->save();

        return redirect()->route('admin.productType.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $product_type = ProductType::find($id);
        return view('admin.product_type.edit', ['product_type' => $product_type]);
    }

    public function update(Request $request, $id)
    {
        $product_type = ProductType::find($id);
        $product_type->product_type_name = $request->product_type_name;
        $product_type->save();

        return redirect()->route('admin.productType.index');
    }

    public function destroy($id)
    {
        //
    }
}
