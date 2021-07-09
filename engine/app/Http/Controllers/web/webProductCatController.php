<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class webProductCatController extends Controller
{
    public function show()
    {
        return view('web.productCat.show');
    }
}
