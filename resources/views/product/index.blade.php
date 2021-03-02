<x-layout>
    <x-slot name="title">
        商品頁面
    </x-slot>

    <div class="py-8">
        <div class="container mx-auto">
            <x-menu />
            <div class="grid grid-cols-12 gap-5">
                <div class="col-span-12">
                    <p class="text-3xl font-extrabold mb-3">商品列表 - 所有商品</p>
                    <div class="h-0.5 mb-5 bg-gradient-to-r from-purple-400 via-pink-500 to-yellow-500"></div>
                    <ul class="p-2 grid lg:grid-cols-5 md:grid-cols-3 grid-cols-2 gap-3">
                        @foreach ($products as $product)
                            <li class="flex flex-col justify-between p-5 box-border shadow rounded hover:shadow-md">
                                <div>
                                    <a href="{{ route('product.show',['product'=> $product->id]) }}">
                                        <img class="h-full w-full" src="{{ asset($product->product_imgsrc1) }}" alt="">
                                    </a>
                                </div>
                                <div>
                                    <p class="h-12 mt-1 overflow-hidden">
                                        <a href="{{ route('product.show',['product'=> $product->id]) }}">{{ $product->product_name }}</a>
                                    </p>
                                    <p class="py-3 text-yellow-600">NT$ <span class="text-lg font-bold"> {{ $product->product_price }} </span></p>
                                    <a class="block text-center transition duration-500 ease-in-out border-2 border-yellow-500 text-red-300 hover:border-yellow-500 hover:text-white hover:bg-yellow-500" href="{{ route('product.show',['product'=> $product->id]) }}">詳細頁面</a>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                    <!-- 分頁頁碼 -->
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>
</x-layout>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif