<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Validator;

use App\Models\Product;

use Illuminate\Support\Facades\Storage;

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
        $products = DB::table('products')->paginate(5);
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
        $products = DB::table('products')->get();

        $product = $products -> first(function ($value, $key) use($id) {
            return $value->id == $id;
        });

        return view('product.show', ['product' => $product]);
    }

    public function type(Request $request)
    {
        $keyword = $request->query()["keyword"];
        $products = DB::table('products')->where( 'product_type','LIKE', $keyword)->paginate(10);
        return view('product.type', ['products' => $products, 'keyword' => $keyword]);
    }

    public function find(Request $request)
    {
        $type = $request->query()["type"];
        $keyword = $request->query()["keyword"];
        $products = DB::table('products')->where( $type ,'LIKE','%'.$keyword.'%')->get();
        return view('product.find', ['products' => $products , 'type' => $type , 'keyword' => $keyword]);
    }
}
