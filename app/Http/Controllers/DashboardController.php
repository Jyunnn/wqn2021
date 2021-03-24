<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\Validator;

use App\Models\Product;

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
        $validator = Validator::make($request->all(), [
            'product_dm_number' => 'nullable',
            'product_name' => 'required',
            'product_imgsrc1' => 'required',
            'product_price' => 'required|integer',
            'product_qty' => 'required|integer',
            'product_content' => 'required',
        ],[
            'product_name.required' => '商品名稱為必填項目',
            'product_imgsrc1.required' => '"上傳主要圖片"必填選擇一張圖',
            'product_price.required' => '價錢為必填項目,且必須是數字',
            'product_qty.required' => '庫存為必填項目且,必須是數字',
            'product_content.required' => '商品內容為必填項目'
        ]);

        if( $validator->fails() ){
            return redirect()->back()->withInput()->withErrors($validator);
        }

        $file1 = $request->file('product_imgsrc1');

        if( $file1 ) {
            $path1 = $file1->store('public');
            $url1 = Storage::url($path1);
        };

        DB::table('products')->insert([
            'product_type' => $request ->input('product_type'),
            'product_dm_number' => $request ->input('product_dm_number'),
            'product_name' => $request ->input('product_name'),
            'product_imgsrc1' => $url1,
            'product_attr' => $request ->input('product_attr'),
            'product_price' => $request ->input('product_price'),
            'product_qty' => $request ->input('product_qty'),
            'product_simplecontent' =>$request ->input('product_simplecontent'),
            'product_content' => $request ->input('product_content'),
            'product_show' => 1,
        ]);

        return redirect()->route('dashboard.list');
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
        $product = Product::find($id);
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

        $validator = Validator::make($request->all(), [
            'product_dm_number' => 'nullable',
            'product_name' => 'required',
            'product_price' => 'required|integer',
            'product_qty' => 'required|integer',
            'product_content' => 'required',
        ],[
            'product_name.required' => '商品名稱為必填項目',
            'product_price.required' => '價錢為必填項目,且必須是數字',
            'product_qty.required' => '庫存為必填項目且,必須是數字',
            'product_content.required' => '商品內容為必填項目'
        ]);


        $file1 = $request->file('product_imgsrc1');
        if($file1) {
            $path1 = $file1->store('public');
            $url1 = Storage::url($path1);
            DB::table('products')->where('id', $id)->update([
                'product_imgsrc1' => $url1,
            ]);
        }

        if( $validator->fails() ){
            return redirect()->back()->withInput()->withErrors($validator);
        }

        DB::table('products')->where('id', $id)
        ->update(
            [
                'product_type' => $request -> input('product_type'),
                'product_dm_number' => $request-> input('product_dm_number'),
                'product_name' => $request-> input('product_name'),
                'product_attr' => $request ->input('product_attr'),
                'product_price' => $request -> input('product_price'),
                'product_qty' => $request-> input('product_qty'),
                'product_simplecontent' =>$request ->input('product_simplecontent'),
                'product_content' => $request-> input('product_content'),
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
        // $product = DB::table('products')->where('id', $id)->first();
        $product = Product::find($id);
        if(is_null($product)){
            return redirect()->route('dashboard.index');
        };
        $product->delete();
        return redirect()->route('dashboard.list');
    }

    public function list()
    {
        $products = Product::paginate(10);
        return view('dashboard.list', ['products' => $products]);
    }

    public function find(Request $request)
    {
        $keyword = $request->query()["keyword"];
        $products = Product::where('product_name', 'LIKE' , '%'.$keyword.'%' )->paginate(20);
        return view('dashboard.find', ['products' => $products]);
    }
}
