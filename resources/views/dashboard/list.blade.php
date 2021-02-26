<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('商品列表') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-5 bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <form class="py-3" action="" method="get">
                    <input type="text" name="" id="">
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
                            <td class="py-5"> <a href="{{ route('product.show',['product' => $product-> id])}}">👁️</a> </td>
                            <td> {{ $product->product_type }} </td>
                            <td> {{ $product->product_dm_number }} </td>
                            <td> {{ $product->product_name }} </td>
                            <td> {{ $product->product_price }} </td>
                            <td> {{ $product->product_qty }} </td>
                            <td> {{ $product->product_show }}  </td>
                            <td>✍️</td>
                            <td>❌</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $products->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
