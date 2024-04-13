<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        return view('client.product.index');
    }

    public function search($query)
    {
        $products = Product::search($query)->get();
        return response()->json($products);
    }

    public function detail()
    {
        return view('client.product.detail');
    }

    public function product(Product $product)
    {
        return view('client.product.detail', compact('product'));
    }
}
