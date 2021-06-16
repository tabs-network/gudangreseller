<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
class admOrderController extends Controller
{
    public function index()
    {
        $order = Order::get();
        return view('admin.order.index', ['order' => $order]);
    }

    public function create()
    {
        $product = Product::get();
        return view('admin.order.create', ['product' => $product]);
    }

    public function store(Request $request)
    {
        $order_transaction_code = 'GR'.'-'.Carbon::now()->format('Ymd-Hm').'-'.rand(1111,9999);
        $order_address_reciever = $request->alamat.','.$request->provinsi.','.$request->kecamatan.','.$request->kota.','.$request->kodepos;
        $order = new Order;
        $order->order_transaction_code = $order_transaction_code;
        $order->order_total_cost = \Cart::total();
        $order->order_shipping_charges = $request->order_shipping_charges;
        $order->order_name_reseller = $request->order_name_reseller;
        $order->order_name_receiver = $request->order_name_receiver;
        $order->order_phone_receiver = $request->order_phone_receiver;
        $order->order_address_receiver = $order_address_reciever;
        $order->order_status = 'Baru';
        $order->save();

        $order = Order::where('order_transaction_code', $order_transaction_code)->first();
        $order_item = new OrderItem;
        foreach(\Cart::content() as $v)
        {
            $order_item->order_item_price = $v->price;
            $order_item->order_item_quantity = $v->qty;
            $order_item->order_transaction_code = $order_transaction_code;
            $order_item->product_id = $v->id;
            $order_item->order_id = $order->order_id;
            $order_item->save();
        }

        \Cart::destroy();
        return redirect()->route('admin.order.index')->with('status', 'Data berhasil di input');

        // Chat ID : -407038741
//         $response = \Telegram::sendPhoto([
//           'chat_id' => '-407038741',
//           'photo' => \Telegram\Bot\FileUpload\InputFile::create('http://bandungvanjava.store/assets/website/product/1.jpg', 'sad'),
//           'caption' => '@Tubagusasep
// Konfirmasi Pesanan Baru
// Transaksi Kode : '.$order_transaction_code.'
//
// Produk :
// '.$request->data.'
//
// Pesanan : '.$request->order_name_reseller.'
// Total Harga : Rp.'.number_format(\Cart::total()).'
// Ongkos Kirim : Rp.'.number_format($request->ongkos_kirim).'
//
// Penerima : '.$request->order_name_receiver.'
// Untuk Pengiriman Ke alamat :
// '.$order_address_reciever .'
//           '
// ]);
//
//         $messageId = $response->getMessageId();

    }

    public function show($id)
    {
        $product = Product::find($id);
        $product_size = Product::find($id)->product_size;
        return view('admin.order.show', ['product' => $product, 'product_size' => $product_size]);
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
