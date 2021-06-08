<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Models\ProductGender;
class productGenderController extends Controller
{
    public function index()
    {
        $product_gender = ProductGender::get();
        return view('admin.product_gender.index', ['product_gender' => $product_gender]);
    }

    public function create()
    {
        return view('admin.product_gender.create');
    }

    public function store(Request $request)
    {
        $product_gender = new ProductGender;
        $product_gender->product_gender_name = $request->product_gender_name;
        $product_gender->product_gender_desc = $request->product_gender_desc;
        $product_gender->product_gender_slug = Str::of($request->product_gender_name)->slug('-');
        $product_gender->product_gender_mt_title = $request->product_gender_mt_title;
        $product_gender->product_gender_mt_desc = $request->product_gender_mt_desc;
        $product_gender->save();
        return redirect()->route('admin.productGender.index')->with('status', 'Gender Produk Berhasil di Input');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
