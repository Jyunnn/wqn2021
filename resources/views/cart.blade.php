<x-layout>

    <x-slot name="title">
        Cart
    </x-slot>

    <div class="py-8 max-w-7xl mx-auto">
        <x-menu />
        <div class="h-0.5 mb-5 bg-gradient-to-r from-purple-400 via-pink-500 to-yellow-500"></div>

        <p class="text-3xl font-extrabold mb-3">詢價列表</p>

        <table class="my-3 table-auto w-full text-center">
            <thead class="border-b">
                <tr>
                    <td>項次</td>
                    <td>商品名稱</td>
                    <td>商品數量</td>
                    <td>刪除</td>
                </tr>
            </thead>
        <tbody class="">
            <tr class="border-b">
                <td> 1 </td>
                <td> {{ $product }} </td>
                <td> 
                    <input type="number" min="1" value="1"> 
                </td>
                <td> X </td>
            </tr>
        </tbody>
    </table>
    </div>

</x-layout>