<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
//新增商品
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file1 = $request->file('product_imgsrc1');
        $file2 = $request->file('product_imgsrc2');
        $file3 = $request->file('product_imgsrc3');

        $path1 = $file1->store('public');
        $url1 = Storage::url($path1);

        $product = new Product;
        $product->product_type = $request->product_type;
        $product->product_dm_number = $request->product_dm_number;
        $product->product_name = $request->product_name;
        $product->product_imgsrc1 = $url1;
        $product->product_attr = $request->product_attr;
        $product->product_price = $request->product_price;
        $product->product_qty = $request->product_qty;
        $product->product_content = $request->product_content;
        $product->product_show = 1;
        $product->save();

        if($file2 && $file3) {
            $path2 = $file2->store('public');
            $path3 = $file3->store('public');
            $url2 = Storage::url($path2);
            $url3 = Storage::url($path3);
            $product->product_imgsrc2 = $url2;
            $product->product_imgsrc3 = $url3;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function list()
    {
        $products = DB::table('products')->paginate(1);
        return view('dashboard.list', ['products' => $products]);
    }
}
