<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// 使用DB
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Validator;

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
        $products = DB::table('products')->get();
        return view('product.index', ['products'=> $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $validated = $request->validate([
        //     'product_name' => ['required',new FormCheck],
        //     // 在 app/Rules/FormCheck設定
        // ]);

        $validator = Validator::make($request->all(), [
            // 直接使用
            'product_name' => [
                'required',
                'max:255',
                function ($attribute, $value, $fail) {
                    if ($value == 'foo') {
                        $fail('! 商品名稱錯誤');
                    }
                },
            ],
            // 可以不使用function判斷, 而外加入錯誤訊息, https://laravel.com/docs/8.x/validation#manual-customizing-the-error-messages
        ])->validateWithBag('products');;
            // 錯誤訊息在頁面上使用 {{ $errors->products->first('product_name') }}


        // if ($validator->fails()) {
        //     return redirect('product/create')
        //                 ->withErrors($validator)
        //                 ->withInput();
        // }



        // 上傳照片
        // 獲取原始檔案名稱
        $name = $request->file('product_imgsrc')->getClientOriginalName();

        $path = $request->file('product_imgsrc')->storeAs(
            'local', $name , 'public'
        );

        dump(Storage::disk('public'));
        // return redirect()->route('product.index')->withErrors(Storage::disk('public')->url($path));
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

    public function find(Request $request)
    {
        $type = $request->query()["type"];
        $keyword = $request->query()["keyword"];
        $products = DB::table('products')->where( $type ,'LIKE','%'.$keyword.'%')->get();
        return view('product.find', ['products' => $products]);
    }
}
