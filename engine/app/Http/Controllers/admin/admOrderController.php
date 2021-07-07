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

    public function indexNewOrder()
    {
        $order = Order::get();
        return view('admin.order.indexNewOrder', ['order' => $order]);
    }

    public function create()
    {
        $product = Product::get();
        return view('admin.order.create', ['product' => $product]);
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'order_shipping_charges' => 'required',
            'order_name_seller' => 'required',
            'order_name_receiver' => 'required',
            'order_phone_receiver' => 'required',

            'alamat' => 'required',
            'provinsi' => 'required',
            'kecamatan' => 'required',
            'kota' => 'required',
            'kodepos' => 'required',
        ]);

        $order_transaction_code = 'GR'.'-'.Carbon::now()->format('Ymd-Hm').'-'.rand(1111,9999);
        $order_address_reciever = $request->alamat.',' .$request->provinsi.',' .$request->kecamatan.',' .$request->kota.',' .$request->kodepos;
        $order = new Order;
        $order->order_transaction_code = $order_transaction_code;
        $order->order_total_cost = \Cart::total();
        $order->order_shipping_charges = $request->order_shipping_charges;
        $order->order_name_seller = $request->order_name_seller;
        $order->order_name_receiver = $request->order_name_receiver;
        $order->order_phone_receiver = $request->order_phone_receiver;
        $order->order_address_receiver = $order_address_reciever;
        $order->order_status = 'Baru';
        $order->save();

        $order = Order::where('order_transaction_code', $order_transaction_code)->first();

        foreach(\Cart::content() as $v)
        {
            $order_item = new OrderItem;
            $order_item->order_item_price = $v->price;
            $order_item->order_item_quantity = $v->qty;
            $order_item->order_item_size = $v->options->size;
            $order_item->order_transaction_code = $order_transaction_code;
            $order_item->product_id = $v->id;
            $order_item->order_id = $order->order_id;
            $order_item->save();
        }

        // Chat ID : -407038741
        $total = \Cart::total() + $request->order_shipping_charges;
        $response = \Telegram::sendMessage([
          'chat_id' => '-407038741',
          'text' => 'Konfirmasi Pesanan Baru

Seller : '.$request->order_name_reseller.'
Transaksi Kode : '.$order_transaction_code.'
Status Pesanan : Pesanan Baru

Produk :
'.$request->data_produk.'

Harga Pesanan: Rp.'.number_format(\Cart::total()).'
Ongkos Kirim: Rp.'.number_format($request->order_shipping_charges).'
Total: Rp.'.number_format($total).'

Penerima : '.$request->order_name_receiver.'
No.HP : '.\Str::substr($request->order_phone_receiver, 0, 8).'****

Alamat Penerima :
'.$order_address_reciever .'

Catatan:
Nomor Resi akan kami infokan lagi setelah barang siap Dikirim

Terima Kasih 😀'
]);

        $messageId = $response->getMessageId();

        \Cart::destroy();
        return redirect()->route('admin.order.index')->with('status', 'Data berhasil di input');
    }

    public function show($id)
    {
        $order = Order::find($id);
        $order_item = OrderItem::where('order_id', $id)->get();
        return view('admin.order.show', ['order' => $order, 'order_item' => $order_item]);
    }

    public function showAddCart($id)
    {
        $product = Product::find($id);
        $product_size = Product::find($id)->product_size;
        return view('admin.order.showAddCart', ['product' => $product, 'product_size' => $product_size]);
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

    public function checkout()
    {
        if(\Cart::count() == '')
        {
            return redirect()->route('admin.order.create')->with('error', 'Keranjang masih kosong');
        }
        else{
            return view('admin.order.checkout');
        }
    }
}
