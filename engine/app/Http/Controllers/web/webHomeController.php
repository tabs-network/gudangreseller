<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;

use App\Models\Product;
class webHomeController extends Controller
{
    public function index()
    {
        $product = Product::inRandomOrder()->take(8)->get();
        $agent = new Agent();

        if($agent->isPhone())
        {
            return view('mobile.home.index', ['product' => $product]);
        }
        if($agent->isTablet())
        {
            return view('web.home.index', ['product' => $product]);
        }
        else 
        {
            return view('web.home.index', ['product' => $product]);
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
