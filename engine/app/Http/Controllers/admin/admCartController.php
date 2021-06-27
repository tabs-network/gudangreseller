<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use App\Models\Product;
class admCartController extends Controller
{

    public function index()
    {
        //
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
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {

    }

    public function cart_store(Request $request, $id)
    {
        $product = Product::find($id);
        \Cart::add([
            'id' => $id,
            'name' => $product->product_name,
            'qty' => $request->product_order_qty,
            'price' => $product->product_price,

            'options' => [
                'size' => $request->product_size_option,
                'image' => $product->product_cover,
            ]
        ]);
        return redirect()->route('admin.order.create')->with('status', 'Keranjang berhasil di update');
    }

    public function cart_destroy()
    {
        \Cart::destroy();
        return redirect()->route('admin.order.create');
    }

    public function cart_checkout()
    {
        if(\Cart::count() == '')
        {
            return redirect()->route('admin.order.create')->with('error', 'Keranjang masih kosong');
        }
        else{
            return view('admin.cart.checkout');
        }

    }
}
