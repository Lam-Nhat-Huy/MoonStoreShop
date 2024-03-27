<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('id', 'DESC')->limit(6)->get();
        return view('client.home.index', compact('products'));
    }

    public function product(Product $product)
    {
        return view('client.product.detail', compact('product'));
    }
}
