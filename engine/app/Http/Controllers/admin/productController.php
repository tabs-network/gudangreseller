<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;
use Illuminate\Support\Facades\Storage;

use App\Models\Product;
use App\Models\ProductCat;
use App\Models\ProductType;
use App\Models\ProductGender;
use App\Models\ProductSize;
class productController extends Controller
{
    public function index()
    {
        $product = Product::get();
        return view('admin.product.index', ['product' => $product ]);
    }

    public function create()
    {
        $product_cat = ProductCat::get();
        $product_type = ProductType::get();
        $product_gender = ProductGender::get();
        return view('admin.product.create', ['product_cat' => $product_cat, 'product_type' => $product_type, 'product_gender' => $product_gender]);
    }

    public function store(Request $request)
    {
        $validate = $request->validate(
            [
                'product_cover' => 'required|image|dimensions:ratio=1/1',
                'product_name' => 'required|unique:product',
                'product_cat_id' => 'required',
                'product_gender_id' => 'required',
                'product_desc' => 'required',
                'product_video' => 'required',
                'product_min_order' => 'required|numeric',
                'product_price' => 'required|numeric',
                'product_disc_price' => 'required|numeric',
                'product_sku' => 'required|unique:product',
                'product_type_id' => 'required',
                'product_mt_title' => 'required',
                'product_mt_desc' => 'required',
            ],
            [
                'product_cover.required' => 'Cover Harus di Isi',
                'product_cover.image' => 'Cover Harus di Isi File Gambar',
                'product_cover.dimensions' => 'Cover Harus di Isi File Gambar Ukuran 1:1',
                'product_name.required' => 'Nama Produk Harus di Isi',
                'product_name.unique' => 'Nama Produk Sudah Terpakai',
                'product_cat_id.required' => 'Kategori Harus di Isi',
                'product_gender_id.required' => 'Gender Harus di Isi',
                'product_desc.required' => 'Deskripsi Harus di Isi',
                'product_video.required' => 'URL Video Harus di Isi',
                'product_min_order.required' => 'Minimal Order Harus di Isi',
                'product_min_order.numeric' => 'Minimal Order Harus di Isi Angka',
                'product_price.required' => 'Harga Harus di Isi',
                'product_price.numeric' => 'Harga Harus di Isi Angka',
                'product_disc_price.required' => 'Harga Diskon Harus di Isi',
                'product_disc_price.numeric' => 'Harga Diskon Harus di Isi Angka',
                'product_sku.required' => 'Sku Harus di Isi',
                'product_type_id.required' => 'Tipe Produk Harus di Isi',
                'product_mt_title.required' => 'Meta Title Harus di Isi',
                'product_mt_desc.required' => 'Meta Deskripsi Harus di Isi',
            ]
        );

        $sku = $request->product_sku;
        $ext = $request->file('product_cover')->extension();

        $product = new Product;
        $product->product_cover = $sku.'.'.$ext;
        $product->product_name = $request->product_name;
        $product->product_cat_id = $request->product_cat_id;
        $product->product_gender_id = $request->product_gender_id;
        $product->product_desc = $request->product_desc;
        $product->product_video = $request->product_video;
        $product->product_min_order = $request->product_min_order;
        $product->product_price = $request->product_price;
        $product->product_disc_price = $request->product_disc_price;
        $product->product_sku = $request->product_sku;
        $product->product_type_id = $request->product_type_id;
        $product->product_mt_title = $request->product_mt_title;
        $product->product_mt_desc = $request->product_mt_desc;
        $product->product_slug = Str::of($request->product_name)->slug('-');
        $product->save();

        // Upload Images

        Image::make($request->file('product_cover'))->resize(1080, 1080)->save(storage_path('app/product/1080x1080/'.$sku.'.'.$ext));
        Image::make($request->file('product_cover'))->resize(500, 500)->save(storage_path('app/product/500x500/'.$sku.'.'.$ext));
        Image::make($request->file('product_cover'))->resize(300, 300)->save(storage_path('app/product/300x300/'.$sku.'.'.$ext));
        Image::make($request->file('product_cover'))->resize(150, 150)->save(storage_path('app/product/150x150/'.$sku.'.'.$ext));

        return redirect()->route('admin.product.show', Str::of($request->product_name)->slug('-'))->with('status', 'Data Berhasil di Input, Silahkan Isi Ukuran Dan Stok');

    }

    public function show($id)
    {
        $product = Product::where('product_slug', $id)->first();
        $product_size = Product::find($product->product_id)->product_size;
        return view('admin.product.show', ['product' => $product,'product_size' => $product_size]);
    }

    public function edit($id)
    {
        $product = Product::find($id);
        $product_cat = ProductCat::get();
        $product_type = ProductType::get();
        return view('admin.product.edit', ['product' => $product, 'product_cat' => $product_cat, 'product_type' => $product_type]);
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy(Product $product)
    {
        //
    }

    public function add_size(Request $request, $id)
    {
        $product = Product::find($id);
        $product_size = new ProductSize;
        $product_size->product_size_option = $request->product_size_option;
        $product_size->product_size_stock = $request->product_size_stock;
        $product_size->product_id = $id;
        $product_size->save();
        return redirect()->route('admin.product.show', $product->product_slug);
    }
}
