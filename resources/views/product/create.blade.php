<form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="product_name">商品名稱</label>
        <input type="text" name="product_name" id="product_name" value="{{ old('title') }}">
        <p> {{ $errors->products->first('product_name') }} </p>
    </div>
    <div>
        <label for="product_menu_number">目錄編號</label>
        <input type="text" name="" id="product_menu_number">
    </div>
    <div>
        <label for="product_price">價錢</label>
        <input type="number" name="" id="product_price">
    </div>
    <div>
        <label for="">
            上傳圖片: <input type="file" name="product_imgsrc" id="">
        </label>
    </div>
    <button type="submit">送出</button>
</form>

