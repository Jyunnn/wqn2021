<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

// 新建立的規則
// use App\Rules\FormCheck;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate(10);
				dump($products);
        return view('product.index', ['products'=> $products]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('product.show', ['product' => $product]);
    }

    public function type(Request $request)
    {
        $keyword = $request->query()["keyword"];
        $products = Product::where('product_type', $keyword)->paginate(10)->withPath('/type?keyword='.$keyword);
        return view('product.type', ['products' => $products, 'keyword' => $keyword]);
    }

    public function find(Request $request)
    {
        $type = $request->query()["type"];
        $keyword = $request->query()["keyword"];
        $products = Product::where( $type, 'LIKE' ,'%'.$keyword.'%' )->paginate(10)->withQueryString();
        return view('product.find', ['products' => $products , 'type' => $type , 'keyword' => $keyword]);
    }
}
