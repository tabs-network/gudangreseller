<?php 
use Illuminate\Support\Facades\DB;
use App\Models\ProductCat;
use App\Models\ConfHome;

function productCat_helpers()
{
    $product_cat = ProductCat::get();
    return $product_cat;
}

function rupiah($var)
{
    return number_format($var, 0,",",".");
}

function dbCount($table)
{
    $count = DB::table($table)->count();
    return $count;
}

function confHome($value)
{
    $getData = DB::table('conf_home')->where('conf_home_option', $value)->first();
    $data = $getData->conf_home_value;
    return $data;
}