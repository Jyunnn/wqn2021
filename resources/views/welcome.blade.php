
<x-layout>
    <x-slot name="title">
        Index
    </x-slot>

    <div class="bg-yellow-300 max-w-full hidden sm:block">
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

        <div class="bg-red-400 py-12" style=" background: url( {{ asset('images/wqn_bg.png') }} ) no-repeat center center / 100%">
            <div class="max-w-7xl mx-auto py-3 hidden md:block" style="background: rgba(255,255,255,0.7) ;">
                <p class="text-4xl font-black py-1 text-center"> 關於文光行 </p>
                <br>
                <p class="text-center py-1">
                    成立於民國52年，新竹地區文具批發商之一，全台皆在服務範圍內，以誠信經營、服務客戶為目的，販賣項目從文具五金到日常用品應有盡有
                </p>
                <p class="text-center py-1">
                    企業桃竹苗都可送貨，可配合月結，歡迎來電詢問
                </p>
            </div>
        </div>

        <div class="max-w-7xl mx-auto py-3 bg-gray-100 md:hidden">
                <p class="text-4xl font-black py-1 text-center"> 關於文光行 </p>
                <br>
                <p class="text-center py-1">
                    成立於民國52年，新竹地區文具批發商之一，全台皆在服務範圍內，以誠信經營、服務客戶為目的，販賣項目從文具五金到日常用品應有盡有
                </p>
                <p class="text-center py-1">
                    企業桃竹苗都可送貨，可配合月結，歡迎來電詢問
                </p>
        </div>

        <script src="{{ asset('js/swiper.js') }}"></script>
</x-layout>