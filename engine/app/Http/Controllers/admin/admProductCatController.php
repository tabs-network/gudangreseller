<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ProductCat;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class admProductCatController extends Controller
{
    public function index()
    {
        $count = ProductCat::count();
        $product_cat = ProductCat::get();
        return view('admin.product_cat.index', ['product_cat' => $product_cat, 'count' => $count]);
    }

    public function create()
    {
          return view('admin.product_cat.create');
    }

    public function store(Request $request)
    {
        $validate = $request->validate(
            [
                'product_cat_name' => 'required|unique:product_cat',
                'product_cat_desc' => 'required',
                'product_cat_mt_title' => 'required',
                'product_cat_mt_desc' => 'required',
            ],
            [
                'product_cat_name.required' => 'Nama Masih Kosong',
                'product_cat_name.unique' => 'Nama Sudah Digunakan',
                'product_cat_desc.required' => 'Deskripsi Masih Kosong',
                'product_cat_mt_title.required' => 'Meta Title Masih Kosong',
                'product_cat_mt_desc.required' => 'Meta Deskripsi Masih Kosong',
            ]
        );

        $product_cat = new ProductCat;
        $product_cat->product_cat_name = $request->product_cat_name;
        $product_cat->product_cat_desc = $request->product_cat_desc;
        $product_cat->product_cat_slug = Str::of($request->product_cat_name)->slug('-');
        $product_cat->product_cat_mt_title = $request->product_cat_mt_title;
        $product_cat->product_cat_mt_desc = $request->product_cat_mt_desc;
        $product_cat->save();

        return redirect()->route('admin.productCat.index')->with('status', 'Data berhasil di input');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $product_cat = ProductCat::find($id);
        return view('admin.product_cat.edit', ['product_cat' => $product_cat]);
    }

    public function update(Request $request, $id)
    {
        $product_cat = ProductCat::find($id);

        if($request->product_cat_name == $product_cat->product_cat_name)
        {
            $validate = $request->validate(
                [
                    'product_cat_name' => 'required',
                    'product_cat_desc' => 'required',
                    'product_cat_mt_title' => 'required',
                    'product_cat_mt_desc' => 'required',
                ],
                [
                    'product_cat_name.required' => 'Nama Masih Kosong',
                    'product_cat_desc.required' => 'Deskripsi Masih Kosong',
                    'product_cat_mt_title.required' => 'Meta Title Masih Kosong',
                    'product_cat_mt_desc.required' => 'Meta Deskripsi Masih Kosong',
                ]
            );

            $product_cat->product_cat_name = $request->product_cat_name;
            $product_cat->product_cat_desc = $request->product_cat_desc;
            $product_cat->product_cat_slug = Str::of($request->product_cat_name)->slug('-');
            $product_cat->product_cat_mt_title = $request->product_cat_mt_title;
            $product_cat->product_cat_mt_desc = $request->product_cat_mt_desc;
            $product_cat->save();

            return redirect()->route('admin.productCat.index')->with('status', 'Data berhasil di edit');
        }
        else
        {
            $validate = $request->validate(
                [
                    'product_cat_name' => 'required|unique:product_cat',
                    'product_cat_desc' => 'required',
                    'product_cat_mt_title' => 'required',
                    'product_cat_mt_desc' => 'required',
                ],
                [
                    'product_cat_name.required' => 'Nama Masih Kosong',
                    'product_cat_name.unique' => 'Nama Sudah Digunakan',
                    'product_cat_desc.required' => 'Deskripsi Masih Kosong',
                    'product_cat_mt_title.required' => 'Meta Title Masih Kosong',
                    'product_cat_mt_desc.required' => 'Meta Deskripsi Masih Kosong',
                ]
            );

            $product_cat->product_cat_name = $request->product_cat_name;
            $product_cat->product_cat_desc = $request->product_cat_desc;
            $product_cat->product_cat_slug = Str::of($request->product_cat_name)->slug('-');
            $product_cat->product_cat_mt_title = $request->product_cat_mt_title;
            $product_cat->product_cat_mt_desc = $request->product_cat_mt_desc;
            $product_cat->save();

            return redirect()->route('admin.productCat.index')->with('status', 'Data berhasil di edit');
        }
    }

    public function destroy($id)
    {
        $product_cat = ProductCat::find($id);
        $product_cat->delete();

        return redirect()->route('admin.productCat.index')->with('status', 'Data Berhasil di Hapus');
    }

    public function search(Request $request)
    {
        $product_cat = ProductCat::where('product_cat_name', 'like', '%'.$request->key.'%')->get();
        return view('admin.product_cat.search', ['product_cat' => $product_cat, 'key' => $request->key]);
    }
}
