<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        if ($request->filled('search')) {
            $products = Product::search($request->search)->get();
        } else {
            $products = Product::paginate(4);
        }

        return view('client.home.index', compact('products'));
    }

    public function product(Product $product)
    {
        return view('client.product.detail', compact('product'));
    }
}
