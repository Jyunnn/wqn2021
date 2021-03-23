<x-layout>
    <x-slot name="title">
        商品頁面
    </x-slot>

    <div class="py-8 max-w-7xl mx-auto">
        <div>
            <x-menu />

            <div class="col-span-12">
                @if( $type == 'product_dm_number')
                <p class="text-3xl font-extrabold mb-3"> 編號搜尋: {{ $keyword }}</p>
                @elseif ( $type == 'product_name')
                <p class="text-3xl font-extrabold mb-3"> 商品名稱搜尋: {{ $keyword }}</p>
                @endif

                <div class="h-0.5 mb-5 bg-gradient-to-r from-purple-400 via-pink-500 to-yellow-500"></div>

                @if( $type == '' || $keyword == '' ) 
                <p class="text-3xl"> 搜尋欄位不得為空值 </p>
                <br>
                <p class="text-xl">嘗試使用關鍵字搜尋</p>
                <br>
                <p>比方說想找抽屜式,且可以手提的金庫</p>
                <p>可以輸入<span class="text-xl text-red-600">"抽屜"</span>或是<span class="text-xl text-red-600">"手提"</span></p>
                <p>可能就會出現想找尋的物品</p>
                <br>
                <p>但是這樣不如直接搜尋<span class="text-xl text-red-600">"金庫"</span></p>
                <p>更直接的關鍵字來搜尋是最快的</p>
                <p>前提是知道這個商品叫甚麼名字😎</p>
                @elseif ($keyword == '46041503')
                <p class="text-4xl">這個是文光行的統編</p>
                @elseif (count($products) < 1)
                <p class="text-3xl">沒有搜尋結果😞</p>
                <br>
                <p>關鍵字有錯，再重新輸入吧</p>
                <p>常打錯的字：筆<span class="text-xl text-red-600">芯</span>、替換<span class="text-xl text-red-600">帶</span></p>
                <br>
                <p>也有可能是還沒上架，並不是真的沒有賣這個商品或是打錯字</p>
                <p>商品種類太多了再請給我們一些時間</p>
                <p>有一天會把商品上架完整</p>
                <br>
                <p>或是您可以先參考舊版目錄</p>
                <p>但是需要一頁一頁尋找您要的商品</p>
                @else
                <ul class="grid lg:grid-cols-5 md:grid-cols-3 grid-cols-2 gap-3">
                    @foreach ($products as $product)
                        <li class="flex flex-col p-5 box-border rounded hover:shadow-md">
                            <div class="">
                                <a href="{{ route('product.show',['product'=> $product->id]) }}">
                                    <img class="h-full w-full" src="{{ $product->product_imgsrc1 }}" alt="">
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
                <div class="py-3">
                        {{ $products->links() }}
                </div>
                @endif
            </div>
        </div>
    </div>
</x-layout>