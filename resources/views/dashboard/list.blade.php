<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('商品列表') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-5 bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <form class="py-3" action="{{ route('dashboard.find') }}" method="get">
                    <input type="text" name="keyword" id="">
                    <input type="submit" value="搜尋">
                </form>

                <form class="py-3" action="{{ route('dashboard.find') }}" method="get">
                    <select>
                        <option value="書寫筆">書寫筆</option>
                        <option value="修正文具">修正文具</option>
                        <option value="印章墨水">印章墨水</option>
                        <option value="包裝黏著">包裝黏著</option>
                        <option value="桌上五金">桌上五金</option>
                        <option value="裝訂事務">裝訂事務</option>
                        <option value="度量衡">度量衡</option>
                        <option value="紙製品">紙製品</option>
                        <option value="標示貼牌">標示貼牌</option>
                        <option value="檔案夾">檔案夾</option>
                        <option value="檔案收納">檔案收納</option>
                        <option value="辦公傢俱">辦公傢俱</option>
                        <option value="事務機器">事務機器</option>
                        <option value="耗材紙類">耗材紙類</option>
                        <option value="電腦耗材">電腦耗材</option>
                        <option value="美術用品">美術用品</option>
                        <option value="運動益智用品">運動益智用品</option>
                        <option value="五金百貨">五金百貨</option>
                        <option value="清潔用品">清潔用品</option>
                        <option value="辦公茶水">辦公茶水</option>
                    </select>
                    <input type="submit" value="搜尋">
                </form>

                <table class="my-3 table-auto w-full text-center">
                    <thead class="border-b">
                        <tr>
                            <td>查看</td>
                            <td>商品類別</td>
                            <td>目錄編號</td>
                            <td>商品名稱</td>
                            <td>商品價格</td>
                            <td>商品庫存</td>
                            <td>顯示</td>
                            <td>編輯</td>
                            <td>刪除</td>
                        </tr>
                    </thead>
                    <tbody class="">
                        @foreach($products as $product)
                        <tr class="border-b">
                            <td class="py-5"> <a href="{{ route('product.show',['product' => $product-> id])}}" target=_blank>👁️</a> </td>
                            <td> {{ $product->product_type }} </td>
                            <td> {{ $product->product_dm_number }} </td>
                            <td> {{ $product->product_name }} </td>
                            <td> {{ $product->product_price }} </td>
                            <td> {{ $product->product_qty }} </td>
                            <td> {{ $product->product_show }}  </td>
                            <td><a href="{{ route('dashboard.edit', ['dashboard' => $product-> id]) }}">✍️</a></td>
                            <td>
                                <form action="{{ route('dashboard.destroy', ['dashboard' => $product-> id]) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button onclick="return confirm('確定要刪除嗎?刪除後不能再還原')" type="submit">❌</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $products->links() }}
            </div>
        </div>

        
    </div>
</x-app-layout>
