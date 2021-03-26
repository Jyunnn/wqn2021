<x-layout>
    <x-slot name="title">
        商品頁面
    </x-slot>

    <div class="py-8 max-w-7xl mx-auto">
            <x-menu />
            <div class="grid grid-cols-12 gap-5">
                <div class="col-span-12">
                    <p class="text-3xl font-extrabold mb-3">商品列表 - 所有商品</p>
                    <div class="h-0.5 mb-5 bg-gradient-to-r from-purple-400 via-pink-500 to-yellow-500"></div>
                    <x-product-list :products="$products"/>
                    <!-- 分頁頁碼 -->
                    <div class="py-3">
                        {{ $products->links() }}
                    </div>
                </div>
            </div>
    </div>
</x-layout>