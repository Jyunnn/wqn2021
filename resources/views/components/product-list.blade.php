<div>
    @if(count($products) > 0)
    <ul class="grid lg:grid-cols-5 md:grid-cols-3 grid-cols-2 gap-3">
        @foreach ($products as $product)
            <li class="flex flex-col justify-between p-5 box-border rounded hover:shadow-md">
                <div class="flex items-center max-w-md max-h-full">
                    <a href="{{ route('product.show',['product'=> $product->id]) }}">
                        <img class="w-full h-full" src="{{ asset($product->product_imgsrc1) }}" alt="">
                    </a>
                </div>
                <div>
                    <p class="h-12 mt-1 overflow-hidden">
                        <a href="{{ route('product.show',['product'=> $product->id]) }}">{{ $product->product_name }}</a>
                    </p>
                    @if( $product->product_price != 0)
                    <p class="py-3 text-yellow-600">NT$ <span class="text-lg font-bold"> {{ $product->product_price }} </span></p>
                    @else
                    <p class="py-3 text-yellow-600">NT$ <span class="text-lg font-bold"> -- </span></p>
                    @endif
                    <a class="block text-center transition duration-500 ease-in-out border-2 border-yellow-500 text-red-300 hover:border-yellow-500 hover:text-white hover:bg-yellow-500" href="{{ route('product.show',['product'=> $product->id]) }}">詳細頁面</a>
                </div>
            </li>
        @endforeach
    </ul>
    @else
        <p class="py-28 text-center text-3xl">商品資料尚未上傳🗄️</p>
    @endif
</div>