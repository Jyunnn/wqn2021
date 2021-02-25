<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// 使用DB
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

        dump(Storage::disk('public'));
        return redirect()->route('product.index')->withErrors(Storage::disk('public')->url($path1));
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
        $product = DB::table('products')->where('id', $id)->first();
        if(is_null($product)){
            abort(404);
        };
        dump($product);

        return view('product.edit', ['product' => $product]);
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
        $product = DB::table('products')->where('id', $id)->first();

        if(is_null($product)){
            return redirect()->route('product.index');
        };

        DB::table('products')->where('id', $id)->delete();

        return redirect()->route('product.index');
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
