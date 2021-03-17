<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(Request $request)
    {
        $cart = $request->cookie('cart');
        
        if(!is_null($cart)) {
            $cart = json_decode($cart, true);
            foreach($cart as $productId => $qty){
                $cart[$productId] = $qty + 1;
            }
            $cart = json_encode($cart);
        }
        var_dump($cart);

        return response()->view('cart')->cookie(
            'cart', $cart
        );
    }
}
