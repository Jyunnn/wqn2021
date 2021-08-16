<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    public function index(Request $request)
    {
        $cart = $request->cookie('cart');
        $product = Product::all();

        dump(json_decode($cart, true));

        // return response()->view('cart')->cookie(
        //     'cart', $cart
        // );
				return view('cart', ['product' => $product]);
    }
}
