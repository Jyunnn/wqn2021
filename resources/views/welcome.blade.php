<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>文光行</title>
        <link rel="stylesheet" href=" {{ asset('css/app.css')}} ">
    </head>
    <body>
        <nav class="items-top justify-center shadow-2xl dark:bg-gray-900 sm:items-center sm:pt-0">
            <div class="max-w-7xl mx-auto flex items-center">
                <img class="w-28 md:w-44 py-4" src="{{ asset('images/wqn_logo.png') }}" alt="">
                <div class="mx-5">
                    <a class="p-6 inline-block box-border hover:border border-yellow-400" href="/">首頁</a>
                    <a class="p-6 inline-block box-border hover:border border-yellow-400" href="{{ route('product.index') }}">商品</a>
                </div>
                <div class="hidden md:block flex ml-auto">
                    <form class="mr-3" action="{{ route('product.find') }}" method="get">
                        <select class="border-0" name="type" id="">
                            <option value="product_name">商品名稱</option>
                            <option value="product_dm_number">目錄編號</option>
                        </select>
                        <input name="keyword" class="border-0" type="text" placeholder="請輸入搜尋項目">
                        <button type="submit">搜尋</button>
                    </form>
                </div>
            </div>
        </nav>

        <div class="bg-yellow-300 hidden sm:block">
            <div class="swiper-container max-w-7xl mx-auto">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{asset('images/welcome_bar01.jpg')}}" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{asset('images/welcome_bar01.jpg')}}" alt="">
                    </div>

                </div>
                <!-- Add Arrows  -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>


        <div class="max-w-7xl flex mx-auto py-4 grid md:grid-cols-4 sm:grid-cols-2 gap-4 ">

            <div class="">
                <div>
                    <img class="rounded-md" src="{{ asset('images/office_supplies.jpg') }}" alt="">
                </div>
                <div class="mt-3">
                    <div class="box-text-area">
                        <h3 class="text-2xl font-black text-center sm:text-left">文具用品批發</h3>
                        <div class="h-1 shadow-md"></div>
                        <p class="py-2">各式品牌書寫用品、黏貼包裝材料、桌上五金用品、檔案收納資料整理、辦公紙品便條紙、圖畫紙工業用紙、事務機器電腦耗材、茶水招待…等等，商品最齊全的文具供應商。</p>
                    </div>
                </div>
            </div>

            <div class="">
                <div>
                    <img class="rounded-md" src="{{ asset('images/office_ furniture.jpg') }}" alt="">
                </div>
                <div class="mt-3">
                    <div class="box-text-area">
                        <h3 class="text-2xl font-black text-center sm:text-left">辦公空間規劃</h3>
                        <div class="h-1 shadow-md"></div>
                        <p class="py-2">辦公家具、效率櫃、舒美櫃、簡報書報架、工業零件箱工作站，提供您最優質最優惠的辦公家具及完善的售前售後服務。</p>
                    </div>
                </div>
            </div>

            <div class="">
                <div>
                    <img class="rounded-md" src="{{ asset('images/design.jpg') }}" alt="">
                </div>
                <div class="mt-3">
                    <div class="box-text-area">
                        <h3 class="text-2xl font-black text-center sm:text-left">印刷設計業務</h3>
                        <div class="h-1 shadow-md"></div>
                        <p class="py-2">一般印刷業務，公司信封、信紙、名片及各式周邊，旌旗、布條、宣傳用品；電腦報表單訂製、T-shirt服裝印製、禮品挑選製作。專業設計部門替您服務。</p>
                    </div>  
                </div>
            </div>

            <div class="">
                <div>
                    <img class="rounded-md" src="{{ asset('images/tools.jpg') }}" alt="">
                </div>
                <div class="mt-3">
                    <div class="box-text-area">
                        <h3 class="text-2xl font-black text-center sm:text-left">五金用品批發</h3>
                        <div class="h-1 shadow-md"></div>
                        <p class="py-2">精選出最好用的品牌五金用品、工業用品、無塵室用品、清潔用品、衛生紙、環境清理用品。讓您不再花時間比較商品效力。</p>
                    </div>
                </div>
            </div>

        </div>

        <div class="bg-red-400 py-12 md:py-20" style=" background: url( {{ asset('images/wqn_bg.png')}} ) no-repeat center center / 100%">
            <div class="max-w-7xl mx-auto" style="background: rgba(255,255,255,0.7) ;">
                <p class="text-4xl font-black py-2 text-center"> 關於文光行 </p>
                <br>
                <p class="text-center py-2">
                    成立於民國52年,新竹地區文具批發商之一Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laudantium dicta qui in quibusdam ab culpa earum repudiandae iure omnis suscipit? Hic nobis accusantium pariatur voluptates! Quam error amet doloremque omnis?
                </p>
            </div>
        </div>

        <footer class="max-w-7xl mx-auto py-4 text-center">
            <div class="flex justify-center">
                <a class="block px-4" href="">首頁</a>
                <a class="block px-4" href="{{ route('product.index') }}">商品</a>
                <a class="block px-4" href="">聯繫我們</a>
                <a class="block px-4" href="">店面位置</a>
                @auth
                    <a href="{{ url('/dashboard') }}" class="block px-4">後台管理</a>
                @else
                    <a href="{{ route('login') }}" class="block px-4">管理員登入</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-gray-700">註冊</a>
                    @endif
                @endauth
            </div>
           <p class="pt-4">Copyright© 2021 文光行</p>

        </footer>
        <script src="{{ asset('js/swiper.js') }}"></script>

    </body>
</html>
