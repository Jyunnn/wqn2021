<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    public function index(Request $request)
    {
        $carts = json_decode($request->cookie('wqn_cart'));
        $product = Product::all();


				return view('cart', ['carts' => $carts]);
    }
}
