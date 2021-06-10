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
        $validate= $request->validate(
            [
                'product_gender_name' => 'required|unique:product_gender',
                'product_gender_desc' => 'required',
                'product_gender_mt_title' => 'required',
                'product_gender_mt_desc' => 'required',
            ],
            [
                'product_gender_name.required' => 'Gender Produk Masih Kosong',
                'product_gender_name.unique' => 'Gender Produk Sudah Terpakai',
                'product_gender_desc.required' => 'Deskripsi Masih Kosong',
                'product_gender_mt_title.required' => 'Meta Title Masih Kosong',
                'product_gender_mt_desc.required' => 'Meta Deskripsi Masih Kosong',
            ]
        );

        $product_gender = new ProductGender;
        $product_gender->product_gender_name = $request->product_gender_name;
        $product_gender->product_gender_desc = $request->product_gender_desc;
        $product_gender->product_gender_slug = Str::of($request->product_gender_name)->slug('-');
        $product_gender->product_gender_mt_title = $request->product_gender_mt_title;
        $product_gender->product_gender_mt_desc = $request->product_gender_mt_desc;
        $product_gender->save();
        return redirect()->route('admin.productGender.index')->with('status', 'Data Berhasil di Tambah');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $product_gender = ProductGender::find($id);
        return view('admin.product_gender.edit', ['product_gender' => $product_gender]);
    }

    public function update(Request $request, $id)
    {
        $product_gender = ProductGender::find($id);

        if($request->product_gender_name == $product_gender->product_gender_name)
        {
            $validate= $request->validate(
                [
                    'product_gender_desc' => 'required',
                    'product_gender_mt_title' => 'required',
                    'product_gender_mt_desc' => 'required',
                ],
                [
                    'product_gender_desc.required' => 'Deskripsi Masih Kosong',
                    'product_gender_mt_title.required' => 'Meta Title Masih Kosong',
                    'product_gender_mt_desc.required' => 'Meta Deskripsi Masih Kosong',
                ]
            );

            $product_gender->product_gender_name = $request->product_gender_name;
            $product_gender->product_gender_desc = $request->product_gender_desc;
            $product_gender->product_gender_slug = Str::of($request->product_gender_name)->slug('-');
            $product_gender->product_gender_mt_title = $request->product_gender_mt_title;
            $product_gender->product_gender_mt_desc = $request->product_gender_mt_desc;
            $product_gender->save();

            return redirect()->route('admin.productGender.index')->with('status', 'Data Berhasil di Edit');
        }
        else
        {
            $validate= $request->validate(
                [
                    'product_gender_name' => 'required|unique:product_gender',
                    'product_gender_desc' => 'required',
                    'product_gender_mt_title' => 'required',
                    'product_gender_mt_desc' => 'required',
                ],
                [
                    'product_gender_name.required' => 'Gender Produk Masih Kosong',
                    'product_gender_name.unique' => 'Gender Produk Sudah Terpakai',
                    'product_gender_desc.required' => 'Deskripsi Masih Kosong',
                    'product_gender_mt_title.required' => 'Meta Title Masih Kosong',
                    'product_gender_mt_desc.required' => 'Meta Deskripsi Masih Kosong',
                ]
            );

            $product_gender->product_gender_name = $request->product_gender_name;
            $product_gender->product_gender_desc = $request->product_gender_desc;
            $product_gender->product_gender_slug = Str::of($request->product_gender_name)->slug('-');
            $product_gender->product_gender_mt_title = $request->product_gender_mt_title;
            $product_gender->product_gender_mt_desc = $request->product_gender_mt_desc;
            $product_gender->save();

            return redirect()->route('admin.productGender.index')->with('status', 'Data Berhasil di Edit');
        }
    }

    public function destroy($id)
    {
        //
    }
}
