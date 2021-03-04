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
        $product->product_attr = explode(',', $request->product_attr);
        // $product->product_attr = $request->product_attr;
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
        $product = DB::table('products')->where('id', $id)->first();
        if(is_null($product)){
            abort(404);
        };
        return view('dashboard.edit', ['product' => $product]);
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
        DB::table('products')->where('id', $id)
        ->update(
            [
                'product_type' => $request -> product_type,
                'product_dm_number' => $request->product_dm_number,
                'product_name' => $request->product_name,
                // 'product_imgsrc1' => $request->product_imgsrc1,
                // 'product_imgsrc2' => $request->product_imgsrc2,
                // 'product_imgsrc3' => $request->product_imgsrc3,
                'product_attr' => explode(',', $request->product_attr),
                'product_price' => $request -> product_price,
                'product_qty' => $request->product_qty,
                'product_content' => $request->product_content
            ],
        );

    return redirect()->route('dashboard.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('products')->where('id', '=', $id)->delete();
    }

    public function list()
    {
        $products = DB::table('products')->paginate(20);
        return view('dashboard.list', ['products' => $products]);
    }

    public function find(Request $request)
    {
        $keyword = $request->query()["keyword"];
        $products = DB::table('products')->where('product_name','LIKE','%'.$keyword.'%')->paginate(20);
        return view('dashboard.find', ['products' => $products]);
    }
}
