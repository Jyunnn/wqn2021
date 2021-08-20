<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    public function index(Request $request)
    {
        $carts = $this -> getCartFromCookie($request);
		$id = $this -> getId($request);
        $product = $this -> getCartProduct($id);
		dump($product);
		dump($carts);
		dump($id);
		dump($this -> mixCardAndProduct($request));
		return view('cart', ['carts' => $carts]);
    }

	private function getCartFromCookie($request)
	{
		$carts = $request->cookie('wqn_cart');
		return (!is_null($carts)) ? json_decode($carts) : [];
	}

	private function getProductFromData()
	{
		return Product::all();
	}

	private function getId($request)
	{
		$CookieCart = $this -> getCartFromCookie($request);
		return array_map(function($value) {
			return $value -> {'id'};
		}, $CookieCart);
	}

	private function getCartProduct($id)
	{
		return $this -> getProductFromData() -> filter(function($value, $key) use ( $id ) {
			$product = [];
			foreach($id as $i) {
				if ($value['id'] == $i) {
					array_push($product, $value);
				}
			};
			return $product;
		}) -> toArray();
	}

	private function mixCardAndProduct($request)
	{
		$productlist = $this -> getProductFromData() -> toArray();


		foreach($this -> getCartFromCookie($request) as $item) {
			if (in_array( $item -> {'id'} , $productlist)) {
				$item -> {'name'} = $productlist['0'];
				dump($item);
			}
		};
	}
}
