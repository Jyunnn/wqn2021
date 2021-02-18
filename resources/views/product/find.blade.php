<x-layout>
    <x-slot name="title">
        商品頁面
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-12">
                <div class="md:col-span-2">
                    <h3 class="text-3xl">商品分類</h3>
                    <ul>
                        <li class="py-2"><a href="">商品分頁</a></li><hr />
                        <li class="py-2"><a href="">商品分頁</a></li><hr />
                        <li class="py-2"><a href="">商品分頁</a></li><hr />
                        <li class="py-2"><a href="">商品分頁</a></li><hr />
                        <li class="py-2"><a href="">商品分頁</a></li><hr />
                        <li class="py-2"><a href="">商品分頁</a></li><hr />
                    </ul>
                </div>
                <div class="col-span-10">
                    <h3 class="text-3xl">商品列表</h3>
                    <div class="grid lg:grid-cols-4 md:grid-cols-3 grid-cols-2 gap-3 p-2">
                        @foreach ($products as $product)
                            <div class="flex flex-col p-2 h-96 box-border shadow rounded hover:shadow-md">
                                <div class="h-4/6">
                                    <a href="{{ route('product.show',['product'=> $product->id]) }}">
                                        <img class="h-full w-full" src="{{ $product->product_imgsrc }}" alt="">
                                    </a>
                                </div>
                                <div>
                                    <p class="h-12 mt-1 overflow-hidden">
                                        <a href="{{ route('product.show',['product'=> $product->id]) }}">{{ $product->product_name }}</a>
                                    </p>
                                    <p class="py-3 text-yellow-600">NT$ <span class="text-lg font-bold"> {{ $product->product_price }} </span></p>
                                    <a href="{{ route('product.show',['product'=> $product->id]) }}">詳細頁面</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>