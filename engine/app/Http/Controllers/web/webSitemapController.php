<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\SitemapGenerator;
use Spatie\Sitemap\Tags\Url;

use App\Models\Product;

class webSitemapController extends Controller
{
    public function index()
    {
        $sitemap = Sitemap::create();
        $product = Product::all();
        foreach ($product as $v) {
            $sitemap->add(Url::create("{$v->product_slug}"));
        }
        return $sitemap;
    }
}
