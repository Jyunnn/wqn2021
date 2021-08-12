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

        if(!is_null($cart)) {
            $cart = json_decode($cart, true);
            foreach($cart as $productId => $qty){
                $cart[$productId] = $qty + 1;
            }
            $cart = json_encode($cart);
        }
        dump($cart, $product);

        return response()->view('cart')->cookie(
            'cart', $cart
        );
    }
}
